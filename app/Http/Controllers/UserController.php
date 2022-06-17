<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel;
    }

    public function home()
    {
        $data['data'] = $this->userModel->get_data();
        // dd($data['data']);
        return view('welcome', $data);
    }
}
