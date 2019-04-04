<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User</title>
    </head>
    <body>
        <h1>Daftar User</h1>
        <form action="{{route('auth.logout')}}" method="post">
            @csrf
            <button type="submit">Exit</button>
        </form>
        <table>
            <tr>
                <td>Nama</td>
                <td>Email</td>
                <td>Terdaftar pada</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
