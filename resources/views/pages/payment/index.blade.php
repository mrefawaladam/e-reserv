@extends('layouts.main')

@section('content')
<head>
    <title>PAYMENT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="">
</head>

<div class="card mt-50 mb-50 p-5 bg-gray-800 rounded overflow-visible">
    <span>
        <i class="fa fa-arrow-left text-sm pr-2 " style="color: #ffbe33">
        </i>
        <a class="text-md  font-medium" href="chart.php" style="color: #ffbe33">Back</a>
    </span>
    <div class="card-title mx-auto text-gray-100">
        Payment
    </div>
    <form method="post" enctype="multipart/form-data">
        <span id="card-header" class="text-gray-100 mt-3 ">Payment ID</span>
        <div class="row row-1 mb-3" style="color: #ffbe33">
            <input type="number" placeholder="1" name="id" id="id" disabled>
        </div>
        <span id="card-header" class="text-gray-100 mt-3">Payment Method</span>
        <select name="method" id="method" class="row row-1 mb-3 text-lg font-bold" style="color: #ffbe33">
            <option value="Cash" class="row row-1 mb-3 text-lg font-bold" style="color: #ffbe33">Cash</option>
            <option value="QRIS" class="row row-1 mb-3 text-lg font-bold" style="color: #ffbe33">QRcode</option>
        </select>
        <span id="card-header" class="text-gray-100 mt-3 ">Upload Your Payment Confirmation</span>
        <div class="row row-1 mb-3">
            <div class="col-7" style="color: #ffbe33">
                <input type="file" name="bukti" id="bukti">
            </div>
        </div>
        <div style=" margin-top:50px;">
            <button class="h-12 w-full rounded focus:outline-none font-bold mt-3"
                style="background-color: #ffbe33; color:#202c34;" name="payment">Pay Now</button>
        </div>
    </form>
</div>
@endsection
