<div class="form-group">
    {!! Form::label('gender_id', 'Gender:') !!}
    {!! Form::select('gender_id',$gender,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name',null,['class'=>'form-control validate']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control validate']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price',null,['class'=>'form-control validate']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>