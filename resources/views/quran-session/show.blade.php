@extends('layouts.app')

@section('template_title')
    {{ $quranSession->name ?? 'Show Quran Session' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Quran Session</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('quran-sessions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Center Teacher Student Id:</strong>
                            {{ $quranSession->center_teacher_student_id }}
                        </div>
                        <div class="form-group">
                            <strong>Session Time:</strong>
                            {{ $quranSession->session_time }}
                        </div>
                        <div class="form-group">
                            <strong>Weekday:</strong>
                            {{ $quranSession->weekday }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
