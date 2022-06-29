@extends('layouts.app')

@section('content')
     <!-- Main Content -->
     <section class="section">
        <div class="section-header">
            <h1>Transaction</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Completed Transaction</h2>

            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-body">

                            <div class="show-search mb-3" style="display: none">
                                <form id="search" method="GET" action="{{ route('menu-item.index') }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">Menu Item</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Menu Item Name">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <a class="btn btn-secondary" href="{{ route('menu-item.index') }}">Reset</a>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-md" id="tableData">
                                    <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Kode Transaction</th>
                                        <th>Meja</th>
                                        <th>Status</th>
                                        <th class="text-right">Detail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $key => $transaction)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $transaction->id }}</td>
                                                <td>{{ $transaction->table->name }}</td>
                                                <td>{{ $transaction->status }}</td>
                                                <td>

                                                <a href="{{ route('dashboard.show', $transaction->id) }}"
                                                            class="btn btn-sm btn-info btn-icon "><i
                                                                class="fas fa-eye"></i>
                                                            Detail</a>

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
    $(document).ready(function () {
    $('#tableData').DataTable();
});
</script>
@endpush

@push('customStyle')
<!-- cdn style datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
@endpush
