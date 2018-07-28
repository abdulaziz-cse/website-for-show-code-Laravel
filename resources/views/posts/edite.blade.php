
@extends('layouts.app')
@section('start')
<div class="container">
    <div class="row justify-content-center padding" style="padding: 80px;">
        <div class="col-md-8 padding">
            <div class="card">
                <div class="card-header"><i class="fas fa-plus"></i>change of code </div>


                <div class="card-body padding">

                    {!! Form::open(['action'=>[ 'PostController@update', $post->id ], 'method'=>'POST', 'enctype'=>'multipart/form-data' ]) !!}

                    <div class="form-group row">
                      <label  class="col-md-4 col-form-label text-md-right">{!! Form::label('Name') !!}</label>
                      <div class="col-md-6">
               {!! Form::text('name' ,$post->name,['placeholder'=> 'Enter the name','class'=>'form-control']) !!}
                    </div>
                   </div>

                   <div class="form-group row">
                      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Email') !!}</label>
                      <div class="col-md-6">
                    {!! Form::text('email' ,$post->email,['placeholder'=> 'Enter the name','class'=>'form-control']) !!}
                    </div>
                   </div>

                  


                   <div class="form-group row">
                      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Body') !!}</label>
                      <div class="col-md-6">
                    {!! Form::textarea('body' ,$post->body,['placeholder'=> 'Enter the ','class'=>'form-control', 'id'=>'article-ckeditor']) !!}
                    </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Type of code ') !!}</label>
                        <div class="col-md-6">
                      {!! Form::text('tag' ,$post->price,['placeholder'=> 'php , js , html','class'=>'form-control']) !!}
                      </div>
                     </div>

                     <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Photo of output ') !!}</label>
                            <div class="col-md-6">
                                    {!! Form::file('post_image' , ['class'=>'btn' ]) !!}
                                </div>
                         </div>


                                  <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Type of code ') !!}</label>
                    <div class="col-md-6">
                  {!! Form::text('tag' ,$post->tag,['placeholder'=> 'php , js , html','class'=>'form-control']) !!}
                  </div>
                 </div>

                 <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{!! Form::label('link live of code') !!}</label>
                        <div class="col-md-6">
                      {!! Form::text('more' ,$post->more,['placeholder'=> ' github.com ' ,'class'=>'form-control']) !!}
                      </div>
                     </div>

        
        <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
                {{  Form::hidden('_method' , 'PUT')}}

         {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        </div>
         </div>


                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




