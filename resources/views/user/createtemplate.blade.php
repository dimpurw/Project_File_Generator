@extends('component.master')
@section('content')
<style>
.bg-warning{
	/*width: 1440px;*/
	height: 96px;
}
.container-fluid{
	width: 80%;
}
.card{
	height: 100%;
}
</style>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	<div class="d-flex justify-content-around">

		<div class="d-flex justify-content-start">
			<div class="p-2 bd-highlight">Back
			</div>
		</div>

		<div class="d-flex justify-content-center">
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="10">10</option>
					<option value="11" selected>11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
			</div>
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="Bold">Bold</option>
					<option value="Regular" selected>Regular</option>
					<option value="Italic">12</option>
				</select>
			</div>
		</div>

		<div class="d-flex justify-content-center">
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="10">10</option>
					<option value="11" selected>11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
			</div>
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="Bold">Bold</option>
					<option value="Regular" selected>Regular</option>
					<option value="Italic">12</option>
				</select>
			</div>
		</div>

	</div>
</nav>
<!-- Navbar -->

<div class="container-fluid">
  <div class="row">
    <div class="col-5">
			<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

    </div>
    <div class="col-7">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
				dsadsad
			</div>
			<div class="offset-10">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
    </div>
  </div>
</div>


</form>





@endsection
