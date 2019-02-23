<?php 
if (isset($_POST['submit'])) {
	$n=$_POST['input'];
	for ($a=1; $a < $n; $a++) { 
		$aa=pow($a,2);

		for ($b=$a; $b < $n; $b++) { 
			$bb=pow($b,2);

			$c=$n-($a+$b);
			$cc=pow($c,2);

			if ($aa+$bb==$cc) {
				$r=$a." et ".$b." et ".$c;
			}
		}
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pythagorean Triples</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Pythagorean Triples</h1>
  <p>A Pythagorean Triple is a set of integers a, b and c such that a^2 + b^2 = c^2. For example, 3, 4 and 5 are Pythagorean triples because 3^2 + 4^2 = 5^2.</p> 
</div>
  
<div class="container">
	<form action="index.php" method="post">
    <div class="form-group">
      <label>Input:</label>
      <input type="number" class="form-control" name="input">
    </div>
    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
  </form>
  <br>
  <h2>Triplet Found :</h2>
  <?php 
  	if (isset($r)) {
  		echo '<div class="alert alert-success">
  <strong>'.$r.'</strong>
</div>';
  	}else{
  		echo '<div class="alert alert-danger">
  <strong>No such triplet exists</strong>
</div>';
  	}
   ?>
   <div class="row">
	   	<div class="col-md-6">
	   		<img src="img/1.png" class="mx-auto d-block img-fluid" style="width:100%"> 
	   	</div>
	   	<div class="col-md-6">
	   		<img src="img/2.png" class="mx-auto d-block img-fluid" style="width:100%"> 
	   	</div>
   </div>
  
  <p>Given a number n, find a <b>Pythagorean Triple</b> for a given sum.</p>
  <p><b>For Example</b></p>
  <p>Input : <b>12</b></p>
  <p>Output : 3, 4, 5 (because 3^2 + 4^2 = 5^2, and 3+4+5=12)</p>
</div>

<div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://www.linkedin.com/in/al2ae2dine" target="_blank"> al2ae2dine</a>
    </div>
</body>
</html>
