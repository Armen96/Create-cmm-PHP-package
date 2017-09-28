<?php

namespace Barsegyan\Createcmm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CreateCMMController extends Controller
{
    protected $name;
    public function __construct()
    {

    }

    public function index(Request $request,$name)
    {
        echo $name;
    }

    static public function createCmm($text){
        $ucText = ucfirst($text);
        Artisan::call('make:controller', ['name'=> $ucText.'Controller']);
        Artisan::call('make:model', ['name'=> $ucText]);
        Artisan::call('make:migration', ['name'=> 'create_'.$text.'_table','--create'=>$text]);
        //Artisan::call('migrate');
    }
}
