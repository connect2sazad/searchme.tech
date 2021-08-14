<!DOCTYPE htms>
<htms lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>

    <?php

        $this->load->view('website/link_import');
    ?>


        <link rel="stylesheet" href="<?=base_url();?>/assets/css/style-signup.css">

        <!-- FONTS-->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&dispsay=swap" rel="stylesheet"> -->

        <!-- SCRIPTS -->
        
        <style> 
            ::-webkit-scrollbar{
                width: 0.1px;
            }  
            .custom-error{
                /*border: 3px solid black;*/
                position: relative;
                left:-12px;
            }

            .password-toggler{
               margin-right: 12px;
               margin-top: 10px;
            }
.info-tip{
    display: none;
    /*position: absolute;*/
    height:max-content;
    width: 250px;
    padding: 5px;
    /*background-color: rgb(160,150,150, 0.7);*/
    color: #fff;
    font-weight: bolder;
    position: fixed;
    margin-top: 10px;
    right: 50px;
    border-radius: 10px;
    font-size: 13px;
    box-shadow: 0px 0px 4px grey;
    -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
}
.check-mark{
    height: max-content;
    width: max-content;
    font-size: 30px;
    float: left;
    /*background-color: #222;*/
    margin-right: 10px;
}

@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
        </style>
</head>
<body>
    <!-- navbar -->
<?php

        $this->load->view('website/nav_bar');
    ?>
