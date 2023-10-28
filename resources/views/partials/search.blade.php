<div class="container  justify-content-end d-flex">
<form action="">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <input type="search" name="search" id="" class="form-control mt-2"
                    placeholder="Search by brand or title" value="{{ $search }}">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success btn-sm mt-2">Search</button>
                <a href="{{ url('/') }}" class="btn btn-primary btn-sm mt-2">Reset</a>
            </div>
        </div>
    </form>
</div>
