@extends('layouts.app')
@section('content')
<form action="{{url('/students')}}" method="post">
    @csrf {{-- <- Required for protection or the form is rejected --}}
    First Name: <input type="text" name="firstName" value="{{old('firstName')}}">
    Last Name: <input type="text" name="lastName" value="{{old('lastName')}}">
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
