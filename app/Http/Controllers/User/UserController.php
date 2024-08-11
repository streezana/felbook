<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate([
          'email' => $data['email'],
        ], $data);
        return $data;
    }
 }
