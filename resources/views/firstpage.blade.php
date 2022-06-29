@extends('layouts.main')

@section('content')
<div class="container px-6 mx-auto pt-5">
    <div class="flex justify-center my-6">
         <div class="card">
            <div class="card-header p-3 text-center">
                <h2>Online Order Menu</h2>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label  class="pt-2"><h3>Scan QR Code</h3></label>
                    <a class="nav-link" href="{{ url('scan-qrcode') }}"> <img class="rounded-circle" width="250" src="assets\img\files\scan.jpg" alt=" Scan QR Code"></a>
                </div>
                <div class="col text-center">
                    <label class="pt-2"><h3>Menu</h3></label>
                    <a class="nav-link" href="{{ url('menu-all') }}"> <img  class="rounded" width="200" src="assets\img\files\menu.jpg" alt="Menu"></a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
