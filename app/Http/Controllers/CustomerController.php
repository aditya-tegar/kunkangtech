<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index() {
        $customer = Customer::all();
        return view('customer.index', compact('customer'));
    }

    public function store(Request $request) {
        Customer::create($request->all());
        return redirect()->route('customer.index');
    }

    public function create()
    {
        return view('customer.create', compact('status'));
    }

    public function edit(Customer $customer) {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer) {
        $customer->nama_customer = $request->nama_customer;
        $customer->no_telepon = $request->no_telepon;
        $customer->alamat = $request->alamat;
        $customer->email = $request->email;
        $customer->save();

        return redirect()->route('customer.index')->with('status','Data Customer updated!')->with('success', true);
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return redirect()->route('customer.index')->with('Data Customer deleted!')->with('success', true);
    }
}
