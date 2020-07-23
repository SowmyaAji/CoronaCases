@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Corona Virus Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('coronas.update', $coronacase->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Country</label>
              <input type="text" class="form-control" name="country_name" value="{{ $coronacase->country_name }}"/>
          </div>
          <div class="form-group">
              <label for="symptoms">Disease Details</label>
              <textarea rows="5" columns="5" class="form-control" name="symptoms">{{ $coronacase->symptoms }}</textarea>
          </div>
          <div class="form-group">
              <label for="cases">Cases</label>
              <input type="text" class="form-control" name="cases" value="{{ $coronacase->cases }}"/>
          </div>
          <div class="form-group">
                        <label for="fatalities">Number of fatalities</label>
                        <input type="text" name="fatalities" class="form-control" value="{{ $coronacase->fatalities }}">
                    </div>
          <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
  </div>
</div>
@endsection