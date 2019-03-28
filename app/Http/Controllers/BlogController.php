<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs  = Blog::all();
        return view('blog.home', ['blogs'=>$blogs]);
    }

    //Oper Data
    public function show($angka)
    {
        $nilai      = "ini halaman ke ".$angka;
        $array      = ['Thoriq', 'Rahma', 'Azka', 'Fira'];
        $unescaped  = '<script> alert("Assalamu alaikum") </script>';

        //QUERY BUILDER -----

        //Insert
        // DB::table('user')->insert([
        //     'nama'=>'Nuha', 'email'=>'nuha@email.com', 'password'=>'098'
        // ]);

        //Update
        // DB::table('user')->where('id','7')->update([
        //     'nama'=>'Yuliana', 'email'=>'yuli@email.com', 'password'=>'986'
        // ]);

        //Delete
        //DB::table('user')->where('id','4')->delete();

        $db         = DB::table('user')->get();
        $whr        = DB::table('user')->where('nama', 'Thoriq')->get();
        $like       = DB::table('user')->where('nama', 'like', '%a%')->get();

        return view('blog.single', ['blog'=>$nilai, 'arrays'=>$array, 'unescaped'=>$unescaped, 'databases'=>$db, 'wheres'=>$whr, 'likes'=>$like]);
    }

    public function second($id)
    {
        $vlog   = Blog::find($id);
        if (!$vlog)
            abort(404);

        return view('blog.second', ['vlogs'=>$vlog]);
    }

    public function crud()
    {
        //Insert metode biasa
        // $flog           = new Blog;
        // $flog->title    = 'Halo Samarinda';
        // $flog->isi      = 'Halo juga';
        // $flog->save();

        // INSERT metode mass assignment
        // Blog::create([
        //  'title' => 'Halo Jawa',
        //  'isi'   => 'hai juga',
        //  // 'created_at' => Date::now()
        // ]);

        // Update
        // $flog   = Blog::where('title', 'halo banjar')->first();
        // $flog->title    = 'halo Malang';
        // $flog->save();

        //Update Mass Assignment
        // Blog::find(7)->update([
        //     'title'     => 'halo semarang',
        //     'isi'       => 'ini semarang'
        // ]);

        //delete
        // $flogs   = Blog::find(1);
        // $flogs->delete();

        //delete_2
        //Blog::destroy([3, 4]);
        // Blog::destroy(2);

        $flogs           = Blog::all();
        return view('blog.crud', ['flogs' => $flogs]);
    }

    public function showCrud($angka)
    {
        // code...
    }
}
