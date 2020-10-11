<?php

// PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;
use App\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
      $user = new User([
        'name'     => $request->get('name'),
        'password' => bcrypt($request->get('password')),
        'email'    => $request->get('email'),
      ]);

      $user->save();

      return response()->json('successfully added');
    }
}

    