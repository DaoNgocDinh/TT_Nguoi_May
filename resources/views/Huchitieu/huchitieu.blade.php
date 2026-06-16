@extends('global_layout.body')

@section('content')
<div class="p-4 md:p-8">
    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden relative pb-6">

        <div class="text-center py-4 border-b border-gray-200 bg-white">
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Quản lý hũ chi tiêu</h1>
        </div>

        <div class="grid grid-cols-2 gap-4 p-4 bg-gray-50 border-b border-gray-100">
            <button id="btnToggleBalance" class="flex items-center justify-center gap-2 bg-white border border-gray-300 hover:bg-gray-100 text-gray-700 font-medium py-2.5 px-4 rounded-lg shadow-sm transition-all cursor-pointer">
                <i class="fa-regular fa-eye"></i> Hiện số dư
            </button>
            <button onclick="openModal('modalThemHu')" class="flex items-center justify-center gap-2 bg-white border border-gray-300 hover:bg-gray-100 text-gray-700 font-medium py-2.5 px-4 rounded-lg shadow-sm transition-all cursor-pointer">
                <i class="fa-solid fa-plus text-gray-500"></i> Thêm hũ chi tiêu
            </button>
        </div>

        <div class="relative px-12 py-6">
            <button id="btnPrev" class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-white border border-gray-300 rounded-full shadow hover:bg-gray-50 transition-all cursor-pointer">
                <i class="fa-solid fa-chevron-left text-gray-600 text-xs"></i>
            </button>

            <div id="jarContainer" class="space-y-4">
                <div class="jar-item flex flex-col md:flex-row md:items-center justify-between p-4 bg-white rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-orange-500 hover:shadow-md transition-all gap-4">
                    <div class="flex items-center gap-4">
                        <span class="text-3xl">🍽️</span>
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Tiền ăn</h3>
                            <p class="text-gray-600 font-medium">Tổng: <span class="text-gray-900">2.700.000đ</span></p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:justify-end gap-6 w-full md:w-auto">
                        <div class="balance-display flex gap-1.5" data-balance="2700000">
                            @for ($i = 0; $i < 6; $i++)
                                <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                @endfor
                        </div>
                        <button onclick="openChiTiet('Tiền ăn', '2.700.000đ', true)" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium py-1.5 px-4 rounded-lg border border-gray-200 transition-all cursor-pointer">
                            Xem chi tiết
                        </button>
                    </div>
                </div>

                <div class="jar-item flex flex-col md:flex-row md:items-center justify-between p-4 bg-white rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-emerald-500 hover:shadow-md transition-all gap-4">
                    <div class="flex items-center gap-4">
                        <span class="text-3xl">🛵</span>
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Xăng xe</h3>
                            <p class="text-gray-600 font-medium">Tổng: <span class="text-gray-900">900.000đ</span></p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:justify-end gap-6 w-full md:w-auto">
                        <div class="balance-display flex gap-1.5" data-balance="900000">
                            @for ($i = 0; $i < 6; $i++)
                                <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                @endfor
                        </div>
                        <button onclick="openChiTiet('Xăng xe', '900.000đ', true)" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium py-1.5 px-4 rounded-lg border border-gray-200 transition-all cursor-pointer">
                            Xem chi tiết
                        </button>
                    </div>
                </div>

                <div class="jar-item flex flex-col md:flex-row md:items-center justify-between p-4 bg-white rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-blue-600 hover:shadow-md transition-all gap-4">
                    <div class="flex items-center gap-4">
                        <span class="text-3xl">📱</span>
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Điện thoại</h3>
                            <p class="text-gray-600 font-medium">Tổng: <span class="text-gray-900">200.000đ</span></p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:justify-end gap-6 w-full md:w-auto">
                        <div class="balance-display flex gap-1.5" data-balance="200000">
                            @for ($i = 0; $i < 6; $i++)
                                <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                @endfor
                        </div>
                        <button onclick="openChiTiet('Điện thoại', '200.000đ', false)" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium py-1.5 px-4 rounded-lg border border-gray-200 transition-all cursor-pointer">
                            Xem chi tiết
                        </button>
                    </div>
                </div>

                <div class="jar-item flex flex-col md:flex-row md:items-center justify-between p-4 bg-white rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-red-600 hover:shadow-md transition-all gap-4">
                    <div class="flex items-center gap-4">
                        <span class="text-3xl">💑</span>
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Tiền tiêu vặt</h3>
                            <p class="text-gray-600 font-medium">Tổng: <span class="text-gray-900">1.500.000đ</span></p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:justify-end gap-6 w-full md:w-auto">
                        <div class="balance-display flex gap-1.5" data-balance="1500000">
                            @for ($i = 0; $i < 6; $i++)
                                <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                @endfor
                        </div>
                        <button onclick="openChiTiet('Tiền tiêu vặt', '1.500.000đ', true)" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium py-1.5 px-4 rounded-lg border border-gray-200 transition-all cursor-pointer">
                            Xem chi tiết
                        </button>
                    </div>
                </div>
            </div>

            <button id="btnNext" class="absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-white border border-gray-300 rounded-full shadow hover:bg-gray-50 transition-all cursor-pointer">
                <i class="fa-solid fa-chevron-right text-gray-600 text-xs"></i>
            </button>
        </div>
    </div>
