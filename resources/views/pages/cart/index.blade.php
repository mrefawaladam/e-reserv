@extends('layouts.main')

@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto pt-5">
                <div class="flex justify-center my-6">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                     @endif
                     <div class="card">
                        <div class="card-header p-3 text-center">
                            <h2>CART LIST</h2>
                        </div>
                        <div class="card-body">
                            <table class="table" cellspacing="0">
                                <thead>
                                  <tr class="text-center">
                                    <th>No</th>
                                    <th>Photos</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                @if (Cart::getTotalQuantity() == 0)
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <h4>Cart is Empty</h4>
                                        </td>
                                    </tr>
                                @else
                                    <tbody class="text-center">
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ $item->attributes->image }}" width="50" class="rounded" alt="Menu">
                                                </td>
                                                <td>
                                                    <p class="pt-3">{{ $item->name }}</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div>
                                                        <form action="{{ route('cart.update') }}" method="POST" class="text-center pt-3">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $item->id}}" >
                                                            <input type="number" name="quantity" value="{{ $item->quantity }}" class="text-center"/>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="pt-3">Rp{{ $item->price }}</p>
                                                </td>
                                                <td class="hidden text-right md:table-cell">
                                                <form action="{{ route('cart.remove') }}" method="POST" class="pt-3">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <input type="hidden" name="name" value="{{ $item->name}}" >
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                                <div class="row text-center">
                                    <div class="row">
                                        <div class="col text">
                                                <strong>Total: Rp{{ Cart::getTotal() }}</strong>
                                        </div>
                                        <div class="col">
                                            <form action="{{ route('cart.clear') }}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger">Remove All Cart</button>
                                            </form>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                            @endif
                      </div>
                </div>
            </div>
        </main>
    @endsection
