@extends('layout')
@section('content')
<style>
    .uper{
        margin-top: 40px;
    }
</style>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Country</td>
                <td>Details</td>
                <td>Cases</td>
                <td>Fatalities</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
         
            <tr>
                <td>{{$coronacase->id}}</td>
                <td>{{$coronacase->country_name}}</td>
                <td>{{$coronacase->symptoms}}</td>
                <td>{{$coronacase->cases}}</td>
                <td>{{$coronacase->fatalities}}</td>
                <td><a href="{{ route('coronas.edit', $coronacase->id) }}" class="btn btn-primary">Edit</a></td>
                <td><form action="{{ route('coronas.destroy', $coronacase->id) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button> 
                </form></td>
            </tr>
          
        </tbody>
    </table>
</div>
@endsection
