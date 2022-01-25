@extends('admin.layout')

@section('body')
<div class="container-fluid py-5">
    <div class="row">

   
        <div class="col-md-10 offset-md-1">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>All Orders</h3>
            </div>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">user</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
@foreach ($comments as $com )
<tr>
    <th scope="row">{{ $com->id }}</th>
    <td>{{ $com->comment }}</td>
    <td>{{ $com->user->name }}</td>
    <td>{{ $com->status }}</td>

    <td>
        <a class="btn btn-sm btn-primary" href="{{ url("/comment/action/$com->id") }}">
            <i class="fas fa-eye"></i>
        </a>
    </td>
  </tr>


@endforeach



                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
