<div class="form-group">
    {!! Form::label('brand_type_id', 'Brand Type:') !!}
    {!!Form::select('brand_type_id',$brand_types,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('city_id', 'City Name:') !!}
    {!!Form::select('city_id',$cities,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('brand_name', 'Brand Name:') !!}
    {!! Form::text('brand_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::text('logo',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::text('video',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>