<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <h1>Prueba de ORM</h1>

    <br>

    <table class="table">
        <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Dato1</td>
                <td scope="col">Dato2</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td scope="row">{{$d->id}}</td>
                    <td scope="row">{{$d->dato1}}</td>
                    <td scope="row">{{$d->dato2}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{url('crud/create')}}" class="btn btn-primary">Nuevo registro</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</body>

</html>
