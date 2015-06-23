<div class="form-group">
    {!! Form::label('category_name', 'Category Name:') !!}
    {!! Form::text('category_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gender_id', 'Gender:') !!}
    {!! Form::select('gender_id',$genders,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>