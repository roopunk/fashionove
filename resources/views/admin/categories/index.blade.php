@extends('app')
@section('content')
    <div class="container" style="width: 1071px !important;">
        <hr/>
        <a href="{{action('CategoriesController@create')}}"> {!! Form::button('Add New Category',['class'=>'btn btn-primary']) !!}</a>
        <hr/>
        <div class="col-md-6">
            <aside class="text-center">Men Categories</aside>
        <table class="table table-responsive table-striped text-center">
            <tr>
                <th>Category Name</th>
                <th>Operations</th>
            </tr>
            @foreach($categories_men as $category_men)
                <tr>
                    <td>{{$category_men->category_name}}</td>
                    <td>
                        <a href="{{action('CategoriesController@edit',$category_men->id)}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{url('admin/categories/'.$category_men->id)}}"><i class="fa fa-remove"></i></a>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </td>
                </tr>
            @endforeach
        </table>
        </div>
        <div class="col-md-6">
                <aside class="text-center">Women Categories</aside>
            <table class="table table-responsive table-striped text-center">
                <tr>
                    <th>Category Name</th>
                    <th>Operations</th>
                </tr>
                @foreach($categories_women as $category_women)
                    <tr>
                        <td>{{$category_women->category_name}}</td>
                        <td>
                            <a href="{{action('CategoriesController@edit',$category_women->id)}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{url('admin/categories/'.$category_women->id)}}"><i class="fa fa-remove"></i></a>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
@stop