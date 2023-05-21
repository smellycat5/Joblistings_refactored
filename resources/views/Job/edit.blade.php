<!DOCTYPE html>
<html>
  <head>
    <title>Create Job</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="my-5">Edit Job</h1>
      <a class="btn btn-primary" href="{{ route('job.index')}}">back</a>
      <form action="{{ route('job.update', $job->id)}}" method="POST" class="p-4 bg-light">
        <!-- CSRF token field -->
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="title">Job Title</label>
          <input type="text" id="title" name="title" class="form-control" value="{{$job -> title}}">
          @if ($errors->has('title'))
          <span class="text-danger">{{ $errors->first('title') }}</span>
      @endif
        </div>
      
        <div class="form-group">
          <label for="description">Job Description</label>
          <textarea id="description" name="description" class="form-control" >{{$job -> description}}</textarea>
          @if ($errors->has('description'))
          <span class="text-danger">{{ $errors->first('description') }}</span>
      @endif
        </div>
      
        <div class="form-group">
          <label for="salary">Salary</label>
          
          <input type="number" id="salary" name="salary" class="form-control" value="{{$job -> salary}}">
          @if ($errors->has('salary'))
          <span class="text-danger">{{ $errors->first('salary') }}</span>
      @endif
        </div>
      
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="location" class="form-control" value="{{$job -> location}}">
          @if ($errors->has('location'))
          <span class="text-danger">{{ $errors->first('location') }}</span>
      @endif
        </div>

        <button type="submit" class="btn btn-primary">Edit confirm</button>
      </div>
      </form>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
