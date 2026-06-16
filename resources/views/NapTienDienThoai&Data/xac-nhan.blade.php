@extends('global_layout.body')

@section('title', 'Xác nhận - Mua Data')

@section('body')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-7xl mx-auto">
        
        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-sm uppercase tracking-[0.28em] text-[#A0185F] mb-2">Xác nhận giao dịch</p>
                <h1 class="text-4xl font-bold text-[#121212]">Xác nhận thông tin mua Data</h1>
                <p class="text-gray-600 mt-2">Bước 5: Kiểm tra lại thông tin trước khi xác thực giao dịch.</p>
            </div>
            
        </div>
            <div class="mb-8 bg-white rounded-xl p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="text-sm font-semibold"><span class="text-[#A0185F]">Bước 4</span> / 6</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div class="bg-[#A0185F] h-2 rounded-full" style="width: 66%"></div>
        </div>
    </div>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div class="overflow-hidden rounded-[32px] border border-gray-200 bg-white shadow-xl">
                    <div class="bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-8 py-8 text-white">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                            <div class="flex items-center gap-4">
                                <div class="flex h-16 w-16 items-center justify-center rounded-3xl bg-white/15 text-3xl text-white">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div>
                                    <p class="text-sm uppercase tracking-[0.24em] opacity-90">Mua gói Data</p>
                                    <h2 class="text-3xl font-bold">Data Viettel</h2>
                                </div>
                            </div>
                            <div class="rounded-3xl bg-white/15 px-5 py-4 text-right">
                                <p class="text-xs uppercase tracking-[0.2em] opacity-80">Tổng thanh toán</p>
                                <p class="mt-2 text-3xl font-bold">100.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-8 py-8">
                        <div class="grid gap-4 md:grid-cols-2">
                            <div class="rounded-3xl border border-gray-200 bg-slate-50 px-5 py-5">
                                <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Số điện thoại</p>
                                <p class="mt-2 text-lg font-semibold text-[#121212]">0912***567</p>
                            </div>
                            <div class="rounded-3xl border border-gray-200 bg-slate-50 px-5 py-5">
                                <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Nhà mạng</p>
                                <p class="mt-2 text-lg font-semibold text-[#121212]">Viettel</p>
                            </div>
                        </div>

                        <div class="mt-8 rounded-[28px] border border-gray-200 bg-slate-50 p-6">
                            <h3 class="text-lg font-semibold text-[#121212] mb-4">Chi tiết giao dịch</h3>
                            <div class="grid gap-4 text-sm text-gray-600">
                                <div class="flex justify-between">
                                    <span>Khách hàng</span>
                                    <span class="font-semibold text-[#121212]">Nguyễn Văn A</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Dịch vụ</span>
                                    <span class="font-semibold text-[#121212]">Data Viettel</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Mệnh giá</span>
                                    <span class="font-semibold text-[#121212]">100.000đ</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Phí giao dịch</span>
                                    <span class="font-semibold text-[#121212]">0đ</span>
                                </div>
                                <div class="mt-4 flex justify-between border-t border-gray-200 pt-4 text-lg font-semibold text-[#121212]">
                                    <span>Tổng</span>
                                    <span class="text-[#A0185F]">100.000đ</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <a href="/nap-tien-dien-thoai/chon-goi" class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-white px-6 py-4 text-sm font-semibold text-gray-800 transition hover:bg-gray-50">
                                Hủy
                            </a>
                            <a href="/nap-tien-dien-thoai/xac-thuc" class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-[#A0185F] to-[#8B1550] px-6 py-4 text-sm font-semibold text-white transition hover:from-[#8B1550]">
                                Xác nhận thanh toán
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-[32px] border border-gray-200 bg-white p-6 shadow-sm">
                <div class="mb-6 rounded-[28px] bg-[#F8E5FB] p-5 text-[#121212]">
                    <p class="text-xs uppercase tracking-[0.24em] text-[#A0185F]">Số dư khả dụng</p>
                    <p class="mt-3 text-3xl font-bold">25.480.000đ</p>
                    <p class="mt-2 text-sm text-gray-600">Tài khoản: Nguyễn Văn A</p>
                </div>

                <h3 class="text-lg font-semibold text-[#121212] mb-4">Ghi chú</h3>
                <div class="space-y-4 text-sm text-gray-600">
                    <div class="flex gap-3">
                        <span class="mt-1 text-[#A0185F]"><i class="fas fa-shield-alt"></i></span>
                        <p>Mã PIN 6 chữ số sẽ được yêu cầu ở bước tiếp theo.</p>
                    </div>
                    <div class="flex gap-3">
                        <span class="mt-1 text-[#A0185F]"><i class="fas fa-wallet"></i></span>
                        <p>Số dư tài khoản phải đủ để thanh toán toàn bộ mệnh giá.</p>
                    </div>
                    <div class="flex gap-3">
                        <span class="mt-1 text-[#A0185F]"><i class="fas fa-clock"></i></span>
                        <p>Giao dịch sẽ được xử lý ngay sau khi xác thực thành công.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
