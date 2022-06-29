@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/dropzone.js') }}"></script>
<style>
    .dropzoneDragArea {
        background-color: #fbfdff;
        border: 1px dashed #c0ccda;
        border-radius: 6px;
        padding: 60px;
        text-align: center;
        margin-bottom: 15px;
        cursor: pointer;
    }
    .dropzone{
        box-shadow: 0px 2px 20px 0px #f2f2f2;
        border-radius: 10px;
    }
</style>


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
                    <h4>Add Data Validation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('menu.store') }}" method="post" name="CreateForm" id="CreateForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="userid" name="userid" id="userid" value="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Enter Menu Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="qty">Quantity</label>
                            <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty"
                                name="qty" placeholder="Enter Quantity">
                            @error('qty')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" placeholder="Enter Price">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description" placeholder="Enter Description">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- input file -->
                        <div class="input-group control-group increment" >
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                        </div>
                        <div class="clone hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn">
                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                        </div>
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
@push('customScript')
<script type="text/javascript">


$(document).ready(function() {

  $(".btn-success").click(function(){
      var html = $(".clone").html();
      $(".increment").after(html);
  });

  $("body").on("click",".btn-danger",function(){
      $(this).parents(".control-group").remove();
  });

});

</script>
@endpush
