<div class="modal hidden" id="{{ $id }}" role="dialog" aria-modal="true">
    <div class="modal-panel success-panel">
        <button class="modal-close" type="button" data-success-close="{{ $id }}" aria-label="Đóng">×</button>
        <i class="fa-solid fa-check modal-icon success"></i>
        <h3>{{ $message }}</h3>
        <button class="secondary-action" type="button" data-success-close="{{ $id }}">OK</button>
    </div>
</div>
