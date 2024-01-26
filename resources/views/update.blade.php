
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <form action="/registration/{{ $data->id }}/update" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')

        <h1>Update Form</h1>
        <div class="mb-3"> 
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="name" class="form-control" value="{{ old('name',$data->name)}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            @error('name') 
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        <div class="mb-3"> 
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control"value="{{ old('email',$data->email)}}"id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          @error('email') 
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="text" value="{{ old('password',$data->password)}}" class="form-control" id="exampleInputPassword1" name="password">
          @error('password') 
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      
        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</body>
</html>