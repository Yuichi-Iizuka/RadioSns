<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * indexメソッド
     * 
     * URLを叩いた後に遷移するwelcomページ
     * 
     * @return Response program一覧ページの表示
     * @todo DB::all で表示させる
     * @todo N+1解消
     * 
     */
    public function index()
    {
        return view('programs.index');
    }
}