</div>

<div id="modalChiTiet" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-2xl w-full max-h-[85vh] flex flex-col overflow-hidden">
        <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
            <div>
                <h2 class="text-lg font-bold text-gray-800" id="detailJarName">Chi tiết hũ</h2>
                <p class="text-sm text-gray-500">Số dư hiện tại: <span id="detailJarBalance" class="font-semibold text-gray-700">0đ</span></p>
            </div>
            <button onclick="closeModal('modalChiTiet')" class="text-gray-400 hover:text-gray-600 p-1 cursor-pointer">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <div class="p-6 overflow-y-auto flex-1">
            <div id="hasTransactions" class="space-y-3 hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-300 text-sm text-gray-500 bg-gray-50">
                                <th class="p-3 font-semibold">Tiêu đề giao dịch</th>
                                <th class="p-3 font-semibold">Ngày giao dịch</th>
                                <th class="p-3 font-semibold text-right">Số tiền</th>
                                <th class="p-3 font-semibold text-right">Số tiền còn lại</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700 divide-y divide-gray-100" id="transactionRows"></tbody>
                    </table>
                </div>
            </div>

            <div id="noTransactions" class="py-12 text-center hidden">
                <div class="text-gray-300 text-5xl mb-3">
                    <i class="fa-solid fa-receipt"></i>
                </div>
                <p class="text-gray-500 font-medium" id="emptyMessage"></p>
            </div>
        </div>

        <div class="p-4 border-t border-gray-200 bg-gray-50 flex justify-end">
            <button onclick="closeModal('modalChiTiet')" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded-lg text-sm transition-all cursor-pointer">
                Đóng
            </button>
        </div>
    </div>
</div>

