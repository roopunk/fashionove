@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('ProductsController@create')}}"> {!! Form::button('Add New Product',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        @include('errors.list')
        <div class="col-md-6">
        {!! Form::open(['action'=>'ProductsController@index','class'=>'ajax-validation']) !!}
            @include('admin.products._form',['submitButtonText'=>'Add Product'])
        {!! Form::close() !!}
        </div>
    </div>
@stop