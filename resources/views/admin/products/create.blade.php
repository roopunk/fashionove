@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('ProductsController@create')}}"> {!! Form::button('Add New Product',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        {!! Form::open(['action'=>'ProductsController@index']) !!}
            @include('admin.products._form',['submitButtonText'=>'Add Product'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop