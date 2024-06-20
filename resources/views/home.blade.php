@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <table class="table table-striped table-hover">

                        <tr>
                        <th></th>
                        <th></th>
                        <div>
                            <th>
                                <a class="btn btn-sm btn-success" href="http://127.0.0.1:8000/dishes">Dishes </a>
                            </th>
                        </div>

                        <div>

                            <th><a class="btn btn-sm btn-success" href="http://127.0.0.1:8000/categories">Categores</a></th>
                        </div>

                        <div>

                            <th><a class="btn btn-sm btn-success" href="http://127.0.0.1:8000/tables">Tables</a></th>
                        </div>

                        <div>

                            <th> <a class="btn btn-sm btn-success" href="http://127.0.0.1:8000/orders">Orders</a></th>
                        </div>

                        </tr>




                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
