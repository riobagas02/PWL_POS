<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// Jobsheet 3
// class UserController extends Controller
// {
//     public function index()
//     {
//         $data = [
//             //Jobsheet 3
//             // 'username' => 'customer-1',
//             // 'nama' => 'Pelanggan',
//             // 'password' => Hash::make('12345'),
//             // 'level_id' => 4

//             // 'nama' => 'Pelanggan Pertama',

//             //Jobsheet 4
//             'level_id' => 2,
//             'username' => 'manager_tiga',
//             'nama' => 'Manager 3',
//             'password' => Hash::make('12345')
//         ];
//         //Jobsheet 4
//         UserModel::create($data);
//         // Praktikum 3
//         // UserModel::where('username', 'customer-1') -> update($data);

//         $user = UserModel::all();
//         return view('user', ['data' => $user]);    
//     }
// }   

// Jobsheet 4-Praktikum 2.1 No 1
// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::find(1);
//         return view('user', ['data' => $user]);
//     }
// }

// Jobsheet 4-Praktikum 2.1 
// class UserController extends Controller
// {
//     public function index()
//     {
//         // $user = UserModel::where('level_id', 1)->first();
//         // $user = UserModel::firstwhere('level_id', 1);
//         // $user = UserModel::findOr(1, ['username', 'nama'], function (){
//         // });
//         $user = UserModel::findOr(20, ['username', 'nama'], function (){
//         });
        
//         return view('user', ['data' => $user]);
//     }
// }

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::findOrfail(1);
        $user = UserModel::where('username', 'manager9')->firstOrFail();

        return view('user', ['data' => $user]);
    }
}

// Jobsheet 4-Praktikum 1
// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::firstOrCreate(
//             [
//                 'username' => 'manager22',
//                 'nama' => 'Manager Dua DUa',
//                 'password' => Hash::make('12345'),
//                 'level_id' => 2
//             ],
//         );
//         return view('user', ['data' => $user]);
//     }
// }