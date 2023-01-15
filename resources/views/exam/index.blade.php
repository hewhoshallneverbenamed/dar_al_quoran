@extends('layouts.app')

@section('template_title')
    Exam
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Exam') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('exams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Teacher Id1</th>
										<th>Teacher Id2</th>
										<th>Teacher Id3</th>
										<th>Center Teacher Student Id</th>
										<th>B</th>
										<th>Tarik</th>
										<th>Grade</th>
										<th>Jizie From</th>
										<th>Jizie To</th>
										<th>Descision</th>
										<th>Note</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exams as $exam)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $exam->teacher_id1 }}</td>
											<td>{{ $exam->teacher_id2 }}</td>
											<td>{{ $exam->teacher_id3 }}</td>
											<td>{{ $exam->center_teacher_student_id }}</td>
											<td>{{ $exam->b }}</td>
											<td>{{ $exam->tarik }}</td>
											<td>{{ $exam->grade }}</td>
											<td>{{ $exam->jizie_from }}</td>
											<td>{{ $exam->jizie_to }}</td>
											<td>{{ $exam->descision }}</td>
											<td>{{ $exam->note }}</td>

                                            <td>
                                                <form action="{{ route('exams.destroy',$exam->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('exams.show',$exam->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('exams.edit',$exam->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $exams->links() !!}
            </div>
        </div>
    </div>
@endsection
