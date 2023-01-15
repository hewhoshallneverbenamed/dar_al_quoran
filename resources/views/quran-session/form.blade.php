<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('center_teacher_student_id') }}
            {{ Form::text('center_teacher_student_id', $quranSession->center_teacher_student_id, ['class' => 'form-control' . ($errors->has('center_teacher_student_id') ? ' is-invalid' : ''), 'placeholder' => 'Center Teacher Student Id']) }}
            {!! $errors->first('center_teacher_student_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('session_time') }}
            {{ Form::text('session_time', $quranSession->session_time, ['class' => 'form-control' . ($errors->has('session_time') ? ' is-invalid' : ''), 'placeholder' => 'Session Time']) }}
            {!! $errors->first('session_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('weekday') }}
            {{ Form::text('weekday', $quranSession->weekday, ['class' => 'form-control' . ($errors->has('weekday') ? ' is-invalid' : ''), 'placeholder' => 'Weekday']) }}
            {!! $errors->first('weekday', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>