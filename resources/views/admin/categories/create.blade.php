@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('CategoriesController@create')}}"> {!! Form::button('Add New Category',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        {!! Form::open(['action'=>'CategoriesController@index']) !!}
       @include('admin.categories._form',['submitButtonText'=>'Add Category'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop