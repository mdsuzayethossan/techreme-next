<?php

namespace App\Http\Controllers\techreme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashBoardController extends Controller
{
    public function signin()
    {
        return view('techreme.techreme_signin.signin');
    }

    public function techreme()
    {
        $data['title'] = 'Techreme';
        return view('techreme.techreme_pages.dashBoard',$data);
    }
}
