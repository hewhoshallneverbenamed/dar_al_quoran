@extends('layouts.app')

@section('template_title')
    Student
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Student') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>User Id</th>
										<th>Is Ring</th>
										<th>First Name</th>
										<th>Middle Name</th>
										<th>Last Name</th>
										<th>Mother Name</th>
										<th>Gender</th>
										<th>Nationality</th>
										<th>Birth Date</th>
										<th>Martial Status</th>
										<th>School Uni</th>
										<th>Current Job</th>
										<th>Mobile Number</th>
										<th>Work Number</th>
										<th>Home Number</th>
										<th>Sheiks Name</th>
										<th>Address</th>
										<th>Level</th>
										<th>Suitable Times Days</th>
										<th>Female Question</th>
										<th>Has Ijaza</th>
										<th>Father Number</th>
										<th>Mother Number</th>
										<th>Skills</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $student->user_id }}</td>
											<td>{{ $student->is_ring }}</td>
											<td>{{ $student->first_name }}</td>
											<td>{{ $student->middle_name }}</td>
											<td>{{ $student->last_name }}</td>
											<td>{{ $student->mother_name }}</td>
											<td>{{ $student->gender }}</td>
											<td>{{ $student->nationality }}</td>
											<td>{{ $student->birth_date }}</td>
											<td>{{ $student->martial_status }}</td>
											<td>{{ $student->school_uni }}</td>
											<td>{{ $student->current_job }}</td>
											<td>{{ $student->mobile_number }}</td>
											<td>{{ $student->work_number }}</td>
											<td>{{ $student->home_number }}</td>
											<td>{{ $student->sheiks_name }}</td>
											<td>{{ $student->address }}</td>
											<td>{{ $student->level }}</td>
											<td>{{ $student->suitable_times_days }}</td>
											<td>{{ $student->female_question }}</td>
											<td>{{ $student->has_ijaza }}</td>
											<td>{{ $student->father_number }}</td>
											<td>{{ $student->mother_number }}</td>
											<td>{{ $student->skills }}</td>

                                            <td>
                                                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('students.show',$student->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('students.edit',$student->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $students->links() !!}
            </div>
        </div>
    </div>
@endsection
