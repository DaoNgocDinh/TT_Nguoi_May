@extends('global_layout.body')

@section('content')
@php
    $statusColor = $transaction['status'] === 'Thành công' ? 'bg-[#E8F8EF] text-[#0F7A32]' : 'bg-[#FFE7EB] text-[#D10852]';
@endphp

<div class="min-h-[calc(100vh-160px)] bg-[#F3F1F1] py-8 px-4 sm:px-6 lg:px-10">
    <div class="mx-auto max-w-6xl space-y-8">
        <div class="flex justify-start">
            <a href="{{ url('/lich-su-giao-dich') }}" class="inline-flex items-center gap-2 rounded-full border border-[#E5E5E5] bg-white px-4 py-2 text-sm font-semibold text-[#1B1B18] shadow-sm transition hover:bg-[#F8F7F7]">
                <i class="fa-solid fa-chevron-left"></i>
                Quay lại
            </a>
        </div>

        <div class="overflow-hidden rounded-[30px] bg-gradient-to-r from-[#C91673] via-[#DD2363] to-[#F23374] p-8 text-white shadow-xl">
            <div class="flex flex-col items-center gap-6 text-center">
                <span class="inline-flex h-20 w-20 items-center justify-center rounded-[26px] bg-white/15 text-3xl text-white">
                    <i class="fa-solid {{ $transaction['icon'] }}"></i>
                </span>
                <div class="space-y-2">
                    <p class="text-sm uppercase tracking-[0.26em] text-white/80">{{ $transaction['type'] }}</p>
                    <h1 class="text-5xl font-semibold tracking-[-0.03em] text-white">{{ $transaction['amount'] }}</h1>
                    <span class="inline-flex rounded-full bg-white/15 px-5 py-2 text-sm font-semibold uppercase tracking-[0.18em] text-white">{{ $transaction['status'] }}</span>
                </div>
            </div>
        </div>

        <div class="grid gap-6 xl:grid-cols-2">
            <div class="rounded-[28px] bg-white p-6 shadow-sm">
                <div class="border-b border-[#E7E5E5] pb-4">
                    <p class="text-sm font-semibold text-[#1B1B18]">Thông tin giao dịch</p>
                    <p class="text-xs text-[#7D7D78]">Chi tiết giao dịch</p>
                </div>

                <div class="mt-6 grid divide-y divide-[#E7E5E5] text-sm text-[#4B4B47]">
                    <div class="grid gap-1 sm:grid-cols-[160px_minmax(0,1fr)] items-center py-4">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Mã giao dịch</span>
                        <span class="font-semibold text-[#1B1B18] text-right">{{ $transaction['code'] }}</span>
                    </div>
                    <div class="grid gap-1 sm:grid-cols-[160px_minmax(0,1fr)] items-center py-4">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Thời gian</span>
                        <span class="font-semibold text-[#1B1B18] text-right">{{ $transaction['time'] }}</span>
                    </div>
                    <div class="grid gap-1 sm:grid-cols-[160px_minmax(0,1fr)] items-start py-4">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Người nhận</span>
                        <div class="space-y-1 text-right">
                            <span class="font-semibold text-[#1B1B18] block">{{ $transaction['name'] }}</span>
                            <span class="text-xs text-[#7D7D78] block">{{ $transaction['subtext'] }}</span>
                        </div>
                    </div>
                    <div class="grid gap-1 sm:grid-cols-[160px_minmax(0,1fr)] items-center py-4">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Nội dung</span>
                        <span class="font-semibold text-[#1B1B18] text-right block">{{ $transaction['content'] }}</span>
                    </div>
                    <div class="grid gap-1 sm:grid-cols-[160px_minmax(0,1fr)] items-center py-4">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Phương thức</span>
                        <span class="font-semibold text-[#1B1B18] text-right">{{ $transaction['method'] }}</span>
                    </div>
                </div>
            </div>

            <div class="rounded-[28px] bg-white p-6 shadow-sm">
                <div class="border-b border-[#E7E5E5] pb-4">
                    <p class="text-sm font-semibold text-[#1B1B18]">Chi tiết thanh toán</p>
                </div>

                <div class="mt-6 space-y-5 text-sm text-[#4B4B47]">
                    <div class="grid gap-1 sm:grid-cols-[160px_1fr] items-center">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Số tiền giao dịch</span>
                        <span class="font-semibold text-[#1B1B18] text-right">{{ $transaction['amount'] }}</span>
                    </div>
                    <div class="grid gap-1 sm:grid-cols-[160px_1fr] items-center">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Phí giao dịch</span>
                        <span class="font-semibold text-[#1B1B18] text-right">{{ $transaction['fee'] }}</span>
                    </div>
                    <div class="pt-4 border-t border-[#E7E5E5] grid gap-1 sm:grid-cols-[160px_1fr] items-center">
                        <span class="text-xs uppercase tracking-[0.18em] text-[#7D7D78]">Tổng cộng</span>
                        <p class="mt-2 text-right text-xl font-semibold text-[#1B1B18]">{{ $transaction['total'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <a href="#" class="inline-flex items-center justify-center gap-3 rounded-[14px] border border-[#E7E5E5] bg-white px-6 py-4 text-sm font-semibold text-[#1B1B18] shadow-sm hover:bg-[#F7F7F7]">
                <i class="fa-solid fa-download text-lg"></i>
                Tải biên lai giao dịch
            </a>
            <a href="#" class="inline-flex items-center justify-center gap-3 rounded-[14px] border border-[#E7E5E5] bg-white px-6 py-4 text-sm font-semibold text-[#1B1B18] shadow-sm hover:bg-[#F7F7F7]">
                <i class="fa-solid fa-share text-lg"></i>
                Chia sẻ giao dịch
            </a>
        </div>
    </div>
</div>
@endsection
