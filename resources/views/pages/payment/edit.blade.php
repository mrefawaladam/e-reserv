@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>MENU</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Add Menu</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Validation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('payment.update', $payment->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" class="userid" name="userid" id="userid" value="">
                        <div class="form-group">
                            <label for="method">Payment Method</label>
                            <input type="text" class="form-control @error('method') is-invalid @enderror" id="method"
                                name="method" placeholder="Enter Payment Method" value="{{ $payment->method }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="method">Upload Barcode</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file"
                                name="file">
                                <img width="200" src="\assets\img\path\{{$payment->file_path}}">
                            @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection

