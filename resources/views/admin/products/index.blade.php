@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('ProductsController@create')}}"> {!! Form::button('Add New Product',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        <table class="table table-responsive table-striped text-center">
            <tr>
                <th>Serial Id</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Operations</th>
            </tr>
            @foreach($products as $product)
                <tr>

                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{action('ProductsController@edit',$product->id)}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{url('admin/products/'.$product->id)}}"><i class="fa fa-remove"></i></a>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop