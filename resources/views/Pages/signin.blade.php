@extends('layouts.master')
@section('signin')
    active
@endsection

@section('title')
    Sign In
@endsection

@section('content')
    <div class="container">
         <div class="row" style="margin:0px; padding-top:60px;">
             @if($errors->count() >0)
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error){{-- this will return array of strings--}}
                     <li>{{$error}}</li>
                     @endforeach
                 </div>
             @endif
              <form class="panel panel-warning" method="post" action="/signIn/request" style="padding:60px;">
                  {{csrf_field()}}
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input name="email" type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input name="password" type="password" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Re-Password</label>
                      <input name="password2" type="password" class="form-control" placeholder="Re-Password">
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
              </form>

        </div>

    </div>

    @endsection
