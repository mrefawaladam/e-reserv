@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah User</h2>
            <div class="card">
            <table class="table table-striped ">
                <tr>
                    <td>Name User : {{ ($transaction->user) ? $transaction->user->name : ''  }}  </td>
                     
                </tr>
                <tr>
                    <td>Table Name : {{ $transaction->table->name }}</td>
        
                </tr>
                <tr>
                    <td>Pyament Method : {{ $transaction->payment->method }}</td>
        
                </tr>
                <tr>
                    <td>
                        <h3 class="text-center">Daftar Menu</h3>
                    </td>
                </tr>
                @foreach ($transaction->transactionDetails as $detail)
                <tr>
                    <td>Nama Menu : {{ $detail->menu->name }}</td>
                    <td>Qty       : {{ $detail->qty }}</td>
                    <td>Price     : {{ $detail->price }}</td>
                </tr>
                @endforeach
                <tr>
                    <td>
                        <a class="btn btn-primary"href="{{ route('transaction.edit',$transaction->id) }}">accept order</a>
                    </td>
                </tr>
            </table>
            </div>
            
        </div>
    </section>
@endsection
