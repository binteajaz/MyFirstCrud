
@if (session("status"))
    <div class="alert alert-success">{{ session("status") }}</div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    #head{
        text-align: center;
    }
</style>


</head>
<body>
    <div class="container">
    <h1 id="head" class="mt-4 p-5 bg-dark text-white rounded">Data Insertion Table</h1>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
                <th>Action</th>
            </thead>
            
            @foreach ($data as $newData)
                <tr>
                    <td class="table-light">{{ $newData->id }}</td>
                    <td class="table-light">{{ $newData->name }}</td>
                    <td class="table-light">{{ $newData->email }}</td>
                    <td class="table-light">{{ $newData->password }}</td>
                    <td><img src="{{$newData->image }}" class="rounded-circle" alt="" width="50px" height="50px"></td>
                    <td class="table-light">
                        <div class="btn-group">
                            <a href="registration/{{ $newData->id }}/edit" class="btn-sm btn btn-dark" style="margin-right: 5px; height: 30px;">Edit</a>
                            <form action="/registration/{{ $newData->id }}/delete" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-sm btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
