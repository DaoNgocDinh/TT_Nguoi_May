<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

function generateTransactions(): array
{
    mt_srand(123456);

    $templates = [
        [
            'type' => 'Chuyển tiền',
            'icon' => 'fa-arrow-right-from-bracket',
            'iconColor' => 'text-[#D10852]',
            'bgColor' => 'bg-[#FDF0F4]',
            'status' => 'Thành công',
        ],
        [
            'type' => 'Thanh toán',
            'icon' => 'fa-credit-card',
            'iconColor' => 'text-[#3B41B5]',
            'bgColor' => 'bg-[#F2F3FF]',
            'status' => 'Thành công',
        ],
        [
            'type' => 'Nạp tiền',
            'icon' => 'fa-wallet',
            'iconColor' => 'text-[#167A39]',
            'bgColor' => 'bg-[#E8F9EF]',
            'status' => 'Thành công',
        ],
        [
            'type' => 'Nhận tiền',
            'icon' => 'fa-arrow-right-to-bracket',
            'iconColor' => 'text-[#167A39]',
            'bgColor' => 'bg-[#E8F9EF]',
            'status' => 'Thành công',
        ],
    ];

    $people = [
        ['name' => 'Trần Thị B', 'subtext' => '0123456789'],
        ['name' => 'Lê Văn C', 'subtext' => '032456789'],
        ['name' => 'Phạm Thị D', 'subtext' => '0398765432'],
        ['name' => 'Hoàng Văn E', 'subtext' => '0987654321'],
        ['name' => 'Ngân hàng Vietcombank', 'subtext' => 'Nạp tiền từ thẻ nội địa'],
        ['name' => 'Ngân hàng Techcombank', 'subtext' => 'Nạp tiền từ tài khoản'],
        ['name' => 'Highlands Coffee', 'subtext' => 'Thanh toán quán cà phê'],
        ['name' => 'Circle K', 'subtext' => 'Thanh toán hóa đơn'],
        ['name' => 'Shopee', 'subtext' => 'Thanh toán đơn hàng #SH123456'],
        ['name' => 'Grab', 'subtext' => 'Thanh toán cuốc xe'],
    ];

    $titles = [
        'Chuyển tiền mua hàng',
        'Hoàn tiền mua hàng',
        'Nạp tiền từ thẻ ngân hàng',
        'Thanh toán qua mã QR',
        'Thanh toán hóa đơn',
        'Chia tiền ăn',
        'Thanh toán đơn hàng',
        'Nạp tiền vào tài khoản',
        'Trả nợ nghỉ sớm',
        'Giao dịch dịch vụ',
    ];

    $items = [];
    for ($i = 1; $i <= 100; $i++) {
        $template = $templates[mt_rand(0, count($templates) - 1)];
        $person = $people[mt_rand(0, count($people) - 1)];
        $title = $titles[mt_rand(0, count($titles) - 1)];
        $time = sprintf('%02d:%02d • %02d/%02d/2026', mt_rand(8, 20), mt_rand(0, 59), mt_rand(25, 30), mt_rand(5, 6));
        $amountNumber = mt_rand(1, 20) * 50000;
        $amount = in_array($template['type'], ['Nạp tiền', 'Nhận tiền'], true)
            ? '+' . number_format($amountNumber, 0, ',', '.') . ' đ'
            : '-' . number_format($amountNumber, 0, ',', '.') . ' đ';
        $method = match ($template['type']) {
            'Chuyển tiền' => 'Ví DTV',
            'Thanh toán' => 'Mã QR',
            'Nạp tiền' => 'Thẻ nội địa',
            'Nhận tiền' => 'Tài khoản ngân hàng',
            default => 'Ví DTV',
        };
        $feeAmount = mt_rand(0, 2) === 0 ? 0 : 10000 * mt_rand(1, 3);

        $isFailed = $i <= 50; // 50/100 giao dịch giả lập bị lỗi

        $items[] = [
            'id' => $i,
            'type' => $template['type'],
            'icon' => $template['icon'],
            'iconColor' => $template['iconColor'],
            'bgColor' => $template['bgColor'],
            'name' => $person['name'],
            'subtext' => $person['subtext'],
            'title' => $title,
            'code' => sprintf('TNX202605%03d%03d', mt_rand(1, 30), $i),
            'time' => $time,
            'status' => $isFailed ? 'Thất bại' : 'Thành công',
            'amount' => $amount,
            'amountNumber' => $amountNumber,
            'method' => $method,
            'fee' => number_format($feeAmount, 0, ',', '.') . ' đ',
            'total' => number_format($amountNumber + $feeAmount, 0, ',', '.') . ' đ',
            'content' => $title,
            'errorMessage' => $isFailed ? 'Không thể tải lịch sử giao dịch. Vui lòng thử lại' : null,
        ];
    }

    mt_srand();

    return $items;
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/global_layout/navbar', function () {
    return view('global_layout.navbar');
});

