<div class="modal hidden" id="{{ $id }}" role="dialog" aria-modal="true">
    <div class="modal-panel pin-panel">
        <button class="modal-close" type="button" data-close-modal="{{ $id }}" aria-label="Đóng">×</button>
        <i class="fa-regular fa-credit-card modal-icon blue"></i>
        <h3>Nhập mã PIN</h3>
        <div class="pin-inputs" data-pin-group>
            @for ($i = 0; $i < 6; $i++)
                <input type="password" inputmode="numeric" maxlength="1" aria-label="Số PIN {{ $i + 1 }}">
            @endfor
        </div>
        <button class="primary-action compact" type="button" data-confirm-pin="{{ $id }}">Xác nhận</button>
        @isset($attempts)
            <p class="pin-attempts">{{ $attempts }}</p>
        @endisset
    </div>
</div>
