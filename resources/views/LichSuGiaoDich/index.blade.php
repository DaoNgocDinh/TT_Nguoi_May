@extends('global_layout.body')

@section('content')
@php
    $from = $total > 0 ? ($page - 1) * $perPage + 1 : 0;
    $to = $total > 0 ? min($total, $page * $perPage) : 0;
    $prevPage = max(1, $page - 1);
    $nextPage = min($pages, $page + 1);
@endphp

<div class="min-h-[calc(100vh-160px)] bg-[#F3F1F1] py-8 px-4 sm:px-6 lg:px-10">
    <div class="mx-auto max-w-6xl">
        <div class="rounded-[30px] bg-white p-6 shadow-xl ring-1 ring-black/5 sm:p-8">
                <div class="mb-4">
                    <button type="button" onclick="window.history.back()" class="inline-flex items-center gap-2 rounded-full border border-[#E5E5E5] bg-[#F8F7F7] px-3 py-1.5 text-sm font-semibold text-[#1B1B18] transition hover:bg-[#EFEFEF] hover:text-[#A0185F]">
                        <i class="fa-solid fa-chevron-left"></i>
                        Quay lại
                    </button>
                </div>
                <div class="mb-4">
                    <h1 class="text-2xl font-semibold text-[#1b1b18]">Lịch sử giao dịch</h1>
                </div>
                <form method="GET" action="{{ url('/lich-su-giao-dich') }}" class="mt-6 grid gap-3 lg:grid-cols-[1.5fr_1fr_auto] lg:items-center">
                <div class="rounded-[28px] bg-[#F5F5F5] px-4 py-3 shadow-sm ring-1 ring-[#E3E3E3]">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-magnifying-glass text-[#B1B1AF]"></i>
                        <input name="q" value="{{ old('q', $search) }}" type="text" placeholder="Tìm theo mã GD, tên, SĐT, số tiền..." class="w-full bg-transparent text-sm text-[#1b1b18] outline-none placeholder:text-[#A7A7A3]" />
                        <button type="submit" class="inline-flex h-10 items-center justify-center rounded-full bg-[#A0185F] px-4 text-sm font-semibold text-white transition hover:bg-[#8D1453]">
                            Tìm
                        </button>
                    </div>
                </div>

                <div class="grid gap-3 sm:grid-cols-2">
                    <div class="rounded-[28px] bg-[#F5F5F5] px-4 py-3 shadow-sm ring-1 ring-[#E3E3E3]">
                        <select name="type" class="w-full bg-transparent text-sm text-[#1b1b18] outline-none">
                            <option value="" {{ $typeFilter === '' ? 'selected' : '' }}>Tất cả loại</option>
                            <option value="Chuyển tiền" {{ $typeFilter === 'Chuyển tiền' ? 'selected' : '' }}>Chuyển tiền</option>
                            <option value="Thanh toán" {{ $typeFilter === 'Thanh toán' ? 'selected' : '' }}>Thanh toán</option>
                            <option value="Nạp tiền" {{ $typeFilter === 'Nạp tiền' ? 'selected' : '' }}>Nạp tiền</option>
                            <option value="Nhận tiền" {{ $typeFilter === 'Nhận tiền' ? 'selected' : '' }}>Nhận tiền</option>
                        </select>
                    </div>

                    <div class="rounded-[28px] bg-[#F5F5F5] px-4 py-3 shadow-sm ring-1 ring-[#E3E3E3]">
                        <select name="status" class="w-full bg-transparent text-sm text-[#1b1b18] outline-none">
                            <option value="" {{ $statusFilter === '' ? 'selected' : '' }}>Tất cả trạng thái</option>
                            <option value="Thành công" {{ $statusFilter === 'Thành công' ? 'selected' : '' }}>Thành công</option>
                            <option value="Đang xử lý" {{ $statusFilter === 'Đang xử lý' ? 'selected' : '' }}>Đang xử lý</option>
                            <option value="Thất bại" {{ $statusFilter === 'Thất bại' ? 'selected' : '' }}>Thất bại</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end items-center gap-2">
                    <button type="button" onclick="window.location.href='{{ url('/lich-su-giao-dich') }}'" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-[#E4E4E1] bg-[#F6F5F5] text-sm font-medium text-[#1b1b18] transition hover:bg-[#EFEFEF]" aria-label="">
                        <i class="fa-solid fa-rotate-right"></i>
                    </button>
                </div>
            </form>

            <div class="mt-8 overflow-hidden rounded-[28px] border border-[#E7E5E5] bg-white shadow-sm">
                <div class="px-6 py-5 sm:px-8">
                    <p class="text-sm text-[#6B6B68]">Hiển thị {{ $from }}-{{ $to }} trong {{ $total }} giao dịch</p>
                </div>

                <div class="overflow-x-auto">
                    @if ($total === 0)
                        <div class="rounded-[28px] border border-[#E7E5E5] bg-[#FBFBFB] p-10 text-center shadow-sm">
                            <p class="mb-3 text-lg font-semibold text-[#1B1B18]">Không tìm thấy giao dịch</p>
                            <p class="text-sm text-[#6B6B68]">Bạn chưa có giao dịch nào phù hợp.</p>
                        </div>
                    @else
                        <table class="min-w-full border-separate border-spacing-0 text-left text-sm text-[#2A2A25]">
                            <thead class="bg-[#FCFCFC] text-[#6B6B68]">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">Loại</th>
                                    <th class="px-6 py-4 font-semibold">Người gửi/nhận</th>
                                    <th class="px-6 py-4 font-semibold">Nội dung</th>
                                    <th class="px-6 py-4 font-semibold">Thời gian</th>
                                    <th class="px-6 py-4 font-semibold">Trạng thái</th>
                                    <th class="px-6 py-4 font-semibold text-right">Số tiền</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#E8E8E5] bg-white">
                                        @foreach ($transactions as $transaction)
                                            <tr class="hover:bg-[#F7F7F7] cursor-pointer transaction-row" role="button"
                                            data-url="{{ url('/lich-su-giao-dich/'.$transaction['id']) }}"
                                            data-error-message="{{ $transaction['errorMessage'] ?? '' }}"
                                        >
                                        <td class="px-6 py-5 align-top">
                                            <div class="inline-flex items-center gap-2 rounded-3xl px-3 py-2 text-sm font-semibold {{ $transaction['bgColor'] }} {{ $transaction['iconColor'] }}">
                                                <i class="fa-solid {{ $transaction['icon'] }}"></i>
                                                {{ $transaction['type'] }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-5 align-top">
                                            <div class="text-sm font-semibold text-[#1E1E1A]">{{ $transaction['name'] }}</div>
                                            <div class="text-xs text-[#7D7D78]">{{ $transaction['subtext'] }}</div>
                                        </td>
                                        <td class="px-6 py-5 align-top">
                                            <div class="text-sm text-[#1E1E1A]">{{ $transaction['title'] }}</div>
                                            <div class="text-xs text-[#8F8F8A]">{{ $transaction['code'] }}</div>
                                        </td>
                                        <td class="px-6 py-5 align-top">{{ $transaction['time'] }}</td>
                                        <td class="px-6 py-5 align-top">
                                            @if($transaction['status'] === 'Thất bại')
                                                <span class="inline-flex rounded-full bg-[#FFE7EB] px-3 py-1 text-xs font-semibold text-[#D10852]">{{ $transaction['status'] }}</span>
                                            @else
                                                <span class="inline-flex rounded-full bg-[#E8F8EF] px-3 py-1 text-xs font-semibold text-[#0F7A32]">{{ $transaction['status'] }}</span>
                                            @endif
                                        </td>
                                        @php $amountColor = str_starts_with($transaction['amount'], '+') ? 'text-[#167A39]' : 'text-[#D10852]'; @endphp
                                        <td class="px-6 py-5 align-top text-right font-semibold {{ $amountColor }}">{{ $transaction['amount'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <div id="transaction-error-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4 py-6">
                    <div class="w-full max-w-sm rounded-[30px] bg-white p-6 text-center shadow-2xl">
                        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full border border-[#F9E5E8] bg-[#FFF2F4] text-3xl text-[#D10852]">
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
                        <p class="mt-5 text-xl font-semibold text-[#1B1B18]">Đã xảy ra lỗi</p>
                        <p id="transaction-error-message" class="mt-2 text-sm leading-6 text-[#6B6B68]">Không thể tải lịch sử giao dịch. Vui lòng thử lại</p>
                        <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:justify-center">
                            <button id="retry-transaction-btn" type="button" class="inline-flex w-full items-center justify-center rounded-full bg-[#A0185F] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#8D1453]">Thử lại</button>
                            <button id="close-transaction-error-btn" type="button" class="inline-flex w-full items-center justify-center rounded-full border border-[#E5E5E5] bg-white px-6 py-3 text-sm font-semibold text-[#1B1B18] transition hover:bg-[#F7F7F7]">Đóng</button>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const errorModal = document.getElementById('transaction-error-modal');
                        const errorMessageNode = document.getElementById('transaction-error-message');
                        const retryButton = document.getElementById('retry-transaction-btn');
                        const closeButton = document.getElementById('close-transaction-error-btn');
                        let retryUrl = null;

                        document.querySelectorAll('.transaction-row').forEach(function (row) {
                            row.addEventListener('click', function () {
                                const errorMessage = row.dataset.errorMessage?.trim();
                                const url = row.dataset.url;

                                if (errorMessage) {
                                    retryUrl = url;
                                    errorMessageNode.textContent = errorMessage;
                                    errorModal.classList.remove('hidden');
                                    errorModal.classList.add('flex');
                                    return;
                                }

                                window.location.href = url;
                            });
                        });

                        retryButton.addEventListener('click', function () {
                            if (retryUrl) {
                                window.location.href = retryUrl;
                            }
                        });

                        closeButton.addEventListener('click', function () {
                            retryUrl = null;
                            errorModal.classList.add('hidden');
                            errorModal.classList.remove('flex');
                        });
                    });
                </script>

                <div class="flex flex-col gap-3 border-t border-[#E7E5E5] bg-[#F9F9F9] px-6 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-8">
                    <span class="text-sm text-[#6B6B68]">Trang {{ $page }} / {{ $pages }}</span>
                    <div class="flex flex-wrap items-center gap-2">
                        <a href="{{ url('/lich-su-giao-dich') . '?' . http_build_query(array_merge(request()->except('page'), ['page' => $prevPage])) }}" class="inline-flex h-10 min-w-[44px] items-center justify-center rounded-full bg-[#F1F1F0] px-4 text-sm font-semibold text-[#1B1B18] {{ $page === 1 ? 'opacity-50 pointer-events-none' : '' }}">Trang trước</a>
                        @for ($i = 1; $i <= $pages; $i++)
                            <a href="{{ url('/lich-su-giao-dich') . '?' . http_build_query(array_merge(request()->except('page'), ['page' => $i])) }}" class="inline-flex h-10 min-w-[44px] items-center justify-center rounded-full px-4 text-sm font-semibold {{ $page === $i ? 'bg-[#A0185F] text-white' : 'bg-white text-[#1B1B18] border border-[#E5E5E5]' }}">{{ $i }}</a>
                        @endfor
                        <a href="{{ url('/lich-su-giao-dich') . '?' . http_build_query(array_merge(request()->except('page'), ['page' => $nextPage])) }}" class="inline-flex h-10 min-w-[44px] items-center justify-center rounded-full bg-[#F1F1F0] px-4 text-sm font-semibold text-[#1B1B18] {{ $page === $pages ? 'opacity-50 pointer-events-none' : '' }}">Trang sau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
