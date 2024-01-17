@if ($message = Session::get('success'))
<div class="alert alert-success d-flex align-items-center  alert-dismissible fade show"  role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</div>
@endif
