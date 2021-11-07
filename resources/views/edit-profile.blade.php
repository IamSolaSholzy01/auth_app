@extends('layouts.app')

<style>
    .update .card{
    width: 80%;
    height: 80vh;
    margin: auto;
}
form{
    margin: auto;
}
</style>

@section('content')
<section class="update">
<div class="card p-5">
    <form action="{{ route('profile') }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('post') }}
        <h4>Update Profile</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 p-1">
                    <input name="name" type="text" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="col-md-6 p-1">
                    <input name="username" type="text" value="{{ $user->username }}" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 p-1">
                    <input name="email" type="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="col-md-6 p-1">
                    <select name="gender" id="gender" class="form-control">
                        <option hidden>Select Gender</option>
                        <option {{$user->gender == 'male' ? "selected=true" : "" }} value="male">Male</option>
                        <option {{$user->gender == 'female' ? "selected=true" : "" }} value="female">Female</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <input class="form-control" type="date" name="dob" id="dob" value="{{ $user->dob }}">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
</section>
@endsection
