<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Table;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Darryldecode\Cart\Cart;



class PagesController extends Controller
{
    // scanner funciton
    public function scan(){
        return view('pages.main.scan');
    }

    // menu
    public function menu(){
        // dd(TransactionDetail::all());
        $menus = Menu::with('main_photo')->get();
        return view('pages.main.menu', compact('menus'));

    }

    // table search menu
    public function table($qrcode){

        session()->put('qrcode',$qrcode);
        $qrcode =  session()->get('qrcode');

        $menus = Menu::with('main_photo')->get();
        return view('pages.main.find-menu', compact('menus', 'qrcode'));
    }

    // chckout proses
    public function checkoutProses(Request $request){
        // dd($request);
        $table = Table::where('barcode',session()->get('qrcode'))->first();
        // dd($table);
        $user = (auth()->user()  ) ? auth()->user()->id : 0;
        $transaction = Transaction::create([
            'user_id'     => $user,
            'payment_id'  => $request->paymentMethod,
            'table_id'    => $table->id,
            'status' => 'on process'
        ]);

        // cart all
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        foreach ($cartItems as $c){
            TransactionDetail::create([
                'menu_id' => $c->id,
                'transaction_id' => $transaction->id,
                'qty' => $c->quantity,
                'price' => $c->price
            ]);
        }
        \Cart::clear();

        return redirect()->route('print-nota',$transaction->id);

    }

    public function printNota($id){

        $transaction = Transaction::where('id', $id)->with('transactionDetails.menu','table')->first();
        // dd($transaction);
        return view('pages.main.nota',compact('transaction'));

    }

    public function detailMenu($id){
        $menu = Menu::where('id', $id)->with('photo')->first();
        return view('pages.main.detail-menu',compact('menu'));

    }

}
