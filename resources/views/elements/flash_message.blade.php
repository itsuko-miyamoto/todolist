@if(Session::has('flash_message'))
<div class="alert alert-{{ session('flash_message')['type'] }} alert-dismissible" role="alert">
    <button type="button" class="btn btn-sm btn-{{ session('flash_message')['type'] }} close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{!! nl2br(e(session('flash_message')['message'])) !!}</strong>
</div>
@endif
