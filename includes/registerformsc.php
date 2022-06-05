<?php
if(isset($_POST['submit'])){
	
$sname=$_POST['sname'];

$nidnumber=$_POST['nidnumber'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$paymets=$_POST['Amounts']
$paymet_id=$_POST['trans_id'];
$phonenumber=$_POST['phonenumber'];
$District=$_POST['District'];

$address=$_POST['address'];




							$result=mysqli_query($conn,"");
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
      background-color:white;
      background-size: 100%;
      background-repeat: no-repeat;
      min-height: 1000%;
      opacity: 0.9;
      background
    }
    #form{
      background-color:white;

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
		color:red;
		bold:20px;
	}
	.title{
	
		margin:auto;
		width:50%;
		text-align:center;
		border:3px white solid;
		
		
		
	}
	.error{
		color:red;
		text-align:center;
		font-family: "Times New Roman", Times, serif;
		
	}
	.success{
		text-align:center;
		
	}
  </style>
</head>
<body>

    
<div class="row">
     
  
   
	<div class="container">
	
	<div class="title">
   
    
    <figure><img src="assets/images/bkash/bkash.gif" width="300" height="150" alt=""></figure>
	</div>

	<div class=" alert-success text-center"><span><?php if(isset($success)){echo'<p class="jumbotron" >'.$success.'</p>';}?></span> </div>
	
	<div class="jumbotron">
	
	<div class="card-body ">

	<div class="row">
	
	<form action="" method="POST">
	                     
	
						
							<div class="input-group">
								
								<label >Your Full name</label>
								<input type="text" class="form-control py-4" name="sname" placeholder="Full name" value="Customer name"required/>
							
							</div>
							<br/>
						
							<br/>
							
							
							
							
				
							<div class="input-group>
								
								<label >Your Nid/Birth certificate:</label>
								<input type="text"  name="nidnumber" class="form-control py-4" placeholder=" Nid/Birth certificate" value="Nid card_Number"  required / >
						
						</div>
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
								<input type="email" class="form-control py-4" name="email" placeholder="Your_Email" value="E_mail" required />
								
							</div>
							<br/>
							
						
							
							
							<br/>
							<div class="input-group>
							<label class="name" >Total Amounts:</label>
								<input type="text"  name="Amounts" class="form-control py-8"  placeholder=" acounts Taka" value="Amounts" required />
							
								</div>
							<br/>



								<br/>
							<div class="input-group>
							<label class="name" >Payment trans ID:</label>
								<input type="text"  name="trans_id" class="form-control py-8"  placeholder="Payment trans ID:" value="trans_id" required />
							
								</div>
							<br/>
							

								<br/>
							<div class="input-group>
							<label class="name" >Your Phone Number:</label>
								<input type="text"  name="phonenumber" class="form-control py-8"  placeholder="Phone_Number" value="Phone Number" required />
							
								</div>
							<br/>
							
							
							<label class="name" >District in :</label>
							<div class="">	
<select id="inputState" class="form-control" name="District" required />
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
							
							
							
							
							<input type="submit"  class="btn btn-success  "  name="submit" value=" payment_submit"/>
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
       