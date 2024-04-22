
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap');
body{margin:0; padding:0; font-family: 'Lato', sans-serif !important;}
html {font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #545454;}
.preview-header{font-size: 12px; height: 54px; background-color: #262626; z-index: 100;}
.preview-envato-logo{float: left; padding: 0 20px;}
.preview-envato-logo a {display: inline-block; position: absolute; top:10px; text-indent: -9999px; height: 34px; width:130px; background: url(https://caportal.saginfotech.com/wp-content/themes/caportal/images/logo.png); background-size: 130px 34px;}
.preview-actions {float: right; padding-top:10px;}
.preview-action-buy {display: inline-block; padding: 0 20px;}
.buy-now{color: white;font-size: 14px; padding: 5px 20px; line-height: 1.5;background-color: #82b440;box-shadow: 0 2px 0 #6f9a37; position: relative; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;    -webkit-box-sizing: border-box; box-sizing: border-box; display: inline-block; margin: 0; border: none; border-radius: 4px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; text-align: center; text-decoration: none;    cursor: pointer;}
.buy-now:hover{background-color: #7aa93c !important; color:#fff !important;}
.header.sticky-header{top:54px !important;}
.top-header-fixed{width:100%;  height:54px; border:none; margin: 0px; padding: 0px; display: block; position:sticky; top:0; z-index: 99999;}

.fixedhead .mainmenu-area, .fixedhead .navbar-nav-tp, .fixedhead .navbar, .fixed-top, .navbar-fixed-top, .header.sticky-header .static-top, .fixed-header .sticky-header, .nav-scrl {top: 54px;}
.head54{top: 54px !important;}
@media(max-width:767px){.preview-envato-logo, .preview-action-buy{padding: 0 9px;}.preview-envato-logo a{top: 10px;height: 34px;background-size: 124px;background-repeat: no-repeat;width: 124px;}.buy-now{font-size: 13px;padding: 5px 10px;}}

 .modal {display: none;  position: fixed; z-index:999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0, 0, 0); background-color: rgba(0, 0, 0, 0.8);}
 .modal-content {margin:80px auto 0; width:400px; border-radius:10px;}
 .header-popup{background:#06a4f2; padding:15px 20px; display:block; border-top-left-radius:10px; border-top-right-radius:10px; overflow:hidden;}
 .header-popup h1{font-size:21px; color:#fff; margin:0 0 10px;font-family: 'Lato', sans-serif !important;}
 .modal input, .modal textarea {width:100%; padding:10px 15px; margin-bottom:15px; border:1px solid #ccc; background:#fff; border-radius: 5px; height:42px; outline: none; font-size:18px;}
 .modal textarea{height:80px;}
 .contact-form-popup button {padding:10px 25px; border: none; background: #06a4f2; font-size:17px;font-weight: 400; color: #fff; height:48px; text-transform:uppercase;}
 .contact-form-popup button:hover{color:#fff;background: #5A9765;} 
 .modal .close {color: #fff; font-weight: bold; cursor: pointer; position: absolute; background: #82b440; height: 40px; width: 40px; line-height: 34px; border: 2px solid #fff; border-radius: 80px; font-size: 26px; text-align: center;  top: -18px; right: -18px; opacity: 1 !important;}
 .modal  p{position:relative; margin:0;}
 .modal span[id].err{position: absolute;top: 37px; font-size: 12px;}
 
.header-popup p{display: block; clear:both; position:relative; margin-bottom:0;font-family: 'Lato', sans-serif !important;}
.header-popup p img{position:absolute; left:0; top:0; width:35px;}
.header-popup p span{color:#fff; font-size:13px; line-height:1.5em; display:block; clear:both;margin-left:70px;}
.header-popup p a{font-weight:600; font-size:21px; color:#fff; display: inline; clear:both; line-height: 34px; margin-left:48px;}
.form-main{padding:15px 20px 20px; display:block;}

.contact-dropus{padding:15px 20px 0; display:block;}
.contact-dropus h2{font-size: 1.25rem; margin-bottom:5px;color:#000; font-family: 'Lato', sans-serif !important;}	
.contact-dropus p{color:#797979; font-size:13px; line-height:1.5em; display:block; clear:both;margin-bottom:0px; font-family: 'Lato', sans-serif !important;}

</style>



<div class="preview-header">
  <div class="preview-envato-logo">
    <a target="_blank" href="https://caportal.saginfotech.com/">caportal</a>
  </div>
  
  <div class="preview-actions">
  <div class="preview-action-buy">
   <button class="button buy-now" data-modal="modalOne">Get a Quote Now for Demo</button>
  </div>
</div>
</div>




  <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form-popup">
         <a class="close">&times;</a>
        <div class="header-popup">
        <h1>Our advisor is just a call away</h1>
        <p><img src="https://caportal.saginfotech.com/wp-content/themes/caportal/new-design/images/popup-phone.png" alt="phone" /><a href="tel:7023472073">+91 7023472073</a>
       </p>
        </div>
         <div class="contact-dropus">
         <h2>Drop us a Query</h2>
        <p>We will get in touch with you in the next 24 hours</p>
         </div>
          <form class="form-main" method="post" action="https://caportal.saginfotech.com/theme-mail.php" onsubmit="return submitForm();">
        <p>
        <input type="text" placeholder="Name" aria-required="true" class="form-control" size="40" value name="name" id="fname" onChange="return frmvlid();">
        <span id="fnmsg" class="err" style="color:#FF0000;"></span>
        </p>
        <p>
        <input type="text" placeholder="Mobile Number" aria-required="true" class="form-control" size="40" value name="mobile" id="fmobile" onChange="return frmvlid();">
        <span id="fmmsg" class="err" style="color:#FF0000;"></span>
        </p>
        <p>
        <input type="text" placeholder="Email" aria-required="true" class="form-control" size="40" value name="email" id="femail" onChange="return frmvlid();">
        <span id="femsg" class="err" style="color:#FF0000;"></span>
        </p>
        <p>
        <textarea placeholder="Type your message here" aria-required="true" class="form-control" size="40" value name="comment" id="fmessage" onChange="return frmvlid();"></textarea>
        <span id="fmsmsg" class="err" style="color:#FF0000;"></span>
        </p>
        <div id="g-recaptcha-error"></div>
        <p style="text-align:center;">
        <button type="submit" class="btn btn-submit" name="submit" value="Submit" onClick="return frmvlid();">Submit Query</button>
        </p>
</form>
         
        </div>
        
      </div>
    </div>
    


 <script>
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.getAttribute("data-modal");
          document.getElementById(modal).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      };
	  
	  
	  
function frmvlid() {
    var name = $("#fname").val();
    var mobile = $("#fmobile").val();
    var email = $("#femail").val();
    var message = $("#fmessage").val();  
    var filtermobile = /^\d{10,13}$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(name == '') {
        document.getElementById('fnmsg').innerHTML="<span class='err'>Please Fill Name!</span>"; 
        $('#fnmsg').slideDown(500); 
        return false;
    }else{
        $('#fnmsg').slideUp(500);
    }

    if(mobile == '') {
        document.getElementById('fmmsg').innerHTML="<span class='err'>Please Fill Mobile!</span>"; 
        return false;
    }else{
        if(!filtermobile.test(mobile)) {
            document.getElementById('fmmsg').innerHTML="<span class='err'>Please Fill Correct Mobile!</span>"; 
            $('#fmmsg').slideDown(500);
            return false;
        }else{
            $('#fmmsg').slideUp(500); 
        }
    }

    if(email == '') {
        document.getElementById('femsg').innerHTML="<span class='err'>Please Fill Email!</span>"; 
        return false;
    }else{
        if (!filter.test(email)) { 
            document.getElementById('femsg').innerHTML="<span class='err'>Please Enter Correct Email ID!</span>"; $('#femsg').slideDown(500); 
            return false;
        }else {
            $('#femsg').slideUp(500);
        }
    }
}	  



    </script>





