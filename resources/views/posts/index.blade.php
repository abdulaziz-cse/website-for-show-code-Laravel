
@extends('layouts.app')
@section('start')


<div class="row container">
    <table class="table table-striped">
@foreach($post as $posts)
<div class="col-sm-4">
<div class="card bg-light" style="max-width: 18rem;">
    <div class="card-header">
      <a href="/posts/{{ $posts->id }}">
      {{ $posts->name }}  
      </a>
     </div>
    <div class="card-body">
      <h5 class="card-title">{{ $posts->body }}</h5>

      <p class="card-text">{{ $posts->email }}</p>
    </div>


    <div class="card-body">
      <span class="badge badge-pill badge-secondary">
      <i class="fas fa-calendar"></i>
            {{ $posts->created_at }}    
      </span>      

      <span class="badge badge-pill badge-secondary">
        <i class="far fa-user"></i>
              {{ $posts->user->name }}    
        </span>
      </div>

  </div>
</div>
@endforeach
</div>
</div>

  {{ $post->links() }}


@endsection


