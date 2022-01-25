@extends('admin.layout')


@section('body')


<div class="container py-5">
    <div class="row">

        <div class="col-md-6 offset-md-3">
            <h3 class="mb-3">Edit Post : {{ $post->name }} here</h3>
            <div class="card">
                <div class="card-body p-5">
                <form method="POST" enctype="multipart/form-data" action="{{ url('/add/post',$post->id) }}">
                    @csrf
                        <div class="form-group">
                          <label>Name</label>
                          <input name="title" type="text" value="{{ $post->title }}" class="form-control">
                        </div>
                        <input type="hidden" name="id" value="{{ $post->id }}">

                        <div class="form-group">
                            <label>Category</label>


                            <select class="form-control"  name="cat_id">
                              <option>Select Category</option>

                              @foreach ($cats as $cat)
                              <option value="{{ $cat->id }}" > {{ $cat->name }} </option>

                              @endforeach




                            </select>
                        </div>





                        <div class="form-group">
                            <label>content</label>
                            <textarea  name="content" class="form-control" rows="3">{{ $post->content }}</textarea>
                        </div>



                        <div class="text-center mt-5">
                            <button  name="submit" type="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-dark" href="#">Back</a>
                        </div>
                    </form>
            </div>
        </div>

    </div>
</div>


@endsection

