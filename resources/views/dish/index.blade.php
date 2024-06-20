@extends('layouts.app')

@section('template_title')
    Dishes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dishes') }}
                            </span>

                             <div class="float-right">
                                <a class="btn btn-sm btn-primary" href="http://127.0.0.1:8000/home">Back </a>
                                <a href="{{ route('dishes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Name</th>
									<th >Description</th>
									<th >Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dishes as $dish)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $dish->name }}</td>
										<td >{{ $dish->description }}</td>
										<td >{{ $dish->price }}</td>

                                            <td>
                                                <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dishes.show', $dish->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dishes.edit', $dish->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $dishes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
