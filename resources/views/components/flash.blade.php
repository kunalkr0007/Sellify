@if (session()->has('message'))

    <div class="p-3 alert alert-success alert-dismissible fade show mb-0" role="alert">
        <strong> {{session('message')}}.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif
