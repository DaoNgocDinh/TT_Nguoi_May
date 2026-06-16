@extends('global_layout.body')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-xs border border-gray-100">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 sm:relative">
        <h2 class="text-2xl font-bold text-gray-900 tracking-tight sm:absolute sm:left-0">Tình hình thu chi</h2>
        
        <form id="filterForm" class="flex items-center gap-2 bg-gray-50 border border-gray-300 rounded-lg px-3 py-1.5 shadow-xs mx-auto">
            <span class="text-sm font-medium text-gray-600">Tháng</span>
            <input type="number" id="input-thang" name="thang" value="{{ request('thang', date('n')) }}" min="1" max="12" 
                   class="w-14 text-center bg-white border border-gray-300 rounded-md py-0.5 font-semibold text-gray-700 focus:outline-hidden focus:ring-2 focus:ring-pink-500">
            <span class="text-sm font-medium text-gray-600">năm 2026</span>
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-medium text-sm px-4 py-1 rounded-md transition-colors shadow-xs cursor-pointer">
                Xem
            </button>
        </form>
        
        <div class="hidden sm:block w-40"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <div class="lg:col-span-4 flex flex-col gap-4">
            
            <div id="btn-chitieu" onclick="switchTab('chitieu')" 
                 class="border-2 border-pink-500 rounded-xl p-5 bg-white shadow-xs relative cursor-pointer select-none transition-all duration-200">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-gray-500 font-medium text-sm">Chi tiêu</span>
                </div>
                <div id="text-chitieu-val" class="text-2xl font-bold text-gray-900">0đ</div>
            </div>

            <div id="btn-thunhap" onclick="switchTab('thunhap')" 
                 class="border border-gray-300 rounded-xl p-5 bg-white shadow-xs relative cursor-pointer select-none transition-all duration-200">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-gray-500 font-medium text-sm">Thu nhập</span>
                </div>
                <div id="text-thunhap-val" class="text-2xl font-bold text-gray-900">0đ</div>
            </div>

            <div id="box-sosanh" class="rounded-lg p-4 text-center text-sm font-medium shadow-xs transition-colors duration-200">
            </div>
            
        </div>

        <div class="lg:col-span-8 bg-white border border-gray-200 rounded-xl p-4 min-h-[320px] flex flex-col justify-between relative shadow-xs">
            <span id="chart-unit" class="absolute top-2 left-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Triệu</span>
            
            <div class="w-full h-72 mt-4">
                <canvas id="thuChiChart"></canvas>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let currentTab = 'chitieu';
    let dynamicData = {};
    let activeBarIndex = 2; 

    function getValidMonth(m) {
        while (m <= 0) m += 12;
        while (m > 12) m -= 12;
        return m;
    }

    function generateFakeData(selectedMonth, isInit = false) {
        const seed1 = (selectedMonth * 3) % 15 + 10; 
        const seed2 = (selectedMonth * 5) % 15 + 12; 
        const seed3 = (selectedMonth * 7) % 15 + 8;  

        const seed4 = (selectedMonth * 4) % 20 + 15; 
        const seed5 = (selectedMonth * 6) % 20 + 18;
        const seed6 = (selectedMonth * 8) % 20 + 22;

        const chiTieuThangNay = Math.round(seed2 * 1000000);
        const thuNhapThangNay = Math.round(seed5 * 1000000);

        const chenhLechChiTieu = chiTieuThangNay - Math.round(seed1 * 1000000);
        const chenhLechThuNhap = thuNhapThangNay - Math.round(seed4 * 1000000);

        const textCompareChiTieu = chenhLechChiTieu >= 0 
            ? `Tăng mạnh ${formatVND(chenhLechChiTieu)} <br> so với cùng kỳ tháng trước`
            : `Giảm mạnh ${formatVND(Math.abs(chenhLechChiTieu))} <br> so với cùng kỳ tháng trước`;

        const textCompareThuNhap = chenhLechThuNhap >= 0 
            ? `Tăng mạnh ${formatVND(chenhLechThuNhap)} <br> so với cùng kỳ tháng trước`
            : `Giảm mạnh ${formatVND(Math.abs(chenhLechThuNhap))} <br> so với cùng kỳ tháng trước`;

        let labelCột1, labelCột2, labelCột3;
        if (isInit) {
            // MỚI VÀO TRANG: Đổi tên cột số thành chữ "Tháng này"
            labelCột1 = `Tháng ${getValidMonth(selectedMonth - 2)}`;
            labelCột2 = `Tháng ${getValidMonth(selectedMonth - 1)}`;
            labelCột3 = `Tháng này`; // Thay thế cụm "Tháng X" bằng "Tháng này"
            activeBarIndex = 2; 
        } else {
            // KHI CHỌN THÁNG KHÁC: Giữ nguyên cấu trúc tháng chọn ở giữa
            labelCột1 = `Tháng ${getValidMonth(selectedMonth - 1)}`;
            labelCột2 = `Tháng ${selectedMonth}`;
            labelCột3 = `Tháng ${getValidMonth(selectedMonth + 1)}`;
            activeBarIndex = 1; 
        }

        return {
            labels: [labelCột1, labelCột2, labelCột3],
            chitieu: {
                valueText: formatVND(chiTieuThangNay),
                chartData: [seed1, seed2, seed3],
                maxScale: Math.max(seed1, seed2, seed3) + 5,
                compareBg: chenhLechChiTieu >= 0 ? 'bg-red-50' : 'bg-emerald-50', 
                compareBorder: chenhLechChiTieu >= 0 ? 'border-red-200' : 'border-emerald-200',
                compareTextColor: chenhLechChiTieu >= 0 ? 'text-red-800' : 'text-emerald-800',
                compareText: textCompareChiTieu
            },
            thunhap: {
                valueText: formatVND(thuNhapThangNay),
                chartData: [seed4, seed5, seed6],
                maxScale: Math.max(seed4, seed5, seed6) + 5,
                compareBg: chenhLechThuNhap >= 0 ? 'bg-emerald-50' : 'bg-red-50', 
                compareBorder: chenhLechThuNhap >= 0 ? 'border-emerald-200' : 'border-red-200',
                compareTextColor: chenhLechThuNhap >= 0 ? 'text-emerald-800' : 'text-red-800',
                compareText: textCompareThuNhap
            }
        };
    }

    function formatVND(amount) {
        return new Intl.NumberFormat('vi-VN').format(amount) + 'đ';
    }

    const ctx = document.getElementById('thuChiChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [],
            datasets: [{
                data: [],
                backgroundColor: (context) => context.dataIndex === activeBarIndex ? '#2563eb' : '#d1d5db',
                borderColor: (context) => context.dataIndex === activeBarIndex ? '#1d4ed8' : '#9ca3af',
                borderWidth: 1,
                barPercentage: 0.5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 5 },
                    grid: { color: '#f3f4f6' }
                },
                x: { grid: { display: false } }
            }
        }
    });

    function updateUI() {
        const tabData = dynamicData[currentTab];
        
        document.getElementById('text-chitieu-val').innerText = dynamicData.chitieu.valueText;
        document.getElementById('text-thunhap-val').innerText = dynamicData.thunhap.valueText;

        const boxSoSanh = document.getElementById('box-sosanh');
        boxSoSanh.className = `rounded-lg p-4 text-center text-sm font-medium shadow-xs transition-colors duration-200 ${tabData.compareBg} ${tabData.compareBorder} ${tabData.compareTextColor}`;
        boxSoSanh.innerHTML = tabData.compareText;

        myChart.data.labels = dynamicData.labels;
        myChart.data.datasets[0].data = tabData.chartData;
        myChart.options.scales.y.max = tabData.maxScale;
        myChart.update();
    }

    function switchTab(tab) {
        currentTab = tab;
        const btnChiTieu = document.getElementById('btn-chitieu');
        const btnThuNhap = document.getElementById('btn-thunhap');

        if (tab === 'chitieu') {
            btnChiTieu.className = "border-2 border-pink-500 rounded-xl p-5 bg-white shadow-xs relative cursor-pointer select-none transition-all duration-200";
            btnThuNhap.className = "border border-gray-300 rounded-xl p-5 bg-white shadow-xs relative cursor-pointer select-none transition-all duration-200";
        } else {
            btnChiTieu.className = "border border-gray-300 rounded-xl p-5 bg-white shadow-xs relative cursor-pointer select-none transition-all duration-200";
            btnThuNhap.className = "border-2 border-pink-500 rounded-xl p-5 bg-white shadow-xs relative cursor-pointer select-none transition-all duration-200";
        }
        updateUI();
    }

    // Thay thế đoạn lắng nghe sự kiện submit cũ bằng đoạn này:
document.getElementById('filterForm').addEventListener('submit', function(e) {
    e.preventDefault(); 
    const selectedMonth = parseInt(document.getElementById('input-thang').value);
    
    // Lấy tháng hiện tại của hệ thống để so sánh
    const currentSystemMonth = new Date().getMonth() + 1; 

    if (selectedMonth === currentSystemMonth) {
        // Nếu chọn trùng tháng hiện tại -> Đẩy "Tháng này" ra ngoài cùng bên phải (cột 3)
        dynamicData = generateFakeData(selectedMonth, true);
    } else {
        // Nếu chọn tháng khác -> Đưa tháng đó vào giữa (cột 2)
        dynamicData = generateFakeData(selectedMonth, false);
    }
    
    updateUI();
});
    // KHỞI TẠO BAN ĐẦU: Lấy tháng hệ thống thực tế
    const currentSystemMonth = new Date().getMonth() + 1; 
    document.getElementById('input-thang').value = currentSystemMonth;

    dynamicData = generateFakeData(currentSystemMonth, true);
    updateUI();
</script>
@endsection