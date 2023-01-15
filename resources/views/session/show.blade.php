@extends('layouts.app')

@section('template_title')
    {{ $session->name ?? 'Show Session' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Session</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sessions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Teacherid:</strong>
                            {{ $session->teacherid }}
                        </div>
                        <div class="form-group">
                            <strong>Studentid:</strong>
                            {{ $session->studentid }}
                        </div>
                        <div class="form-group">
                            <strong>Centerid:</strong>
                            {{ $session->centerid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
