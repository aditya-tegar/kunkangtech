<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customer;
use App\Barang;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index() {
        $order = Order::with(['barang', 'customer'])->get();
        return view('order.index', compact('order'));
    }

    public function laporan() {
        $order = Order::with(['barang', 'customer'])->get();
        return view('laporan.index', compact('order'));
    }

    public function store(Request $request) {
        $order = new Order([
            'no_po' => $request->no_po, 
            'tanggal_masuk' => $request->tanggal_masuk,
            'etd_date' => $request->etd_date,
            'qty_barang' => $request->qty_barang,
            'unit_barang' => $request->unit_barang,
        ]);

        $customer = Customer::find($request->customer);
        $barang = Barang::find($request->barang);

        $order->customer()->associate($customer);
        $order->barang()->associate($barang);
        $order->save();

        return redirect()->route('order.index');
    }

    public function create()
    {
        $customer = Customer::all();
        $barang = Barang::all();
        return view('order.create', compact('barang', 'customer'));
    }

    public function edit(Order $order) {
        return view('order.edit', compact('order'));
    }

    public function update(Request $request, Order $order) {
        $order->no_po = $request->no_po;
        $order->tanggal_masuk = $request->tanggal_masuk;
        $order->etd_date = $request->etd_date;
        $order->qty_barang = $request->qty_barang;
        $order->unit_barang = $request->unit_barang;
        $order->save();

        return redirect()->route('order.index')->with('status','Data Order updated!')->with('success', true);
    }

    public function destroy(Order $order) {
        $order->delete();
        return redirect()->route('order.index')->with('Data Order deleted!')->with('success', true);
    }
}
