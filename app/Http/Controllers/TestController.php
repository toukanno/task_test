<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        //Eloquant(エロクアント)
        $values = Test::all();
        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text','=','bbb')->get();

        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('text','=','bbb')
        ->select('id','text')
        ->first();

        dd($values,$count,$first,$whereBBB,$queryBuilder);
        // dd("test");
        // print_r($values);
        return view('tests.test',compact('values'));
    }
}
