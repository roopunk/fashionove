@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('ProductsController@create')}}"> {!! Form::button('Add New Product',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        @include('errors.list')
        <div class="col-md-6">
        {!! Form::model($product,['method'=>'PATCH','action'=>['ProductsController@update',$product->id],'class'=>'ajax-validation']) !!}
        @include('admin.products._form',['submitButtonText'=>'Update Product'])
        {!! Form::close() !!}
        </div>
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('brand_id', 'Brand Name:') !!}
                {!! Form::select('brand_id',$brands,@$selected_brand->id,['class'=>'form-control','id'=>'brand_id_product_edit']) !!}
            </div>
        </div>

    </div>
@stop