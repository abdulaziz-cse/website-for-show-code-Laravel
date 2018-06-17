@extends('layouts.app')
@section('start')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>قائمة البلاغات الخاصة بك</h3>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>عنوان البلاغ</th>
                                <th>تاريخ البلاغ</th>   
                                <th>تعديل على البلاغ</th>
                                <th>حذف البلاغ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    
                                    <td>
                                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-info btn-xs"> 
                                            <i class='fas fa-edit'></i> تعديل البلاغ
                                        </a>
                                    </td>
                                    
                                    <td>
                                        {!! Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST' ]) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <button class="btn btn-danger btn-xs" type="submit">
                                                <i class="fas fa-trash"></i> حذف البلاغ
                                            </button>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    <a href="posts/create" class="btn btn-primary">
                        <i class="fas fa-plus"></i>   إضافة بلاغ جديد
                     
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