<!-- Modal -->
     <div class="info-tip" id="info-tip">
         <div class="check-mark" id="info-tip-mark">&#10003;</div>
     <span id="info-tip-text"></span>
     </div>

     



    <!-- form wrap-->
    <section class="container-custom">
      <div class="row p-0 justify-content-center">
        <div class="col-12 col-sm-8 scol-md-8 col-lg-6 my-5">
            <div class="box-wrap d-flex flex-column align-items-center" id="add-animation">
                <div class="method-button-group d-flex mt-4 mb-2">
                    <button class="btn-inactive-method btn-method-left font-weight-medium px-5 py-3" id="signup">Sign Up</button>
                    <button class="btn-active-method btn-method-right font-weight-medium px-5 py-3" id="login">Log In</button>
                </div>
                <div class="method-wrap">
                    <div class="form-wrap px-4">



                        <!-- signup -->
                        <form action="signup" class="d-flex flex-column mb-5" id="signup-form" style="display: none!important;">
                            <p class="method-desc text-center">Sign Up and create a new acount in few simple steps.</p>
                            <span class="mt-3  justify-content-between">
                                 <span class="d-flex justify-content-between mb-">
                                <label for="enterEmail">E-Mail</label>
                                <!-- <br> -->
                                <span class="mb-0 custom-error" id="email_signup_error"></span>
                            </span>
                                <input class="input-field" type="email" name="enterEmail_signup" placeholder="abc@xyz.com" id="enterEmail_signup">   
                                <!-- <div id="email_signup_error"></div>  -->
                            </span>
                            <span class="password-section mt-4">
                                 <span class="d-flex justify-content-between mb-">
                                <label for="enterPassword">Password</label>
                                <!-- <br> -->
                                <span class="mb-0 custom-error" id="password_signup_error"></span>
                            </span>
                                <input class="input-field" type="password" name="enterPassword_signup" placeholder="••••••••" id="enterPassword_signup"> 
                                <!-- <div id="password_signup_error"></div>     -->

                                <a class="password-toggler p-2" style="cursor: pointer;" id="show_pass_password_signup"><img src="<?=base_url('assets/images/eye-icon.png');?>" class="hide"  width="24" ></a>
                            </span>
                            <span class="password-section mt-4">
                                 <span class="d-flex justify-content-between mb-">
                                <label for="reenterPassword">Re-enter Password</label>
                                <!-- <br> -->
                                <span class="mb-0 custom-error" id="reEnterPassword_signup_error"></span>
                            </span>
                                <input class="input-field mb-2" type="password" name="" placeholder="••••••••" id="reEnterPassword_signup"> 
                                <a class="password-toggler p-2" style="cursor: pointer;" id="show_pass_repassword_signup"><img src="<?=base_url('assets/images/eye-icon.png');?>" class="hide"  width="24" ></a>
                                <!-- <div id="reEnterPassword_signup_error"></div>      -->
                            </span>

                            <!-- try this -->
                            
                            <!-- try this -->

                            <span class="mt-4">
                                <div class="row p-0 align-items-center">
                                    <div>
                                        <span>
                                            
                                            <!-- For Recaptcha -->
                                            <div class="g-recaptcha mb-2" style="width: 30px;" data-sitekey="6Le8FyAaAAAAACadnXSLdP3XECSQft7xmapxGuAa" data-callback="verifyCaptcha" id="captcha_box" data-tabindex="-1"></div>

                                            <div class="w-100" style="height: 80px; width: 303px; opacity:0; background: red;  margin-top: -84px; margin-left: 2px; border: 3px solid black; " id="captcha_hide_box"></div>
                                            
                                        </span>
                                        <!-- after recaptcha otp field-->
                                        <div id="otp_box" class="mb-3" style="display: none; width: 100%;">
                                            <form action="">
                                                <label for="enterOTP">Enter OTP</label>
                                                <br>
                                                <input class="input-field" name="enterOTP"  type="password" maxlength="4" class="" placeholder="• • • •" id="enterOTP_signup">
                                                <img src="./assets/images/resend-icon.svg" width="24px" alt="resend-icon" title="Resend Email" id="resend_email_signup" style="cursor:pointer;">
                                            </form>
                                        </div>
                                    </div>                                    
                                    <div class="col-6">
                                        <button class="btn-action mt-3" type="submit" id="signup_submit">Sign Up</button>
                                    </div>
                                </div>
                            </span>
                        </form>



                        <!-- login -->
                        <form action="signup" method="post" class="d-flex flex-column mb-5 recaptcha-form" id="login-form">
                            <p class="method-desc text-center">Login to your exisitng account.</p>
                            <span class="mt-3  justify-content-between">
                                 <span class="d-flex justify-content-between mb-">
                                <label for="enterEmail">E-Mail</label>
                                <!-- for error -->
                                <span class="mb-0 custom-error" id="error_email_login"></span>
                                <!--  -->
                            </span>
                                <!-- <br> -->
                                <input class="input-field" type="email" name="enterEmail_login" placeholder="abc@xyz.com" id="enterEmail_login">    
                            </span>
                            <span class="mt-3">
                                <p>or</p>

                                <label for="uniReg">University Registration Number</label>
                                <br>
                                <div>
                                    <select class="input-field" name="" id="">
                                        <option value="">College 1</option>
                                        <option value="">College 2</option>    
                                        <option value="">College 3</option>    
                                        <option value="">College 4</option>    
                                    </select>
                                </div>
                                <input class="input-field mt-2" type="number" name="" placeholder="XXXXXXXX" id="reg_no">    
                            </span>
                            <span class="mt-4 password-section">
                                <span class="d-flex justify-content-between mb-">
                                <label for="enterPassword">Password</label>
                                <!-- <br> -->
                                <!-- <span class="mb-0 custom-error" id="error_password_login">*Invalid E-Mail</span> -->
                            </span>
                                <input class="input-field mb-2" type="password" name="" placeholder="••••••••" id="enterPassword_login">

                                <a class="password-toggler" style="cursor: pointer;" id="show_pass_password_login"><img src="<?=base_url('assets/images/eye-icon.png');?>" class="hide" width="24" ></a>
                                <br>
                                <a class="color-muted text-xs fst-italic" href="<?=base_url('resetpass');?>">Forgot Password?</a>
                            </span>
                            <span class="mt-4">
                                <div class="d-flex align-items-end justify-content-between">
                                    
                                      
                                            
                                        

                                        <!-- after recaptcha otp field-->
                                       <!--  <span class="d-none">
                                            <form action="">
                                                <label for="enterOTP">Enter OTP</label>
                                                <br>
                                                <input class="input-field" name="enterOTP"  type="password" class="" placeholder="• • • •" id="enterOTP_login">
                                            </form>
                                        </span> -->
                                    </div>
                                    <div>
                                        <button class="btn-action" type="submit" id="submit_btn_login">Log In</button>
                                    </div>
                                </div>
                            </span>
                        </form>
                    </div>
                </div>

            </div>
        </div>
      </div>
    </section>


<?php

    // $signup_get_data=null;
    $signup_get_data=$this->security->xss_clean($this->input->get('s'));
