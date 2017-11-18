<?php
session_start();
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

<script type="text/javascript">
function validate() {
	$("#file_error").html("");
	$(".demoInputBox").css("border-color","#F0F0F0");
	var file_size = $('#profile')[0].files[0].size;
	var FileUploadPath  = $('#profile').val();
	if(file_size>2097152) {
		//$("#file_error").html("File size is greater than 2MB");
		$(".demoInputBox").css("border-color","#FF0000");
		alert("File size is greater than 2MB");
		return false;
	} 
	var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
	var format = ['gif', 'png', 'bmp', 'jpeg', 'jpg'];
	//The file uploaded is an image
	if (format.contains(Extension)) {
		alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP...");
		return false;
	}
	return true;
}
</script>

<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel" style="display: none;">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#x-corp-carousel" data-slide-to="1"></li>
		<li data-target="#x-corp-carousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="img/hero-slide-1.jpg" alt="Hero Slide">

			<div class="carousel-caption">
				<h1>It′s simple, smart and occasionally magical.</h1>

				<p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically
					transition emerging schemas and.</p>
			</div>
		</div>
		<div class="item">
			<img src="img/hero-slide-2.jpg" alt="...">

			<div class="carousel-caption">
				<h1>It′s profitable and successful!</h1>

				<p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures.
					Compellingly revolutionize future-proof interfaces and.</p>
			</div>
		</div>
		<div class="item">
			<img src="img/hero-slide-3.jpg" alt="...">

			<div class="carousel-caption">
				<h1>Good solutions for your business!</h1>

				<p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique
					niches after go forward.</p>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
		<i class="fa fa-angle-left" aria-hidden="true"></i>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- #x-corp-carousel-->
<section class="x-services ptb-100 gray-bg">
<div class="container">
<br>
<br>
	<div id="main">
		<form name="member" method="post" enctype="multipart/form-data" action="class/member.php" onSubmit="return validate();">
		<div class="col-md-4 well" id="leftPanel">
			<div class="row">
				<div class="col-md-12">
					<div>
						<img src="img/profile.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
						<input type="file" name="profile" id="profile" accept="image/*" class="demoInputBox" required>
						<span id="file_error"></span></div>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p> 
						<div class="btn-wrapper">
							<input type="file" name="profile-pic" required>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 well" id="rightPanel">
			<div class="row">
			<div class="col-md-12">
			<h2>Become a Member</h2>
			<hr class="">
			<div class="row">
			<?php
				// Merchant key here as provided by Payu
				$MERCHANT_KEY = "JBZaLc";
				// Merchant Salt as provided by Payu
				$SALT = "GQs7yium";
				$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
				// End point - change to https://secure.payu.in for LIVE mode
				$PAYU_BASE_URL = "https://test.payu.in";
			?>
			<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
			<input type="hidden" name="hash" value=""/>
			<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
			<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
				
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					 <label>Firstname</label>
						<input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required value="<?php echo $user['FirstName']; ?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					 <label>Lastname</label>
						<input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required value="<?php echo $user['LastName']; ?>">
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
						<input type="number" name="contact_number" id="contact_number" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" required>
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
			</div>
			<!-- <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div> -->
			<hr class="">
			<div class="row">
				<div class="col-xs-12 col-md-12">
				<button type="submit" class="btn btn-success btn-block btn-lg">Save</button>
				</div>
			</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</form>
		</div>
	 </div>
</section>

<!-- <script type="text/javascript">
$( function() {
		$('#date').datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: new Date()
			});
	  } );
</script> -->
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
</script>

<?php
include("html/footer.html")
?>

