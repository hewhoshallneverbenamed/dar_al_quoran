<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $student->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_ring') }}
            {{ Form::text('is_ring', $student->is_ring, ['class' => 'form-control' . ($errors->has('is_ring') ? ' is-invalid' : ''), 'placeholder' => 'Is Ring']) }}
            {!! $errors->first('is_ring', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $student->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('middle_name') }}
            {{ Form::text('middle_name', $student->middle_name, ['class' => 'form-control' . ($errors->has('middle_name') ? ' is-invalid' : ''), 'placeholder' => 'Middle Name']) }}
            {!! $errors->first('middle_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $student->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mother_name') }}
            {{ Form::text('mother_name', $student->mother_name, ['class' => 'form-control' . ($errors->has('mother_name') ? ' is-invalid' : ''), 'placeholder' => 'Mother Name']) }}
            {!! $errors->first('mother_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender') }}
            {{ Form::text('gender', $student->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nationality') }}
            {{ Form::text('nationality', $student->nationality, ['class' => 'form-control' . ($errors->has('nationality') ? ' is-invalid' : ''), 'placeholder' => 'Nationality']) }}
            {!! $errors->first('nationality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birth_date') }}
            {{ Form::text('birth_date', $student->birth_date, ['class' => 'form-control' . ($errors->has('birth_date') ? ' is-invalid' : ''), 'placeholder' => 'Birth Date']) }}
            {!! $errors->first('birth_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('martial_status') }}
            {{ Form::text('martial_status', $student->martial_status, ['class' => 'form-control' . ($errors->has('martial_status') ? ' is-invalid' : ''), 'placeholder' => 'Martial Status']) }}
            {!! $errors->first('martial_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('school_uni') }}
            {{ Form::text('school_uni', $student->school_uni, ['class' => 'form-control' . ($errors->has('school_uni') ? ' is-invalid' : ''), 'placeholder' => 'School Uni']) }}
            {!! $errors->first('school_uni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('current_job') }}
            {{ Form::text('current_job', $student->current_job, ['class' => 'form-control' . ($errors->has('current_job') ? ' is-invalid' : ''), 'placeholder' => 'Current Job']) }}
            {!! $errors->first('current_job', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile_number') }}
            {{ Form::text('mobile_number', $student->mobile_number, ['class' => 'form-control' . ($errors->has('mobile_number') ? ' is-invalid' : ''), 'placeholder' => 'Mobile Number']) }}
            {!! $errors->first('mobile_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('work_number') }}
            {{ Form::text('work_number', $student->work_number, ['class' => 'form-control' . ($errors->has('work_number') ? ' is-invalid' : ''), 'placeholder' => 'Work Number']) }}
            {!! $errors->first('work_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('home_number') }}
            {{ Form::text('home_number', $student->home_number, ['class' => 'form-control' . ($errors->has('home_number') ? ' is-invalid' : ''), 'placeholder' => 'Home Number']) }}
            {!! $errors->first('home_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sheiks_name') }}
            {{ Form::text('sheiks_name', $student->sheiks_name, ['class' => 'form-control' . ($errors->has('sheiks_name') ? ' is-invalid' : ''), 'placeholder' => 'Sheiks Name']) }}
            {!! $errors->first('sheiks_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $student->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('level') }}
            {{ Form::text('level', $student->level, ['class' => 'form-control' . ($errors->has('level') ? ' is-invalid' : ''), 'placeholder' => 'Level']) }}
            {!! $errors->first('level', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suitable_times_days') }}
            {{ Form::text('suitable_times_days', $student->suitable_times_days, ['class' => 'form-control' . ($errors->has('suitable_times_days') ? ' is-invalid' : ''), 'placeholder' => 'Suitable Times Days']) }}
            {!! $errors->first('suitable_times_days', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('female_question') }}
            {{ Form::text('female_question', $student->female_question, ['class' => 'form-control' . ($errors->has('female_question') ? ' is-invalid' : ''), 'placeholder' => 'Female Question']) }}
            {!! $errors->first('female_question', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('has_ijaza') }}
            {{ Form::text('has_ijaza', $student->has_ijaza, ['class' => 'form-control' . ($errors->has('has_ijaza') ? ' is-invalid' : ''), 'placeholder' => 'Has Ijaza']) }}
            {!! $errors->first('has_ijaza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('father_number') }}
            {{ Form::text('father_number', $student->father_number, ['class' => 'form-control' . ($errors->has('father_number') ? ' is-invalid' : ''), 'placeholder' => 'Father Number']) }}
            {!! $errors->first('father_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mother_number') }}
            {{ Form::text('mother_number', $student->mother_number, ['class' => 'form-control' . ($errors->has('mother_number') ? ' is-invalid' : ''), 'placeholder' => 'Mother Number']) }}
            {!! $errors->first('mother_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills') }}
            {{ Form::text('skills', $student->skills, ['class' => 'form-control' . ($errors->has('skills') ? ' is-invalid' : ''), 'placeholder' => 'Skills']) }}
            {!! $errors->first('skills', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>