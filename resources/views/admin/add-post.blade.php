@extends('admin.layout')

@section('body')



<div class="container py-5">
    <div class="row">

        <div class="col-md-6 offset-md-3">
            <h3 class="mb-3">Add Post</h3>
            <div class="card">


                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error )
                        <p>{{ $error }}</p>
                    @endforeach
                </div>

                @endif

                    <form method="POST" action="{{ url('/save/post') }}">
                        @csrf
                        <div class="form-group">
                          <label>title</label>
                          <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="cat_id">
                            <option >Select Category</option>



@foreach ( $cats as $cat)
<option value="{{ $cat->id }}">{{ $cat->name }}</option>

@endforeach





                            </select>
                        </div>




                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content" rows="3"></textarea>
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-dark" href="#">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>





@endsection
