@extends('component.master')
@section('title','Landing Page')
@section('content')
  <div class="sidenav">
   </div>
      <div class="main">
         <div class="col-sm-9 col-sm-9">
            <div class="login-form">
            <h2>FILE GENERATOR</h2>
            <h3>Internal DevT Brain</h3>
               <form method="POST" action="/login">
                  @csrf
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" name="email" class="form-control" placeholder="This is a text">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="This is a text">
                  </div>
                  <p><a href="{{ route('forget.password.get') }}">Forget Password?</a></p>
                  <button type="submit" class="btn btn-black" style="width: 70%;">Login</button>
               </form>
                <div class="info">
                    <p>Tidak punya akun?<a href="">minta Akun ke Admin?</a></p>
                </div>
            </div>
         </div>
      </div>
@endsection
