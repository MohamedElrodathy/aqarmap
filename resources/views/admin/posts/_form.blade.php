<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('title', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Body', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', 'Category', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'required','placeholder' => 'Please Select']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    </div>
</div>



