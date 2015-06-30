@extends('app')
@section('content')
    <div class="container" style="width:1071px !important;">
    <hr/>
    <a href="{{action('CitiesController@create')}}"> {!! Form::button('Add New City',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        <table class="table table-responsive table-striped text-center">
            <tr>
                <th>Serial Id</th>
                <th>City Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Operations</th>
            </tr>
            @foreach($cities as $city)
            <tr>
                <td>{{$city->id}}</td>
                <td>{{$city->city_name}}</td>
                <td>{{$city->created_at}}</td>
                <td>{{$city->updated_at}}</td>
                <td>
                    <a href="{{action('CitiesController@edit',$city->id)}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{url('admin/cities/'.$city->id)}}"><i class="fa fa-remove"></i></a>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@stop