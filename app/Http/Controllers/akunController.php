<?php

namespace App\Http\Controllers;

use App\Models\akunModel;
use Illuminate\Http\Request;

class akunController extends Controller
{
    function getAll()
    {
        $data = array(
            'akun' => akunModel::all()
        );
        return view('userList_admin', $data);
    }
}
