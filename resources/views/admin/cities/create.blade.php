@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        {!! Form::open(['action'=>'CitiesController@index','class'=>'ajax-validation']) !!}
            @include('admin.cities._form',['submitButtonText'=>'Add City'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop