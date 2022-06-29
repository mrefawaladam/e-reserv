@extends('layouts.main')

@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto pt-5">
                <div class="flex justify-center my-6">
                     <div class="card">
                        <div class="card-header p-3 text-center">
                            <h2>Transaction Detail</h2>
                            <h3>{{ $transaction->table->name }}</h3>
                        </div>
                        <div class="card-body">
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
                                @foreach ($transaction->transactionDetails as $detail)
                                <tr>
                                    <td>Nama Menu : {{ $detail->menu->name }}</td>
                                    <td>Qty       : {{ $detail->qty }}</td>
                                    <td>Price     : {{ $detail->price }}</td>
                                </tr>
                                @endforeach
                                <td class="text-center">Total     : {{ $detail->sum('price') }}</td>
                            </table>
                        </div>
                    </div>
            </div>
        </main>
    @endsection
