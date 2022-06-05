
<?php


    include('admin/Class/adminBack.php');
    $obj = new adminBack();
    $ctg=$obj->p_display_category();
    $ctgDatas = array();
    while($data=mysqli_fetch_assoc($ctg)){
        $ctgDatas[]= $data;
    }




if(isset($_POST['submit'])){

	$msg = $obj->payment_pro($_POST);
	

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bkash payment System</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style type="text/css">
    body{
      background-color:gray;
      background-size: 100%;
      background-repeat: no-repeat;
      min-height: 1000%;
      opacity: 0.9;
      background
    }
    #form{
      background-color:gray;

    }
    .registration{
		color:green;
      font-size: 50px;
      font-family: : Agency FB;
      font-weight: 700;
      border-bottom-style: ridge;
    }
	.jumbotron{
	
		margin:auto;
		width:50%;
		border: 3px solid white;
		color:green;
		height:auto;
	}
	.text-center{
		color:
		bold:20px;
	}
	.title{
	
		margin:auto;
		width:50%;
		text-align:center;
		border:3px white solid;
		
		
		
	}
	
  </style>
</head>
<body>

    
<div class="row">
     
  
   
	<div class="container">
	<div class="btn btn-danger pl-3"><a href="user_profile.php"> My Profile</a></div>
	<div class="title">
   
    
    <figure><img src="assets/images/bkash/bkash.gif" width="300" height="150" alt=""></figure>
    <?php if(isset($msg)){
                    echo $msg;
                } ?>
	</div>

	
	
	<div class="jumbotron">
	
	<div class="card-body ">

	<div class="row">
	
	<form action="" method="POST">
	                     
	
						
							<div class="input-group">
								
								<label >Your Full name</label>
								<input type="text" class="form-control py-4" name="name" placeholder="Full name"/>
							
							</div>
							<br/>
						
							<br/>
							
							
							
							
				
							<br/>

							<p>Gender</p>
						<div class="input-group>	
						<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender"  value="male"/>
  <label class="form-check-label" for="inlineRadio1">male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender"  value="female"/>
  <label class="form-check-label" for="inlineRadio2">female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender"  value="others" >
  <label class="form-check-label" for="inlineRadio3">Others</label>
</div>
                            
                         
							</div>
							<br/>
				
							
		<div class="input-group>
								<label for="Email">Your Email :</label>
								<input type="email" class="form-control py-4" name="email" placeholder="Your_Email"  />
								
							</div>
							<br/>
							
						
							
							
							<br/>
							<div class="input-group>
							<label class="name" >Total Amounts:</label>
								<input type="text"  name="Amounts" class="form-control py-8"  placeholder=" acounts Taka"  />
							
								</div>
							<br/>



								<br/>
							<div class="input-group>
							<label class="name" >Payment trans ID:</label>
								<input type="text"  name="trans_id" class="form-control py-8"  placeholder="Payment trans ID:"  />
							
								</div>
							<br/>
							

								<br/>
							<div class="input-group>
							<label class="name" >Your Phone Number:</label>
								<input type="text"  name="phone" class="form-control py-8"  placeholder="Phone_Number"   />
							
								</div>
							<br/>
							
							
							<label class="name" >District in  tangail:</label>
							<div class="">	
<select id="inputState" class="form-control" name="District"  placeholder="tangail"/>
                                        <option selected> Tangail sador</option>
                                        <option>Kalihati</option>
                                      <option >Gatail</option>
                                     <option>shokipur</option>
									                    <option>Bhuyapur</option>
                               </select>


</div>
								<br/>
								<div class="input-group>
								<label for="Address" > Address:</label>
								  <textarea class="form-control" name="address" rows="3" id="Address" ></textarea>
                                
							</div>
							<br/>
							
							
							
							
							<input type="submit"  class="btn btn-success  "  name="submit" value="payment_submit"/>
							</div>
							</div>
						</form>
						</div>
						</div>
	
	</div>
	</div>
	</div>
	
						
					
					
					</body>
					</html>
       