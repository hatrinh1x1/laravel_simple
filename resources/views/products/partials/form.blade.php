<div class="col-md-12 col-md-offset-11">
    <a href="{{route('products.index')}}" class="btn btn-info">View</a>
</div>
@include('errors.list')
    <div class="form-group">
        {!! Form::label ('name','Name',array('class'=>'control-label col-sm-2'))!!}
        <div class="col-sm-8">
            {!! Form::text('name',null,array('class'=>'form-control ')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('description','Description',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('description','Description',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::select('status', [1 => 'Active', 0 => 'Inactive'], null) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('priority','Priority',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-2">
            {!! Form::text('priority', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label ('categories','Categories',['class'=>'control-label col-sm-2'])!!}
        <div class="col-sm-8">
            {!! Form::select('categories[]', $categories, null,
            ['class' => 'form-control select-all','multiple','required']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit($submitButtonText,['class'=>'btn btn-info col-sm-offset-6']) !!}
    </div>