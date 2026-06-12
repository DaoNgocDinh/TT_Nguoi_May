<body style="font-family: 'Inter', sans-serif;" class="min-h-screen flex flex-col">

    @include('global_layout.navbar')
    @include('global_layout.header')
    <div class="w-[1531px] h-[695px] justify-center mx-auto">
        <img src="{{ asset('images/QuangCaoQlyQuy.png') }}" alt="QCQlyQuy" class="w-full h-full object-cover">
    </div>
    <main class="flex-1">
        @yield('content')
    </main>


    <span class="text-[32px] font-bold text-center text-[#D42A87] mt-5">
        Danh sách quỹ người dùng
    </span>

    <div class="h-[880px] w-full bg-[#F974BD]/5 mt-5 relative">
        <div id="toast-success"
            class="fixed top-4 right-4 hidden px-4 py-2 rounded-lg bg-white text-[#81FF73] text-[16px] shadow-lg z-[999] flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-[39px]">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                    clip-rule="evenodd" />
            </svg>
            <a class="text-black">Cập nhật vị trí thành công!</a>
        </div>

        <div id="toast-error"
            class="fixed top-4 right-4 hidden px-4 py-2 rounded-lg bg-white text-[#E7000B] text-[16px] shadow-lg z-[999] flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-[39px]">
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                    clip-rule="evenodd" />
            </svg>

            <a class="text-black"></a>Cập nhật vị trí không thành công. Hãy thử lại sau ít phút</a>
        </div>
        <div class=" grid-container max-w-[1500px] mx-auto grid grid-cols-4 gap-8 justify-items-center">
            @foreach ($quys as $quy)
                @if(in_array($quy['trangThaiQuy'], ['active', 'kick']))
                    <div class="grid-card swap-item w-[275px] h-[321px] bg-[#D9D9D9] p-[5px]" data-id="{{ $quy['id'] }}">
                        <div class="relative w-[264px] h-[308px] bg-[#FFD2EA] p-[8px]">

                            <div
                                class="absolute top-[8px] right-[8px] h-[30px] px-[4px] bg-[#DEDEDE] border border-[#A0A0A0] rounded-bl-[12px] flex items-center gap-[4px] z-20">

                                <div class="relative fund-image-container">
                                    <button
                                        class="toggle-visibility w-[23px] h-[23px] rounded-full bg-white border border-[#A0A0A0] flex items-center justify-center transition-all duration-200 hover:bg-[#727272] hover:text-white hover:shadow-md cursor-pointer">

                                        <!-- Icon hiện -->
                                        <svg class="eye-open size-[18px]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>

                                        <!-- Icon ẩn -->
                                        <svg class="eye-close size-[18px] hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                        </svg>

                                    </button>
                                </div>

                                <button
                                    class="move-left w-[23px] h-[23px] rounded-full bg-white border border-[#A0A0A0] flex items-center justify-center transition-all duration-200 hover:bg-[#727272] hover:text-white hover:shadow-md cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="size-[18px]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                                    </svg>

                                </button>

                                <button
                                    class="swap-btn w-[23px] h-[23px] rounded-full bg-white border border-[#A0A0A0] flex items-center justify-center transition-all duration-200 hover:bg-[#727272] hover:text-white hover:shadow-md cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="size-[18px]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>

                                </button>

                            </div>
                            <!-- Ảnh -->
                            <div
                                class="image-container relative w-[248px] h-[240px] bg-white border border-[#E5E5E5] overflow-hidden">

                                <img src="{{ asset('images/' . $quy['anh']) }}" class="fund-image w-full h-full object-cover">

                                <!-- Layer che -->
                                <div class="hidden-layer absolute inset-0 bg-black/40 hidden z-10">
                                </div>

                            </div>

                            <!-- Nội dung -->
                            <div class="absolute bottom-0 left-0 w-[264px] h-[47px] bg-white px-3 py-0">

                                <h3 class="text-[18px] font-bold text-[#D91773] leading-tight">
                                    {{ $quy['ten'] }}
                                </h3>
                                <p class="text-[16px] text-black">
                                    @if ($quy['soTienMucTieu'] == null)
                                        {{ number_format($quy['soTien'], 0, ',', '.') }}đ
                                    @else
                                        {{ number_format($quy['soTien'], 0, ',', '.') }}đ/{{ number_format($quy['soTienMucTieu'], 0, ',', '.') }}đ
                                    @endif
                                </p>

                            </div>


                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <button id="saveBtn" class="hidden absolute bottom-4 right-4 w-[169px] h-[42px]
           bg-[#D42A87] text-white text-[20px] font-bold
           rounded-xl shadow-lg flex items-center justify-center
           transition-all duration-200 hover:scale-105">
            Lưu cài đặt
        </button>
    </div>

    <span class="text-[32px] font-bold text-center text-[#D42A87] mt-5">
        Trạng thái quỹ
    </span>

    <div class="mt-5 mx-auto grid grid-cols-4 gap-15 justify-items-center">
        <a onclick="filterFunds('kick', this)"
            class="text-[20px] font-bold text-[#D42A87] rounded-full border-2 border-[#D42A87] w-[162px] h-[42px] flex items-center justify-center tab-btn active-tab">Được
            mời ra</a>
        <a onclick="filterFunds('pls', this)"
            class="text-[20px] font-bold text-[#D42A87] rounded-full border-2 border-[#D9D9D9] w-[162px] h-[42px] flex items-center justify-center tab-btn">Chờ
            duyệt</a>
        <a onclick="filterFunds('no', this)"
            class="text-[20px] font-bold text-[#D42A87] rounded-full border-2 border-[#D9D9D9] w-[162px] h-[42px] flex items-center justify-center tab-btn">Bị
            từ chối</a>
        <a onclick="filterFunds('deleted', this)"
            class="text-[20px] font-bold text-[#D42A87] rounded-full border-2 border-[#D9D9D9] w-[162px] h-[42px] flex items-center justify-center tab-btn">Đã
            đóng</a>
    </div>

    <div class="h-[623px] w-full bg-[#E7E7E7]/69 mt-5 mb-20">
        <div class="max-w-[1300px] mx-auto justify-items-center">
            @foreach ($quys as $quy)
                <div class="w-[1250px] h-[118px] flex fund-card mt-5" data-status="{{ $quy['trangThaiQuy'] }}">

                    <div class="w-[185px] h-[118px] shrink-0">
                        <img src="{{ asset('images/' . $quy['anh']) }}" alt="Ảnh" class="w-full h-full object-cover">
                    </div>

                    <div class="w-[1065px] h-[118px] bg-[#FFD2EA] flex flex-col">
                        <div class="h-[23px] flex items-center pl-8">
                            <a class="text-[20px] font-bold text-[#D42A87]">
                                {{ $quy['ten'] }}
                            </a>
                        </div>
                        <div class="w-[1064px] h-[95px] bg-white">
                            @if ($quy['trangThaiQuy'] == 'kick')
                                <p class="text-[20px] text-black mt-1 pl-8">
                                    <span class="font-bold">Lý do:</span>
                                    {{ $quy['lyDo'] }}
                                </p>

                                <div class="flex justify-center gap-4 mt-4">
                                    <button
                                        class="acceptBtn w-[99px] h-[38px] rounded-full border-2 border-[#81FF73] bg-[#81FF73] text-white text-[18px] transition-all duration-300">
                                        Đồng ý
                                    </button>

                                    <button
                                        class="rejectBtn w-[99px] h-[38px] rounded-full border-2 border-[#E7000B] bg-white text-[#E7000B] text-[18px] transition-all duration-300">
                                        Từ chối
                                    </button>
                                </div>
                            @endif
                            @if ($quy['trangThaiQuy'] == 'pls')
                                <p class="text-[20px] text-black mt-0.5 pl-8">
                                    <span class="font-bold">Ngày gửi:</span>
                                    {{ $quy['ngayGui'] }}
                                </p>
                                <p class="text-[20px] text-black mt-0.5 pl-8">
                                    <span class="font-bold">Ngày hết hạn:</span>
                                    {{ $quy['ngayHetHan'] }}
                                </p>
                                <p class="text-[20px] text-black mt-0.5 pl-8">
                                    <span class="font-bold">Trạng thái:</span>
                                    {{ $quy['trangThai'] }}
                                </p>
                            @endif
                            @if ($quy['trangThaiQuy'] == 'no')
                                <p class="text-[20px] text-black mt-3.5 pl-8">
                                    <span class="font-bold">Ngày gửi:</span>
                                    {{ $quy['ngayGui'] }}
                                </p>
                                <p class="text-[20px] text-black mt-0.5 pl-8">
                                    <span class="font-bold">Ngày từ chối:</span>
                                    {{ $quy['ngayTuChoi'] }}
                                </p>
                            @endif
                            @if ($quy['trangThaiQuy'] == 'deleted')
                                <p class="text-[20px] text-black mt-0.5 pl-8">
                                    <span class="font-bold">Ngày đóng:</span>
                                    {{ $quy['ngayDong'] }}
                                </p>

                                <div class="flex justify-center gap-4 mt-4">

                                    <button
                                        class="flex w-[99px] h-[38px] rounded-full border-2 border-[#FC0005] bg-[#FFFFFF] text-[#FC0005] text-[18px] items-center justify-center transition-all duration-200 hover:bg-[#FC0005] hover:text-white hover:shadow-md cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                        Xóa quỹ
                                    </button>
                                </div>
                            @endif
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>

    @include('global_layout.footer')

</body>

<script>
    let currentStatus = 'kick';

    function filterFunds(status) {

        currentStatus = status;

        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('border-[#D42A87]');
            btn.classList.add('border-[#D9D9D9]');
        });

        document.querySelectorAll('.fund-card').forEach(card => {
            card.style.display =
                card.dataset.status === status
                    ? 'flex'
                    : 'none';
        });

    }
