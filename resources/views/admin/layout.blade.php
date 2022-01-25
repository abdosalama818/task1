

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techstore | Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">TechStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/post') }}">Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/cat') }}">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/comments') }}">Comments</a>
                </li>



            </ul>
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ url('admin/prifile') }}">Profile</a>
                      <!-- Authentication -->

                        <!-- Authentication -->
                        <form id="form" method="POST" action="{{ route('logout') }}" style="display: none">
                            @csrf

                        </form>
                        <a id="link" href="#" style="color: #000;
                        padding: 14px 25px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;"> logout</a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>

@yield('body')




    <script src="{{ asset('js/jquery-3.5.1.min.js ')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js ')}}"></script>
    <script>
        $('#link').click(function(e){
            e.preventDefault()
            $('#form').submit()
        })
    </script>
</body>
</html>
