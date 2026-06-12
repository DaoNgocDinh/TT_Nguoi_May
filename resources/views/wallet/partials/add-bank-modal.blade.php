<div class="modal hidden" id="add-bank-modal" role="dialog" aria-modal="true">
    <div class="modal-panel add-bank-panel">
        <button class="modal-close" type="button" data-close-modal="add-bank-modal" aria-label="Đóng">×</button>
        <h3>Thêm tài khoản mới</h3>

        <label class="field">
            <span>Ngân hàng</span>
            <input id="new-bank-name" type="text" placeholder="Nhập tên ngân hàng">
            <small data-error-for="new-bank-name"></small>
        </label>

        <label class="field">
            <span>Số tài khoản</span>
            <input id="new-bank-number" type="text" inputmode="numeric" placeholder="Nhập số tài khoản">
            <small data-error-for="new-bank-number"></small>
        </label>

        <label class="field">
            <span>Tên chủ tài khoản</span>
            <input id="new-bank-owner" type="text" placeholder="Nhập tên chủ tài khoản">
            <small data-error-for="new-bank-owner"></small>
        </label>

        <div class="modal-actions">
            <button class="secondary-action" type="button" data-close-modal="add-bank-modal">Hủy</button>
            <button class="primary-action compact" type="button" id="save-bank">Lưu</button>
        </div>
    </div>
</div>
