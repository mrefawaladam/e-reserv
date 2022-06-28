@extends('layouts.main')

@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto pt-5">
                <div class="flex justify-center my-6">
                     <div class="card">
                        <div class="card-header p-3 text-center">
                            <h2>Your Order</h2>
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
                                  </tr>
                                </thead>
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
                                                            <label for="quantity" class="text-center">{{ $item->quantity }}</label>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="pt-3">Rp{{ $item->price }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                                <div class="row text-center">
                                    <form>
                                        @csrf
                                        <div class="row">
                                          <div class="col pt-2">
                                            <strong>Total: Rp{{ Cart::getTotal() }}</strong>
                                          </div>
                                          <div class="col-4 pt-1">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <label class="input-group-text" for="inputGroupSelect01">Payment Method</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01" required>
                                                  <option hidden value="" >Choose Your Payment Method</option>
                                                  <option value="cash">Cash</option>
                                                  <option value="QRCode">QRCode</option>
                                                </select>
                                              </div>
                                          </div>
                                          <div class="col">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Payment Proof
                                                  <input type="file" name="proof" style="padding-left: 10%" required>
                                                </span>
                                              </div>
                                          </div>
                                          <div class="col">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-primary">Continue</button>
                                              </div>
                                          </div>
                                        </div>
                                      </form>
                                  </div>
                              </div>
                      </div>
                </div>
            </div>
        </main>
    @endsection
