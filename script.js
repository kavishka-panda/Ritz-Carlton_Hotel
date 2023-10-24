function changeView() {
  var signUpBox = document.getElementById("signUpBox");
  var signInBox = document.getElementById("signInBox");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function changeView2() {
  var signUpBox = document.getElementById("forgotBox");
  var signInBox = document.getElementById("signInBox");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function signUp() {
  var n = document.getElementById("name");
  var p = document.getElementById("password");
  var m = document.getElementById("mobile");
  var e = document.getElementById("email");

  var form = new FormData();
  form.append("n", n.value);
  form.append("p", p.value);
  form.append("m", m.value);
  form.append("e", e.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var text = r.responseText;

      if (text == "success") {
        var signUpBox = document.getElementById("signUpBox");
        var signInBox = document.getElementById("signInBox");

        signUpBox.classList.toggle("d-none");
        signInBox.classList.toggle("d-none");
      } else {
        document.getElementById("msg").innerHTML = text;
        document.getElementById("msgdiv").className = "d-block";
      }
    }
  };
  r.open("POST", "signUpProcess.php", true);
  r.send(form);
}

function signIn() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");

  var f = new FormData();
  f.append("e", email.value);
  f.append("p", password.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        document.getElementById("msgdiv2").className = "d-none";
        document.getElementById("done").innerHTML = t;
        document.getElementById("donediv").className = "d-block";
        window.location = "home.php";
      } else {
        document.getElementById("msg2").innerHTML = t;
        document.getElementById("msgdiv2").className = "d-block";
      }
    }
  };
  r.open("POST", "signInProcess.php", true);
  r.send(f);
}

function signout() {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        window.location.reload();
      }
    }
  };
  r.open("GET", "signOutProcess.php", true);
  r.send();
}

var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

function changeProductImage() {
  var image = document.getElementById("imageuploader");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 3) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert(
        file_count +
        " files. You are proceed to upload only 3 or less than 3 files."
      );
    }
  };
}

function addOffer() {
  var title = document.getElementById("title");
  var price = document.getElementById("price");
  var des = document.getElementById("des");
  var image = document.getElementById("imageuploader");


  var f = new FormData();

  f.append("t", title.value);
  f.append("p", price.value);
  f.append("d", des.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {

    f.append("image" + x, image.files[x]);

  }


  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var response = r.responseText;
      if (response === "Done") {
        window.location.reload();
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgdiv").className = "d-block";
      }

    }
  };
  r.open("POST", "addOfferProcess.php", true);
  r.send(f);
}

function removeOffer(id) {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Offer has been removed") {
        window.location.reload();
      } else {
        alert(t);
      }
    }
  }
  r.open("GET", "removeOffer.php?id=" + id, true);
  r.send();
}

function addRooms() {
  var name = document.getElementById("name");
  var price = document.getElementById("price");
  var description = document.getElementById("description");
  var image = document.getElementById("imageuploader");
  var size = document.getElementById("size");
  var occupancy = document.getElementById("occupancy");
  var qty = document.getElementById("qty");

  var f = new FormData();

  f.append("n", name.value);
  f.append("p", price.value);
  f.append("d", description.value);
  f.append("s", size.value);
  f.append("o", occupancy.value);
  f.append("q", qty.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {

    f.append("image" + x, image.files[x]);

  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var response = r.responseText;
      if (response === "Done") {
        window.location.reload();
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgdiv").className = "d-block";
      }

    }
  };
  r.open("POST", "addRoomProcess.php", true);
  r.send(f);
}

function removeRoom(id) {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Offer has been removed") {
        window.location.reload();
      } else {
        alert(t);
      }
    }
  }
  r.open("GET", "removeRoom.php?id=" + id, true);
  r.send();
}

function adminVerification() {
  var email = document.getElementById("e");

  var f = new FormData();
  f.append("e", email.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
          var adminVerificationModal = document.getElementById("verificationModal");
          av = new bootstrap.Modal(adminVerificationModal);
          av.show();
      } else {
        alert(t);
      }
    }
  }

  r.open("POST", "adminVerificationProcess.php", true);
  r.send(f);
}


function verify() {
  var verification = document.getElementById("vcode");

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        av.hide();
        window.location = "adminPanel.php";
      } else {
        alert(t);
      }

    }
  }

  r.open("GET", "verificationProcess.php?v=" + verification.value, true);
  r.send();
}

