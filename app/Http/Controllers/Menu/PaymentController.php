<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment = Payment::all();
        return view('pages.payment.index',compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('file')){

            $foto_barcode = $request->file('file');
            $name_foto_barcode  = time()."_".$foto_barcode->getClientOriginalName();
            $location = public_path('/assets/img/path');
            $foto_barcode->move($location,$name_foto_barcode);
            Payment::create([
                'method'   => $request->method,
                'file_path' => $name_foto_barcode,
            ]);
        }else{
            $name_foto_barcode = "noname.jpg";
        }
        return redirect()->route('payment.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('pages.payment.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        // $payment->update($request->validated());

        // return redirect()->route('payment.index')->with('success', 'Data berhasil di ubah');
        if($request->file('file')){
            $foto_barcode = $request->file('file');
            $name_foto_barcode  = time()."_".$foto_barcode->getClientOriginalName();
            $location = public_path('/assets/img/path');
            $foto_barcode->move($location,$name_foto_barcode);
        }else{
            $name_foto_barcode = "noname.jpg";
        }
        Payment::where('id',$payment->id)->update([
            'method'   => $request->method,
            'file_path' => $name_foto_barcode,
        ]);
        return redirect()->route('payment.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.index')->with('success', 'Data berhasil di hapus');
    }
}
