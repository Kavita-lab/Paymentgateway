<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
// session_start();

$amount='3000';
// $_SESSION['hname'] = $_POST['hname'];
if(isset($_POST['submit'])){
  $name=$_POST['firstname'];
  
  $email=$_POST['email'];
  $mobile_no=$_POST['phone'];

  if(isset($_POST['hname'])){
    $hname=$_POST['hname'];
  $date=$_POST['date'];
  $blood=$_POST['blood'];
  $qualification=$_POST['qualification'];
  $gender=$_POST['gender'];
  $vill=$_POST['vill'];
  $po=$_POST['post'];
  $ps=$_POST['ps'];
  $dist=$_POST['distict'];
  $state=$_POST['state'];
  $pin=$_POST['pin'];
  $adhar_no=$_POST['adhar_no'];
  $pan_no=$_POST['pan_no'];
  $conn=mysqli_connect("localhost","root","","exicutive");

  $sql="INSERT INTO payment_details(name, father_name,email,mobile,date,blood_group,qualificaton,gender,village,post,ps,  distict,state,  pincode,adhar_number,pan_number,amount)
  VALUES('$name','$hname','$email','$mobile_no','$date','$blood','$qualification','$gender','$vill','$po','$ps','$dist','$state','$pin','$adhar_no','$pan_no','$amount')";
  $result=mysqli_query($conn,$sql);
  
  }
}
?>

<?php

$MERCHANT_KEY = "yu0ajXdJ";
$SALT = "8mEdmWGC7f";


// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://test.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      var payuForm = document.forms.payuForm;
      if(hash == '') {
        return;
      }else{
      payuForm.submit();
      }
    }
    $(document).ready(function(){
if(hash == '') {
  $("#sub").click();
}
    });

  </script>
  </head>
  <body onload="submitPayuForm()">
    
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
   
        <tr>
       
          <td><input type="hidden" name="amount" value="<?php echo $amount; ?>" /></td>
        
          <td><input type="hidden" name="firstname" id="firstname" value="<?php echo $name; ?>" /></td>
        </tr>
        <tr>
      
          <td><input name="email" type="hidden" id="email" value="<?php echo $email; ?>" /></td>
    
          <td><input name="phone" type="hidden" value="<?php echo $mobile_no; ?>" /></td>
        </tr>
        <tr>
       
          <td colspan="3"><input type="hidden" name="productinfo" value="For employment"></td>
        </tr>
        <tr>
          
<td colspan="3"><input type="hidden" name="surl" value="<?php echo "http://localhost:8080/payfinal/fresh payuexample/PayUMoney-PHP-Module-master/success.php"; ?>" size="64" /></td>
        </tr>
        <tr>
         
          <td colspan="3"><input name="furl" type="hidden" value="<?php echo "http://localhost:8080/payfinal/fresh payuexample/PayUMoney-PHP-Module-master/failure.php"; ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

        
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input id="sub" type="submit" name="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
    <h3>
      Don't refresh work is going on.<br>
      Processing...
    </h3>
  </body>
</html>
