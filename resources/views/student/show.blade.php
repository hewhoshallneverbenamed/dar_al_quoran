@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? 'Show Student' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $student->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Is Ring:</strong>
                            {{ $student->is_ring }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $student->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Middle Name:</strong>
                            {{ $student->middle_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $student->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Mother Name:</strong>
                            {{ $student->mother_name }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $student->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Nationality:</strong>
                            {{ $student->nationality }}
                        </div>
                        <div class="form-group">
                            <strong>Birth Date:</strong>
                            {{ $student->birth_date }}
                        </div>
                        <div class="form-group">
                            <strong>Martial Status:</strong>
                            {{ $student->martial_status }}
                        </div>
                        <div class="form-group">
                            <strong>School Uni:</strong>
                            {{ $student->school_uni }}
                        </div>
                        <div class="form-group">
                            <strong>Current Job:</strong>
                            {{ $student->current_job }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile Number:</strong>
                            {{ $student->mobile_number }}
                        </div>
                        <div class="form-group">
                            <strong>Work Number:</strong>
                            {{ $student->work_number }}
                        </div>
                        <div class="form-group">
                            <strong>Home Number:</strong>
                            {{ $student->home_number }}
                        </div>
                        <div class="form-group">
                            <strong>Sheiks Name:</strong>
                            {{ $student->sheiks_name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $student->address }}
                        </div>
                        <div class="form-group">
                            <strong>Level:</strong>
                            {{ $student->level }}
                        </div>
                        <div class="form-group">
                            <strong>Suitable Times Days:</strong>
                            {{ $student->suitable_times_days }}
                        </div>
                        <div class="form-group">
                            <strong>Female Question:</strong>
                            {{ $student->female_question }}
                        </div>
                        <div class="form-group">
                            <strong>Has Ijaza:</strong>
                            {{ $student->has_ijaza }}
                        </div>
                        <div class="form-group">
                            <strong>Father Number:</strong>
                            {{ $student->father_number }}
                        </div>
                        <div class="form-group">
                            <strong>Mother Number:</strong>
                            {{ $student->mother_number }}
                        </div>
                        <div class="form-group">
                            <strong>Skills:</strong>
                            {{ $student->skills }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
