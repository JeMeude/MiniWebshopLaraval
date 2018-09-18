<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show()
    {
        // Data we need: name, email, description
        $data = [
            "name" => "Fedde van Gils",
            "age" => "20",
            "email" => "f.vangils@rocwb.nl",
            "description" => "Er was eens een .......",
            "interests" => [
                "Voetbal",
                "Gamen",
                "IJs maken"
            ]
        ];

        return view('me', $data);
    }
}
