@extends('layouts.main')

@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto pt-5">
                <div class="flex justify-center my-6">
                     <div class="card">
                        <div class="card-header p-3 text-center">
                            <h2>Transaction Detail</h2>
                            <h3>{{ $transaction->table->name }}</h3>
                            <h3>{{ $transaction->table->barcode }}</h3>
                            <h3>{{ $transaction->table->status }}</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                @csrf
                                @foreach ($transaction->transactionDetails as $item)
                                    <h1>{{ $item->qty }}</h1>
                                @endforeach
                            </form>
                        </div>
                    </div>
            </div>
        </main>
    @endsection
