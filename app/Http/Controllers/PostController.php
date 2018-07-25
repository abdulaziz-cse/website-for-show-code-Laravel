<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
       

        $post = Post::orderBy('created_at','desc')->paginate(10);

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
            'post_image'=>'image|nullable|max:1024',
              ]);

       if($request->hasFile('post_image')){  
    $filenameWithExtention = $request->file('post_image')->getClientOriginalName();
    $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
    $extension = $request->file('post_image')->getClientOriginalExtension();
    $fileNameStore = $fileName .'_'.time().'.'.$extension;
    $path = $request->file('post_image')->move(base_path() . '/public/images/', $fileNameStore);
  
 
            
        }else{
                $fileNameStore = 'noImage.jpg';
              } 
              $post = new Post();
              $post->name = $request->input('name');
              $post->body = $request->input('body');    
              $post->email = $request->input('email'); 
              $post->price = $request->input('price'); 
              $post->tag = $request->input('tag'); 
              $post->more = $request->input('more'); 
              $post->user_id = auth()->user()->id;
              $post->post_image = $fileNameStore;
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
        $this->validate($request ,[
            'name'=>'required',
            'email'=>'required',
            'body'=>'required'
           ]);

           if($request->hasFile('post_image')){
            $filenameWithExtention = $request->file('post_image')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('post_image')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('post_image')->move(base_path() . '/public/images/', $fileNameStore);
        } 
        $post =   Post::find($id);
        $post->name = $request->input('name');
        $post->email = $request->input('email');  
        $post->body  = $request->input('body');
        $post->tag = $request->input('tag');
        $post->body      = $request->input('body');
        $post->more      = $request->input('more');
        if($request->hasFile('post_image')){
            $post->post_image      =   $fileNameStore;
        }
        $post->save();
        
      return redirect('/home')->with('success', 'Done successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =   Post::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized');
        }
        if($post->post_image != 'noImage.jpg'){
            Storage::delete('public/images/'.$post->post_image);
        
        }


                $post->delete() ;   
            
                return redirect('/posts')->with('success', 'Done successfully');
    }
}