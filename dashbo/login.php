<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script type="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		background-image: url(../images/pic2.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		font-family: sans-serif;
	}
	.container{
		display: flex;
		flex-direction: column;
		justify-content: center;
		height: 100vh;
		align-items: center;
		padding: 5px;
	}

	.formlog{
		background: lightblue;
		padding: 40px;
		align-items: center;
		border-radius: 20px;
		height: 70%;
	}
	h3{
		text-align: center;
	}
	input{
		margin: 8px;
	}
</style>
<body>

<div class="container">
	
	<form id="fm" class="formlog">
		<h3 style="color: black; font-weight: bold;">Login</h3>
		 
		 <div class="form-group">
		 	<label class="fs-5" style="color: black; font-size: 26px;">Username:</label>
		 	<input type="text" name="username" placeholder="username" class="form-control fs-5" style="color:black"; required>
		 	<label class="fs-5" style="color: black;">Password:</label>
		 	<input type="password" name="password" placeholder="password" class="form-control fs-5" style="color:black;" required>
		 

		 </div>
		 <input type="submit" name="btn" class="btn btn-primary" id="log" style="width: 100%; margin-top: 20px;">
		 <span style="color: black;"><a href="#" style="text-decoration: none; margin-left: 60%;">forgot password</a></span>
<p id="res" style="color: red;"></p>
	</form>
	
</div>
</body>
</html>
<script src="ajax.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
	$("#log").click(()=>{
    $.ajax({
      url:"logop.php",
      data:$("#fm").serialize(),
      success:(res)=>{
        if(res.trim()==="yes"){
          window.location.href="dashbo.php";
        }else{
          $("#res").html(res);
        }
      }
    })
  return false;
})
</script>