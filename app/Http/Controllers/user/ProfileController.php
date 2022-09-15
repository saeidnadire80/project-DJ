<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function get_out()
    {
        $session=session();
        $session->forget("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d");
    }

}
