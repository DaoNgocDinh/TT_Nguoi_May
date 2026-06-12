const moneyFormatter = new Intl.NumberFormat('vi-VN');
let activeDepositSource = 'bank';
let selectedWithdrawBank = '';

function onlyDigits(value) {
    return String(value || '').replace(/\D/g, '');
}

function toNumber(value) {
    return Number(onlyDigits(value));
}

function formatMoney(value) {
    return `${moneyFormatter.format(Number(value || 0))}đ`;
}

function formatInputMoney(input) {
    const value = toNumber(input.value);
    input.value = value ? moneyFormatter.format(value) : '';
    return value;
}

function openModal(id) {
    document.getElementById(id)?.classList.remove('hidden');
}

function closeModal(id) {
    document.getElementById(id)?.classList.add('hidden');
}

function setError(id, message) {
    const input = document.getElementById(id);
    const error = document.querySelector(`[data-error-for="${id}"]`);
    input?.closest('.field')?.classList.toggle('has-error', Boolean(message));
    if (error) {
        error.textContent = message || '';
    }
}

function clearError(id) {
    setError(id, '');
}

function clearPin(modalId) {
    document.querySelectorAll(`#${modalId} [data-pin-group] input`).forEach((input) => {
        input.value = '';
    });
}

function updateTransferSummary() {
    const account = document.getElementById('transfer-account');
    const amount = document.getElementById('transfer-amount');
    if (!account || !amount) return;

    const value = toNumber(amount.value);
    document.getElementById('transfer-summary-account').textContent = account.value.trim();
    document.getElementById('transfer-summary-amount').textContent = formatMoney(value);
    document.getElementById('transfer-summary-total').textContent = formatMoney(value);
}

function validateTransfer() {
    const account = document.getElementById('transfer-account')?.value.trim();
    const amount = toNumber(document.getElementById('transfer-amount')?.value);
    let valid = true;

    if (!account) {
        setError('transfer-account', '*Vui lòng nhập số điện thoại/ số tài khoản');
        valid = false;
    }

    if (!amount) {
        setError('transfer-amount', '*Vui lòng nhập số tiền');
        valid = false;
    }

    return valid;
}

function resetTransfer() {
    ['transfer-account', 'transfer-amount', 'transfer-name', 'transfer-note'].forEach((id) => {
        const input = document.getElementById(id);
        if (input) input.value = '';
        clearError(id);
    });
    updateTransferSummary();
}

function updateDepositSummary() {
    const amount = toNumber(document.getElementById('deposit-amount')?.value);

    const summaryAmount = document.getElementById('deposit-summary-amount');
    const summaryReceive = document.getElementById('deposit-summary-receive');
    const qrAmount = document.getElementById('qr-amount');

    if (summaryAmount)
        summaryAmount.textContent = formatMoney(amount);

    if (summaryReceive)
        summaryReceive.textContent = formatMoney(amount);

    if (qrAmount)
        qrAmount.textContent = formatMoney(amount);
}

function validateDeposit() {
    const amount = toNumber(document.getElementById('deposit-amount')?.value);
    if (!amount) {
        setError('deposit-amount', '*Vui lòng nhập số tiền nạp');
        return false;
    }
    return true;
}

function resetDeposit() {
    const amount = document.getElementById('deposit-amount');
    if (amount) amount.value = '';
    activeDepositSource = 'bank';
    document.querySelectorAll('.source-option').forEach((button) => {
        button.classList.toggle('active', button.dataset.source === activeDepositSource);
    });
    clearError('deposit-amount');
    updateDepositSummary();
}

function withdrawFee(amount) {
    return amount > 0 ? 5000 : 0;
}

function updateWithdrawSummary() {
    const amount = toNumber(document.getElementById('withdraw-amount')?.value);
    const fee = withdrawFee(amount);

    document.getElementById('withdraw-summary-amount')?.textContent = formatMoney(amount);
    document.getElementById('withdraw-summary-fee')?.textContent = formatMoney(fee);
    document.getElementById('withdraw-summary-receive')?.textContent =
        formatMoney(Math.max(amount - fee, 0));
}

