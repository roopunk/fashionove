<div class="form-group">
    {!! Form::label('city_name', 'City Name:') !!}
    {!! Form::text('city_name',null,['class'=>'form-control validate-alpha' ,'data-error-msg'=>'Please provide a valid city name']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>