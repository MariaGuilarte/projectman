<?php

namespace App\Http\Controllers;

use App\Client;
use App\PaymentMethod;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
      $clients = Client::all();
      return view('clients.index', compact($users));
    }

    public function create()
    {
      $payment_methods = PaymentMethod::all();
      return view('clients.create', ['payment_methods'=>$payment_methods]);
    }

    public function store(Request $request)
    {
      $client = Client::create([
        'name'  => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'skype' => $request->skype,
        'payment_method_id' => $request->payment_method_id
      ]);

      if( !$client ){
        $request->session()->flash('fail', 'Store was failure!');
        return back()->withInput();
      }

      $request->session()->flash('success', 'Store was successful!');
      return redirect()->route('clients.show/' . $client->id);
    }

    public function show(Client $client)
    {
      return view('clients.show', compact($client));
    }

    public function edit(Client $client)
    {
      return view('clients.edit', compact($client));
    }

    public function update(Request $request, Client $client)
    {
      $client->name = ( $request->name ) ? $request->name : $client->name;
      $client->email = ( $request->email ) ? $request->email : $client->email;
      $client->phone = ( $request->phone ) ? $request->phone : $client->phone;
      $client->skype = ( $request->skype ) ? $request->skype : $client->skype;
      $client->payment_method_id = ( $request->payment_method_id ) ? $request->payment_method_id : $client->payment_method_id;

      if( !$client->save() ){
        $request->session()->flash('fail', 'Update was failure!');
        return back()->withInput();
      }

      $request->session()->flash('success', 'Update was successful!');
      return redirect()->route('clients.show', compact($client));
    }

    public function destroy(Client $client)
    {
      if( !$client->delete() ){
        $request->session()->flash('fail', 'Delete was failure!');
      }

      $request->session()->flash('success', 'Delete was successful!');
      return redirect()->route('clients.index');
    }
}
