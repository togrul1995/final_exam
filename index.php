<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
<title>Upload Picture</title>
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</head>
<body>
	<div class="container">
		<div class="col-md-4">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type='file' name="userfile" onchange="readURL(this);" />
                <input name="upload" type="submit" value="Upload Image" id="upload">            
            </form>
		</div>
    	<img class="col-md-8" id="nese" src="#" alt="your image" />
	</div>
    <script type="text/javascript">
    	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#nese')
                    .attr('src', e.target.result)
                    .width(400)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</body>
</html>