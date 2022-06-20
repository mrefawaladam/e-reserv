@extends('layouts.main')

@section('content')
<!-- Main Content -->
<br><br>
<h2 class="text-center">Menu List</h2>
<br>
<div class="container">
 <div class="row">


     @foreach ($menus as $menu)
     <div class="col-md-3">
         <div class="card" style="width: 18rem;">
            <img width="200" height="350" src="{{ asset('assets/img/path/'.$menu->main_photo->file_path)}}" class="card-img-top" alt="{{ asset('assets/img/path/'.$menu->main_photo->file_path)}}">
            <div class="card-body">
                <h5 class="card-title">{{ $menu->name }}</h5>
                <p class="card-text">S{{ $menu->description }}</p>
                <a href="#" class="btn btn-primary">Pilih</a>
            </div>
        </div>
     </div>
    @endforeach

</div>
</div>
<!-- end content -->
@endsection
@push('customScript')
<script type="text/javascript" src="{{ asset('js/filereader.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/qrcodelib.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/webcodecamjs.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>

@endpush

@push('customStyle')

@endpush
