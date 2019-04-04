<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Middleware</title>
    </head>
    <body>

        <form action="{{url('/film')}}" method="get">
            @csrf
            <label for="">
                Umur anda
                <input type="text" name="umur">
            </label>
            <input type="submit" name="" value="Kirim">
        </form>

    </body>
</html>
