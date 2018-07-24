@extends('layouts.app')
@section('start')

<div class="container-fluid col-sm-12 mx-auto" style="padding: 100px;">
        <div class="container">
            <div class="row justify-content-center padding">
                <div class="col-md-8 padding">
                    <div class="card">
                        <div class="card-header">
                            
                        <a href="posts"><i class="fas fa-home"></i>
                        Go Home
                        </a>
                        </div>
                        
                        <div class="card-body padding">
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>code</th>
                                        <th>Created</th>   
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->created_at }}</td>
                                            
                                            <td>
                                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-info btn-xs"> 
                                                    <i class='fas fa-edit'></i> Edit Post
                                                </a>
                                            </td>
                                            
                                            <td>
                                                {!! Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST' ]) !!}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    <button class="btn btn-danger btn-xs" type="submit">
                                                        <i class="fas fa-trash"></i> Delete Post
                                                    </button>
        
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
        
    
            </div>
               </div>
           </div>
        </div>
        </div>
        




@endsection