function signout2() {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        window.location = "adminSignIn.php";
      }
    }
  };
  r.open("GET", "adminSignOut.php", true);
  r.send();
}

function frogotPassword() {

  var email = document.getElementById("email3");

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        var m = document.getElementById("frogotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(t);
      }
    }
  }
  r.open("GET", "frogotPasswordProcess.php?e=" + email.value, true);
  r.send();

}


function showPassword() {

  var input = document.getElementById("inp");

  var eye = document.getElementById("e1");

  if (input.type == "password") {

    input.type = "text";
    eye.className = "bi bi-eye-fill";

  } else {

    input.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }

}

function showPassword2() {
  var input = document.getElementById("rnp");

  var eye = document.getElementById("e1");


  if (input.type == "password") {

    input.type = "text";
    eye.className = "bi bi-eye-fill";

  } else {

    input.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}


function resetpw() {
  var email = document.getElementById("email3");
  var np = document.getElementById("inp");
  var rnp = document.getElementById("rnp");
  var vcode = document.getElementById("vc");

  var f = new FormData();



  f.append("e", email.value);
  f.append("n", np.value);
  f.append("r", rnp.value);
  f.append("v", vcode.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        bm.hide();

        var g = document.getElementById("frogotPasswordModal2");
        gm = new bootstrap.Modal(g);
        gm.show();
      } else {
        alert(t);
      }
    }
  }

  r.open("POST", "resetPassword.php", true);
  r.send(f);
}

function done() {
  window.location.reload();
}

function changeRoom(id) {



  r.open("GET", "roomId.php?id=" + id, true);
  r.send();

}

function updateRoom() {

  var roomId = document.getElementById("room_id");
  var name = document.getElementById("name");
  var price = document.getElementById("price");
  var description = document.getElementById("description");
  var image = document.getElementById("imageuploader");
  var size = document.getElementById("size");
  var occupancy = document.getElementById("occupancy");
  var qty = document.getElementById("qty");

  var f = new FormData();

  f.append("n", name.value);
  f.append("p", price.value);
  f.append("d", description.value);
  f.append("s", size.value);
  f.append("o", occupancy.value);
  f.append("id", roomId.value);
  f.append("qty", qty.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {

    f.append("image" + x, image.files[x]);

  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var response = r.responseText;
      if (response === "Done") {

        document.getElementById("done").innerHTML = "Room Update Done !";
        document.getElementById("donediv").className = "d-block";
        window.location = "addrooms.php";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgdiv2").className = "d-block";
      }

    }
  };
  r.open("POST", "updateRoomsProcess.php", true);
  r.send(f);
}

function updateOffer() {

  var offer_id = document.getElementById("offer_id");
  var title = document.getElementById("title");
  var price = document.getElementById("price");
  var des = document.getElementById("des");
  var image = document.getElementById("imageuploader");


  var f = new FormData();

  f.append("t", title.value);
  f.append("p", price.value);
  f.append("d", des.value);
  f.append("id", offer_id.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {

    f.append("image" + x, image.files[x]);

  }


  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var response = r.responseText;
      if (response === "Done") {

        window.location = "addOffer.php";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgdiv").className = "d-block";
      }

    }
  };
  r.open("POST", "updateOfferProcess.php", true);
  r.send(f);

}

