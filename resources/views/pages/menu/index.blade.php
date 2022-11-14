@extends('layouts.app')

@section('content')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <h1>Menu</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Table</div>
        </div>
    </div>
    <div class="section-body">

        <div class="row">
            <div class="col-12">
                @include('layouts.alert')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Menu List</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="{{ route('menu.create') }}">Create New
                                Menu</a>

                        </div>
                    </div>
                    <div class="card-body">

                        <div class="show-search mb-3" style="display: none">
                            <form id="search" method="GET" action="{{ route('menu.index') }}">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="role">Menu Item</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Menu Item Name">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <a class="btn btn-secondary" href="{{ route('menu.index') }}">Reset</a>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-md" id="tableData">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Quantity</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $key => $menu)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $menu->name }}</td>
                                        <td>{{ $menu->status }}</td>
                                        <td>{{ $menu->qty}}</td>

                                        <td class="text-right">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-sm btn-info btn-icon "><i class="fas fa-edit"></i>
                                                    Edit</a>
                                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="ml-2">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-sm btn-danger btn-icon "><i class="fas fa-times"></i> Delete </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('customScript')
<!-- cdn data tables -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<!-- custom scrip -->
<script>
    $(document).ready(function() {
        $('#tableData').DataTable();
    });
</script>
@endpush

@push('customStyle')
<!-- cdn style datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
@endpush
