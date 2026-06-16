@extends('global_layout.body')

@section('content')
@php
    $statusColor = $transaction['status'] === 'Thành công' ? 'bg-[#E8F8EF] text-[#0F7A32]' : 'bg-[#FFE7EB] text-[#D10852]';
@endphp

<div class="min-h-[calc(100vh-160px)] bg-[#F3F1F1] py-8 px-4 sm:px-6 lg:px-10">
    <div class="mx-auto max-w-6xl">
        <div class="rounded-[30px] bg-white p-6 shadow-xl ring-1 ring-black/5 sm:p-8">
            <div class="mb-6 flex items-center gap-4">
                <a href="{{ url('/lich-su-giao-dich') }}" class="inline-flex items-center gap-2 rounded-full border border-[#E5E5E5] bg-[#F8F7F7] px-4 py-2 text-sm font-semibold text-[#1B1B18] transition hover:bg-[#F0EFF0] hover:text-[#A0185F]">
                    <i class="fa-solid fa-chevron-left"></i>
                    Quay lại
                </a>
            </div>
            <div class="mb-6 flex items-center gap-4">
                <div>
                    <p class="text-sm text-[#6B6B68]">Chi tiết giao dịch</p>
                    <h1 class="text-2xl font-semibold text-[#1B1B18]">{{ $transaction['title'] }}</h1>
                </div>
            </div>

            <div class="overflow-hidden rounded-[30px] bg-gradient-to-r from-[#C91673] via-[#DD2363] to-[#F23374] px-6 py-10 text-white shadow-sm">
                <div class="flex flex-col items-center gap-4 text-center sm:flex-row sm:items-center sm:justify-between sm:text-left">
                    <div class="flex items-center gap-4">
                        <span class="inline-flex h-20 w-20 items-center justify-center rounded-[26px] bg-white/15 text-3xl text-white">
                            <i class="fa-solid {{ $transaction['icon'] }}"></i>
                        </span>
                        <div>
                            <div class="text-sm font-semibold uppercase tracking-[0.18em] text-white/80">{{ $transaction['type'] }}</div>
                            <div class="mt-2 text-4xl font-semibold">{{ $transaction['amount'] }}</div>
                        </div>
                    </div>
                    <span class="inline-flex rounded-full bg-white/20 px-4 py-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">{{ $transaction['status'] }}</span>
                </div>
            </div>

            <div class="mt-8 grid gap-6 sm:grid-cols-2 items-stretch">
                <div class="flex flex-col gap-4 h-full">
                    <div class="rounded-[28px] bg-white p-6 shadow-sm flex-1 min-h-0">
                        <h2 class="text-sm font-semibold text-[#1B1B18]">Thông tin giao dịch</h2>
                        <div class="mt-5 grid gap-4 text-sm text-[#4B4B47]">
                            <div class="grid gap-1">
                                <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Mã giao dịch</span>
                                <span class="font-semibold text-[#1B1B18]">{{ $transaction['code'] }}</span>
                            </div>
                            <div class="grid gap-1">
                                <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Thời gian</span>
                                <span class="font-semibold text-[#1B1B18]">{{ $transaction['time'] }}</span>
                            </div>
                            <div class="grid gap-1">
                                <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Người nhận</span>
                                <span class="font-semibold text-[#1B1B18]">{{ $transaction['name'] }}</span>
                                <span class="text-xs text-[#7D7D78]">{{ $transaction['subtext'] }}</span>
                            </div>
                            <div class="grid gap-1">
                                <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Nội dung</span>
                                <span class="font-semibold text-[#1B1B18]">{{ $transaction['content'] }}</span>
                            </div>
                            <div class="grid gap-1">
                                <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Phương thức</span>
                                <span class="font-semibold text-[#1B1B18]">{{ $transaction['method'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4 h-full">
                    <div class="rounded-[28px] bg-white p-6 shadow-sm flex-1 min-h-0">
                        <h2 class="text-sm font-semibold text-[#1B1B18]">Chi tiết thanh toán</h2>
                        <div class="mt-5 space-y-4 text-sm text-[#4B4B47]">
                            <div class="grid gap-1">
                                <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Số tiền giao dịch</span>
                                <span class="font-semibold text-[#1B1B18]">{{ $transaction['amount'] }}</span>
                            </div>
                            <div class="grid gap-1">
                                <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Phí giao dịch</span>
                                <span class="font-semibold text-[#1B1B18]">{{ $transaction['fee'] }}</span>
                            </div>
                            <div class="border-t border-[#E7E5E5] pt-4">
                                <div class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Tổng cộng</span>
                                <div class="mt-2 text-xl font-semibold text-[#1B1B18]">{{ $transaction['total'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex justify-center">
                <div class="w-full max-w-4xl rounded-[28px] border border-[#E7E5E5] bg-white p-4 sm:p-6">
                    <div class="grid gap-4 sm:grid-cols-2">
                        <a href="#" role="button" class="flex w-full items-center justify-center h-14 rounded-[14px] border border-transparent bg-[#F6F5F5] px-6 text-base font-semibold text-[#1B1B18] hover:bg-[#EFEFEF]">
                            <i class="fa-solid fa-download mr-3 text-lg"></i>
                            <span class="truncate">Tải biên lai giao dịch</span>
                        </a>
                        <a href="#" role="button" class="flex w-full items-center justify-center h-14 rounded-[14px] border border-transparent bg-[#F6F5F5] px-6 text-base font-semibold text-[#1B1B18] hover:bg-[#EFEFEF]">
                            <i class="fa-solid fa-share mr-3 text-lg"></i>
                            <span class="truncate">Chia sẻ giao dịch</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
