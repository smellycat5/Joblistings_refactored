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
        <h1 class="my-5">Edit Organization info</h1>
        <a class="btn btn-primary" href="{{ route('organization.index') }}">back</a>
        <form action="{{ route('organization.update', $organization->id) }}" method="POST" class="p-4 bg-light">
            <!-- CSRF token field -->
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Organization name</label>
                <input type="text" id="title" name="name" class="form-control"
                    value="{{ $organization->name }}">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" class="form-control"
                    value="{{ $organization->location }}">
                @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif
            </div>
    
    <div class="form-group">
        <label for="location">Email</label>
        <input type="email" id="email" name="email" class="form-control">
        @if ($errors->has('location'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Edit confirm</button>
    </div>
    </form>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
