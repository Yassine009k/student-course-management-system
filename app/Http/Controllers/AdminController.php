<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public function Login(Request $req)
    {
        $req->validate([
            'email'=>'email|required',
            'password'=>'string|required|min:8',
        ]);
        if (!Auth::attempt(['email' => $req->email, 'password' => $req->password])) {

            return back()->withErrors(['aeriere'=>'information errore']);
            
        }

        $req->session()->regenerate();
        return to_route('student.get');
        
    }
}
