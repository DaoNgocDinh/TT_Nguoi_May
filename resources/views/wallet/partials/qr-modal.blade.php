<div class="modal hidden" id="deposit-qr-modal" role="dialog" aria-modal="true">
    <div class="modal-panel qr-panel">
        <button class="modal-close" type="button" data-close-modal="deposit-qr-modal" aria-label="Đóng">×</button>
        <h3>Quét Mã QR để nạp tiền</h3>
        <p>Sử dụng ứng dụng ngân hàng quét mã QR bên dưới để thanh toán</p>
        <div class="qr-code">
            <i class="fa-solid fa-qrcode"></i>
            <img src="{{ asset('images/logo_bgr_pink.jpg') }}" alt="ĐTY">
        </div>
        <div class="qr-meta">
            <span>Số tiền:</span>
            <strong id="qr-amount">0đ</strong>
        </div>
        <div class="qr-meta timer">
            <span><i class="fa-regular fa-clock"></i> Mã QR sẽ hết hạn sau:</span>
            <strong id="qr-timer">04:50</strong>
        </div>
        <div class="modal-actions">
            <button class="secondary-action" type="button" data-close-modal="deposit-qr-modal">Hủy</button>
            <button class="primary-action compact" type="button" id="qr-paid">Đã quét QR</button>
        </div>
    </div>
</div>
