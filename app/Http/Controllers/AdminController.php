<?php

namespace App\Http\Controllers;

use App\Models\developer;
use App\Models\Game;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $requestgame = Game::where('status','!=',1)->where('status','!=',0)->get();

        $game = Game::where('status',1)->get();

        return view('admin.home',['requestgame'=>$requestgame,'game'=>$game]);
    }

    public function report(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $transaction = Transaction::whereYear('tanggal_trans', '=', $tahun)
        ->whereMonth('tanggal_trans', '=', $bulan)->get();
        $sorttransaction = Transaction::selectRaw("user_id,count(id) as counts")->whereYear('tanggal_trans', '=', $tahun)
        ->whereMonth('tanggal_trans', '=', $bulan)
        ->groupBy('user_id')
        ->orderBy('counts','DESC')
        ->limit('10')
        ->get();
        $sortgames = Transaction::selectRaw("game_id,count(id) as counts")->whereYear('tanggal_trans', '=', $tahun)
        ->whereMonth('tanggal_trans', '=', $bulan)
        ->groupBy('game_id')
        ->orderBy('counts','DESC')
        ->limit('10')
        ->get();
        $game = Game::all();
        $user = User::all();
        return view('admin.report',["tahun"=>$tahun,"bulan"=>$bulan,"trans"=>$transaction,'game'=>$game,'user'=>$user,'topuser'=>$sorttransaction,'topgames'=>$sortgames]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = [
            'username'=>'admin',
            'password'=>'admin'
        ];

        if($request->username=="admin" && $request->password="admin"){
            $request->session()->put('admin-login',$admin);
            return redirect('admin/home');
        }

        return redirect('admin/login');
    }

    public function developer()
    {
        $requestdeveloper = developer::where('status',2)->get();

        $nonactivedeveloper = developer::where('status',0)->get();

        $developer = developer::where('status',1)->get();

        return view('admin.developer',['requestdeveloper'=>$requestdeveloper,'developer'=>$developer,'nonactivedeveloper'=>$nonactivedeveloper]);
    }

    public function developerDetail($id)
    {
        $developer = developer::find($id);

        return view('admin.developer_detail',['developer'=>$developer]);
    }
    public function logout(Request $request)
    {
        $request->session()->forget('admin-login');
        return redirect('/admin/login');
    }

    public function reactivateGame(Request $request,$id)
    {
        $game=Game::find($id);

        if($game->status==-1){
            $request->session()->flash('message', 'Game Reactivated! :D');
        }else if($game->status==2){
            $request->session()->flash('message', 'Game Activated! :D');
        }
        $game->status=1;
        $game->save();

        return back();
    }

    public function banGame(Request $request,$id)
    {
        $game=Game::find($id);

        $game->status=-1;
        $game->save();

        $request->session()->flash('message', 'Game Banned :(');

        return back();
    }

    public function confirmDeveloper(Request $request,$id)
    {
        $developer = developer::find($id);
        $developer->status=1;
        $developer->save();

        $request->session()->flash('message', 'Developer Confirmed :)');

        return back();
    }

    public function rejectDeveloper(Request $request,$id)
    {
        $developer = developer::find($id);
        $developer->status=0;
        $developer->save();

        $request->session()->flash('message', 'Developer Rejected :(');

        return back();
    }
}
