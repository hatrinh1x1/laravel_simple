<div class="col-md-12 col-md-offset-11">
    <a href="{{route('categories.index')}}" class="btn btn-info">View</a>
</div>
@include('errors.list')
    <div class="form-group">
        {!! Form::label ('name','Name',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('description','Description',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('status','Status',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::select('status', [1 => 'Active', 0 => 'Inactive'], null) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit($submitButtonText,array('class'=>'btn btn-info col-sm-offset-6')) !!}
    </div>