<!DOCTYPE html>
<html>

<head>
    <title>organization Listings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-5">Organization Listings</h1>
        <a href="{{ route('job.index') }}" class="btn btn-primary mb-4">Back</a>
        <a href="{{ route('organization.create') }}" class="btn btn-primary mb-4">Create organization</a>

    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Jobs Count</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $organization)
                {{-- @dd($organization); --}}
                <tr>
                    <td>{{ $organization->name }}</td>
                    <td>{{ $organization->location }}</td>
                    <td>{{ $organization->job_count }}</td>
                    <form action="{{ route('organization.destroy', $organization->id) }}" method="POST"
                        class="p-4 bg-light">

                        <td><a href="{{ route('jobByOrganizationName', $organization->id) }}"
                                class="btn btn-success">View Jobs</a></td>
                        <td><a href="{{ route('organization.edit', $organization->id) }}"
                                class="btn btn-success">Edit</a>
                        </td>
                        <td><a href="{{ route('organization.show', $organization->id) }}"
                            class="btn btn-success">Details</a></td>
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
            @empty
                <td> no users</td>
            @endforelse
        </tbody>
    </table>
    </div>

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
