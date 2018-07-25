@extends('layouts.app')
@section('start')

<!-- Page Content -->
<div class="container" style="padding: 50px;">

  <div class="row">

    <div class="col-md-8">

      <h1 class="my-5"> {{ $post->name }}</h1>
      <a class="pull-right" href="/posts" class="btn btn-warning">Back</a>

      <!-- Blog Post -->
      <div class="card mb-4"> 
        <div class="card-body">
          <h2 class="card-title">Description of the code </h2>   
         Posted on {{ $post->created_at->format('M j, Y') }} By <a>{{$post->user->name}}</a>

        
        <h1 class="my-4"> Photo</h1>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="d-block w-100" alt="{{$post->post_image}}"> 
              </div>
              </div>
              <br>
              <h1 class="my-4"> More Data </h1>
              <br>
              
       
        
        </div>
      
      </div>
      
    </div>
    

  </div>

      
@endsection
