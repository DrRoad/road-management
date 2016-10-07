<?php
use Illuminate\Support\Facades\Input;
 ?>


@extends('master')

@section('content')
<div class="page-wrapper">
<div class="container-fluid" style="background-color:white; margin:auto; width:100%; min-height:92vh;">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <h2 class="page-header">
        <i class="fa fa-cab"></i>  Real-Time Car Monitoring
      </h2>
      <ol class="breadcrumb">
        <li>
          <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
        </li>
        <li class="active">  <!--It was active before-->
          <i class="fa fa-table"></i> Tables
        </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->

  <!-- /.row -->

  <div class="row">
    <div class="col-md-10 col-md-offset-2" style="min-height:92vh;">
      <div class="row">
        <div class="col-md-6">
          <!-- laravel form -->
          {!! Form::open(['route' => 'drivers.store', 'method' => 'post']) !!}

            {{ Form::label('name', 'name:') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}

            {{ Form::label('surname', 'surname:') }}
            {{ Form::text('surname', Input::old('name'), array('class' => 'form-control')) }}

            {{ Form::label('gender', 'gender:') }}
            {{ Form::text('gender', Input::old('name'), array('class' => 'form-control')) }}

            {{ Form::label('age', 'age:') }}
            {{ Form::text('age', Input::old('name'), array('class' => 'form-control')) }}

            {{ Form::label('cell', 'cell:') }}
            {{ Form::text('cell', Input::old('name'), array('class' => 'form-control')) }}

            {{ Form::label('email', 'email:') }}
            {{ Form::email('email', Input::old('name'), array('class' => 'form-control')) }}

            {{ Form::label('address', 'address:') }}
            {{ Form::text('address', Input::old('name'), array('class' => 'form-control')) }}


            {{ Form::submit('add driver', array('class' => 'btn btn-primary', 'style' => 'margin: 10px;'))}}
            {{ Form::reset('clear', array('class' => 'btn btn-primary'))}}
          {!! Form::close() !!}
        </div>
        <div class="col-md-6">
          {!! Form::open(['route' => 'drivers.store', 'method' => 'post']) !!}
              {{ Form::label('car', 'car-name:') }}
              {{ Form::text('car', Input::old('name'), array('class' => 'form-control')) }}

              {{ Form::label('model', 'car-model:') }}
              {{ Form::text('model', Input::old('name'), array('class' => 'form-control')) }}

              {{ Form::label('color', 'car-color:') }}
              {{ Form::text('color', Input::old('name'), array('class' => 'form-control')) }}

              {{ Form::label('license', 'car-license:') }}
              {{ Form::text('license', Input::old('name'), array('class' => 'form-control')) }}

              {{ Form::submit('add driver', array('class' => 'btn btn-primary', 'style' => 'margin: 10px;'))}}
              {{ Form::reset('clear', array('class' => 'btn btn-primary'))}}

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


  <!-- /.row -->


  <!-- /.container-fluid -->


  <!-- /#page-wrapper -->

</div>


</div>

@endsection