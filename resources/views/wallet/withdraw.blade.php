@extends('global_layout.body')

@section('title', 'Rút tiền - Ví điện tử ĐTY')

@section('content')
    <section class="wallet-page" data-wallet-page="withdraw">
        <h2>Rút tiền</h2>

        <div class="flow-card">
            <div class="flow-main">
                <div class="stepper">
                    <span>1.Nhập thông tin</span>
                    <i></i>
                    <span>⊙ 2.Xác nhận</span>
                    <i></i>
                    <span>⊙ 3.Hoàn tất</span>
                </div>

                <div class="form-box withdraw-grid">
                    <div>
                        <div class="wallet-balance">
                            <span><i class="fa-regular fa-credit-card"></i> Ví ĐTY</span>
                            <strong>Số dư: 5.000.000đ</strong>
                        </div>

                        <label class="field money-field">
                            <span>Số tiền rút</span>
                            <input id="withdraw-amount" type="text" inputmode="numeric" placeholder="Nhập số tiền" autocomplete="off">
                            <em>đ</em>
                            <small data-error-for="withdraw-amount"></small>
                        </label>

                        <div class="quick-amounts left">
                            <button type="button" data-target="withdraw-amount" data-amount="100000">100.000đ</button>
                            <button type="button" data-target="withdraw-amount" data-amount="200000">200.000đ</button>
                            <button type="button" data-target="withdraw-amount" data-amount="500000">500.000đ</button>
                            <button type="button" data-target="withdraw-amount" data-amount="1000000">1.000.000đ</button>
                        </div>

                        <label class="field">
                            <span>Lý do rút</span>
                            <input id="withdraw-reason" type="text" placeholder="Nhập lý do" autocomplete="off">
                            <small data-error-for="withdraw-reason"></small>
                        </label>
                    </div>

                    <div>
                        <label class="field">
                            <span>Tài khoản nhận tiền</span>
                            <input id="withdraw-bank-search" type="text" placeholder="Chọn tài khoản nhận" readonly>
                            <small data-error-for="withdraw-bank"></small>
                        </label>

                        <div class="bank-list" id="withdraw-bank-list">
                            <button type="button" data-bank="Vietcombank ***1234"><i class="fa-solid fa-shield-halved green"></i><span>Vietcombank</span><strong>***1234</strong></button>
                            <button type="button" data-bank="Techcombank ***5678"><i class="fa-solid fa-diamond red"></i><span>Techcombank</span><strong>***5678</strong></button>
                            <button type="button" data-bank="MB Bank ***9876"><i class="fa-solid fa-star red"></i><span>MB Bank</span><strong>***9876</strong></button>
                            <button class="add-bank-link" id="open-add-bank" type="button"><i class="fa-solid fa-circle-plus"></i> Thêm tài khoản mới</button>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="transaction-summary">
                <h3>Thông tin giao dịch</h3>
                <div><span>Số tiền rút</span><strong id="withdraw-summary-amount">0đ</strong></div>
                <div><span>Phí giao dịch</span><strong id="withdraw-summary-fee">0đ</strong></div>
                <hr>
                <div><span>Số tiền nhận được</span><strong id="withdraw-summary-receive">0đ</strong></div>
                <button id="withdraw-submit" class="primary-action" type="button">Xác nhận rút tiền</button>
            </aside>
        </div>
    </section>

    @include('wallet.partials.pin-modal', ['id' => 'withdraw-pin-modal'])
    @include('wallet.partials.add-bank-modal')
    @include('wallet.partials.success-modal', ['id' => 'add-bank-success-modal', 'message' => 'Thêm tài khoản thành công!'])
    @include('wallet.partials.success-modal', ['id' => 'withdraw-success-modal', 'message' => 'Rút tiền thành công!'])
@endsection
