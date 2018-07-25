

@extends('layouts.app')
@section('start')
     

<div class="col mx-auto" style="padding: 80px;">

  <div class="content">

 <div class="container">
    <h1 class="display-5">Developers codes</h1>

    <div class="row">
  

@foreach($post as $posts)
<div class="col-sm-6" style="padding: 10px;">
    <div class="card"> 
            <div class="card-body" style="display:inline-block;">
              <h4 class="card-title">{{ $posts->name }}</h4>
              <h6 class="card-subtitle mb-2 text-muted"> By {{ $posts->user->name}}</h6>
                 <p class="card-text">
                  {{ str_limit(strip_tags($posts->body), 50) }}
                  @if (strlen(strip_tags($posts->body)) > 50)
                  <a  href="/posts/{{$posts->id}}"> More .. </a>
                    @endif
                 </p>

              <button type="button" name="price" class="btn btn-default"> {{ $posts->price }}   <i class="fas fa-dollar-sign"></i> </button>

              <button type="button" class="btn btn-warning"> {{ $posts->tag }} <i class="fas fa-code"></i> </button>

            </div>
            
          </div>
        </div>
    
@endforeach

{{ $post->links() }}
</div>
</div>
</div>
</div>
@endsection



