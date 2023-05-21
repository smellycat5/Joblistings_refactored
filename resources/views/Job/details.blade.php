<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
	<title>Resource Details</title>
</head>
<body>
	<div class="container my-5">
		<div class="row">
			<div class="col-md-6">
				<h1 class="mb-3">{{$job->title}}</h1>
				<p class="lead mb-3"></p>
				<ul class="list-unstyled mb-3">
					<li><strong>Job Description:</strong> {{$job->description}} </li>
					<li><strong>Salary:</strong>{{$job->salary}}</li>
					<li><strong>Location:</strong>{{$job->location}}</li>
          <td><a href="{{ route('job.show', [$job->id]) }}" class="btn btn-success">Apply</a></td>
          <a class="btn btn-primary" href="{{ route('job.index')}}">Cancel</a>
				</ul>
      </div>
		</div>
	</div>
	<!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
