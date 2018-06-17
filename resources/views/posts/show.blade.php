@extends('layouts.app')
@section('start')

<div class="card bg-light" style="max-width: 18rem;">
    <div class="card-header">
      {{ $post->name }}  
     </div>
  
    <div class="card-body">
      <h5 class="card-title">{{ $post->body }}</h5>
      <p class="card-text">{{ $post->email }}</p>
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