?>
    <!-- javascript -->     
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> -->
    
    <script src="<?=base_url('assets/js/script-signup.js');?>"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    <!-- recaptcha v2 api link -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        var key="<?php echo $this->security->get_csrf_hash(); ?>";
        // recaptcha js start
            // function submitUserForm() {
            //     var response = grecaptcha.getResponse();
            //     if(response.length == 0) {
            //         console.log("not verified");
            //         document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
            //         return false;
            //     }
            // return true;
            // }
                var infoTip = document.querySelector("#info-tip");

    function popup_alert(colorCode,messageText,symbol){
        // alert(colorCode);
        $("#info-tip").css('background', colorCode);
        $("#info-tip-text").text(messageText);
        $("#info-tip-mark").html(symbol);


        infoTip.style.display = "block";
        setTimeout(() => { 
        infoTip.style.display = "none";
         }, 3000);
    }


             var captcha_verify;
            function verifyCaptcha() {
                // grecaptcha.reset();
                if(email_signup_ver==1&&pass_signup_ver==1&rePassword==1){
                    $("#captcha_box").fadeOut(600);
                    $("#otp_box").delay(600).fadeIn(600);
                    $("#enterOTP_signup").focus();

                    $("#enterEmail_signup").attr('disabled', 'disabled');
                    $("#enterPassword_signup").attr('disabled', 'disabled');
                    $("#reEnterPassword_signup").attr('disabled', 'disabled');

                    send_mail_signup();
                    
                }else{
                    grecaptcha.reset();
                    captcha_submit_text_field_error();

                }
                
            }

        // $(document).ready(function(){
            
         //send mail function
         function send_mail_signup(){ 
            $.ajax({
                        type:"post",
                        url:"<?=base_url('main_helper/otpSend_registerUser');?>",
                        dataType:"json",
                        data:{
                            "<?php echo $this->security->get_csrf_token_name();?>":key,
                            email:$("#enterEmail_signup").val()
                        },
                        success:function(data){
                            console.log(data);
                            if(data.mail==1){
                                // alert("mail is sent");
                                popup_alert('#5aa469','An Email has been Sent for verification ','&#10003;');
                            }else if(data.mail==0){
                                popup_alert('#5aa469','An Email has already been Sent for verification ','&#10003;');
                            }else if(data.mail==-1){
                                popup_alert('#f14668','Email Sending Failed','&#10006;');
                            }
                            key=data.key;
                        },
                        error:function(data){
                            popup_alert('#f14668','Email Sending Failed','&#10006;');
                            console.log(data);
                        }

                    });
         }   

            var signup_get_data=1;
            signup_get_data="<?= $signup_get_data ;?>";
            // alert(signup_get_data);
            if(signup_get_data!=""){
                $("#signup").removeClass("btn-inactive-method");
                $("#signup").addClass("btn-active-method");
                $('#login').removeClass("btn-active-method");
                $('#login').addClass("btn-inactive-method");
                $('#signup-form').show();
                $('#login-form').attr("style", "display:none!important;");


                
            }

            //SIGNUP FORM VALIDATION
                //email validation
            email_signup_ver=0;
            
            // $("#enterEmail_signup").keyup(function() {
            //     email_signup_trigger();
            //     captcha_box_activation();
            // });

            $("#enterEmail_signup").blur(function() {
                email_signup_error=email_signup_trigger();
                captcha_box_activation();

                $("#email_signup_error").html(email_signup_error);
            });



            function email_signup_trigger(){
                var result;
                $.ajax({
                    type:"post",
                    url:"<?=base_url('main_helper/email_validation');?>",
                    dataType:"json",
                    async:false,
                    data:{
                        "<?php echo $this->security->get_csrf_token_name();?>":key,
                        email:$("#enterEmail_signup").val()
                    },
                    success:function(data){
                        // console.log(data);
                        key=data.key;
                        

                        if(data.data==""){
                            email_signup_ver=1;
                        }else{
                            email_signup_ver=0;
                        }
                        result=data.data;
                    },
                    error:function(data){
                        console.log(data);
                        key="<?php echo $this->security->get_csrf_hash(); ?>";
                    }

                });
                return result;

                //new script


            }

            $("#enterEmail_signup").focus(function() {
                $("#email_signup_error").html("");
            });

            //password verification
            pass_signup_ver=0;
            
            $("#enterPassword_signup").keyup(function() {

                // if($(this).attr('type')!='password'){
                //     $(this).attr('type','password');
                // }
                password_signup_trigger();
                rePassword_signup_trigger();
                captcha_box_activation();



            });

            $("#enterPassword_signup").blur(function() {

                password_signup_error=password_signup_trigger();
                rePassword_signup_error=rePassword_signup_trigger();

                captcha_box_activation();
                $("#password_signup_error").html(password_signup_error);
                $("#reEnterPassword_signup_error").html(rePassword_signup_error);
            });

            function password_signup_trigger(){
                var result;
                if($("#enterPassword_signup").val()!=""){
                    if($("#enterPassword_signup").val().length<8){
                        result="*Small Password";
                        pass_signup_ver=0;
                        // console.log($('#enterPassword_signup').val());
                    }else{
                        pass_signup_ver=1;
                        result="";
                    }
                    
                }else{
                    result="*Empty Field"
                }
                return result;
            }

            $("#enterPassword_signup").focus(function() {
                $("#password_signup_error").html("");
                // popup_alert('#f14668','An Email has been Sent for verification ','&#10003;'); 
            });

            //Re-enter password Validation
            rePassword=0;

            $("#reEnterPassword_signup").keyup(function() {
                // $('#myModal').modal('show');

                
                // $('#myModal').modal('hide');
                rePassword_signup_trigger();
                captcha_box_activation();
            });

            $("#reEnterPassword_signup").blur(function() {
                reEnterPassword_signup_error=rePassword_signup_trigger();
                captcha_box_activation();    

                $("#reEnterPassword_signup_error").html(reEnterPassword_signup_error);
            });

            function rePassword_signup_trigger(){
                if($("#reEnterPassword_signup").val()!=""){
                    if($("#enterPassword_signup").val()==$("#reEnterPassword_signup").val()){
                        $("#reEnterPassword_signup_error").html("")
                        rePassword=1;
                    
                    }else{
                        // $("#reEnterPassword_signup_error").html("Password Dosen't Match");
                        rePassword=0;
                        return "*Password Dosen't Match";
                        // rePassword=0;
                    
                    } 
                }else{
                    return "*Empty Filed";
                }
                if($("#enterPassword_signup").val()==$("#reEnterPassword_signup").val()){
                    $("#reEnterPassword_signup_error").html("")
                    rePassword=1;
                    
                }else{
                    // $("#reEnterPassword_signup_error").html("Password Dosen't Match");
                    rePassword=0;
                    return "Password Dosen't Match";
                    rePassword=0;
                    
                }
            }

            $("#reEnterPassword_signup").focus(function() {
                $("#reEnterPassword_signup_error").html("");
                // alert("captured");
            });


            function captcha_box_activation(){
                if(email_signup_ver==1&&pass_signup_ver==1&rePassword==1){
                    $("#captcha_box").css("pointer-events","auto");        
                    $("#captcha_hide_box").css("display","none"); 
                    $("#captcha_box").css("opacity","1");

                }else{

                    $("#captcha_box").css("pointer-events","none");        
                    // $("#captcha_box").css("display","0.4");        
                    $("#captcha_box").css("opacity","0.6");
                    $("#captcha_hide_box").show();

                } 
                // console.log("email: "+email_signup_ver+"/ pass: "+pass_signup_ver+"/ rePass: "+rePassword);
                // console.log("captcha_box_activation triggered");               
            }

            captcha_box_activation();


    //captcha hide box click event

    $("#captcha_hide_box").click(function() {
        captcha_submit_text_field_error();
        //blinking purpose


    });

    function captcha_submit_text_field_error(){

        $("#email_signup_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
        $("#password_signup_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
        $("#reEnterPassword_signup_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);



        //email
        email_signup_error=email_signup_trigger();
        $("#email_signup_error").html(email_signup_error);

        //password
        password_signup_error=password_signup_trigger();
        $("#password_signup_error").html(password_signup_error);
            
        //Re-Password
        reEnterPassword_signup_error=rePassword_signup_trigger();
        $("#reEnterPassword_signup_error").html(reEnterPassword_signup_error);

    }

    //OTP Box validation

    function verify_otp_server(){
        var result;
         $.ajax({
                    type:"post",
                    url:"<?=base_url('main_helper/verify_otp');?>",
                    dataType:"json",
                    async:false,
                    data:{
                        "<?php echo $this->security->get_csrf_token_name();?>":key,
                        email:$("#enterEmail_signup").val(),
                        password:$("#enterPassword_signup").val(),
                        otp:$("#enterOTP_signup").val()
                    },beforeSend:function(){
                        $("#signup_submit").attr('disabled', 'disabled');
                        $("#signup_submit").css('opacity','0.8');
                    },
                    success:function(data){
                        console.log(data);
                        key=data.key;
                        

                        result=data.data;

                        $("#signup_submit").removeAttr('disabled', 'disabled');
                        $("#signup_submit").css('opacity','1');
                    },
                    error:function(data){
                        console.log(data);
                        $("#signup_submit").removeAttr('disabled', 'disabled');
                        $("#signup_submit").css('opacity','1');
                    }
                });
         // return result;
         if(result==1){
            // alert("signup Completed");
            location.href="<?=base_url('main/form_addon');?>";
            
        }else{
            alert("Try Again");
        }
    }

//key press otp box
$("#enterOTP_signup").keyup(function() {

    if($("#enterOTP_signup").val().length==4){
        // var res=
        verify_otp_server();

        // if(res==1){
        //     alert("signup Completed");

        // }else{
        //     alert("something went Wrong");
        // }
        // console.log(res);
    }
});

$("#resend_email_signup").click(function() {
    send_mail_signup();
});




            //signup_button_validate

        $("#signup_submit").click(function() {
            event.preventDefault();
            if($("#enterOTP_signup").val().length==4){
        verify_otp_server();

        
        // console.log(res);
    }

    });


//login code|
//          V
//login code|
//          V
//login code|
//          V
//login code|
//          V

// $("#enterPassword_login").keyup(function() {
//     $(this).blur(function() {
//         if($(this).val().length<8){
//             $("#error_password_login").html("Less than 8 Char");
//         }else{
//             $("#error_password_login").html("");
//         }
//     });
// });

// $("#enterPassword_login").keyup(function() {
//     if($(this).attr('type')!='password'){
//         $(this).attr('type','password');
//     }
// });

$("#submit_btn_login").click(function() {
    event.preventDefault();
    if($("#enterEmail_login").val()!=""){
        if($("#enterPassword_login").val()!=""){
            $.ajax({
                 type:"post",
                    url:"<?=base_url('main_helper/check_login_detail');?>",
                    dataType:"json",
                    async:false,
                    data:{
                        "<?php echo $this->security->get_csrf_token_name();?>":key,
                        email:$("#enterEmail_login").val(),
                        password:$("#enterPassword_login").val(),
                        // otp:$("#enterOTP_signup").val()
                    },beforeSend:function(){
                        $("#submit_btn_login").attr('disabled', 'disabled');
                        $("#submit_btn_login").css('opacity','0.8');
                    },
                    success:function(data){
                        console.log(data);
                        key=data.key;
                        

                        // alert(data.data);
                        if(data.status==1){
                            $("#error_email_login").html("");
                            window.location="<?=base_url('main/search');?>"
                        }else if(data.status==0){
                            login_error();
                        }else if(data.status==2){
                            window.location.href="<?=base_url('main/form_addon');?>";
                        }

                        $("#submit_btn_login").removeAttr('disabled');
                        $("#submit_btn_login").css('opacity','1');
                    },
                    error:function(data){
                        console.log(data);
                        // $("#submit_btn_login").removeAttr('disabled');
                        // $("#submit_btn_login").css('opacity','1');
                    }
            })
        }else{
            // $("#error_email_login").html("*Invalid Login Details");
            login_error();
        }
    }else{
        // $("#error_email_login").html("*Invalid Login Details");
        login_error();
    }
});

function login_error(){
     if($("#error_email_login").html()==""){
            $("#error_email_login").html("*Invalid Login Details");
            }else{
                $("#error_email_login").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
                }
}


//email login validate

    // $('#enterEmail_login').change(function(){
    //   var email_value = $(this).val();
    //   if(email_value.indexOf('@')>0){
    //      if(email_value.lastIndexOf('.')>0 && email_value.indexOf('@')<email_value.lastIndexOf('.')){
    //    if((email_value.substring(email_value.lastIndexOf('.'))).length>=3)
    //       // $('#tooltiptext').css("visibility", "hidden");
    //         $("#error_email_login").html("*Invalid Email");
    //    }
    //  else
    //         //$('#tooltiptext').css("visibility", "visible");
    //     $("#error_email_login").html("*Invalid Email");
    //   }
    //   else
    //      // $('#tooltiptext').css("visibility", "visible");
    //     $("#error_email_login").html("*Invalid Email");
    // });
           
        // });
    </script>
 

</body>
</html>