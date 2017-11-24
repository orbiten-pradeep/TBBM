<?php
//session_start();
include("class/auth.php");
$user = include("class/getuser.php");
include("html/header.html")
?>
<style type="text/css">
#leftPanel{
  background-color:#3cafc4;
  color:#fff;
  text-align: center; 
}

#rightPanel{
  min-height:415px;
}

/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
.btn-wrapper{
    position: relative;
  overflow: hidden;
  display: inline-block;
}
.btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

input[type="date"]::-webkit-inner-spin-button{
  display: none;
}
.step-controls{
  display: none;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  display: none !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    appearance: none !important;
    margin: 0 !important; 
}
input[type='number'] {
    -moz-appearance:textfield;
}
.navbar-default {
    background-color: #3CAFC4;
}
</style>
<?php
// Merchant key here as provided by Payu
// $MERCHANT_KEY = "JBZaLc";

// // Merchant Salt as provided by Payu
// $SALT = "GQs7yium";

// // End point - change to https://secure.payu.in for LIVE mode
// $PAYU_BASE_URL = "https://test.payu.in";
$MERCHANT_KEY = "jS3PnccY";

// Merchant Salt as provided by Payu
$SALT = "pmYnbucDQL";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

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

if(!empty($hash))
{
  require_once 'class/dbconnect.php';

  //Transaction DB process
  $firstname = strip_tags($_POST['firstname']);
  $email = strip_tags($_POST['email']);
  $txnid = strip_tags($_POST['txnid']);
  $amount = strip_tags($_POST['amount']);
  $productinfo = strip_tags($_POST['productinfo']); 
  $hash = strip_tags($hash);
  $phone = strip_tags($_POST['phone']);
  
  $firstname = $DBcon->real_escape_string($firstname);
  $email = $DBcon->real_escape_string($email);
  $txnid = $DBcon->real_escape_string($txnid);
  $amount = $DBcon->real_escape_string($amount);
  $productinfo = $DBcon->real_escape_string($productinfo);
  $hash = $DBcon->real_escape_string($hash);
  $phone = $DBcon->real_escape_string($phone);
  $query = "INSERT INTO transactions(firstname, email, txnid, amount, productinfo, hash, phone) VALUES('$firstname','$email','$txnid','$amount','$productinfo','$hash','$phone')";
  if($DBcon->query($query)) {

    require 'class/membership-gen.php';
    $member = $mem;

    $trans_id = $DBcon->insert_id;

      $firstname = strip_tags($_POST['firstname']);
      $lastname = strip_tags($_POST['lastname']);
      $email = strip_tags($_POST['email']);
      $groupname = strip_tags($_POST['Group']);
      $gender = strip_tags($_POST['Sex']);
      $blood = strip_tags($_POST['Blood']);
      $contact_number = strip_tags($_POST['phone']);
      $dob = strip_tags($_POST['date_of_birth']);
      $height =strip_tags($_POST['Height']);
      $weight =strip_tags($_POST['Weight']);

      $firstname = $DBcon->real_escape_string($firstname);
      $lastname = $DBcon->real_escape_string($lastname);
      $email = $DBcon->real_escape_string($email);
      $groupname = $DBcon->real_escape_string($groupname);
      $gender = $DBcon->real_escape_string($gender);
      $blood = $DBcon->real_escape_string($blood);
      $contact_number = $DBcon->real_escape_string($contact_number);
      $dob = $DBcon->real_escape_string($dob);
      $height = $DBcon->real_escape_string($height);
      $weight = $DBcon->real_escape_string($weight);

      $oneYearOn = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + 365 day"));

      //$query = "";

      $query = "INSERT INTO membership(transactions_id,membership_id, first_name, last_name, email, amount, groupname, gender, blood_type, contact_number, DOB, Height, Weight, Status,expire_at) VALUES ('$trans_id','$member','$firstname','$lastname','$email','$amount','$groupname','$gender','$blood','$contact_number','$dob','$height','$weight','0','$oneYearOn') ";
      if($DBcon->query($query))
      {
        $_SESSION['ticket_success'] = "SuccesFull Membership done!!";
      }


    }
  }



?>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  <body onload="submitPayuForm()">
    <h2>PayU Form</h2>
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
   
    <section class="x-services ptb-100 gray-bg">
<div class="container">
<br>
<br>
  <div id="main">
    <form  id="payuForm" method="POST"  action="<?php echo $action; ?>" >
    <div class="col-md-8 well" id="rightPanel">
      <div class="row">
      <div class="col-md-12">
      <h2>Become a Member</h2>
      <hr class="">
      <div class="row">
         <?php if($formError) { ?>
                                    <span style="color:red">Please fill all mandatory fields.</span>
                                    <br/>
                                    <br/>
                                  <?php } ?>
      
                          <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="amount" value = "400" />
      <input type="hidden" name="productinfo" value = "Membership" />
      <input type="hidden" name="service_provider" value="payu_paisa" />
      <input type ="hidden" name="surl" value="http://localhost/TBBM.git/trunk/class/MemberSuccess.php" />
      <input type="hidden" name="furl" value="http://localhost/TBBM.git/trunk/class/MemberFailure.php" />
      <input type="hidden" name="curl" value="http://localhost/TBBM.git/trunk/class/MemberSuccess.php" />
      <input type="hidden" name="firstname" value="<?php echo $user['FirstName']; ?>" />
      <input type="hidden" name="email" value ="<?php echo $user['email']; ?>" /> 
                                                     
        
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
           <label>Firstname</label>
            <input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required readonly="true" value="<?php echo $user['FirstName']; ?>">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
           <label>Lastname</label>
            <input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required readonly="true" value="<?php echo $user['LastName']; ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Email</label>
          <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3" required readonly="true" style="cursor: not-allowed;" value="<?php echo $user['email']; ?>">
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
           <label>Amount</label>
            <input type="text" name="amount" id="amount" class="form-control input-lg" tabindex="3" required value="400" readonly="true" style="cursor: not-allowed;">
          </div>
        </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
       <div class="form-group">
        <label>Group</label>
           <select class="form-control" id="sel1" name="Group" required>
                <option value="Bangalore">Big Beach runners - Bangalore</option>
                <option value="Chennai">Big Beach runners - Chennai</option>
                <option value="Pune">Big Beach runners - Pune</option>
              </select>
      </div>
      </div>
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <label for="">Sex</label>
              <select class="form-control" id="sel1" name="Sex" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
          </div>
        </div>
         <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <label for="">Blood Group</label>
              <select class="form-control" id="sel1" name="Blood" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
           <label>Contact Number</label>
            <input name="phone" id="phone" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" required>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
           <label>Date Of Birth</label>
            <input type="date" name="date_of_birth" id="date" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="5" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
           <label>Height(in CM)</label>
            <input type="number" name="Height" id="Height" class="form-control input-lg" placeholder="Enter Your Height" tabindex="6">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
           <label>Weight(in KG)</label>
            <input type="number" name="Weight" id="Weight" class="form-control input-lg" placeholder="Enter Your Weight" tabindex="7">
          </div>
        </div>
      <hr class="">
      <div class="row">
        <div class="col-xs-12 col-md-12">
        <button type="submit" class="btn btn-success btn-block btn-lg">Save</button>
        </div>
      </div>
  </div>
</div>
</div>
</form>
    </div>
   </div>
</section>
  </body>


<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
</script>

<?php
include("html/footer.html")
?>
