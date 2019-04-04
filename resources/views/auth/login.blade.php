<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="{{route('auth.login')}}" method="post">
            @csrf
            <label for="">
                Email :
                <input type="email" name="email">
            </label>
            <label for="">
                Password :
                <input type="password" name="password">
            </label>
            <input type="submit" name="" value="Kirim">
        </form>
    </body>
</html>
