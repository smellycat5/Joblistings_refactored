@extends('components.layout')
@section('content')
<div class="card-front">
  <a class="btn btn-primary" href="{{ route('job.index') }}">back</a>
  <div class="center-wrap">
    <div class="section text-center">

  <h1 class="mb-3 pb-3"> Create Job</h1>
     
      <form action="{{ route('job.store') }}" method="POST" class="p-4 bg-light">
        <!-- CSRF token field -->
        @csrf
        <div class="form-group mt-2">
          <label for="title">Job Title</label>
          <input type="text" id="title" name="title" class="form-control">
          @if ($errors->has('title'))
          <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
      
        <div class="form-group mt-2">
          <label for="description">Job Description</label>
          <textarea id="description" name="description" class="form-control"></textarea>
          @if ($errors->has('description'))
          <span class="text-danger">{{ $errors->first('description') }}</span>
          @endif
        </div>
      
        <div class="form-group mt-2">
          <label for="salary">Salary</label>
          
          <input type="number" id="salary" name="salary" class="form-control">
          @if ($errors->has('salary'))
          <span class="text-danger">{{ $errors->first('salary') }}</span>
          @endif
        </div>
      
        <div class="form-group mt-2">
          <label for="location">Location</label>
          <input type="text" id="location" name="location" class="form-control">
          @if ($errors->has('location'))
          <span class="text-danger">{{ $errors->first('location') }}</span>
            @endif
        </div>
        <div class="form-group mt-2">
          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Organizations</label>
            <select name="organization_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected value="#">Choose...</option>
              @foreach ($organizations as $organization)
              <option value="{{$organization->id}}" >{{ $organization->name }}</option>
             @endforeach
            </select>
          </div>
          <button type="submit" class="btn mt-4" name="send">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection