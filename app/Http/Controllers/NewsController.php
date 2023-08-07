<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=DB::table('news')
            ->where('status', '=', 'published')
            ->orderBy('updated_at', 'desc')
            -> limit(5)
            ->get();

        return view('main_1', ['news'=>$news]);
    }

//    public function indexAll()
//    {
//
//        $new_posts=DB::table('news')
//            ->where('status', '=', 'published')
//            ->orderBy('updated_at', 'desc')
//            ->get();
//
//        return view('news.new_posts', ['news'=>$news]);
//    }

//    public function archive()
//    {
//
//
//        $new_posts=DB::table('news')
//            ->where('status', '=', 'archive')
//            ->orderBy('updated_at', 'desc')
//            -> limit(4)
//            ->get();
//
//        return view('news.archives',['news'=>$news]);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
