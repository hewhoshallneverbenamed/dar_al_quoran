<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('session_id') }}
            {{ Form::text('session_id', $revision->session_id, ['class' => 'form-control' . ($errors->has('session_id') ? ' is-invalid' : ''), 'placeholder' => 'Session Id']) }}
            {!! $errors->first('session_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $revision->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jizie_from') }}
            {{ Form::text('jizie_from', $revision->jizie_from, ['class' => 'form-control' . ($errors->has('jizie_from') ? ' is-invalid' : ''), 'placeholder' => 'Jizie From']) }}
            {!! $errors->first('jizie_from', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jizie_to') }}
            {{ Form::text('jizie_to', $revision->jizie_to, ['class' => 'form-control' . ($errors->has('jizie_to') ? ' is-invalid' : ''), 'placeholder' => 'Jizie To']) }}
            {!! $errors->first('jizie_to', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surah_from') }}
            {{ Form::text('surah_from', $revision->surah_from, ['class' => 'form-control' . ($errors->has('surah_from') ? ' is-invalid' : ''), 'placeholder' => 'Surah From']) }}
            {!! $errors->first('surah_from', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surah_to') }}
            {{ Form::text('surah_to', $revision->surah_to, ['class' => 'form-control' . ($errors->has('surah_to') ? ' is-invalid' : ''), 'placeholder' => 'Surah To']) }}
            {!! $errors->first('surah_to', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('page_from') }}
            {{ Form::text('page_from', $revision->page_from, ['class' => 'form-control' . ($errors->has('page_from') ? ' is-invalid' : ''), 'placeholder' => 'Page From']) }}
            {!! $errors->first('page_from', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('page_to') }}
            {{ Form::text('page_to', $revision->page_to, ['class' => 'form-control' . ($errors->has('page_to') ? ' is-invalid' : ''), 'placeholder' => 'Page To']) }}
            {!! $errors->first('page_to', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grade') }}
            {{ Form::text('grade', $revision->grade, ['class' => 'form-control' . ($errors->has('grade') ? ' is-invalid' : ''), 'placeholder' => 'Grade']) }}
            {!! $errors->first('grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notes') }}
            {{ Form::text('notes', $revision->notes, ['class' => 'form-control' . ($errors->has('notes') ? ' is-invalid' : ''), 'placeholder' => 'Notes']) }}
            {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ayya_from') }}
            {{ Form::text('ayya_from', $revision->ayya_from, ['class' => 'form-control' . ($errors->has('ayya_from') ? ' is-invalid' : ''), 'placeholder' => 'Ayya From']) }}
            {!! $errors->first('ayya_from', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ayya_to') }}
            {{ Form::text('ayya_to', $revision->ayya_to, ['class' => 'form-control' . ($errors->has('ayya_to') ? ' is-invalid' : ''), 'placeholder' => 'Ayya To']) }}
            {!! $errors->first('ayya_to', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>