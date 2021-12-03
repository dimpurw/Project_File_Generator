<link href="{{asset('css/bootstrap2.css')}}" rel="stylesheet" type="text/css">
@extends('component.master')
@section('content')
  <div class="sidenav">
      </div>
      <div class="main">
         <div class="col-sm-9 col-sm-9">
            <div class="login-form">
            <h2>FILE GENERATOR</h2>
            <h3>Internal DevT Brain</h3>
               <form>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" placeholder="This is a text">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="This is a text">
                  </div>
                  <p><a href="#">Forget Password?</a></p>
                  <button type="submit" class="btn btn-black">Login</button>
               </form>
                <div class="info">
                    <p>Tidak punya akun?<a href="">minta Akun ke Admin?</a></p>
                </div>
            </div>
         </div>
      </div>
@endsection
