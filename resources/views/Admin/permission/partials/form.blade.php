<div class="col-md-12 col-md-offset-11">
    <a href="{{route('permissions.index')}}" class="btn btn-info">View</a>
</div>
@include('errors.list')
    <div class="form-group">
        {!! Form::label ('name','Name',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::text('name',null,['class'=>'form-control ', 'placeholder'=>'Enter Name']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('display_name','Display_name',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::text('display_name',null,['class'=>'form-control', 'placeholder'=>'Enter Display_name']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('description','Description',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Enter Description']) !!}
        </div>
    </div>
    <div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-info col-sm-offset-6']) !!}
    </div>
