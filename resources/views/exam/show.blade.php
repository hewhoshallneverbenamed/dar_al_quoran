@extends('layouts.app')

@section('template_title')
    {{ $exam->name ?? 'Show Exam' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Exam</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exams.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Teacher Id1:</strong>
                            {{ $exam->teacher_id1 }}
                        </div>
                        <div class="form-group">
                            <strong>Teacher Id2:</strong>
                            {{ $exam->teacher_id2 }}
                        </div>
                        <div class="form-group">
                            <strong>Teacher Id3:</strong>
                            {{ $exam->teacher_id3 }}
                        </div>
                        <div class="form-group">
                            <strong>Center Teacher Student Id:</strong>
                            {{ $exam->center_teacher_student_id }}
                        </div>
                        <div class="form-group">
                            <strong>B:</strong>
                            {{ $exam->b }}
                        </div>
                        <div class="form-group">
                            <strong>Tarik:</strong>
                            {{ $exam->tarik }}
                        </div>
                        <div class="form-group">
                            <strong>Grade:</strong>
                            {{ $exam->grade }}
                        </div>
                        <div class="form-group">
                            <strong>Jizie From:</strong>
                            {{ $exam->jizie_from }}
                        </div>
                        <div class="form-group">
                            <strong>Jizie To:</strong>
                            {{ $exam->jizie_to }}
                        </div>
                        <div class="form-group">
                            <strong>Descision:</strong>
                            {{ $exam->descision }}
                        </div>
                        <div class="form-group">
                            <strong>Note:</strong>
                            {{ $exam->note }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
