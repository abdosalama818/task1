@extends('admin.layout')


@section('body')
<div class="container py-5">
    <div class="row">

        <div class="col-md-6 offset-md-3">
            <h3 class="mb-3">Edit Category :</h3>
            <div class="card">
                <div class="card-body p-5">
                    <form method="POST" action="{{ url('/update/cat',$cat->id) }}">
                        @csrf
                        <div class="form-group">
                          <label>Name</label>
                          
                          <input type="text" name="name" value="{{ $cat->name }}" class="form-control">
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-dark" href="#">Back</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
