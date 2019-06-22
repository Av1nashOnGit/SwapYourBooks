<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="addbook.css" rel="stylesheet" type="text/css">
<link href="firstpagecss.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
<title>SwapYourBooks</title>
</head>

<body>
	<div class="container-fluid mx-0 px-0">
			<div class="navbar mx-0">
		<div class="logo">Swap<span style="font-family: Baskerville, Palatino Linotype, Palatino, Century Schoolbook L, Times New Roman, serif; font-style: italic; color: #ffc000;">Your</span>Books</div>
			
			
			<div class="navtab">
				<div class="col-10 d-flex justify-content-end align-items-center pt-2 ">
          	
					<a class="btn btn-lg btn-outline-secondary ml-4 clickbg" href="Bookstore.php">BookStore</a>
					<a class="btn btn-lg btn-outline-secondary ml-2 clickbg" href="#">About Us</a>
					<a class="btn btn-lg btn-outline-secondary ml-2 clickbg" href="#">Contact Us</a>
          		</div>
			</div>
		</div>
<div class="addbooks">
<form method="post" action="storebook.php" enctype="multipart/form-data">
	<h3 style="color: #7030a0; font-weight: bold;">Add Book</h3>
   		 	<label>Insert Book image</label>
   			<input type="file" name="bookimg"  class="formcontrol"   required/><br>
   			<input type="text" name="Booktitle" placeholder="Enter Book Title"  class="formcontrol"   required/><br>
   			<input type="text" name="Bookwriter" placeholder="Book writer Name" class="formcontrol"   required/><br>
   			<input type="text" name="BookCat" placeholder="Book Category" class="formcontrol"   required/><br>
   			<input type="text" name="Originalprice" placeholder="Original price"class="formcontrol"   required/><br>
   			<input type="text" name="Ourprice" placeholder="Our Price"          class="formcontrol"   required/></td> <br>
   		   <input type="submit" name="storebook" value="submit" >
   		
</form>

</div>

	</div>


</body>
</html>