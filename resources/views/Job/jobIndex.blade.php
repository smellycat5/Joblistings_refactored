<!DOCTYPE html>
<html>
  <head>
    <title>Job Listings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="my-5">Job Listings</h1>
      <a href="{{ route('job.create') }}" class="btn btn-primary mb-4">Create Job</a>
      <a href="{{ route('organization.create') }}" class="btn btn-primary mb-4">Create Organization</a>
      <a href="{{ route('organization.index') }}" class="btn btn-primary mb-4">Organization List</a>
    </div>
      <table class="table">
      <thead>
        <tr>
          <th>Job Title</th>
          <th>Job Description</th>
          <th>Salary</th>
          <th>Location</th>
          <th>Orgaznization</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($jobs as $job)
          <tr>
            <td>{{ $job->title }}</td>
            <td>{{ $job->description }}</td>
            <td>{{ $job->salary }}</td>
            <td>{{ $job->location }}</td>
            <td>{{ $job->organization->name ?? ""}}</td>
            <form action="{{ route('job.destroy', $job->id)}}" method="POST" class="p-4 bg-light">
             
            <td><a href="{{ route('job.show', [$job->id]) }}" class="btn btn-success">Apply</a></td>
            <td><a href="{{ route('job.edit', [$job->id]) }}" class="btn btn-success">Edit</a></td>
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
