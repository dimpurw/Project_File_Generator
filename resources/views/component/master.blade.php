<!DOCTYPE html>
<html>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Inter:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"> -->
<!-- <link href="{{asset('css/bootstrap2.css')}}" rel="stylesheet" type="text/css"> -->
<link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">

<head>
  <title>FILE GENERATOR</title>
</head>
<body>
<!-- <div id="wrapper">
	<div id="content-wrapper" class="d-flex flex-column"> -->
		@yield('content')
	<!-- </div> -->
<!-- </div> -->
</body>
<script>
  function listIcon(divTag, id) {
    if (document.getElementById(divTag+id).style.display == 'none') {
          document.getElementById(divTag+id).style.display = 'block';
        } else {
          document.getElementById(divTag+id).style.display = 'none';
    };
  }
  function deleteList(id) {
    var del = document.getElementById("list-surat"+id);
    var iconD = document.getElementById("icon-display"+id);
    var deskrip = document.getElementById("deskrip-surat"+id);
    var viewDelList = document.getElementById("del-surat"+id);
    del.style.backgroundColor ='#FDC0C0';
    del.style.borderLeftColor ='#FF3C3C';
    iconD.style.display = 'none';
    deskrip.style.display = 'none';
    viewDelList.style.display = 'block';
  }
  
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
</script>
@yield('page-script')
</html>