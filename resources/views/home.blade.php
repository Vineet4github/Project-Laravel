<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h4 class="bg-success text-center mt-2 p-2 text-light">CRUD Example <a href="/add"><i
                class="fa fa-plus text-light"></i></a></h4>
    <table class="table table-light table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Designation</th>
            <th>Email</th>
            <th>City</th>
            <th>State</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->state}}</td>
                <td><a href="/update/{{$item->id}}" class="btn text-primary"><i class="fa fa-edit"></i></a></td>
                {{-- <td><a href="/delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td> --}}
                <td><button onclick="deleteData({{$item->id}})" class="btn  text-primary"><i class="fa fa-trash"></i></button></td>

            </tr>
        @endforeach
    </table>
    <script>
        function deleteData(num){
            if(confirm("Are You Sure!! You want to Delete This item"))
            window.open(`http://127.0.0.1:8000/delete/`+num)
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
