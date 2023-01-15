<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('teacherid') }}
            {{ Form::text('teacherid', $session->teacherid, ['class' => 'form-control' . ($errors->has('teacherid') ? ' is-invalid' : ''), 'placeholder' => 'Teacherid']) }}
            {!! $errors->first('teacherid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('studentid') }}
            {{ Form::text('studentid', $session->studentid, ['class' => 'form-control' . ($errors->has('studentid') ? ' is-invalid' : ''), 'placeholder' => 'Studentid']) }}
            {!! $errors->first('studentid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('centerid') }}
            {{ Form::text('centerid', $session->centerid, ['class' => 'form-control' . ($errors->has('centerid') ? ' is-invalid' : ''), 'placeholder' => 'Centerid']) }}
            {!! $errors->first('centerid', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>