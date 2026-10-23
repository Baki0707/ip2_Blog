<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $haberler = DB::table('posts')->orderBy('id', 'desc')->get();
        return view('index', ['haberler' => $haberler]);
    }

    public function detail($id)
    {
        $haber = DB::table('posts')->where('id', $id)->first();
        return view('detail', ['haber' => $haber]);
    }

    public function admin()
    {
        if (!session('giris_yapildi')) {
            return redirect('/login');
        }

        $haberler = DB::table('posts')->orderBy('id', 'desc')->get();
        return view('admin', ['haberler' => $haberler]);
    }

    public function store(Request $request)
    {
        if (!session('giris_yapildi')) {
            return redirect('/login');
        }

        DB::table('posts')->insert([
            'title' => $request->input('title'),
            'summary' => $request->input('summary'),
            'content' => $request->input('content'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/admin');
    }
    public function destroy($id)
    {
        if (!session('giris_yapildi')) {
            return redirect('/login');
        }

        DB::table('posts')->where('id', $id)->delete();

        return redirect('/admin');
    }
}