function payNow(id) {

  var qty = document.getElementById("qty").textContent;
  var indate = document.getElementById("indate").textContent;
  var outdate = document.getElementById("outdate").textContent;
  var total = document.getElementById("total").textContent;
  var address = document.getElementById("address").value;
  var city = document.getElementById("city").value;
  var night = document.getElementById("night").textContent;
  var name = document.getElementById("name").value;
  var mobile = document.getElementById("mobile").value;
  var email = document.getElementById("email").value;


  var f = new FormData();

  f.append("qty", qty);
  f.append("indate", indate);
  f.append("outdate", outdate);
  f.append("total", total);
  f.append("address", address);
  f.append("city", city);
  f.append("night", night);
  f.append("id", id);
  f.append("name", name);
  f.append("mobile", mobile);
  f.append("email", email);
  
  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      // var t = r.responseText;
      // alert(t);
      
      var obj = JSON.parse(r.responseText);

      payhere.onCompleted = function onCompleted(orderId) {
       
        console.log("Payment completed. OrderID:" + orderId);
        saveInvoice(orderId, id, email, total, qty, indate, outdate, night);
        // Note: validate the payment and show success or failure page to the customer
      };

      // Payment window closed
      payhere.onDismissed = function onDismissed() {
        // Note: Prompt user to pay again or show an error page
        console.log("Payment dismissed");
      };

      // Error occurred
      payhere.onError = function onError(error) {
        // Note: show an error page
        console.log("Error:" + error);
      };

      // Put the payment variables here
      var payment = {
        "sandbox": true,
        "merchant_id": "1221049",    // Replace your Merchant ID
        "return_url": "http://localhost/hotel_project/singelBookingViwe.php?id"+id ,      // Important
        "cancel_url": "http://localhost/hotel_project/singelBookingViwe.php?id"+id ,      // Important
        "notify_url": "http://sample.com/notify",
        "order_id": obj["order_id"],
        "items": "Door bell wireles",
        "amount": obj["amount"],
        "currency": obj["currency"],
        "hash": obj["hash"], // *Replace with generated hash retrieved from backend
        "first_name": obj["first_name"],
        "last_name": obj["last_name"],
        "email": obj["email"],
        "phone": obj["phone"],
        "address": obj["address"],
        "city": obj["city"],
        "country": "Sri Lanka",
        "delivery_address": "No. 46, Galle road, Kalutara South",
        "delivery_city": "Kalutara",
        "delivery_country": "Sri Lanka",
        "custom_1": "",
        "custom_2": ""
      };
      payhere.startPayment(payment);
    }
  }
  r.open("POST", "payProcess.php" , true);
  r.send(f);
}


function saveInvoice(orderId, id, email, total, qty, indate, outdate, night){
  
  var f = new FormData();

  f.append("orderId",orderId);
  f.append("roomId",id);
  f.append("email",email);
  f.append("total",total);
  f.append("qty",qty);
  f.append("indate",indate);
  f.append("outdate",outdate);
  f.append("night",night);

  var r = new XMLHttpRequest();
  
  r.onreadystatechange = function(){
    if(r.readyState === 4 ){
        var t = r.responseText;
        if(t == "1"){
          window.location = "invoice.php?id=" + orderId;
        }else{
          alert(t);
        }
    }
  };


  r.open("POST","saveInvoice.php", true);
  r.send(f);
}

function find(){
  var indate = document.getElementById("indate");
  var outdate = document.getElementById("outdate");
  var qty = document.getElementById("qty");
  
  var f = new FormData();

  f.append("indate", indate.value);
  f.append("outdate", outdate.value);
  f.append("qty", qty.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function(){
    if(r.readyState == 4){
      var t = (r.responseText);
      document.getElementById("view_area").innerHTML = t;
    }
  }
  
  r.open("POST","findRoom.php",true);
  r.send(f);
}

function redirectToNextPage(room_id) {
  var indate = document.getElementById('indate').value;
  var outdate = document.getElementById('outdate').value;
  var qty = document.getElementById('qty').value;

  var bookingURL = 'singelBookingViwe.php?id=' + room_id + '&indate=' + indate + '&outdate=' + outdate + '&qty=' +qty ;
  window.location.href = bookingURL;

}

function adminbooking(){
    var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        if(r.readyState == 4){
          var t = (r.responseText);
          document.getElementById("booking").innerHTML = t;
        }
      }
    }
    r.open("GET", "adminShowBooking.php", true);
    r.send();
}
function admincostomers(){
    var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        if(r.readyState == 4){
          var t = (r.responseText);
          document.getElementById("booking").innerHTML = t;
        }
      }
    }
    r.open("GET", "adminShowCostomers.php", true);
    r.send();
}

function adminaddoffer(){
  var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        if(r.readyState == 4){
          var t = (r.responseText);
          document.getElementById("booking").innerHTML = t;
        }
      }
    }
    r.open("GET", "addOffer.php", true);
    r.send();
}
function adminaddRooms(){
  var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        if(r.readyState == 4){
          var t = (r.responseText);
          document.getElementById("booking").innerHTML = t;
        }
      }
    }
    r.open("GET", "addRooms.php", true);
    r.send();
}
