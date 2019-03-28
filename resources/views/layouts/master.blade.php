<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
    </head>
    <body>
        <div>
            <h1 style="text-align: center">Sekolah Koding Laravel</h1>
            <ul style="display: inline-block">
                <li> <a href="{{url('/')}}">Home</a> </li>
                <li> <a href="{{url('/blog')}}">Blog</a> </li>
                <li> <a href="{{url('/blog/single')}}">single</a> </li>
            </ul>
            <hr>
        </div>
        @yield('content')
        <div>
            <hr>
            <h4 style="text-align: center;">&copy; Copyright SKLaravel and Addthoriq</h4>
        </div>
    </body>
</html>
