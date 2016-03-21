<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Properties</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/main.css" rel="stylesheet" >
  </head>
 
  <body>
  <!-- Property Description 
  <button id="getDetails" onclick="setBooking();">getDetails</button>-->

  	<div class="panel panel-info" id="property_panel">
  		<div class="panel-heading"><h5> Wild Sans</h5></div>
  		<div class="panel-body">
  			<div class="row">
  				<div class="col-md-3">
  					<a href="#" class="thumbnail"><img src="./img/wildsands_prop.jpg"/></a>
  				</div>
  				<div class="col-md-6">
  					<p>The Villa offers a spectacular ocean view and easy access to the beach, which is fronted by a cool cluster of coconut palms. The villa provides comfortable living conditions in a rustic setting that combines the elements of the earth in its construction. The shaded pool in the garden provides the ideal centre of attraction and sunsets are best enjoyed on the secluded beach.</p>
  				</div>
  				<div class="col-md-3">
  					<h1 style="color:red;" align="center">Prices From</h1>
  					<h3 style="color: red" align="center">$450</h3>
  				</div>
  			</div>
  		</div>
  		<div class="panel-footer">
  			<input type="button" class="btn btn-lg btn-primary" id="bookbutton" value="Book now" onclick="document.getElementById('form_container').style.display='block';$('html, body').animate({
    scrollTop: $('#form_container').offset().top
}, 1000); document.getElementById('bookbutton').style.display='none';document.getElementById('cancelbookingbutton').style.display='inline';" />

        <input type="button" class="btn btn-lg btn-danger" id="cancelbookingbutton" value="Cancel Booking" style="display:none;" onclick="document.getElementById('form_container').style.display='none';document.getElementById('form_container2').style.display='none';document.getElementById('cancelbookingbutton').style.display='none';document.getElementById('bookbutton').style.display='inline';location.reload(false);" />
  		</div>
  	</div>
  	<!-- Property Description ends here -->


    <div class="row">

      <div class="col-md-8">
        <!-- Booking Form -->
      <div align="center" id="bookform">

        <div class="panel panel-warning" id="form_container" style="display: none;">
        <div class="panel-heading">
            <h2> Booking Form </h2>
        </div>
        <div class="panel-body">
           <form class="form-horizontal">  
                              
                <div class="form-group">
                  <label for="checkIn" class="col-sm-2 control-label">Check In</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="checkIn" placeholder="Check In" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="checkOut" class="col-sm-2 control-label">Check Out</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="checkOut" placeholder="Check Out" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="numAdults" class="col-sm-2 control-label">No.of Adults</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="numAdults" name ="numAdults" placeholder="No.of Adults" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="numChild" class="col-sm-2 control-label">No.of Children</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="numChild" name ="numChild" placeholder="No.of Children" >
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10" align="right">
                    <button type="button" class="btn btn-warning" onclick="document.getElementById('form_container2').style.display='block';$('html, body').animate({
      scrollTop: $('#form_container2').offset().top
  }, 1000);document.getElementById('resources').style.display='block';setInialBookingDetails()">Submit</button>
                  </div>
                </div>
        </form>        
        </div>

       </div>

    </div>
  <!-- Booking Form ends here -->

      </div>
      <div class="col-md-3">
              <div align="center">
                <div class="panel panel-danger" id="form_container2" style="display: none;" align="center">
                <div class="panel-heading">
                  <h5> Booking Information </h5>
                </div>
                <div class="panel-body">
                  <label>Booking Dates : <span id="bookddate"></span> </label><hr />
                  <label> No of Adults : <span id="numad"></span> </label><hr />
                  <label>No of Childs : <span id="numchi"></span></label><br />
                </div>
              </div>    
              </div>
      </div>
    </div>

  	

  
  <div align="center" id="resources" style="display:none">
    <div class="panel panel-info" id="family_suit" style="margin: 5% 6% auto;">
      <div class="panel-heading"><h5> Family Suite</h5></div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-3">
            <a href="#" class="thumbnail"><img src="./img/family_suite.jpg"/></a>
          </div>
          <div class="col-md-3" align="left">
            <h6>AN EXTRA LARGE SEA VIEW SUIT</h6>
            <p>with an attached day room. There are 4 single beds & 1 day bed, with fans in both rooms and attached direct sunlit bathroom with hot water rain showers and access to the lobby. Towels and bathroom amenities are standard.</p>
          </div>
          <div class="col-md-1">
            <h5> number of guests</h5>
            <br />
            <h5>4</h5>
          </div>
          <div class="col-md-3">
            <h5> price per night</h5>
            <br />
            <h3 style="color:red;">$500</h3>
          </div>
          <div class="col-md-2">
            <h5>Number of Rooms</h5>
            <br /><br />
            <select id="numroomselect" onchange="document.getElementById('form_container3').style.display='block';document.getElementById('guestDetailsSection').style.display='block';$('html, body').animate({
    scrollTop: $('#form_container3').offset().top
}, 1000);chooseNumResource();">
              <option value="0" onfocus="document.getElementById('form_container3').style.display='none';">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>
      </div>

    </div>

  </div>


  <div align="center" id="form_container3" style="display:none;">
    <div class="panel panel-warning" style="margin: 5% 6% auto;" align="center">
    <div class="panel-heading">
      <h5> Price Information </h5>
    </div>
    <div class="panel-body">
      <label>Booking Dates : <span id="bookdate2"></span> </label><hr />
      <label> Resource : family suite </label><hr />
      <label> Number of days : <span id="numdays"></span> </label><hr />
      <label> Number of Rooms :  <span id="numroom"></span> </label><hr />
      <label><h4 style="color:red;"> Total Price :  <span id="totprice"></span> </h4></label><head></head>
    </div>
  </div> 
  </div>

  <div class="row" id="form_container4">
      <div class="col-md-8">
         <div id="guestDetailsSection" style="display: none;">
          <div class="panel panel-warning" id="guestDetailsPanelSection">
            <div class="panel-heading" id="guestDetailsPanelHeader">
              <h3>Enter Your Details...</h3>
            </div>
            <div class="panel-body" id="guestDetailsPanelBody">
              <form>
                <div class="form-group">
                  <label> Name : </label>
                  <input type="text" class="form-control" id="guestNameinput" placeholder="Enter your name....">
                </div>
                <div class="form-group">
                  <label> Email </label>
                  <input type="email" class="form-control" id="guestEmailinput" placeholder="Enter your email...">
                </div>
                <div class="form-group" style="margin: 0;padding: 0;">
                  <label style="margin: 0;padding: 0;">Gender : </label>
                </div>
                <div class="radio" style="margin: o;padding: 0;">
                  <label>
                    <input type="radio" name="gender" value="M"> Male
                  </label>&emsp;
                  <label>
                    <input type="radio" name="gender" value="F"> Female
                  </label>
                </div>
                <div class="form-group">
                  <label> Phone No : </label>
                  <input type="text" class="form-control" id="guestPhonenoinput" placeholder="Enter your phone no...">
                </div>
                <div class="form-group">
                  <label> Do you have a discount code ? &nbsp;</label>
                  <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-primary" onclick="document.getElementById('discountCode').style.display='inline';document.getElementById('finalSubmit').style.display='inline';$('html, body').animate({
      scrollTop: $('#discountCode').offset().top
  }, 2000);">yes</button>
                  <button type="button" class="btn btn-danger" onclick="document.getElementById('discountCode').style.display='none';document.getElementById('finalSubmit').style.display='inline';$('html, body').animate({
      scrollTop: $('#finalSubmit').offset().top
  }, 1000);">no</button>
                </div>
                </div>  
                <div class="form-group" id="discountCode" style="display:none;">
                  <label> discount code : </label>
                  <input type="text" class="form-control" id="discount_code"  style="color:red;" value="Enter your discount code...">
                  <br />
                </div>       
                <div align="right" style="margin:2% 0 0;display:none" id="finalSubmit">
                  <button type="button" class="btn btn-warning btn-lg" onclick="document.getElementById('reviewBooking').style.display='block';finalPrice();">Review Booking</button>          
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div align="center" id="reviewBooking" style="display:none;">
          <div class="panel panel-warning" style="margin: 5% 6% auto;" align="center">
          <div class="panel-heading">
            <h5> Price Information </h5>
          </div>
          <div class="panel-body">
            <label>Guest Name : <span id="guestName"></span> </label><hr />
            <label>Contact number : <span id="guestPhoneno"></span></label><hr />
            <label>Booking Dates : <span id="guestBookingDates"></span> </label><hr />
            <label> Resource : family suite </label><hr />
            <label> Number of Rooms : <span id="guestNumRooms"></span></label><hr />
            <label> Discount code: <span id="guestDiscountcode"></span></label><hr />
            <label><h4 style="color:red;"> Final Price : <span id="final_price"></span> </h4></label><hr />
            <input type="button" class="btn btn-lg btn-success btn-justify" onclick="setBooking()" value="pay with payLk" />
          </div>
        </div> 
        </div>
      </div>
  </div>  

  <script src="jquery/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="./script/main.js"></script>
    <script type="text/javascript" src="./script/restClient.js"></script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>