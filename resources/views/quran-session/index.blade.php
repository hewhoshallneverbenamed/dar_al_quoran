@extends('layouts.app')

@section('template_title')
    Quran Session
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('    جلسات القران
') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('quran-sessions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('جلسة جديدة') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>رقم</th>
                                        
										<!-- <th>Center Teacher Student Id</th> -->
										<th>وقت الجلسة</th>
										<th>اليوم</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quranSessions as $quranSession)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $quranSession->center_teacher_student_id }}</td> -->
											<td>{{ $quranSession->session_time }}</td>
											<td>{{ $quranSession->weekday }}</td>

                                            <td>
                                                <form action="{{ route('quran-sessions.destroy',$quranSession->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('quran-sessions.show',$quranSession->id) }}"><i class="fa fa-fw fa-eye"></i> مشاهده</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('quran-sessions.edit',$quranSession->id) }}"><i class="fa fa-fw fa-edit"></i> تعديل</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> مسح</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $quranSessions->links() !!}
            </div>
        </div>
    </div>
@endsection
