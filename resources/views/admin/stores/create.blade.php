@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        {!! Form::open(['action'=>'StoresController@index']) !!}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('day', 'Opening Days:') !!}--}}
            {{--<div class="checkbox">--}}
            {{--@foreach($days as $day)--}}
                {{--<label>--}}
                {{--{!! Form::checkbox('day[]', $day->id) !!}{{$day->day}}--}}
                {{--</label>--}}
            {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
        @include('admin.stores._form',['submitButtonText'=>'Add Store'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop