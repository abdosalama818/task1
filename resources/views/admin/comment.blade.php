@extends('admin.layout')
@section('body')
<div class="container py-5">
    <div class="row">

        <div class="col-md-6 offset-md-3">
            <h3 class="mb-3">Show Order : id </h3>
            <div class="card">
                <div class="card-body p-5">
                    <table class="table table-bordered">
                        <thead>
                            <th colspan="2" class="text-center">Customer</th>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Name</th>
                            <td>{{ $comment->user->name }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td>{{ $comment->user->email }}</td>
                          </tr>

                          <tr>
                            <th scope="row">Commnet</th>
                            <td>{{ $comment->comment }}</td>
                          </tr>

                          <tr>
                            <th scope="row">Time</th>
                            <td>{{ $comment->created_at }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Status</th>
                            <td>{{ $comment->status }}</td>
                          </tr>
                        </tbody>
                    </table>



                    <table class="table table-bordered">

                        </thead>
                        <tbody>
<form action="{{ url("approved/commnet/$comment->id") }}" method="post">
    @csrf
<button type="submit" class="btn btn-success">Approve</button>


</form>


<form action="{{ url("canceled/commnet/$comment->id") }}" method="post">
    @csrf

<button type="submit" class="btn btn-danger">Cancel</button>

</form>





                            </td>
                          </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-dark" href="orders.php">Back</a>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection
