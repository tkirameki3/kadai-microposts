<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ログ出力用に読み込み
use Illuminate\Support\Facades\Log;

class FavoritesController extends Controller
{
    public function like($id)
    {
        
        $user = \Auth::user();
        $user->favorite($id);
        
        // 前のURLへリダイレクトさせる
        return back();
        
    }
    
    public function destroy($id)
    {
        
        $user = \Auth::user();
        $user->unfavorite($id);
        
        // 前のURLへリダイレクトさせる
        return back();
    }
}
