@extends('layouts.app')

@section('template_title')
    {{ $revision->name ?? 'Show Revision' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Revision</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('revisions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Session Id:</strong>
                            {{ $revision->session_id }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $revision->date }}
                        </div>
                        <div class="form-group">
                            <strong>Jizie From:</strong>
                            {{ $revision->jizie_from }}
                        </div>
                        <div class="form-group">
                            <strong>Jizie To:</strong>
                            {{ $revision->jizie_to }}
                        </div>
                        <div class="form-group">
                            <strong>Surah From:</strong>
                            {{ $revision->surah_from }}
                        </div>
                        <div class="form-group">
                            <strong>Surah To:</strong>
                            {{ $revision->surah_to }}
                        </div>
                        <div class="form-group">
                            <strong>Page From:</strong>
                            {{ $revision->page_from }}
                        </div>
                        <div class="form-group">
                            <strong>Page To:</strong>
                            {{ $revision->page_to }}
                        </div>
                        <div class="form-group">
                            <strong>Grade:</strong>
                            {{ $revision->grade }}
                        </div>
                        <div class="form-group">
                            <strong>Notes:</strong>
                            {{ $revision->notes }}
                        </div>
                        <div class="form-group">
                            <strong>Ayya From:</strong>
                            {{ $revision->ayya_from }}
                        </div>
                        <div class="form-group">
                            <strong>Ayya To:</strong>
                            {{ $revision->ayya_to }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
