<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Job Listings</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">
</head>
<body>

  <div class="container py-4">
    <h1 class="mb-4">Job Listings</h1>

    <a href="{{ route('Job.create') }}" class="btn btn-primary mb-4">Create Job</a>

    <table class="table">
      <thead>
        <tr>
          <th>Job Title</th>
          <th>Job Description</th>
          <th>Salary</th>
          <th>Location</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($jobs as $job)
          <tr>
            <td>{{ $job->title }}</td>
            <td>{{ $job->description }}</td>
            <td>{{ $job->salary }}</td>
            <td>{{ $job->location }}</td>
         
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</html>
