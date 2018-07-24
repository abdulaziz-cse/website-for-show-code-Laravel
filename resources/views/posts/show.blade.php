@extends('layouts.app')
@section('start')

<!-- Page Content -->
<div class="container" style="padding: 50px;">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4"> {{ $post->name }} </h1>

      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">Description of the code</h2>
          <p class="card-text">{{ $post->body }}</p>
          <div class="card-body download-links">
              <ul class="list-inline m-0">
              <li class="list-inline-item">
              <a href="" class="btn btn-secondary" target="_blank">
              <i class="fas fa-eye"></i>
              Live Preview
              </a>
              </li>
              <li class="list-inline-item">
              <a href="" class="btn btn-secondary" type="submit" id="download">
              <i class="fas fa-download"></i>
              Download
              </a>
              </li>
              </ul>
              </div>       
             </div>

         
        <div class="card-footer text-muted">
          Posted on {{ $post->created_at }}  by  <a href="#">{{ $post->user->name  }}</a>
        </div>
        
        </div>
      </div>
    </div>
    

  </div>

        

  @if(!Auth::guest() && (Auth::user()->id == $post->user_id ))
  <div class="row container">
    {!! Form::open(['action'=>[ 'PostController@destroy', $post->id ], 'method'=>'POST' ]) !!}

    {{ Form::hidden('_method','DELETE') }}
    <button type="button" class="btn btn-danger">Deleate in DB</button>
    {{ !! Form::close() }}

   <a href="/posts/{{ $post->id }}/edit"><button  type="submit" class="btn btn-secondary">   Edite in DB </button></a>
    </div>
    @endif
@endsection

