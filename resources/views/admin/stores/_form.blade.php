<div class="form-group">
    {!! Form::label('brand_id', 'Brand Name:') !!}
    {!! Form::select('brand_id',$brands,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('payment_type', 'Payment Type:') !!}
    {!! Form::select('payment_type',$payment_types,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('store_name', 'Store Name:') !!}
    {!! Form::text('store_name',null,['class'=>'form-control','placeholder'=>'Store Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::text('latitude',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::text('longitude',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('opening_time', 'Opening Time:') !!}
    {!! Form::text('opening_time',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('closing_time', 'Closing Time:') !!}
    {!! Form::text('closing_time',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('highlights', 'Highlights:') !!}
    {!! Form::text('highlights',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price_range', 'Price Range:') !!}
    {!! Form::text('price_range',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>