@extends('global_layout.body')

@section('title', 'Nạp tiền - Ví điện tử ĐTY')

@section('content')
    <section class="wallet-page" data-wallet-page="deposit">
        <h2>Nạp tiền</h2>

        <div class="flow-card">
            <div class="flow-main">
                <div class="stepper">
                    <span>1.Chọn nguồn nạp</span>
                    <i></i>
                    <span>⊙ 2.Nhập thông tin</span>
                    <i></i>
                    <span>⊙ 3.Xác nhận</span>
                    <i></i>
                    <span>⊙ 4.Hoàn tất</span>
                </div>

                <div class="form-box deposit-box">
                    <div class="source-grid" role="radiogroup" aria-label="Nguồn nạp tiền">
                        <button class="source-option active" type="button" data-source="bank">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>Ngân hàng nội địa</span>
                            <small>Nạp tiền từ tài khoản ngân hàng</small>
                        </button>
                        <button class="source-option" type="button" data-source="qr">
                            <i class="fa-solid fa-qrcode"></i>
                            <span>Mã QR</span>
                            <small>Quét mã QR để nạp tiền vào ví</small>
                        </button>
                        <button class="source-option" type="button" data-source="ewallet">
                            <i class="fa-solid fa-wallet"></i>
                            <span>Ví điện tử khác</span>
                            <small>Nạp tiền từ ví điện tử khác</small>
                        </button>
                    </div>

                    <label class="field centered money-field">
                        <span>Số tiền nạp</span>
                        <input id="deposit-amount" type="text" inputmode="numeric" placeholder="Nhập số tiền" autocomplete="off">
                        <em>đ</em>
                        <small data-error-for="deposit-amount"></small>
                    </label>

                    <div class="quick-amounts">
                        <button type="button" data-target="deposit-amount" data-amount="50000">50.000</button>
                        <button type="button" data-target="deposit-amount" data-amount="100000">100.000</button>
                        <button type="button" data-target="deposit-amount" data-amount="200000">200.000</button>
                    </div>
                </div>
            </div>

            <aside class="transaction-summary">
                <h3>Thông tin giao dịch</h3>
                <div><span>Số tiền nạp:</span><strong id="deposit-summary-amount">0đ</strong></div>
                <div><span>Phí giao dịch:</span><strong>Miễn phí</strong></div>
                <hr>
                <div><span>Số tiền nhận được:</span><strong id="deposit-summary-receive">0đ</strong></div>
                <button id="deposit-submit" class="primary-action" type="button">Xác nhận nạp tiền</button>
            </aside>
        </div>
    </section>

    @include('wallet.partials.pin-modal', ['id' => 'deposit-pin-modal', 'attempts' => 'Còn 3 lần nhập'])
    @include('wallet.partials.qr-modal')
    @include('wallet.partials.success-modal', ['id' => 'deposit-success-modal', 'message' => 'Nạp tiền thành công!'])
@endsection
