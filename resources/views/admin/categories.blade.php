@extends('admin.layout')


@section('body')




<div class="container-fluid py-5">

    <div class="row">

        @if (request()->session()->has('msg-update'))
        <div class="alert alert-success" style="height: 50px">
         <p>  {{ request()->session()->get('msg-update') }} </p>


        </div>
        @endif


        <div class="col-md-10 offset-md-1">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>All Categories</h3>
                <a href="{{ url('show_cat') }} "class="btn btn-success">
                    Add new
                </a>
            </div>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($cats as $cat)

                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->created_at }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ url('/show_edit_cat',$cat->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="">
                                <i class="fas fa-trash"></i>
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
