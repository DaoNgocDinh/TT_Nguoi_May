@extends('layouts.app')

@section('title', 'Chuyển tiền - Ví điện tử ĐTY')

@section('content')
    <section class="wallet-page" data-wallet-page="transfer">
        <h2>Chuyển tiền</h2>

        <div class="flow-card">
            <div class="flow-main">
                <div class="stepper" aria-label="Tiến trình chuyển tiền">
                    <span>1.Nhập thông tin</span>
                    <i></i>
                    <span>⊙ 2.Xác nhận</span>
                    <i></i>
                    <span>⊙ 3.Hoàn tất</span>
                </div>

                <div class="form-box transfer-grid">
                    <label class="field">
                        <span>Số điện thoại/ Số tài khoản</span>
                        <input id="transfer-account" type="text" placeholder="Nhập số điện thoại hoặc số tài khoản" autocomplete="off">
                        <small data-error-for="transfer-account"></small>
                    </label>

                    <label class="field money-field">
                        <span>Số tiền chuyển</span>
                        <input id="transfer-amount" type="text" inputmode="numeric" placeholder="Nhập số tiền" autocomplete="off">
                        <em>đ</em>
                        <small data-error-for="transfer-amount"></small>
                    </label>

                    <label class="field">
                        <span>Tên người nhận (nếu có)</span>
                        <input id="transfer-name" type="text" placeholder="Nhập tên người nhận" autocomplete="off">
                        <small data-error-for="transfer-name"></small>
                    </label>

                    <label class="field">
                        <span>Nội dung (không bắt buộc)</span>
                        <input id="transfer-note" type="text" placeholder="Nhập nội dung chuyển tiền" autocomplete="off">
                    </label>
                </div>
            </div>

            <aside class="transaction-summary">
                <h3>Thông tin giao dịch</h3>
                <div><span>Số tài khoản người dùng:</span><strong id="transfer-summary-account"></strong></div>
                <div><span>Số tiền chuyển:</span><strong id="transfer-summary-amount">0đ</strong></div>
                <div><span>Phí giao dịch:</span><strong>Miễn phí</strong></div>
                <hr>
                <div><span>Tổng tiền:</span><strong id="transfer-summary-total">0đ</strong></div>
                <button id="transfer-submit" class="primary-action" type="button">Tiếp tục</button>
            </aside>
        </div>
    </section>

    @include('wallet.partials.pin-modal', ['id' => 'transfer-pin-modal'])
    @include('wallet.partials.success-modal', ['id' => 'transfer-success-modal', 'message' => 'Chuyển tiền thành công!'])
@endsection
