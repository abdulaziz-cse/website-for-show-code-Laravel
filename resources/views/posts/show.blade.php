@extends('layouts.app')
@section('start')

<!-- Page Content -->
<div class="container" style="padding: 50px;">
  <div class="row">

    <div class="col-md-12">
      <!-- Blog Post -->

      <div class="d-flex align-items-end flex-column">
          <div class="p-2">
              <a  class="btn btn-outline-info" href="/posts" >Back </a>
          </div>
        </div>

      <div class="card mb-4"> 

        
        <div class="card-body">
          <h2 class="card-title">Description of the code </h2>   

          <p class="lead">{{  $post->body}}</p>
         <p class="text-info">Posted on {{ $post->created_at->format('M j, Y') }} By <a>{{$post->user->name}}</a> </p>
        
        <h1 class="my-4"> Photo</h1>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="d-block w-100" alt="{{$post->post_image}}"> 
              </div>
              </div>
              <br>
              <h1 class="my-4"> More Data </h1>
              <br>

              <div class="container">

              <form action="{{ route('pay') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="row">
                  
                    <div class="col-sm">
                        <input type="hidden" name="name" value="{{ $post->name }}" >
                      </div>
                      <div class="col-sm">

                          <i class="fas fa-dollar-sign"></i><input type="hidden" name="price" value="{{ $post->price }}" >{{ $post->price }}
                             </div>
                      <div class="col-sm">
                            <button type="button" class="btn btn-primary"> <i class="fab fa-line"></i> Live on link </button>
                        </div>

                    <div class="col-sm">
                        <button class="btn btn-success" type="submit" > Bay Now </button>
                      </div>
                  </div>
              </form>
                  </div>


        
        </div>
      
      </div>
      
    </div>
    

  </div>

</div>

@endsection


