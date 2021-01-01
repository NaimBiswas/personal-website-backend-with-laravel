@if ($errors->any())
@foreach ($errors as $error)
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-danger">Error!</span>
    {{ $error }}
    <button type="button"
        class="close"
        data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endforeach
@endif

@if (Session('success'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    <span class="badge badge-pill badge-success">Success</span>
    {{ Session('success') }}
    <button type="button"
        class="close"
        data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
