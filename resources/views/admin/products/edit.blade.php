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
            <div class="form-group" id="product_edit_stores_list">
                @foreach($stores as $store)
                    <div class="checkbox"><label><input type="checkbox" value="{{$store->id}}" {{in_array($store->id,$selected_store)?"checked":""}}>{{$store->store_name}}</label></div>
                    @endforeach
            </div>
            {!! Form::open(['action'=>'ProductsController@upload','files'=>true,'id'=>'upload']) !!}
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse...{!! Form::file('image', ['class' => 'field']) !!}
                    </span>
                </span>
                <input type="text" class="form-control" readonly="">
            </div>
            {!! Form::close() !!}
            <div class="progress"style="display: none">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                    <span class="sr-only">10% Complete</span>
                </div>
            </div>
        </div>

    </div>
@stop