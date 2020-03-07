<html>
<head>
<link href="formstyle.css" type="text/css" rel="stylesheet">
<script src="formscript.js"></script>
<title>AJAX Example</title>
</head>
<body>
<div id="form-div">
<form  method="POST">
<h1>Application Form</h1>
<div>
<label>Name</label>
<input type="text" name="name" placeholder="Enter your name" required>
</div>

<div>
<label>State</label>
<select onchange="fetchCity(this.value)" name="state" required>
<option value="" >Select State</option>
<option value="Provision 1">Provision 1</option>
<option value="Provision 2">Provision 2</option>
<option value="Provision 3">Provision 3</option>
<option value="Provision 4">Provision 4</option>
<option value="Provision 5">Provision 5</option>
<option value="Provision 6">Provision 6</option>
<option value="Provision 7">Provision 7</option>
</select>
</div>

<div>
<label>City</label>
<select id="cities" name="city" required>
<option value="">Select City</option>
</select>
</div>

<div>
<input type="submit" name="submitBtn" value="Submit Button" >
</div>

</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submitBtn'])){
    $state=$_POST['state'];
    $city=$_POST['city'];
echo $state;
echo $city;
}

?>