<div id="modalThemHu" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full overflow-hidden">
        
        <!-- Phần Header của Modal -->
        <div class="p-5 border-b border-gray-200 bg-gray-50 relative">
            <!-- Thêm dòng text nhỏ nhắn phía trên tiêu đề -->
            <h2 class="text-lg pb-3 font-bold text-gray-800">Thêm hũ chi tiêu mới</h2>
            <p class="text-xs  text-gray-800 font-medium mb-1 tracking-wider">Chia nhỏ dòng tiền để quản lý chi tiêu hiệu quả hơn</p>
            
        <!-- Nút đóng dấu X đặt ở góc phải -->
            <button onclick="closeModal('modalThemHu')" class="text-gray-400 hover:text-gray-600 p-1 cursor-pointer absolute right-4 top-4">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Phần Nội dung Form nhập liệu -->
        <div class="p-6 space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Tên hũ <span class="text-red-500">*</span></label>
                <input type="text" id="inputTenHu" placeholder="Ví dụ: Tiền học, Mua sắm..."
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-[#D42A87] focus:border-[#D42A87] text-sm">
                <p id="errorTenHu" class="text-red-500 text-xs mt-1 hidden"></p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Số tiền cung cấp cho hũ <span class="text-red-500">*</span></label>
                <div class="relative">
                    <input type="number" id="inputSoTien" placeholder="Nhập mệnh giá tiền"
                        class="w-full pl-3 pr-12 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-[#D42A87] focus:border-[#D42A87] text-sm">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-400 text-sm">VND</div>
                </div>
                <p id="errorSoTien" class="text-red-500 text-xs mt-1 hidden"></p>
                <span class="text-xs text-gray-400 block mt-1">Số dư ví hiện tại: 5.000.000đ</span>
            </div>
        </div>

        <!-- Phần Footer chứa nút bấm đã được căn giữa và chia đều tỉ lệ 50/50 -->
        <div class="p-4 border-t border-gray-200 bg-gray-50 flex gap-4 justify-center">
            <!-- Thêm class w-full để cả 2 nút tự động giãn rộng bằng nhau chiếm trọn không gian hàng -->
            <button onclick="closeModal('modalThemHu')" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2.5 px-4 rounded-lg text-sm transition-all cursor-pointer text-center">
                Hủy
            </button>
            <button onclick="xuLyTaoHu()" class="w-full bg-[#D91773] hover:bg-[#b5105c] text-white font-medium py-2.5 px-4 rounded-lg text-sm transition-all cursor-pointer text-center shadow-sm">
                Tạo hũ
            </button>
        </div>
    </div>
</div>

<!-- Khung thông báo Toast Success giữ nguyên -->
<div id="toastSuccess" class="fixed inset-0 bg-black/40 z-[100] flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-2xl p-10 max-w-sm w-full shadow-2xl border border-gray-100 flex flex-col items-center justify-center text-center transform scale-95 transition-transform duration-300" id="toastContent">
        <div class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center text-emerald-500 text-4xl mb-5 border border-emerald-100 shadow-inner">
            <i class="fa-solid fa-check"></i>
        </div>
        <p class="text-gray-800 font-bold text-xl" id="toastMessage">Tạo hũ mới thành công !</p>
    </div>
</div>

<script>
    const SO_TIEN_TRONG_QUY = 5000000;

    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
        if (id === 'modalThemHu') resetFormThemHu();
    }

    function openChiTiet(tenHu, tongTien, coGiaoDich) {
        document.getElementById('detailJarName').innerText = `Hũ: ${tenHu}`;
        document.getElementById('detailJarBalance').innerText = tongTien;

        const hasTxSection = document.getElementById('hasTransactions');
        const noTxSection = document.getElementById('noTransactions');
        const tableBody = document.getElementById('transactionRows');

        if (coGiaoDich) {
            hasTxSection.classList.remove('hidden');
            noTxSection.classList.add('hidden');

            tableBody.innerHTML = `
                <tr class="hover:bg-gray-50">
                    <td class="p-3 font-medium text-gray-900">Rút tiền chi tiêu đợt 1</td>
                    <td class="p-3 text-gray-500">10/06/2026</td>
                    <td class="p-3 text-right text-red-600 font-medium">-200.000đ</td>
                    <td class="p-3 text-right font-medium">${tongTien}</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="p-3 font-medium text-gray-900">Nạp dòng tiền đầu tháng</td>
                    <td class="p-3 text-gray-500">01/06/2026</td>
                    <td class="p-3 text-right text-emerald-600 font-medium">+${tongTien}</td>
                    <td class="p-3 text-right font-medium">${tongTien}</td>
                </tr>
            `;
        } else {
            hasTxSection.classList.add('hidden');
            noTxSection.classList.remove('hidden');

            let date = new Date();
            let thangNamHienTai = `${date.getMonth() + 1}/${date.getFullYear()}`;
            document.getElementById('emptyMessage').innerText = `Chưa có giao dịch nào xảy ra trong tháng ${thangNamHienTai}`;
        }

        openModal('modalChiTiet');
    }

    function xuLyTaoHu() {
        const txtTenHu = document.getElementById('inputTenHu').value.trim();
        const txtSoTien = document.getElementById('inputSoTien').value.trim();

        const errTen = document.getElementById('errorTenHu');
        const errTien = document.getElementById('errorSoTien');

        errTen.classList.add('hidden');
        errTien.classList.add('hidden');

        let hopLe = true;

        if (!txtTenHu) {
            errTen.innerText = "⚠️ Bạn chưa nhập tên hũ";
            errTen.classList.remove('hidden');
            hopLe = false;
        }

        if (!txtSoTien) {
            errTien.innerText = "⚠️ Bạn chưa nhập số tiền cho hũ";
            errTien.classList.remove('hidden');
            hopLe = false;
        } else {
            const soTienNhap = parseFloat(txtSoTien);
            if (soTienNhap > SO_TIEN_TRONG_QUY) {
                errTien.innerText = `⚠️ Tài khoản bạn không đủ ! (Số dư tối đa: ${SO_TIEN_TRONG_QUY.toLocaleString('vi-VN')}đ)`;
                errTien.classList.remove('hidden');
                hopLe = false;
            }
        }

        if (hopLe) {
            themHuMoi(txtTenHu, txtSoTien);
            closeModal('modalThemHu');
        }
    }

    function resetFormThemHu() {
        document.getElementById('inputTenHu').value = "";
        document.getElementById('inputSoTien').value = "";
        document.getElementById('errorTenHu').classList.add('hidden');
        document.getElementById('errorSoTien').classList.add('hidden');
    }


    let hienSoDu = false;
    let currentPage = 1;
    const itemsPerPage = 4;

    function renderPage() {
        const jars = document.querySelectorAll('.jar-item');
        jars.forEach(item => item.style.display = 'none');
        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        jars.forEach((item, index) => {
            if (index >= start && index < end) {
                item.style.display = 'flex';
            }
        });
    }

    function toggleBalance() {
        hienSoDu = !hienSoDu;
        document.querySelectorAll('.balance-display').forEach(item => {
            const balance = parseInt(item.dataset.balance);
            if (hienSoDu) {
                item.innerHTML = `<span class="font-semibold text-gray-700">${balance.toLocaleString('vi-VN')}đ</span>`;
            } else {
                item.innerHTML = '';
                for (let i = 0; i < 6; i++) {
                    item.innerHTML += `<span class="w-2 h-2 rounded-full bg-gray-300"></span>`;
                }
            }
        });

        document.getElementById('btnToggleBalance').innerHTML =
            hienSoDu ?
            '<i class="fa-regular fa-eye-slash"></i> Ẩn số dư' :
            '<i class="fa-regular fa-eye"></i> Hiện số dư';
    }

    // CẬP NHẬT: Thay thế hàm alert thành Popup tự động đóng sau 2s
    function themHuMoi(tenHu, soTien) {
        const container = document.getElementById('jarContainer');

        container.insertAdjacentHTML('beforeend', `
        <div class="jar-item flex flex-col md:flex-row md:items-center justify-between p-4 bg-white rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-indigo-500 hover:shadow-md transition-all gap-4">
            <div class="flex items-center gap-4">
                <span class="text-3xl">🏖️️</span>
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">${tenHu}</h3>
                    <p class="text-gray-600 font-medium">Tổng:
                        <span class="text-gray-900">${parseInt(soTien).toLocaleString('vi-VN')}đ</span>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-between md:justify-end gap-6 w-full md:w-auto">
                <div class="balance-display flex gap-1.5" data-balance="${soTien}">
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                </div>
                <button onclick="openChiTiet('${tenHu}','${parseInt(soTien).toLocaleString('vi-VN')}đ',false)"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium py-1.5 px-4 rounded-lg border border-gray-200">
                    Xem chi tiết
                </button>
            </div>
        </div>`);

        const total = document.querySelectorAll('.jar-item').length;
        currentPage = Math.ceil(total / itemsPerPage);
        renderPage();

        // Đoạn xử lý Popup thông báo (thay thế cho alert)
        const toast = document.getElementById('toastSuccess');
        const toastContent = document.getElementById('toastContent');

        toast.classList.remove('hidden');
        setTimeout(() => {
            toast.classList.remove('opacity-0');
            toastContent.classList.remove('scale-95');
        }, 10); // Tạo hiệu ứng mượt khi hiện lên

        // Tự động đóng sau 2 giây (2000ms)
        setTimeout(() => {
            toast.classList.add('opacity-0');
            toastContent.classList.add('scale-95');
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 300); // Đợi hiệu ứng mờ kết thúc rồi mới ẩn hẳn
        }, 2000);
    }

    document.getElementById('btnToggleBalance').addEventListener('click', toggleBalance);

    document.getElementById('btnPrev').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage();
        }
    });

    document.getElementById('btnNext').addEventListener('click', () => {
        const total = document.querySelectorAll('.jar-item').length;
        const totalPage = Math.ceil(total / itemsPerPage);
        if (currentPage < totalPage) {
            currentPage++;
            renderPage();
        }
    });

    renderPage();
</script>
@endsection