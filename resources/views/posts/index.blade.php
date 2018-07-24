

@extends('layouts.app')
@section('start')

<div class="container">
<div class="row"> 

<div class="col mx-auto" style="padding: 60px;">
<h3>Developers codes</h3>
@foreach($post as $posts)
<div class="card mb-4">
<div class="card-group">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $posts->name }}</h5>
        <span class="card-text"> {{ $posts->body }}</span>
        <p class="card-text"><small class="text-muted">{{ $posts->created_at }}</small></p>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">More Details </button>
        <button type="button"   name="price" class="btn btn-default">{{ $posts->price }}
            <i class="fas fa-dollar-sign"></i>
        </button>
        <button type="button" class="btn btn-warning">{{ $posts->tag }}
            <i class="fas fa-code"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $posts->name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2> Deccripe the coode </h2>
        <br>
        {{ $posts->body }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endforeach
{{ $post->links() }}
</div>
</div>
</div>
@endsection


