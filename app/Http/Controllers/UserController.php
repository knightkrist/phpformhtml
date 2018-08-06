<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(Request $request)
    {

        $data = $request->all();

        $data2 = $request->only(['name','last','city']);

        echo "<pre>";

        var_dump($data);

        echo "<br>";

        var_dump($data2);

        echo "</pre>";

        //return "hello show";
    }
}

?>