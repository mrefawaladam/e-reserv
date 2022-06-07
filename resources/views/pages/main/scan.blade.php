 
@extends('layouts.main')

@section('content')
<!-- Main Content -->
<br><br><br>
<div class="container" id="QR-Code">
            <div class="panel panel-info">
                <div class="panel-heading"> 
                    <div class="navbar-form navbar-right">
                        <select class="form-control" id="camera-select"></select>
                        <div class="form-group"> 
                            <br>
                            
                            <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip">Scann</button>
                            <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                            <button title="Image shoot" class="btn btn-default btn-sm" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span></button>
                         </div>
                    </div>
                </div>
                <div class="panel-body text-center">
                   <div class="row">
                   <div class="col-md-6">
                        <div class="well" style="position: relative;display: inline-block;">
                            <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                            <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail" id="result">
                            <!-- <div class="well" style="overflow: hidden;">
                                <img width="320" height="240" id="scanned-img" src="">
                            </div>
                            <div class="caption">
                                <h3>Scanned result</h3>
                                <p id="scanned-QR"></p>
                            </div> -->
                        </div>
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