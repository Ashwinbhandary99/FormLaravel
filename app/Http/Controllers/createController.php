<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class createController extends Controller
{
    public function home(){
        $articles = Article::all();
        return view('home',['articles' => $articles]);
        

    }
    public function add(Request $request){
        $this->validate($request,[

            'title'=>'required',
            'description'=>'required',


        ]);
        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info','Article saved successfully');

        //return 'validation pass';
        //return 'add';
    }
    public function update($id){

        $articles = Article::find($id);
        //echo'<pre>';
        //print_r($articles);
        //echo'<pre>';
        //exit();
        return view('update',['articles' => $articles]);
    }
    /*public function edit(Request $request,$id){

        $this->validate($request,[

            'title'=>'required',
            'description'=>'required',


        ]);
        $data = array(

            'title'=>$request->input('title'),
            'description'=>$request->input('description')

        );
        Article::where('id', $id)->update($data);
        //$articles = new Article;
        //$articles->title = $request->input('title');
        //$articles->description = $request->input('description');
        //$articles->save();
        return redirect('/')->with('info','Article updated successfully');

        //return id;
      


    }*/
    public function read($id){

        //return $id;

        $articles = Article::find($id);
        return view('read',['articles' => $articles]);    
    }
    public function delete($id){

        Article::where('id',$id)
        ->delete();
        return redirect('/')->with('info','Article deleted successfully');

        //return id;
    }
}
