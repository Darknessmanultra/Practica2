<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Frameworks;
use App\Models\Hobbies;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getData()
    {
        $data = Profile::with(Frameworks,Hobbies)->get();

        return view('Home', ['data' => $data]);
    }
}
