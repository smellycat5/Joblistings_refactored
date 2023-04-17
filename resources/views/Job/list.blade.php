<!DOCTYPE html>
<html>
  <head>
    <title>Organization Listings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="my-5" name='organization_id'>Job listing by <b>{{ $organization ->name}}</b> organization</h1>
      <a class="btn btn-primary mb-4" href="{{ route('organization.index')}}">back</a>
      <a href="{{ route('organization.create') }}" class="btn btn-primary mb-4">Create Organization</a>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th>Job Title</th>
        <th>Job Description</th>
        <th>Salary</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($jobs as $job)
        <tr>
          <td>{{ $job->title }}</td>
          <td>{{ $job->description }}</td>
          <td>{{ $job->salary }}</td>
          <td>{{ $job->location }}</td>
          <form action="{{ route('organization.job.destroy', [$job->organization_id, $job->id])}}" method="POST" class="p-4 bg-light">
             
          <td>
            <a href="{{ route('job.show', [$job->id]) }}" class="btn btn-success">Apply</a></td>
            <td>
            <a href="{{ route('job.edit', [$job->id]) }}" class="btn btn-success">Edit</a></td>
            @csrf
            @method('DELETE')
            <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
