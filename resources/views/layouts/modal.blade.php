<!-- Modal -->
<div class="modal fade" id="ajax-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog" id="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title title fs-16px" id="modal-title">{{get_phrase('Modal title')}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
      </div>
    </div>
</div>

<!-- delete modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-title" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered"">
      <div class="modal-content">
        <div class="modal-body text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="mt-3 mb-2" fill="red" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
            </svg>
            <h5> {{get_phrase('Are you sure!')}} </h5>
            <p class="pb-2 pt-1"> {{get_phrase("If you this data then can't be undo")}} </p>
            <div class="text-center pb-3">
                <a href="javascript:void(0);" class="btn btn-outline-secondary fs-14px" data-bs-dismiss="modal" aria-label="Close"> {{get_phrase("Close")}} </a>
                <span class="p-1"></span>
                <a href="" id="save-btn" class="btn btn-primary fs-14px"> {{get_phrase("Delete")}} </a>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- edit modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="delete-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="edit-modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title title fs-16px" id="delete-modal-title">{{get_phrase('Modal title')}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
      </div>
    </div>
</div>
{{-- @push('js') --}}
<script>
    "use script"
    function modal(size, url, title){
        $('#modal-dialog').addClass(size);
        if (url) {
            $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    $('#modal-dialog .modal-body').html(data);
                },
                error: function() {
                    $('#modal-dialog .modal-body').html('<p>Error loading content.</p>');
                }
            });
        }
        $('#modal-title').html(title);
        $('#ajax-modal').modal('show');
    
    }
    function edit_modal(size, url, title){
        $('#edit-modal-dialog').addClass(size);
        if (url) {
            $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    $('#edit-modal-dialog .modal-body').html(data);
                },
                error: function() {
                    $('#edit-modal-dialog .modal-body').html('<p>Error loading content.</p>');
                }
            });
        }
        $('#delete-modal-title').html(title);
        $('#edit-modal').modal('show');
    }

    function delete_modal(url){
        $('#delete-modal').modal('show');
        $("#save-btn").attr("href",url);
    }
</script>    
{{-- @endpush --}}