</script>

<script>
    function filterFunds(status, element) {

        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('border-[#D42A87]');
            btn.classList.add('border-[#D9D9D9]');
        });

        element.classList.remove('border-[#D9D9D9]');
        element.classList.add('border-[#D42A87]');

        document.querySelectorAll('.fund-card').forEach(card => {

            card.style.display =
                card.dataset.status === status
                    ? 'flex'
                    : 'none';

        });
    }
</script>

<script>
    window.onload = () => {
        filterFunds(
            'kick',
            document.querySelector('.active-tab')
        );
    };
</script>

<script>
    document.querySelectorAll('.rejectBtn').forEach(rejectBtn => {

        const acceptBtn = rejectBtn.previousElementSibling;

        rejectBtn.addEventListener('mouseenter', () => {
            rejectBtn.style.backgroundColor = '#E7000B';
            rejectBtn.style.color = 'white';

            acceptBtn.style.backgroundColor = 'white';
            acceptBtn.style.color = '#81FF73';
        });

        rejectBtn.addEventListener('mouseleave', () => {
            rejectBtn.style.backgroundColor = 'white';
            rejectBtn.style.color = '#E7000B';

            acceptBtn.style.backgroundColor = '#81FF73';
            acceptBtn.style.color = 'white';
        });

    });

    document.querySelectorAll('.toggle-visibility').forEach(btn => {

        const card = btn.closest('.w-\\[264px\\].h-\\[308px\\]');
        const layer = card.querySelector('.hidden-layer');

        const openIcon = btn.querySelector('.eye-open');
        const closeIcon = btn.querySelector('.eye-close');

        btn.addEventListener('click', () => {

            layer.classList.toggle('hidden');

            btn.classList.toggle('active-eye');

            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

        });

    });
    document.addEventListener('click', (e) => {

        const btn = e.target.closest('.move-left'); // nút ngược chiều
        if (!btn) return;

        const card = btn.closest('.w-\\[275px\\]');
        const parent = card.parentElement;

        const cards = Array.from(parent.children);
        const index = cards.indexOf(card);

        // ❌ nếu là card đầu tiên thì thôi
        if (index <= 0) return;

        // 🔁 swap với thằng bên trái
        const prevCard = cards[index - 1];

        parent.insertBefore(card, prevCard);
        checkChange();
    });

    let selectedCard = null;

    document.addEventListener('click', (e) => {

        // ======================
        // 1. CHỌN CARD (chỉ qua nút swap)
        // ======================
        const btn = e.target.closest('.swap-btn');
        if (btn) {

            const card = btn.closest('.grid-card');
            if (!card) return;

            // toggle chọn lại = huỷ
            if (selectedCard === card) {
                btn.classList.remove('active-swap-btn');
                selectedCard = null;
                return;
            }

            // bỏ cái cũ
            document.querySelectorAll('.swap-btn')
                .forEach(b => b.classList.remove('active-swap-btn'));

            selectedCard = card;

            btn.classList.add('active-swap-btn');

            console.log("SELECTED A:", selectedCard);
            return;
        }

        // ======================
        // 2. CLICK CARD B → SWAP
        // ======================
        if (!selectedCard) return;

        const targetCard = e.target.closest('.grid-card');
        if (!targetCard || targetCard === selectedCard) return;

        const parent = selectedCard.parentElement;

        // ===== SWAP THẬT SỰ =====
        const placeholder = document.createElement('div');
        parent.insertBefore(placeholder, selectedCard);

        parent.insertBefore(selectedCard, targetCard);
        parent.insertBefore(targetCard, placeholder);

        placeholder.remove();

        // reset
        document.querySelectorAll('.swap-btn')
            .forEach(b => b.classList.remove('active-swap-btn'));

        selectedCard = null;

        console.log("SWAPPED");
        checkChange();
    });

    const container = document.querySelector('.grid-container');
    const saveBtn = document.querySelector('#saveBtn');

    let initialOrder = [];

    window.addEventListener('load', () => {
        initialOrder = getCurrentOrder();
    });
    function getCurrentOrder() {
        return Array.from(document.querySelectorAll('.swap-item'))
            .map(card => card.dataset.id);
    }
    function checkChange() {
        const currentOrder = getCurrentOrder();

        const changed =
            currentOrder.length !== initialOrder.length ||
            currentOrder.some((id, i) => id !== initialOrder[i]);

        document.getElementById('saveBtn')
            .classList.toggle('hidden', !changed);
    }
    let savedOnce = false;

    document.getElementById('saveBtn').addEventListener('click', () => {

        if (!savedOnce) {

            initialOrder = getCurrentOrder();
            savedOnce = true;

            showSuccessToast();

            document.getElementById('saveBtn').classList.add('hidden');

        } else {

            showErrorToast();

            resetOrder();

            document.getElementById('saveBtn').classList.add('hidden');
        }
    });
    function showSuccessToast() {
        const toast = document.getElementById("toast-success");

        toast.classList.remove("hidden");

        setTimeout(() => {
            toast.classList.add("hidden");
        }, 2500);
    }

    function showErrorToast() {
        const toast = document.getElementById("toast-error");

        toast.classList.remove("hidden");

        setTimeout(() => {
            toast.classList.add("hidden");
        }, 2500);
    }
    function resetOrder() {
        const container = document.querySelector('.grid-container');
        const cards = Array.from(container.querySelectorAll('.swap-item'));

        const map = new Map();
        cards.forEach(card => map.set(card.dataset.id, card));

        container.innerHTML = '';

        initialOrder.forEach(id => {
            if (map.has(id)) {
                container.appendChild(map.get(id));
            }
        });
    }
</script>

<style>
    .hidden-fund {
        opacity: 0.4;
        filter: blur(2px);
    }

    .active-eye {
        background: #727272 !important;
        color: white !important;
    }

    .swap-btn.active-swap-btn {
        background: #727272 !important;
        color: white !important;
        transform: scale(1.1);
        transition: 0.2s;
    }
</style>