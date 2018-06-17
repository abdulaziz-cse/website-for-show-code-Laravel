
@extends('layouts.app')
@section('start')
<div class="container">
    <div class="row justify-content-center padding">
        <div class="col-md-8 padding">
            <div class="card">
                <div class="card-header"><i class="fas fa-plus"></i>إضافة بلاغ جديد
                </div>


                <div class="card-body padding">

           {!! Form::open(['action'=>'PostController@store', 'method'=>'POST' ]) !!}

                    <div class="form-group row">
                      <label  class="col-md-4 col-form-label text-md-right">{!! Form::label('Full Name') !!}</label>
                      <div class="col-md-6">
                    {!! Form::text('name' ,'',['placeholder'=> 'Abdulaziz M ALONIZ','class'=>'form-control']) !!}
                    </div>
                   </div>

                   <div class="form-group row">
                      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Email') !!}</label>
                      <div class="col-md-6">
                    {!! Form::text('email' ,'',['placeholder'=> 'abdulaziz@abdulaziz.com','class'=>'form-control']) !!}
                    </div>
                   </div>

                 

                   <div class="form-group row">
                      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Report') !!}</label>
                      <div class="col-md-6">
                    {!! Form::textarea('body' ,'',['placeholder'=> 'The Report ','class'=>'form-control']) !!}
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
@endsection




