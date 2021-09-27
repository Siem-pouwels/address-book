<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\View;

class AddressBookController extends Controller
{
    public function getAll()
    {
        $addresses = Address::get();
        return view('address')->with('addresses', $addresses);
    }

    public function get($id)
    {
        $data = Address::find($id);
        return view('edit')->with('data', $data);
    }

    public function create()
    {
        
    }
}