function validateWithdraw() {
    const amount = toNumber(document.getElementById('withdraw-amount')?.value);
    const reason = document.getElementById('withdraw-reason')?.value.trim();
    let valid = true;

    if (!amount) {
        setError('withdraw-amount', '*Vui lòng nhập số tiền rút');
        valid = false;
    }

    if (!reason) {
        setError('withdraw-reason', '*Vui lòng nhập lý do rút');
        valid = false;
    }

    if (!selectedWithdrawBank) {
        setError('withdraw-bank', '*Vui lòng chọn tài khoản nhận tiền');
        valid = false;
    }

    return valid;
}

function resetWithdraw() {
    ['withdraw-amount', 'withdraw-reason', 'withdraw-bank-search'].forEach((id) => {
        const input = document.getElementById(id);
        if (input) input.value = '';
        clearError(id);
    });
    selectedWithdrawBank = '';
    clearError('withdraw-bank');
    document.querySelectorAll('#withdraw-bank-list button').forEach((button) => button.classList.remove('selected'));
    updateWithdrawSummary();
}

function validateNewBank() {
    const bankName = document.getElementById('new-bank-name')?.value.trim();
    const bankNumber = document.getElementById('new-bank-number')?.value.trim();
    const owner = document.getElementById('new-bank-owner')?.value.trim();
    let valid = true;

    if (!bankName) {
        setError('new-bank-name', '*Vui lòng nhập tên ngân hàng');
        valid = false;
    }
    if (!bankNumber) {
        setError('new-bank-number', '*Vui lòng nhập số tài khoản');
        valid = false;
    }
    if (!owner) {
        setError('new-bank-owner', '*Vui lòng nhập tên chủ tài khoản');
        valid = false;
    }

    return valid;
}

function resetNewBankForm() {
    ['new-bank-name', 'new-bank-number', 'new-bank-owner'].forEach((id) => {
        const input = document.getElementById(id);
        if (input) input.value = '';
        clearError(id);
    });
}

function addBankToList() {
    const bankName = document.getElementById('new-bank-name').value.trim();
    const bankNumber = document.getElementById('new-bank-number').value.trim();
    const maskedNumber = `***${bankNumber.slice(-4)}`;
    const button = document.createElement('button');
    button.type = 'button';
    button.dataset.bank = `${bankName} ${maskedNumber}`;
    button.innerHTML = `<i class="fa-solid fa-building-columns green"></i><span>${bankName}</span><strong>${maskedNumber}</strong>`;

    const addButton = document.getElementById('open-add-bank');
    addButton.before(button);
    chooseWithdrawBank(button);
}

function chooseWithdrawBank(button) {
    selectedWithdrawBank = button.dataset.bank || '';
    document.getElementById('withdraw-bank-search').value = selectedWithdrawBank;
    document.querySelectorAll('#withdraw-bank-list button').forEach((item) => item.classList.remove('selected'));
    button.classList.add('selected');
    clearError('withdraw-bank');
}

function bindMoneyInputs() {
    document.querySelectorAll('input[inputmode="numeric"]').forEach((input) => {
        input.addEventListener('input', () => {
            if (input.id.includes('amount')) {
                console.log("Đang nhập:", input.id);
                formatInputMoney(input);
            }
            clearError(input.id);
            if (document.querySelector('[data-wallet-page="transfer"]')) {
                    updateTransferSummary();
            }

            if (document.querySelector('[data-wallet-page="deposit"]')) {
                updateDepositSummary();
            }

            if (document.querySelector('[data-wallet-page="withdraw"]')) {
                updateWithdrawSummary();
            }
        });
    });

    document.querySelectorAll('.quick-amounts button').forEach((button) => {
        button.addEventListener('click', () => {
            const input = document.getElementById(button.dataset.target);
            if (!input) return;
            input.value = moneyFormatter.format(Number(button.dataset.amount));
            clearError(input.id);
            updateDepositSummary();
            updateWithdrawSummary();
        });
    });
}

