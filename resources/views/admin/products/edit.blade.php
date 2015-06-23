@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('ProductsController@create')}}"> {!! Form::button('Add New Product',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        {!! Form::model($product,['method'=>'PATCH','action'=>['ProductsController@update',$product->id]]) !!}
        @include('admin.products._form',['submitButtonText'=>'Update Product'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop