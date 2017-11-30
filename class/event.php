<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "jS3PnccY";

// Merchant Salt as provided by Payu
$SALT = "pmYnbucDQL";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$phone = '';
$posted = array();
if(!empty($_POST)) {
    
  //Set Values for Payumoney
  $_POST['amount'] = $_POST['price_mar'];
  
  $_POST['firstname'] = $_POST['fullname'][0];
   
  foreach($_POST as $key => $value) {  
    if($key == 'fullname') //|| $key != 'tshirt' || $key != 'KM' || $key != 'rowAmt' || $key != 'gender' || $key != 'price_mar') 
    {
      continue;    
    } elseif ( $key == 'tshirt') {
      continue;
    } elseif ($key == 'KM') {
      # code...
      continue;
    } elseif ($key == 'rowAmt') {
      # code...
      continue;
    } elseif ($key == 'gender') {
      # code...
      continue;
    } elseif ($key == 'price_mar') {
      # code...
      continue;
    }
    $posted[$key] = $value; 
  } 
  $phone = $posted['phone'];
  //print_r($posted); exit(0);
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = ''; 
$hash_string = ''; 
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
   
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
    $_POST['hash'] = $hash;
    //echo 'var payuForm = document.forms.payuForm;';
    //echo 'payuForm.submit();';
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
  $city = strip_tags($_POST['cityname']);

  
  $firstname = $DBcon->real_escape_string($firstname);
  $email = $DBcon->real_escape_string($email);
  $txnid = $DBcon->real_escape_string($txnid);
  $amount = $DBcon->real_escape_string($amount);
  $productinfo = $DBcon->real_escape_string($productinfo);
  $hash = $DBcon->real_escape_string($hash);
  $phone = $DBcon->real_escape_string($phone);
   $city = $DBcon->real_escape_string($city); 
  $query = "INSERT INTO transactions(firstname, email, txnid, amount, productinfo, hash, phone) VALUES('$firstname','$email','$txnid','$amount','$productinfo','$hash','$phone')";
  if($DBcon->query($query)) {
//$_SESSION['transaction_success'] = "Ur Transaction Has Done Succesfully!!";

    $trans_id = $DBcon->insert_id;
    //Tickets booking Process
    foreach ($_POST['fullname'] as $key => $value) {
      require 'Bibno-gen.php';
      $half = $biX;
      $Full = $biF;
      $BAhalf = $BAX;
      $BAfull = $BAF;
      $MUhalf = $MUX;
      $MUfull = $MUF;
      # code...
      $tickets = strip_tags($_POST['tickets']);
      $fullname = strip_tags($value);
      $tshirt = strip_tags($_POST['tshirt'][$key]);
      $KM = strip_tags($_POST['KM'][$key]);
      $gender = strip_tags($_POST['gender'][$key]);
      $email = strip_tags($_POST['email']);
      $phone = strip_tags($_POST['phone']);
      $city = strip_tags($_POST['cityname']);
      
      $tickets = $DBcon->real_escape_string($tickets);
      $fullname = $DBcon->real_escape_string($fullname);
      $tshirt = $DBcon->real_escape_string($tshirt);
      $KM = $DBcon->real_escape_string($KM);
      $gender = $DBcon->real_escape_string($gender);
      $email = $DBcon->real_escape_string($email);
      $phone = $DBcon->real_escape_string($phone); 
      $city = $DBcon->real_escape_string($city);    
      
     if($KM == "10KM" && $city == "Chennai")
      {
      $query = "";
      $query = "INSERT INTO tickets(tickets, fullname,tshirt,KM,Bibno,gender,email,phone,city, transactions_id) VALUES('$tickets','$fullname','$tshirt','$KM','$half','$gender','$email','$phone','$city','$trans_id')";
             if($DBcon->query($query) ) 
             {

          $_SESSION['ticket_success'] = "Ur Tickets has Booked!!";

      }else {
       
    $_SESSION['ticket_error'] = "Sry Ur Tickets Are Not Booked!!!!";
      }
    }
    elseif($KM == "21.1KM" && $city == "Chennai"){

      $query = "";
      $query = "INSERT INTO tickets(tickets, fullname,tshirt,KM,Bibno,gender,email,phone,city, transactions_id) VALUES('$tickets','$fullname','$tshirt','$KM','$Full','$gender','$email','$phone','$city','$trans_id')";
             if($DBcon->query($query) ) {
          $_SESSION['ticket_success'] = "Ur Tickets has Booked!!";

      }else {
       
    $_SESSION['ticket_error'] = "Sry Ur Tickets Are Not Booked!!!!";
      }
    }
    elseif($KM == "10KM" && $city == "Bangalore"){

      $query = "";
      $query = "INSERT INTO tickets(tickets, fullname,tshirt,KM,Bibno,gender,email,phone,city, transactions_id) VALUES('$tickets','$fullname','$tshirt','$KM','$BAhalf','$gender','$email','$phone','$city','$trans_id')";
             if($DBcon->query($query) ) {
          $_SESSION['ticket_success'] = "Ur Tickets has Booked!!";

      }else {
       
    $_SESSION['ticket_error'] = "Sry Ur Tickets Are Not Booked!!!!";
      }
    }
    elseif($KM == "21.1KM" && $city == "Bangalore"){

      $query = "";
      $query = "INSERT INTO tickets(tickets, fullname,tshirt,KM,Bibno,gender,email,phone,city, transactions_id) VALUES('$tickets','$fullname','$tshirt','$KM','$BAfull','$gender','$email','$phone','$city','$trans_id')";
             if($DBcon->query($query) ) {
          $_SESSION['ticket_success'] = "Ur Tickets has Booked!!";

      }else {
       
    $_SESSION['ticket_error'] = "Sry Ur Tickets Are Not Booked!!!!";
      }
    }
    elseif($KM == "10KM" && $city == "Mumbai"){

      $query = "";
      $query = "INSERT INTO tickets(tickets, fullname,tshirt,KM,Bibno,gender,email,phone,city, transactions_id) VALUES('$tickets','$fullname','$tshirt','$KM','$MUhalf','$gender','$email','$phone','$city','$trans_id')";
             if($DBcon->query($query) ) {
          $_SESSION['ticket_success'] = "Ur Tickets has Booked!!";

      }else {
       
    $_SESSION['ticket_error'] = "Sry Ur Tickets Are Not Booked!!!!";
      }
    }
    elseif($KM == "21.1KM" && $city == "Mumbai"){

      $query = "";
      $query = "INSERT INTO tickets(tickets, fullname,tshirt,KM,Bibno,gender,email,phone,city, transactions_id) VALUES('$tickets','$fullname','$tshirt','$KM','$MUfull','$gender','$email','$phone','$city','$trans_id')";
             if($DBcon->query($query) ) {
          $_SESSION['ticket_success'] = "Ur Tickets has Booked!!";

      }else {
       
    $_SESSION['ticket_error'] = "Sry Ur Tickets Are Not Booked!!!!";
      }
    }





    }
  }
  else {
    $_SESSION['transaction_error'] = "Last Transaction Has Cancelled";
      }
}

?>

  <script>
    var hash = '<?php echo $hash ?>';
    //alert(hash);
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
<body onload="submitPayuForm()">
<div class="container">
  <div class="modal fade" id="half-mar-modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Online Registration</h4>
      </div>
      <div class="modal-body">

              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="payuForm" method="POST" action="<?php echo $action; ?>">
                            <div class="row">
                                  <?php if($formError) { ?>
                                    <span style="color:red">Please fill all mandatory fields.</span>
                                    <br/>
                                    <br/>
                                  <?php } ?>
                                  <div class="col-xs-12 col-lg-12">
                                  <div class="col-xs-4 col-lg-4">
                                    <label>Select Tickets:</label>
                                  </div>
                                  
                                  <div class="col-xs-3 col-lg-3">
                                   <select name="tickets" id="numNames" onchange="calcamount(this);">
                                   <option value="">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   <!-- <option value="6">6</option>
                                   <option value="7">7</option>
                                   <option value="8">8</option>
                                   <option value="9">9</option>
                                   <option value="10">10</option> -->
                                </select>
                                </div>
                                <div class="col-xs-5 col-lg-5">
                                  Total Price: <span id="priceSpan_mar">0</span>
                                  
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                
                                <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                                <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                                <input type="hidden" name="abc" value="<?php echo $hash_string ?>"/>
                                <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />  
                                <input type="hidden" name="productinfo" value="The Big Beah Marathon" /> 
                                <input type="hidden" name="service_provider" value="payu_paisa" /> 
                                <input type="hidden" name="surl" value="http://thebigbeachmarathon.com/class/success.php" /> 
                                <input type="hidden" name="furl" value="http://thebigbeachmarathon.com/class/failure.php" /> 
                                <input type="hidden" name="curl" value="http://thebigbeachmarathon.com/class/success.php" />  
                                <input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? '0' : $posted['amount'] ?>" />  
                                <input type="hidden" name="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>"/>
                                <input type="hidden" name="cityname" value=""  id="cityname" />

                                <div class="col-md-6 col-lg-6 col-xs-12">
                                  <div class="form-group float-label-control label-bottom">
                                  <label for="">Email Address</label>
                                     <input type="email" class="form-control float-form" id="email" name="email" required="true" title="Please enter your email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Please enter you Email address">
                                  </div>
                                </div>
    
                                <div class="col-md-6 col-lg-6 col-xs-12">
                                  <div class="form-group float-label-control label-bottom">
                                  <label for="">Mobile Number</label>
                                       <input type="number" class="form-control float-form" id="phone" name="phone" required="true" title="Please enter your mobile number" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Please enter your mobile number">  
                                  </div>
                                  </div>
                                </div>
                            <div id="elcontainer"></div>
                              <!-- <button type="submit" class="btn btn-success btn-block">Proceed to Pay</button> -->
                                <input value="0" id="price_mar" type="hidden" name="price_mar" required="true" title="totalprice" readonly="true">
           <!--  <input value="850" id="defaultprice_mar" type="hidden" name="defaultprice" required="true"> -->
           
                              <button type="submit" class="btn btn-success btn-block pay-btn">Proceed to pay ( ₹ <span id="priceSpan_mar_proceed">0</span> )</button>
                             
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
</body>

<!-- <div class="container">
  <div class="modal fade" id="tenk-mar-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Online Registration</h4>
      </div>
      <div class="modal-body">

              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/login/">
                            <div class="row">
                                  <div class="col-xs-12 col-lg-12">
                                  <div class="col-xs-4 col-lg-4">
                                    <label>Select Seats:</label>
                                  </div>
                                  
                                  <div class="col-xs-3 col-lg-3">
                                   <select name="tickets" id="numNames2" onchange="calcamount2(this);">
                                   <option value="">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   <option value="6">6</option>
                                   <option value="7">7</option>
                                   <option value="8">8</option>
                                   <option value="9">9</option>
                                   <option value="10">10</option>
                                </select>
                                </div>
                                <div class="col-xs-5 col-lg-5">
                                  Total Price: <span id="priceSpan_mar2">0</span>
                                </div>
                                </div>
                                </div>
                            <div id="clcontainer"></div>
                            
                               <input value="0" id="price_mar2" type="hidden" name="price" required="true" title="totalprice" readonly="true">
                              <input value="650" id="defaultprice_mar2" type="hidden" name="defaultprice2" required="true">
           
                              <button type="submit" class="btn btn-success btn-block pay-btn2">Proceed to pay ( ₹ <span id="priceSpan_mar_proceed">0</span> )</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>  -->         

<script type="text/javascript">

var el =
'<div class="row parent-row"><input class="parentRowAmt" value="0" type="hidden" /><div class="col-xs-12 col-sm-3 col-lg-4 name-size mob-form-size">'+
  '<div class="form-group float-label-control label-bottom">'+
    '<label for="">Fullname</label>'+
    '<input type="text" class="form-control float-form" id="fullname[]" name="fullname[]" required="true" title="fullname" placeholder="Please enter you Fullname">'+
  '</div>'+
  '</div>'+

'<div class="col-xs-12 col-sm-3 col-lg-4 form-size mob-form-size">'+
'<div class="form-group float-label-control label-bottom">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control control-form" id="tshirt[]" name="tshirt[]" required="true">'+
                                      '<option value="">Tshirt Size</option>'+
                                      '<option value="XS">XS</option>'+
                                      '<option value="S">S</option>'+
                                      '<option value="M">M</option>'+
                                      '<option value="L">L</option>'+
                                      '<option value="XL">XL</option>'+
                                      '<option value="XXL">XXL</option>'+
                                  '</select>'+ 
'</div>'+
'</div>'+
'<div class="col-xs-12 col-sm-3 col-lg-4 form-size mob-form-size">'+
'<div class="form-group float-label-control label-bottom">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control select-km control-form" id="KM[]" name="KM[]" required="true">'+
                                      '<option value="">Select KM</option>'+
                                      '<option value="10KM">10KM</option>'+
                                      '<option value="21.1KM">21.1KM</option>'+
                                  '</select>'+ '<span id="result"></span>'+
                                  '<input type="hidden" class="form-control float-form" id="rowAmt" name="rowAmt[]" title="rowAmt" placeholder="Please enter you Fullname">'+
'</div>'+
'</div>'+
'<div class="col-xs-12 col-sm-3 col-lg-4 form-size mob-form-size">'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control control-form" id="gender[]" name="gender[]" required="true">'+
                                      '<option value="">Select Gender</option>'+
                                      '<option value="Male">Male</option>'+
                                      '<option value="Female">Female</option>'+
                                  '</select>'+ 
'</div>'+
'</div>'+
// '<div class="col-xs-12 col-sm-3 col-lg-3 form-size mob-form-size">'+
// '<div class="form-group">'+
//     // '<label for="">Gender</label>'+  
//     ' <select class="form-control time-form" id="time_lapse[]" name="time_lapse[]">'+
//                                       '<option value="">Expected Finish Time</option>'+
//                                       '<option value="2:30">2:30</option>'+
//                                       '<option value="2:45">2:45</option>'+
//                                       '<option value="3:30">3:30</option>'+
//                                       '<option value="3:45">3:45</option>'+
//                                       '<option value="4:00">4:00</option>'+
//                                       '<option value="1:00">1:00</option>'+
//                                       '<option value="1:15">1:15</option>'+
//                                       '<option value="1:30">1:30</option>'+
//                                       '<option value="1:45">1:45</option>'+
//                                       '<option value="2:00">2:00</option>'+
//                                   '</select>'+ 
// '</div>'+
// '</div>'+
'</div>'+
'<br><br>';
$(document).ready(function () {
   var city = $('#city').val();
   $('#cityname').val(city);
    $('#cityname').html(city);
function appendControls(num) {
  $('#elcontainer').empty();
  var html = null;
  for (var i=0; i<num; i++) {
    $('#elcontainer').append(el); 
  } 
}

function calcamount(tkt){
    $('#price_mar').val("0");
  $("#priceSpan_mar").text("0");
}

$("#elcontainer").on('change', '.select-km', function(e){
     
      var val = $(this).val();
      var amt = parseInt($('#price_mar').val());
      var finalAmt = (amt == "") ? 0 : amt;
      //console.log(val);
      var parentRow = $(this).parent().parent().parent();
      var parentAmtVal = parseInt(parentRow.find(".parentRowAmt").val());

      if(val != ""){
        if(val == "10KM"){
          var fixedAmt = parseInt($('#half').val());
        }
        else if(val == "21.1KM"){
          var fixedAmt = parseInt($('#full').val());
           }
        
        if(parentAmtVal == 0) {
          parentRow.find(".parentRowAmt").val(fixedAmt);
          finalAmt = finalAmt + fixedAmt;
        } else {
           finalAmt = finalAmt - parentAmtVal;
           finalAmt = finalAmt + fixedAmt;
           parentRow.find(".parentRowAmt").val(fixedAmt);
        }
      } else {
         finalAmt = finalAmt - parentAmtVal;
        parentRow.find(".parentRowAmt").val(0);
      }
      
      // else {
      //   parentRow.find(".select-age option").show();
      //   finalAmt = finalAmt - parentAmtVal;
      //   parentRow.find(".parentRowAmt").val(0);
      // }
      $('#amount').val(finalAmt);
      $('#price_mar').val(finalAmt);
      $('#priceSpan_mar_proceed').html(finalAmt);
      $('#priceSpan_mar').html(finalAmt);
    });

$('#numNames').on('change', function(e) {
  var numSelected = Number($(this).val());
  appendControls(numSelected);
  if(numSelected == 0){
    $(".pay-btn").css('display','none');
  } else{
   $(".pay-btn").css('display','block'); 
}
});
(function ($) {
  $.fn.floatLabels = function (options) {

    // Settings
    var self = this;
    var settings = $.extend({}, options);


    // Event Handlers
    function registerEventHandlers() {
      self.on('input keyup change', 'input, textarea', function () {
        actions.swapLabels(this);
      });
    }


    // Actions
    var actions = {
      initialize: function() {
        self.each(function () {
          var $this = $(this);
          var $label = $this.children('label');
          var $field = $this.find('input,textarea').first();

          if ($this.children().first().is('label')) {
            $this.children().first().remove();
            $this.append($label);
          }

          var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

          $label.data('placeholder-text', placeholderText);
          $label.data('original-text', $label.text());

          if ($field.val() == '') {
            $field.addClass('empty')
          }
        });
      },
      swapLabels: function (field) {
        var $field = $(field);
        var $label = $(field).siblings('label').first();
        var isEmpty = Boolean($field.val());

        if (isEmpty) {
          $field.removeClass('empty');
          $label.text($label.data('original-text'));
        }
        else {
          $field.addClass('empty');
          $label.text($label.data('placeholder-text'));
        }
      }
    }


    // Initialization
    function init() {
      registerEventHandlers();

      actions.initialize();
      self.each(function () {
        actions.swapLabels($(this).find('input,textarea').first());
      });
    }
    init();


    return this;
  };

  $(function () {
    jQuery('.form-element').each(function(){
      if($(this).parent().hasClass('required')){
       jQuery('.form-element').unwrap();
      }
    });

    setTimeout(function(){
      $('.float-label-control').floatLabels();
    },1000);
  });
})(jQuery);
});

</script>
