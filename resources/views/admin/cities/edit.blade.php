@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        {!! Form::model($city,['method'=>'PATCH','action'=>['CitiesController@update',$city->id]]) !!}
            @include('admin.cities._form',['submitButtonText'=>'Update City'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop