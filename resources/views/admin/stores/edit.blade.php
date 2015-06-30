@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>

        {!! Form::model($store,['method'=>'PATCH','action'=>['StoresController@update',$store->id]]) !!}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('day', 'Opening Days:') !!}--}}
            {{--<div class="checkbox">--}}
                {{--@foreach($days as $day)--}}
                    {{--<label>--}}
                        {{--{!! Form::checkbox('day[]',$day->id, null) !!}{{$day->day}}--}}
                    {{--</label>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
        @include('admin.stores._form',['submitButtonText'=>'Update Store'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop