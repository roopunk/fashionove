@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('BrandsController@create')}}"> {!! Form::button('Add New Brand',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        <table class="table table-responsive table-striped text-center">
            <tr>
                <th>Serial Id</th>
                <th>Brand Name</th>
                <th>Description</th>
                <th>City</th>
                <th>Type</th>
                <th>Operations</th>
            </tr>
            @foreach($brands as $brand)
                <tr>

                    <td>{{$brand->id}}</td>
                    <td>{{$brand->brand_name}}</td>
                    <td>{{$brand->description}}</td>
                    <td>{{\App\Brand::find($brand->id)->city->city_name}}</td>
                    <td>{{\App\Brand::find($brand->id)->brand_type->type_name}}</td>
                    <td>
                        <a href="{{action('BrandsController@edit',$brand->id)}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{url('admin/brands/'.$brand->id)}}"><i class="fa fa-remove"></i></a>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </td>
                </tr>
            @endforeach
        </table>
        @include('errors.list')
    </div>
@stop