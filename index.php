<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form  method="post">
        <h2 class="text-center">Coin System</h2>  
        <div class="first_box">
        <label >Username</label>
        </div><br>     
        <div class="first_box">
            <input type="text" id="name" class="form-control" placeholder="Your Name" >
        </div><br>
        <div class="first_box">
        <label >Initial Coins</label>
        </div><br> 
        <div class="first_box">
            <input type="number" id="incoins" class="form-control" value="1000" readonly >
			
        </div><br>
        <div class="third_box">
        <label >Total Coins</label>
        </div><br> 
        <div class="third_box">
            <input type="number" id="totcoins" class="form-control" value="1000" readonly ><br>
            <span id="success"style="color:green;" class="field_error"></span>
			
        </div><br>
        
        <div class="first_box">
            <button type="button" class="btn btn-primary btn-block" onclick="apply()">Apply Coupon</button>
        </div><br>
        
        
        <div class="second_box" style="display:none;">
        <label for="code">Enter coupoun code: </label>
        </div><br>     
        <div class="second_box" style="display:none;">
            <input type="text" id="code" class="form-control" placeholder="CODE" >
			<span style="color:red;" id="code_error" class="field_error"></span>
        </div><br>
        <div class="second_box" style="display:none;">
            <button type="button" class="btn btn-primary btn-block" onclick="submit_code()">Submit</button>
        </div><br>   
    </form>
</div>

<script>
function apply(){
	var totcoins=jQuery('#totcoins').val();
	jQuery.ajax({
		url:'coupun.php',
		type:'post',
		data:'totcoins='+totcoins,
		success:function(result){
		
				jQuery('.second_box').show();
				jQuery('.first_box').hide();
			
		}
	});
}
function submit_code(){
	var code=jQuery('#code').val();
	jQuery.ajax({
		url:'check.php',
		type:'post',
		data:'code='+code,
		success:function(result){
			
			if(result=='not_exist'){
				jQuery('#code_error').html('Please enter valid code');
			}
            else{
                
                var code=jQuery('#totcoins').val(result);
                jQuery('#success').html('Coupun Successful');
			}
		}
	});
}
</script>
<script>

</script>

</body>
</html>                                		                            