@extends('layouts.app')

@section('template_title')
    Revision
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Revision') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('revisions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Session Id</th>
										<th>Date</th>
										<th>Jizie From</th>
										<th>Jizie To</th>
										<th>Surah From</th>
										<th>Surah To</th>
										<th>Page From</th>
										<th>Page To</th>
										<th>Grade</th>
										<th>Notes</th>
										<th>Ayya From</th>
										<th>Ayya To</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($revisions as $revision)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $revision->session_id }}</td>
											<td>{{ $revision->date }}</td>
											<td>{{ $revision->jizie_from }}</td>
											<td>{{ $revision->jizie_to }}</td>
											<td>{{ $revision->surah_from }}</td>
											<td>{{ $revision->surah_to }}</td>
											<td>{{ $revision->page_from }}</td>
											<td>{{ $revision->page_to }}</td>
											<td>{{ $revision->grade }}</td>
											<td>{{ $revision->notes }}</td>
											<td>{{ $revision->ayya_from }}</td>
											<td>{{ $revision->ayya_to }}</td>

                                            <td>
                                                <form action="{{ route('revisions.destroy',$revision->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('revisions.show',$revision->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('revisions.edit',$revision->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $revisions->links() !!}
            </div>
        </div>
    </div>
@endsection
