<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('teacher_id1') }}
            {{ Form::text('teacher_id1', $exam->teacher_id1, ['class' => 'form-control' . ($errors->has('teacher_id1') ? ' is-invalid' : ''), 'placeholder' => 'Teacher Id1']) }}
            {!! $errors->first('teacher_id1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teacher_id2') }}
            {{ Form::text('teacher_id2', $exam->teacher_id2, ['class' => 'form-control' . ($errors->has('teacher_id2') ? ' is-invalid' : ''), 'placeholder' => 'Teacher Id2']) }}
            {!! $errors->first('teacher_id2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teacher_id3') }}
            {{ Form::text('teacher_id3', $exam->teacher_id3, ['class' => 'form-control' . ($errors->has('teacher_id3') ? ' is-invalid' : ''), 'placeholder' => 'Teacher Id3']) }}
            {!! $errors->first('teacher_id3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('center_teacher_student_id') }}
            {{ Form::text('center_teacher_student_id', $exam->center_teacher_student_id, ['class' => 'form-control' . ($errors->has('center_teacher_student_id') ? ' is-invalid' : ''), 'placeholder' => 'Center Teacher Student Id']) }}
            {!! $errors->first('center_teacher_student_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('b') }}
            {{ Form::text('b', $exam->b, ['class' => 'form-control' . ($errors->has('b') ? ' is-invalid' : ''), 'placeholder' => 'B']) }}
            {!! $errors->first('b', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarik') }}
            {{ Form::text('tarik', $exam->tarik, ['class' => 'form-control' . ($errors->has('tarik') ? ' is-invalid' : ''), 'placeholder' => 'Tarik']) }}
            {!! $errors->first('tarik', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grade') }}
            {{ Form::text('grade', $exam->grade, ['class' => 'form-control' . ($errors->has('grade') ? ' is-invalid' : ''), 'placeholder' => 'Grade']) }}
            {!! $errors->first('grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jizie_from') }}
            {{ Form::text('jizie_from', $exam->jizie_from, ['class' => 'form-control' . ($errors->has('jizie_from') ? ' is-invalid' : ''), 'placeholder' => 'Jizie From']) }}
            {!! $errors->first('jizie_from', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jizie_to') }}
            {{ Form::text('jizie_to', $exam->jizie_to, ['class' => 'form-control' . ($errors->has('jizie_to') ? ' is-invalid' : ''), 'placeholder' => 'Jizie To']) }}
            {!! $errors->first('jizie_to', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descision') }}
            {{ Form::text('descision', $exam->descision, ['class' => 'form-control' . ($errors->has('descision') ? ' is-invalid' : ''), 'placeholder' => 'Descision']) }}
            {!! $errors->first('descision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('note') }}
            {{ Form::text('note', $exam->note, ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''), 'placeholder' => 'Note']) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>