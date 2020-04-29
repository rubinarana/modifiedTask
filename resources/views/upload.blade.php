<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload</title>
</head>
<body>
	<form action="{{URL::to('/store')}}" method="POST" enctype="multipart/form-data">
       		<div class="d-flex justify-content-around">
	            <label for="image">Photo</label>
		            <input type="file" name="image">
		            <input type="hidden" name="_token" value="{{ csrf_token() }}">

	        		<button class="btn btn-danger" type="submit">POST</button>
         	</div>
    </form>
</body>
</html>