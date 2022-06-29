@extends('layouts.main')

@section('content')
<!-- Main Content -->
<br><br>
<h2 class="text-center">MENU LIST</h2>

<div class="container">
<div class="card" >
<!-- slider -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($menu->photo as $p)
    <div class="carousel-item <?php if($loop->iteration ==1){echo 'active' ;} ?>" >
      <img style="width:300px !important;" src="{{ asset('assets/img/path/'.$p->file_path)}}" class="d-block w-100 active" alt="...">
    </div>
    @endforeach
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<!-- end slide -->

  <div class="card-body">
    <h5 class="card-title">{{ $menu->name }}</h5>
    <p class="card-text">{{ $menu->description }}</p>
    <a href="#" class="btn btn-primary"><b>{{ $menu->price }}</b></a>
  </div>
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
