
@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/dropzone.js') }}"></script>

    <section class="section">
        <div class="section-header">
            <h1>Payment Method</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Add Payment Method</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Add Data Validation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('payment.store') }}" method="post" name="CreateForm" id="CreateForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="userid" name="userid" id="userid" value="">
                        <div class="form-group">
                            <label for="method">Payment Method</label>
                            <input type="text" class="form-control @error('method') is-invalid @enderror" id="method"
                                name="method" placeholder="Enter Payment Method">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- input file -->
                        <div class="form-group">
                            <label for="method">Upload Barcode</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file"
                                name="file">
                            @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- end input file -->
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </section>

@endsection
