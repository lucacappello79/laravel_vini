@extends ('layouts/admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4 my-5">
            <a class="btn btn-danger btn-block mb-3" href="{{ route('admin.wines.index') }}">Wines</a>
        </div>
        <div class="col-4 my-5">
            <a class="btn btn-primary btn-block mb-3" href="{{ route('admin.vines.index') }}">Vines</a>
        </div>
        <div class="col-4 my-5">
            <a class="btn btn-warning btn-block mb-3" href="{{ route('admin.wineries.index') }}">Wineries</a>
        </div>
    </div>
</div>

@endsection