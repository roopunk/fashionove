@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        {!! Form::open(['action'=>'BrandsController@index']) !!}
        @include('admin.brands._form',['submitButtonText'=>'Add Brand'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop