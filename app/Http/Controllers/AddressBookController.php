<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Controllers\Session;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;

class AddressBookController extends Controller
{
    public function getAll()
    {
        return view('address')->with('addresses', Address::get());
    }

    public function getAddress($id)
    {
        $address = Address::find($id);
        return view('edit')->with('address', $address);
    }

    public function edit(Request $request)
    {
        $address = Address::find($request->id);

        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->streetname = $request->streetname;
        $address->housenumber = $request->housenumber;
        $address->postal_code = $request->postal_code;
        $address->city_name = $request->city_name;
        $address->tel_nmr = $request->tel_nmr;
        $address->email = $request->email;
        $address->save();

        return view('address')->with('addresses', Address::get());
    }

    public function create(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'first_name' => 'required|min:2',
        //     'last_name' => 'required|min:3',
        //     'tel_nr' => 'required|numeric',
        //     'streetname' => 'required',
        //     'birth_date' => 'date_format:m/d/Y|before:today',
        // ]);
        Address::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'streetname' => $request->streetname,
            'housenumber' => $request->housenumber,
            'postal_code' => $request->postal_code,
            'city_name' => $request->city_name,
            'tel_nmr' => $request->tel_nmr,
            'email' => $request->email,
        ]);
        return redirect('address')->with('addresses', Address::get());
        // Address::create($validated);
    }

    public function delete($id)
    {
        $address = Address::find($id);
        $address->delete();
        // return redirect()->route('/address')->with('$addresses', $addresses);
        return redirect('address')->with('addresses', Address::get());
        // return view('address', [
        //     'addresses' => Address::get()
        // ]);
    }
}
