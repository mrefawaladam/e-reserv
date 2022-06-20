 
@extends('layouts.main')

@section('content')
<!-- Main Content -->
<br><br><br>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h3>Claim Garansi</h3>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Produk</li>
						<li class="breadcrumb-item">Garansi</li>
						<li class="breadcrumb-item active">Create</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- /.content -->
			<div class="col-md-12">
				<div class="card card-default">
                    <div class="container">
                        <div class="row   mb-4 p-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pilih Device Kamera</label>
                                    <select class="form-control" id="pilihKamera" style="max-width:400px"></select>
                                </div>
                                <video id="previewKamera" style="height: 300px;"></video>
                            </div>
                            <div class="col-md-6">
                                <h4>Lakukan Scan Barcode</h4>
                                <p>Data Akan Muncul Di bawah ini</p>
                                <div class="result"></div>
                            </div>
                        </div>
                 
                    </div>
      
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
			<!-- /.content -->
			
			<!-- /.col -->
		</div>
	</section>
</div>
<!-- end content -->
@endsection
@push('customScript')
<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <script>
        let selectedDeviceId = null;
        const codeReader = new ZXing.BrowserMultiFormatReader();
        const sourceSelect = $("#pilihKamera");
        if(window.location.host == "localhost"){
            base_url = "http://127.0.0.1:8000/";
        }else{
            base_url = "https://"+window.location.hostname+"/";
        } 
 
        $(document).on('change','#pilihKamera',function(){
            selectedDeviceId = $(this).val();
            if(codeReader){
                codeReader.reset()
                initScanner()
            }
        })
 
        function initScanner() {
            codeReader
            .listVideoInputDevices()
            .then(videoInputDevices => {
                videoInputDevices.forEach(device =>
                    console.log(`${device.label}, ${device.deviceId}`)
                );
                
                if(videoInputDevices.length > 0){
                     if(selectedDeviceId == null){
                        if(videoInputDevices.length > 1){
                            selectedDeviceId = videoInputDevices[1].deviceId
                        } else {
                            selectedDeviceId = videoInputDevices[0].deviceId
                        }
                    }
                     
                     
                    if (videoInputDevices.length >= 1) {
                        sourceSelect.html('');
                        videoInputDevices.forEach((element) => {
                            const sourceOption = document.createElement('option')
                            sourceOption.text = element.label
                            sourceOption.value = element.deviceId
                            if(element.deviceId == selectedDeviceId){
                                sourceOption.selected = 'selected';
                            }
                            sourceSelect.append(sourceOption)
                        })
                 
                    }
                    codeReader
                        .decodeOnceFromVideoDevice(selectedDeviceId, 'previewKamera')
                        .then(result => {
 
                            //hasil scan
                            var nogar = result.text;
                            var isi = '';
                            $.ajax({
                                url: base_url+'customer/ClaimGaransiC/show/'+nogar,
                                type: 'post',
                                dataType: "json",
                                success: function(response) {
                                    if(response.status == 'success'){
                                        var isi = `
                                        <div class="alert alert-success">
                                            <h5><i class="icon fas fa-check"></i> `+response.msg+`</h5>
                                            Silahkan klik Ajukan Garansi
                                        </div>
                                        <form action="`+base_url+`customer/ClaimGaransiC/makepengajuan" method="POST">
                                        <input type="hidden" value="`+nogar+`" name="no_garansi">
                                        <button type="submit" class="btn btn-primary w-100">Ajukan Garansi</button>
                                        </form>
                                        `;
                                    }
                                    else{
                                        var isi = `
                                        <div class="alert alert-danger">
                                            <h5><i class="icon fas fa-ban"></i> `+response.msg+`</h5>
                                        </div>
                                        `;
                                    }
                                    $('.result').html(isi);
                                },
                                error: function (jqXHR, textStatus, ex) {
                                    console.log(ex);
                                    // console.log("Err", response);
                                }
                                
                            });
                            // $("#hasilscan").val(result.text);
                            
                            if(codeReader){
                                codeReader.reset()
                            }
                        })
                        .catch(err => console.error(err));
                     
                } else {
                    Swal({
                        title: "Gagal", 
                        text: "Kamera tidak terdeteksi", 
                        type: "error",
                        allowOutsideClick: false,
                        confirmButtonText: 'Kembali',
                    }).then((result) => {
                        if (result.value) {
                            window.location = base_url+'customer/ClaimGaransiC/';
                        }
                    });
                }
            })
            .catch(err => console.error(err));
        }
 
 
        if (navigator.mediaDevices) {
             
 
            initScanner()
             
 
        } else {
            Swal({
                title: "Gagal", 
                text: "Kamera tidak dapat diakses", 
                type: "error",
                allowOutsideClick: false,
                confirmButtonText: 'Kembali',
            }).then((result) => {
                if (result.value) {
                    window.location = base_url+'tokorakyat/customer/ClaimGaransiC/';
                }
            });
        }
       
     </script> 
@endpush

@push('customStyle')  

@endpush
