
@extends('admin.layout')


@section('body')
<div class="container-fluid py-5">
    <div class="row">

        <div class="col-md-10 offset-md-1">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>All Products</h3>
                <a href="{{ url('/add/post') }}" class="btn btn-success">
                    Add new
                </a>
            </div>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">post</th>

                    <th scope="col">Category</th>



                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>

                <tbody>

                        @foreach ($posts as $post )

                        <tr>
                            <th scope="row">{{ $post->id }}</th>

                            <td>{{ $post->title }}</td>



                            <td>{{ $post->cat->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ url('/edit/post',$post->id) }}">
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



