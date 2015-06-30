@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('StoresController@create')}}"> {!! Form::button('Add New Store',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        <table class="table table-responsive table-striped text-center">
            <tr>
                <th>Serial Id</th>
                <th>Brand Name</th>
                <th>Store Name</th>
                <th>Address</th>
                <th>Operations</th>
            </tr>
            @foreach($stores as $store)
                <tr>

                    <td>{{$store->id}}</td>
                    <td>{{\App\Brand::find($store->brand_id)->brand_name}}</td>
                    <td>{{$store->store_name}}</td>
                    <td>{{$store->address}}</td>
                    {{--<td>{{\App\Brand::find($brand->id)->city->city_name}}</td>--}}
                    {{--<td>{{\App\Brand::find($brand->id)->brand_type->type_name}}</td>--}}
                    <td>
                        <a href="{{action('StoresController@edit',$store->id)}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{url('admin/stores/'.$store->id)}}"><i class="fa fa-remove"></i></a>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop