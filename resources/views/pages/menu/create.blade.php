@extends('layouts.app')

@section('content')

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
            <h2 class="section-title">Add Menu</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Validation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('menu.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Menu Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Enter Menu Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Quantity</label>
                            <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty"
                                name="qty" placeholder="Enter Quantity">
                            @error('qty')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Photo</label>
                            <input type="file" name="my_file[]" multiple>
                            @php
                                if(isset($FILES['my_file'])){
                                    $myFile = $_FILES['my_file'];
                                    $fileCount = count($myFile['name']);
                                }
                            @endphp
                        </div>

                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{ route('user.index') }}">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
