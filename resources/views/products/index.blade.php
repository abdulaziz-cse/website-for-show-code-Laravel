@extends('layouts.app')
@section('strat')


<div class="action">

    @foreach($posts as $post)
    <form action="{{ Route('pay') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="price" value="{{ $post->price }}" />

        </form>
        </div>
        @endforeach
@endsection