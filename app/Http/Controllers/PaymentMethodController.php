<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
      $payments = PaymentMethod::all();
      return view('payments.index', compact($payments));
    }

    public function create()
    {
      return view('payment_methods.create');
    }

    public function store(Request $request)
    {
      $paymentMethod = PaymentMethod::create([
        'name'     => $request->name,
        'icon_url' => $request->icon_url
      ]);
      
      if( !$paymentMethod ){
        return back()->withInput();
      }
      
      return redirect()->route('payment_methods.show', compact($paymentMethod));
    }

    public function show(PaymentMethod $paymentMethod)
    {
      return view('payment_methods.show', compact($paymentMethod));
    }
    
    public function edit(PaymentMethod $paymentMethod)
    {
      return view('payment_methods.edit', compact($paymentMethod));
    }

    public function update(Request $request, PaymentMethod $paymentMethod)
    {
      $paymentMethod->name = ( $request->name ) ? $request->name : $paymentMethod->name;
      $paymentMethod->icon_url = ( $request->icon_url ) ? $request->icon_url : $paymentMethod->icon_url;
      
      if( !$paymentMethod->save() ){
        $request->session()->flash('fail', 'Update was failure!');
        return back()->withInput();
      }
      
      $request->session()->flash('success', 'Update was successful!');
      return redirect()->route('payment_methods.show', compact($paymentMethod)); 
    }

    public function destroy(PaymentMethod $paymentMethod)
    {
      if( !$paymentMethod->delete() ){
        $request->session()->flash('fail', 'Delete was failure!');
      }
      
      $request->session()->flash('success', 'Delete was successful!');
      return redirect()->route('payment_methods.index');
    }
}
