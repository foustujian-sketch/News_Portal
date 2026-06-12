<!-- Reusable Confirmation Modal -->
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
                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-modal-id="" id="modalCancelBtn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary rounded-pill px-4" id="modalConfirmBtn">Confirm</button>
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
    #confirmationModal .btn-light {
        background-color: #FFC2D9;
        color: #FF5FA2;
        border: none;
    }
    #confirmationModal .btn-light:hover {
        background-color: #ffaccb;
        color: #FF5FA2;
    }
    #confirmationModal .btn-danger {
        border-radius: 50px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        const modalTitle = document.getElementById('confirmationModalLabel');
        const modalMessage = document.getElementById('confirmationModalMessage');
        const confirmBtn = document.getElementById('modalConfirmBtn');
        const cancelBtn = document.getElementById('modalCancelBtn');
        
        let currentForm = null;

        window.showConfirmationModal = function(options) {
            modalTitle.innerText = options.title || 'Confirm Action';
            modalMessage.innerText = options.message || 'Are you sure?';
            confirmBtn.innerText = options.confirmBtnText || 'Confirm';
            confirmBtn.className = 'btn rounded-pill px-4 ' + (options.confirmBtnClass || 'btn-primary');
            cancelBtn.innerText = options.cancelBtnText || 'Cancel';
            
            currentForm = options.form;
            
            confirmationModal.show();
        };

        confirmBtn.addEventListener('click', function() {
            if (currentForm) {
                currentForm.submit();
            }
            confirmationModal.hide();
        });
    });
</script>