Route::get('/global_layout/footer', function () {
    return view('global_layout.footer');
});

Route::get('/global_layout/header', function () {
    return view('global_layout.header');
});

Route::get('/global_layout/body', function () {
    return view('global_layout.body');
});

Route::get('/lich-su-giao-dich', function (Request $request) {
    $search = trim($request->query('q', ''));
    $typeFilter = $request->query('type', '');
    $statusFilter = $request->query('status', '');

    $templates = [
        [
            'type' => 'Chuyển tiền',
            'icon' => 'fa-arrow-right-from-bracket',
            'iconColor' => 'text-[#D10852]',
            'bgColor' => 'bg-[#FDF0F4]',
            'status' => 'Thành công',
        ],
        [
            'type' => 'Thanh toán',
            'icon' => 'fa-credit-card',
            'iconColor' => 'text-[#3B41B5]',
            'bgColor' => 'bg-[#F2F3FF]',
            'status' => 'Thành công',
        ],
        [
            'type' => 'Nạp tiền',
            'icon' => 'fa-wallet',
            'iconColor' => 'text-[#167A39]',
            'bgColor' => 'bg-[#E8F9EF]',
            'status' => 'Thành công',
        ],
        [
            'type' => 'Nhận tiền',
            'icon' => 'fa-arrow-right-to-bracket',
            'iconColor' => 'text-[#167A39]',
            'bgColor' => 'bg-[#E8F9EF]',
            'status' => 'Thành công',
        ],
    ];

    $people = [
        ['name' => 'Trần Thị B', 'subtext' => '0123456789'],
        ['name' => 'Lê Văn C', 'subtext' => '032456789'],
        ['name' => 'Phạm Thị D', 'subtext' => '0398765432'],
        ['name' => 'Hoàng Văn E', 'subtext' => '0987654321'],
        ['name' => 'Ngân hàng Vietcombank', 'subtext' => 'Nạp tiền từ thẻ nội địa'],
        ['name' => 'Ngân hàng Techcombank', 'subtext' => 'Nạp tiền từ tài khoản'],
        ['name' => 'Highlands Coffee', 'subtext' => 'Thanh toán quán cà phê'],
        ['name' => 'Circle K', 'subtext' => 'Thanh toán hóa đơn'],
        ['name' => 'Shopee', 'subtext' => 'Thanh toán đơn hàng #SH123456'],
        ['name' => 'Grab', 'subtext' => 'Thanh toán cuốc xe'],
    ];

    $titles = [
        'Chuyển tiền mua hàng',
        'Hoàn tiền mua hàng',
        'Nạp tiền từ thẻ ngân hàng',
        'Thanh toán qua mã QR',
        'Thanh toán hóa đơn',
        'Chia tiền ăn',
        'Thanh toán đơn hàng',
        'Nạp tiền vào tài khoản',
        'Trả nợ nghỉ sớm',
        'Giao dịch dịch vụ',
    ];

    $items = generateTransactions();

    $items = array_filter($items, function ($item) use ($search, $typeFilter, $statusFilter) {
        if ($typeFilter && $item['type'] !== $typeFilter) {
            return false;
        }

        if ($statusFilter && $item['status'] !== $statusFilter) {
            return false;
        }

        if (!$search) {
            return true;
        }

        $searchLower = mb_strtolower($search, 'UTF-8');
        foreach (['title', 'code', 'name', 'subtext', 'amount', 'type'] as $field) {
            if (mb_stripos($item[$field], $search, 0, 'UTF-8') !== false) {
                return true;
            }
        }

        return false;
    });

    $items = array_values($items);
    $perPage = 10;
    $page = max(1, (int) $request->query('page', 1));
    $total = count($items);
    $pages = (int) ceil($total / $perPage);
    $page = min($page, $pages ?: 1);
    $offset = ($page - 1) * $perPage;
    $transactions = array_slice($items, $offset, $perPage);

    // Status distribution handled in generateTransactions(): ~80% success, ~20% failure

    return view('LichSuGiaoDich.index', compact('transactions', 'page', 'pages', 'total', 'perPage', 'search', 'typeFilter', 'statusFilter'));
});

Route::get('/lich-su-giao-dich/{id}', function (int $id) {
    $transaction = collect(generateTransactions())->firstWhere('id', $id);

    if (! $transaction) {
        abort(404);
    }

    return view()->file(resource_path('views/LichSuGiaoDich/show.blade.php'), compact('transaction'));
});
