@extends('layout')
@section('content')
<style>
    .uper(
        margin-top: 40px;
    )
</style>
<div class="card uper">
        <div class="card-header">
            Add Corona Data
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
                <form method="post" action="{{ route('coronas.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="country_name">Country</label>
                        <input type="text" name="country_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cases">Number of cases</label>
                        <input type="text" name="cases" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fatalities">Number of fatalities</label>
                        <input type="text" name="fatalities" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Add data</button>
                </form>
        </div>
</div>
@endsection