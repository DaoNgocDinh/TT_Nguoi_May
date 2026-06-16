@extends('global_layout.body')

@section('title', 'Xác thực - Thanh toán hóa đơn')

@section('body')
<div class="container mx-auto px-4 py-8">
    <!-- Tiêu đề -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-[#A0185F] mb-2">Xác thực giao dịch</h1>
        <p class="text-gray-600">Bước 5: Nhập mã PIN để xác thực giao dịch</p>
    </div>

    <!-- Progress Bar -->
    <div class="mb-8 bg-white rounded-xl p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="text-sm font-semibold"><span class="text-[#A0185F]">Bước 5</span> / 5</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div class="bg-[#A0185F] h-2 rounded-full" style="width: 100%"></div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <!-- Card xác thực -->
                <div class="bg-gradient-to-br from-[#A0185F] to-[#8B1550] text-white rounded-[32px] shadow-2xl p-10">
                    <div class="text-center">
                        <div class="text-5xl mb-6"><i class="fas fa-shield-alt"></i></div>
                        <h2 class="text-3xl font-bold mb-3">Xác thực giao dịch</h2>
                        <p class="opacity-90 text-base leading-7">Nhập mã PIN 6 chữ số của bạn để thanh toán an toàn và bảo mật.</p>
                    </div>
                </div>

                <!-- Form nhập PIN -->
                <div class="bg-white rounded-[32px] shadow-2xl p-8 border border-gray-100">
                    <label class="block text-sm font-semibold text-[#121212] mb-4">Mã PIN (6 chữ số)</label>
                    <input type="password" placeholder="● ● ● ● ● ●" maxlength="6"
                           class="w-full px-5 py-5 border-2 border-gray-200 rounded-[24px] focus:border-[#A0185F] focus:outline-none transition text-3xl text-center tracking-[0.5em] font-bold bg-gray-50">
                    <p class="text-sm text-gray-500 mt-3">Nhập mã PIN 6 chữ số của bạn. Không chia sẻ mã PIN với bất kỳ ai.</p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <a href="/thanh-toan-hoa-don/thanh-cong" class="inline-flex items-center justify-center px-6 py-4 bg-[#A0185F] text-white rounded-[24px] font-semibold hover:bg-[#8B1550] transition">
                            Xác thực
                        </a>
                        <a href="/thanh-toan-hoa-don/xac-nhan" class="inline-flex items-center justify-center px-6 py-4 bg-gray-200 text-gray-800 rounded-[24px] font-semibold hover:bg-gray-300 transition">
                            Quay lại
                        </a>
                    </div>

                    <div class="text-center mt-6">
                        <p class="text-sm text-gray-600">
                            <a href="#" class="text-[#A0185F] hover:underline">Quên mã PIN?</a> | 
                            <a href="#" class="text-[#A0185F] hover:underline">Hỗ trợ</a>
                        </p>
                    </div>
                </div>
            </div>

            <aside class="space-y-6">
                <div class="bg-white rounded-[32px] shadow-2xl p-8 border border-gray-100">
                    <h3 class="text-xl font-bold text-[#121212] mb-4">Ghi chú bảo mật</h3>
                    <ul class="space-y-4 text-sm text-gray-600">
                        <li class="flex gap-3 items-start">
                            <span class="mt-1 text-[#A0185F]"><i class="fas fa-shield-alt"></i></span>
                            <span>Bảo mật bằng mã PIN 6 chữ số và mã hóa SSL.</span>
                        </li>
                        <li class="flex gap-3 items-start">
                            <span class="mt-1 text-[#A0185F]"><i class="fas fa-user-lock"></i></span>
                            <span>Không chia sẻ mã PIN với người khác dưới mọi hình thức.</span>
                        </li>
                        <li class="flex gap-3 items-start">
                            <span class="mt-1 text-[#A0185F]"><i class="fas fa-mobile-alt"></i></span>
                            <span>Giữ điện thoại của bạn an toàn trong quá trình xác thực.</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#F9F5F9] rounded-[32px] p-8 border border-[#E8D7E1] text-gray-700">
                    <h4 class="text-lg font-bold mb-4">Lưu ý</h4>
                    <p class="text-sm leading-7">Nếu bạn không thực hiện giao dịch này, hãy liên hệ ngay trung tâm hỗ trợ để kiểm tra và khóa giao dịch.</p>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
