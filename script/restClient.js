//alert("hello");
//getProperties();

	var apikey = "461ce702-2dac-4485-bab1-fcd573719a36";
	var propertykey = "bc8d2f0a-e7ae-4a6b-ab73-b4f4081eba70";
	var checkin = document.getElementById("checkIn").value;
	var checkout = document.getElementById("checkOut").value;
	var numAdult = document.getElementById("numAdults").value;
	var numChild = document.getElementById("numChild").value;
	var roomId ="39588"; 
	var roomQty = $("#numroomselect option:selected").text();
	var roomQtyInt = parseInt($("#numroomselect option:selected").text());
	var guestname = document.getElementById("guestNameinput").value;
	var guestGender = $("input[name=gender]:checked").val();
	var guestTitle;
	var guestemail = document.getElementById("guestEmailinput").value;
	var guestPhoneno = document.getElementById("guestPhonenoinput").value;
	var discountCode = document.getElementById("discount_code").value;
	//var questname = document.getElementById("checkIn").value;
	var roomPrice = 500;
	var totprice;

function getProperties(){
	//alert("hi");
	$.ajax({
        type: 'post',
        //dataType: "jsonp",
        //crossDomain: true,
        //jsonpCallback: 'callback',
        url: "https://www.beds24.com/api/json/getProperties",
        data: JSON.stringify({
        	"authentication": {
		        "apiKey": "461ce702-2dac-4485-bab1-fcd573719a36"
		    }
        }),
        //headers: {
        //	"authentication": {
		    //    "apiKey": "461ce702-2dac-4485-bab1-fcd573719a36"
		  //  }
        // },
        success: function(data){
        	console.log("success",data);
        },
        error: function(error){
        	console.log(error);
        }
    });

}

function setBooking(){

	 checkin = document.getElementById("checkIn").value;
	 checkout = document.getElementById("checkOut").value;
	 numAdult = document.getElementById("numAdults").value;
	 numChild = document.getElementById("numChild").value;
	 roomId ="39588"; 
	 roomQty = $("#numroomselect option:selected").text();
	 roomQtyInt = parseInt($("#numroomselect option:selected").text());

	 guestname = document.getElementById("guestNameinput").value;
	 guestemail = document.getElementById("guestEmailinput").value;
	 guestGender = $("input[name=gender]:checked").val();
	 guestPhoneno = document.getElementById("guestPhoneno").value;
	 discountCode = document.getElementById("discount_code").value;
	 questname = document.getElementById("checkIn").value;


	if(guestGender == "M"){
		guestTitle = "Mr";
	}else {
		guestTitle = "Ms";
	}
	//alert(guestTitle);
	$.ajax(
		{	
			type: 'post',
			//url: "https://www.beds24.com/api/json/setBooking",
			//dataType:'json',
			url:"http://localhost:8080/SetBookingService/booking/setBooking/bookingForm",
			contentType: "application/json",
			data: JSON.stringify({
				    "authentication": {
				        "apiKey": apikey,
				        "propKey": propertykey 
				    },
				    "roomId": roomId,
				    "unitId": "1",
				    "roomQty": roomQty,
				    "status": "1",
				    "firstNight": checkin,
				    "lastNight": checkout,
				    "numAdult": numAdult,
				    "numChild": numChild,
				    "guestTitle": guestTitle,
				    "guestFirstName": "Barak",
				    "guestName": guestname,
				    "guestEmail": guestemail,
				    "guestPhone": guestPhoneno,
				    "guestMobile": "09 87654321",
				    "guestFax": "0123456",
				    "guestAddress": "1 Big Street",
				    "guestCity": "Washington",
				    "guestPostcode": "1",
				    "guestCountry": "United states of america",
				    "guestArrivalTime": "late, very late",
				    "guestVoucher": "give me discount",
				    "guestComments": "Non smoking please",
				    "guestCardType": "VISA",
				    "guestCardNumber": "0000000000000000",
				    "guestCardName": "Mr Smith",
				    "guestCardExpiry": "01\/17",
				    "guestCardCVV": "000",
				    "message": "text",
				    "custom1": "text",
				    "custom2": "text",
				    "custom3": "text",
				    "custom4": "text",
				    "custom5": "text",
				    "custom6": "text",
				    "custom7": "text",
				    "custom8": "text",
				    "custom9": "text",
				    "custom10": "text",
				    "notes": "VIP",
				    "flagColor": "ff0000",
				    "flagText": "Show booking in red",
				    "price": "100.00",
				    "deposit": "10.00",
				    "tax": "5.00",
				    "commission": "15.00",
				    "refererEditable": "online",
				    "notifyUrl": "true",
				    "notifyGuest": "false",
				    "notifyHost": "false",
				    "assignBooking": "false",
				    "invoice": [
				        {
				            "description": "lodging",
				            "status": "",
				            "qty": "1",
				            "price": "123.45",
				            "vatRate": "10",
				            "type": "0"
				        }
				    ]
			}),
		success: function(data){
        	//console.log("success",data);
        	alert(data.success+" with this booking id "+data.bookId);
        },
        error: function(error){
        	console.log(error);
        }
	}
		);
}

function setInialBookingDetails(){

	 checkin = document.getElementById("checkIn").value;
	 checkout = document.getElementById("checkOut").value;
	 numAdult = document.getElementById("numAdults").value;
	 numChild = document.getElementById("numChild").value;

	var $bookddate = document.getElementById("bookddate");
	var $numad = document.getElementById("numad");
	var $numchi = document.getElementById("numchi");
	$bookddate.innerHTML = checkin+" - "+checkout;
	$numad.innerHTML = numAdult;
	$numchi.innerHTML = numChild;

}

function chooseNumResource(){
	var roomprice = 500;
	roomQty = $("#numroomselect option:selected").text();
	roomQtyInt = parseInt(roomQty);
	var datediff = new Date(checkout).getDate()-new Date(checkin).getDate();
	totprice = roomprice * roomQtyInt * datediff;
	document.getElementById("bookdate2").innerHTML=checkin+" - "+checkout;
	document.getElementById("numroom").innerHTML=roomQty;
	document.getElementById("totprice").innerHTML=totprice;
	document.getElementById("numdays").innerHTML=datediff;
}

function finalPrice(){
	 guestname = document.getElementById("guestNameinput").value;
	 guestGender = $("input[name=gender]:checked").val();
	 guestemail = document.getElementById("guestEmailinput").value;
	 guestPhoneno = document.getElementById("guestPhonenoinput").value;
	 discountCode = document.getElementById("discount_code").value;
	// alert(guestPhone+" "+guestTitle+" "+guestname);
	 var dis=0;
	if(guestGender == "M"){
		guestTitle = "Mr";
	}else {
		guestTitle = "Ms";
	}

	document.getElementById("guestName").innerHTML=guestname;
	document.getElementById("guestPhoneno").innerHTML=guestPhoneno;
	document.getElementById("guestBookingDates").innerHTML=checkin+" - "+checkout;
	document.getElementById("guestNumRooms").innerHTML=roomQty;
	document.getElementById("guestDiscountcode").innerHTML=discountCode;

	if(discountCode=="ws30"){
		dis=30;
	}

	var finalPrice = totprice - (dis*totprice)/100;
	document.getElementById("final_price").innerHTML="$"+finalPrice;
}
