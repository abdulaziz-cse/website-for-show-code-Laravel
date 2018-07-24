<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     
    public function __construct()
    {
        $this->middleware('auth',[ 'except'=>'index','show']);
    }


       /**
     * Display a listing of the resource.
     *
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $post = Post::orderBy('created_at','DESC')->paginate(10);

        return view('posts.index', compact('post'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'body'=>'required',
            'email'=>'required',
              ]);

              $user = Auth::user();
              $post = new Post();
              $post->name = $request->input('name');
              $post->body = $request->input('body');    
              $post->email = $request->input('email'); 
              $post->price = $request->input('price'); 
              $post->tag = $request->input('tag'); 
              $post->more = $request->input('more'); 
              $post->user_id = $user->id;

              $post->save();

              return redirect('/home')->with('success' , 'New code success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edite', compact('post'));

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
    
        $request->validate([
            'name'=>'required',
            'body'=>'required',
            'email'=>'required'
              ]);

              $post =  Post::find($id);
              $post->name = $request->input('name');
              $post->body = $request->input('body');    
              $post->email = $request->input('email');    
              $post->save();

              return redirect('posts')->with('success' , 'تم تعديل البلاغ بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post ->delete();
        return redirect('/posts')->with('success' , 'تم حذف البلاغ بجاح');

    }
}
