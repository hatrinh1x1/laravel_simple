    <div class="col-md-12 col-md-offset-11">
        <a href="{{route('roles.index')}}" class="btn btn-info">View</a>
    </div>
@include('errors.list')
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
    <div class="form-group">
        {!! Form::submit($submitButtonText,array('class'=>'btn btn-info col-sm-offset-6')) !!}
    </div>

