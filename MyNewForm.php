<?php
//session_start();






?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
   .dd {
    
    box-shadow: 0px 0px 12px 0px grey;
    padding:20px;
    border-radius: 5px;

}
</style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row">
<div class="col-md-12" style="min-height: 50px;"></div>
            <div class="col-md-8 col-md-offset-2 dd" style="background-color:#AED6F1 ">
                <form role="form" method="POST" action="PayYou.php">
                    

                    <legend class="text-center" style="color: black";>FIELD EXECUTIVE REGISTRATION FORM </legend>

                    <fieldset>
                        

                        <div class="form-group col-md-6">
                            <label for="first_name">Full Name</label>
                            <input type="text" class="form-control" name="firstname" id="first_name" required >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Father/Husband Name</label>
                            <input type="text" class="form-control" name="hname" id=""required >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Email Id</label>
                            <input type="email" class="form-control" name="email" id="" required>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="confirm_password">Mobile Number</label>
                            <input type="text" class="form-control" name="phone" id="mobile"required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Date of Birth</label>
                            <input type="date" class="form-control" name="date" id="mobile" required >
                        </div>
                         <div class="form-group col-md-6">
                            <label for="password">Blood Group</label>
                            <input type="text" class="form-control" name="blood" id="password" required >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Qualification">Qualification</label>
                            <input type="text" class="form-control" name="qualification" id="first_name" required>
                        </div>

                         <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="country">
                                <option>Female</option>
                                <option>Male</option>
                               
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                        <h3>Address</h3></div>
                        <div class="form-group col-md-6">
                            <label for="village">Village</label>
                            <input type="text" class="form-control" name="vill" id="first_name" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="post">Post</label>
                            <input type="text" class="form-control" name="post" id="first_name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ps">PS</label>
                            <input type="text" class="form-control" name="ps" id="ps"  required>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="distict">Distict</label>
                            <input type="text" class="form-control" name="distict" id="first_name"  required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state" id="first_name" required >
                        </div>
                         <div class="form-group col-md-6">
                            <label for="state">Pincode</label>
                            <input type="text" class="form-control" name="pin" id="first_name" required >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Adharcard Number</label>
                            <input type="text" class="form-control" name="adhar_no" id="password" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Pancard Number</label>
                            <input type="text" class="form-control" name="pan_no" id="password" required>
                        </div>
                       


                       


                    </fieldset>

                    <fieldset>
                        <legend class="text-center" style="color: black";>DECLARATION BY THE APPLICANT </legend>

                       

                        

                        
                    </fieldset>

                   <div class="form-group">
                        <div class="col-md-12">
                            
                            
                                <div class="checkbox">
                                   <label>
                                       <input type="checkbox" id="" name="" required>
                                       <b> I hereby declare that the information given in this applicantion is true to
                      the best of my knowledge and belief. In case any information found false in my  application, then my candidature will be rejected by the company at any point of time.
                      .</b>
                                   </label> 
                                </div>
                               
                                <div class="checkbox">
                                   <label>
                                       <input type="checkbox" id="" name=""required>
                                      <b>  I am agreeing to purchase the LPG gas Safety device at the price of INR-3000/-( inclusive of GST), which will be non- refundable.</b>
                                   </label> 
                                </div>

                                <div class="checkbox">
                                   <label>
                                       <input type="checkbox" id="" name="" required>
                                        <b> I am agreeing to join as "Demand Generation Executive" at my own consent. </b>
                                   </label> 
                                </div>


                            </div>
                        </div>
                        <button class="btn btn-success" name="submit" value="submit">Ready To Pay</button>
                        
                    </div>

                    

                </form>
            </div>
<div class="col-md-12" style="min-height: 50px;"></div>
        </div>
    </div>
</body>
</html>