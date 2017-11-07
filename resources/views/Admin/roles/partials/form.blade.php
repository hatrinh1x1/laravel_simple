@include('errors.list')
<div class="container">
    <div class="form-group">
        {!! Form::label ('name','Name',array('class'=>'control-label col-sm-2'))!!}
        <div class="col-sm-8">
            {!! Form::text('name',null,array('class'=>'form-control ')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('display_name','Display_name',array('class'=>'control-label col-sm-2'))!!}
        <div class="col-sm-8">
            {!! Form::text('display_name',null,array('class'=>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('description','Description',array('class'=>'control-label col-sm-2'))!!}
        <div class="col-sm-8">
            {!! Form::text('description',null,array('class'=>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('permissions','Permissions',array('class'=>'control-label col-sm-2'))!!}
        <div class="col-sm-8">
            {!! Form::select('perms[]', $permission, null,
            ['class' => 'form-control select-all','multiple','required']) !!}
        </div>
    </div>
        {!! Form::submit($submitButtonText,array('class'=>'btn btn-info col-sm-offset-6')) !!}
</div>
