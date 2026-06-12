<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px;">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold" id="confirmationModalLabel">Confirm Action</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <p class="mb-0 text-muted" id="confirmationModalMessage">Are you sure you want to perform this action?</p>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal" id="confirmationModalCancelBtn">Cancel</button>
                <button type="button" class="btn btn-primary rounded-pill px-4" id="confirmationModalConfirmBtn">Confirm</button>
            </div>
        </div>
    </div>
</div>

<style>
    #confirmationModal .btn-primary {
        background-color: #FF5FA2;
        border-color: #FF5FA2;
    }
    #confirmationModal .btn-primary:hover {
        background-color: #e54b8e;
        border-color: #e54b8e;
    }
    #confirmationModal .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    #confirmationModal .btn-light {
        background-color: #FFC2D9;
        color: #FF5FA2;
        border: none;
    }
    #confirmationModal .btn-light:hover {
        background-color: #ffaccb;
        color: #FF5FA2;
    }
</style>

<script>
    function showConfirmationModal(title, message, confirmBtnText, confirmBtnClass, onConfirm) {
        const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        document.getElementById('confirmationModalLabel').innerText = title;
        document.getElementById('confirmationModalMessage').innerText = message;
        
        const confirmBtn = document.getElementById('confirmationModalConfirmBtn');
        confirmBtn.innerText = confirmBtnText;
        confirmBtn.className = 'btn rounded-pill px-4 ' + confirmBtnClass;
        
        // Remove old event listeners
        const newConfirmBtn = confirmBtn.cloneNode(true);
        confirmBtn.parentNode.replaceChild(newConfirmBtn, confirmBtn);
        
        newConfirmBtn.addEventListener('click', function() {
            onConfirm();
            modal.hide();
        });
        
        modal.show();
    }
</script>
