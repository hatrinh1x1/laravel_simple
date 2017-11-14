<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap3.7.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{  asset('pulgin/chosen/chosen.css')}}">
    <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Admin</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        @role('admin')
                        <li><a href="{{route('categories.index')}}">Categories</a></li>
                        @endrole
                        <li><a href="{{route('products.index')}}">Products</a></li>
                        <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                        <li><a href="{{route('roles.index')}}">Roles</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
        <div class="panel panel-default">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {!! Session::get('flash_message') !!}
                </div>
            @endif
            @yield('content')
        </div>
        <div class="space50">&nbsp;</div>
    </div>
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script src="{{ asset('pulgin/chosen/chosen.jquery.js') }}"></script>
<script>
    $(".select-all").chosen({
        placeholder_text_multiple:'sdsdsdsds'
    });
    @yield('js')
    $("div.alert").delay(3000).slideUp();
</script>
</body>
</html>