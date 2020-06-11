<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image successfully uploaded.');
        }
        return redirect()->back()->with('error', 'Upload image failed.');
    }

    public function index()
    {
        $data = [
            'name' => 'Elon',
            'email' => 'elon@bitfumes.com',
            'password' => 'password'
        ];
        // User::create($data);

        // $user = new User();
        // $user->name = 'Jeremy';
        // $user->email = 'jeremyvw30@gmail.com';
        // $user->password = bcrypt('password');
        // $user->save();

        $user = User::all();
        return $user;

        // User::where('id', 2)->delete();

        // User::where('id', 2)->update(['name' => 'Vijay']);
        
        
        // $user = User::all();
        // return $user;

        // DB::insert('insert into users (name,email,password) values(?,?,?)', [
        //     'Jeremy','jeremyvw30@gmail.com','password',
        // ]); 

        // $user = DB::select('select * from users');
        // return $user;

        // DB::update('update users set name = ? where id = 2', ['Bitfumes']);
        
        // DB::delete('delete from users where id = 2');

        // $user = DB::select('select * from users');
        // return $user;
        return view('home');
    }
}