function bindModals() {
    document.querySelectorAll('[data-close-modal]').forEach((button) => {
        button.addEventListener('click', () => {
            closeModal(button.dataset.closeModal);
            clearPin(button.dataset.closeModal);
        });
    });

    document.querySelectorAll('[data-success-close]').forEach((button) => {
        button.addEventListener('click', () => {
            const id = button.dataset.successClose;
            closeModal(id);

            if (id === 'transfer-success-modal') resetTransfer();
            if (id === 'deposit-success-modal') resetDeposit();
            if (id === 'withdraw-success-modal') resetWithdraw();
        });
    });

    document.querySelectorAll('[data-confirm-pin]').forEach((button) => {
        button.addEventListener('click', () => {
            const modalId = button.dataset.confirmPin;
            closeModal(modalId);
            clearPin(modalId);

            if (modalId === 'transfer-pin-modal') openModal('transfer-success-modal');
            if (modalId === 'deposit-pin-modal') openModal('deposit-success-modal');
            if (modalId === 'withdraw-pin-modal') openModal('withdraw-success-modal');
        });
    });

    document.querySelectorAll('[data-pin-group] input').forEach((input, index, inputs) => {
        input.addEventListener('input', () => {
            input.value = onlyDigits(input.value).slice(0, 1);
            if (input.value && inputs[index + 1]) {
                inputs[index + 1].focus();
            }
        });
        input.addEventListener('keydown', (event) => {
            if (event.key === 'Backspace' && !input.value && inputs[index - 1]) {
                inputs[index - 1].focus();
            }
        });
    });
}

function bindTransfer() {
    if (!document.querySelector('[data-wallet-page="transfer"]')) return;

    ['transfer-account', 'transfer-name', 'transfer-note'].forEach((id) => {
        document.getElementById(id)?.addEventListener('input', () => {
            clearError(id);
            updateTransferSummary();
        });
    });

    document.getElementById('transfer-submit')?.addEventListener('click', () => {
        if (!validateTransfer()) return;
        updateTransferSummary();
        openModal('transfer-pin-modal');
    });

    updateTransferSummary();
}

function bindDeposit() {
    if (!document.querySelector('[data-wallet-page="deposit"]')) return;

    document.querySelectorAll('.source-option').forEach((button) => {
        button.addEventListener('click', () => {
            activeDepositSource = button.dataset.source;
            document.querySelectorAll('.source-option').forEach((item) => item.classList.remove('active'));
            button.classList.add('active');
        });
    });

    document.getElementById('deposit-submit')?.addEventListener('click', () => {
        if (!validateDeposit()) return;
        updateDepositSummary();

        if (activeDepositSource === 'qr') {
            openModal('deposit-qr-modal');
            return;
        }

        openModal('deposit-pin-modal');
    });

    document.getElementById('qr-paid')?.addEventListener('click', () => {
        closeModal('deposit-qr-modal');
        openModal('deposit-success-modal');
    });

    updateDepositSummary();
}

function bindWithdraw() {
    if (!document.querySelector('[data-wallet-page="withdraw"]')) return;

    document.getElementById('withdraw-reason')?.addEventListener('input', () => clearError('withdraw-reason'));

    document.getElementById('withdraw-bank-list')?.addEventListener('click', (event) => {
        const button = event.target.closest('button');
        if (!button || button.id === 'open-add-bank') return;
        chooseWithdrawBank(button);
    });

    document.getElementById('open-add-bank')?.addEventListener('click', () => {
        resetNewBankForm();
        openModal('add-bank-modal');
    });

    document.getElementById('save-bank')?.addEventListener('click', () => {
        if (!validateNewBank()) return;
        addBankToList();
        closeModal('add-bank-modal');
        resetNewBankForm();
        openModal('add-bank-success-modal');
    });

    document.getElementById('withdraw-submit')?.addEventListener('click', () => {
        if (!validateWithdraw()) return;
        updateWithdrawSummary();
        openModal('withdraw-pin-modal');
    });

    updateWithdrawSummary();
}

document.addEventListener('DOMContentLoaded', () => {
    bindMoneyInputs();
    bindModals();
    bindTransfer();
    bindDeposit();
    bindWithdraw();
});
