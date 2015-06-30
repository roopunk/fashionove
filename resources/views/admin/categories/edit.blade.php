@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('CategoriesController@create')}}"> {!! Form::button('Add New Category',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        {!! Form::model($category,['method'=>'PATCH','action'=>['CategoriesController@update',$category->id]]) !!}
        @include('admin.categories._form',['submitButtonText'=>'Update Category'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop