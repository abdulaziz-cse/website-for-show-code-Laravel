@if($errors ->any())
<div class="alert alert-danger" role="alert">
@foreach($errors->all() as $erroe)
<li> {{ $erroe  }}</li>
@endforeach
</div>
@endif

@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

@if(session('eroor'))
<div class="alert alert-success" role="alert">
    {{ session('eroor') }}
  </div>
@endif