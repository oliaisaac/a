<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Img;
use App\Models\Company;

class PageController extends Controller
{
    public function __construct() {
        $this->nameCompany = Company::select('name as name')->first();
    }

    public function getMainPage() {

        $pathToBlockImage = Img::select('path as path')->where('block_name','imageBlock0')
        ->orWhere('block_name','imageBlock1')
        ->orWhere('block_name','imageBlock2')
        ->get();

        $pathToBackground = Img::select('path as path')->where('block_name','imageBackground0')->first();

        return view('main',['pathToBackground'=>$pathToBackground, 'nameCompany'=>$this->nameCompany,'pathToBlockImage'=> $pathToBlockImage]);
    }

    

    public function getAdminPage() {
        return view('admin',[ 'nameCompany'=>$this->nameCompany]);
    }

    public function auth(Request $request) {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password],true)) {
            return true;
        } else {
            return response()->json(['errors' => ['from' => 'Логин или пароль неверный']],401);
        }
    }

    public function logOut() {
        Auth::logout();
        return redirect()->route('admin');
    }
}
