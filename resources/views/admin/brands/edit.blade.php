@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        {!! Form::model($brand,['method'=>'PATCH','action'=>['BrandsController@update',$brand->id]]) !!}
        @include('admin.brands._form',['submitButtonText'=>'Update City'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop