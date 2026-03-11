<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrNew(
            [
            'username' => 'manager33',
            'nama' => 'Manager Tiga Tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2
            ],
        );
        $user->save();
        return view('user', ['data' => $user]);

        /* $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        return view('user', ['data' => $user]);

        /* $user = UserModel::where('username', 'managers')->firstOrFail();
        return view('user', ['data' => $user]);

        /* $data = [
            'username' => 'customer-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 4
        ];
        UserModel::insert($data); 

        /* $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data);

        $user = UserModel::all(); 
        return view('user', ['data' => $user]); 

        /* $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 23',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data); 

        $user = UserModel::all();
        return view('user', ['data' => $user]); */
    }
}
