
@extends('layouts.app')
@section('start')


<div class="container-fluid col-sm-8 mx-auto" style="padding: 100px;">
<div class="container">
    <div class="row justify-content-center padding">
        <div class="col-md-8 padding">
            <div class="card">
                <div class="card-header"> <i class="fas fa-plus"></i> Add New Code  </div>


                <div class="card-body padding">

                  {!! Form::open(['action'=>'PostController@store', 'method'=>'POST' ]) !!}

                        <div class="form-group row">
                       <label>{!! Form::label('name project') !!}</label>
                    {!! Form::text('name' ,'',['placeholder'=> 'CMS of blog','class'=>'form-control']) !!}
                     </div>

                   <div class="form-group row">
                      <label >{!! Form::label('Email') !!}</label>
                    {!! Form::text('email' ,'',['placeholder'=> 'abdulaziz@abdulaziz.com','class'=>'form-control']) !!}
                   </div>

                   <div class="form-group row">
                        <label>{!! Form::label('Describe') !!}</label>
                      {!! Form::textarea('body' ,'',['placeholder'=> 'The Report ','class'=>'form-control ckeditor']) !!}
                     </div>
                 

                 <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Price of project') !!}</label>
                    <div class="col-md-6">
                  {!! Form::text('price' ,'',['placeholder'=> ' 400$ ','class'=>'form-control']) !!}
                  </div>
                 </div>


                 <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Type of code ') !!}</label>
                    <div class="col-md-6">
                  {!! Form::text('tag' ,'',['placeholder'=> 'php , js , html','class'=>'form-control']) !!}
                  </div>
                 </div>

                 <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{!! Form::label('link live of code') !!}</label>
                        <div class="col-md-6">
                      {!! Form::text('more' ,'',['placeholder'=> ' github.com ' ,'class'=>'form-control']) !!}
                      </div>
                     </div>
                 

        <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
         {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        </div>
         </div>


                 {!! Form::close() !!}
                </div>


            </div>
        </div>
    </div>
</div>
</div>

@endsection




