<!DOCTYPE htms>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>


    <?php

        $this->load->view('website/link_import');
    ?>

    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style-signup.css">

</head>
<body>
    <!-- navbar -->
    <?php

        $this->load->view('website/nav_bar');
    ?>
    <!-- form wrap-->
    <section class="container-custom">
      <div class="row p-0 justify-content-center">
        <div class="col-12 col-sm-8 col-md-8 col-lg-6 my-5">
            <div class="box-wrap d-flex flex-column  px-5">
                <h2 class="font-weight-semibold mb-0 my-5">Forgot Password?</h2>
                <div class="method-wrap w-100">
                    <div class="form-wrap ">
                       
                        <!-- for email -->
                        <form action="signup" class="d-flex flex-column mb-5" id="reset_email" style="">
                            <p class="method-desc">Enter your E-mail Address to continue.</p>
                            <span class="mt-3 justify-content-between ">
                                <span class="d-flex justify-content-between mb-">
                                <label for="enterEmail">Valid E-Mail</label>
                                <!-- <br> -->
                                <span class="mb-0 custom-error" id="email_reset_error"></span>
                            </span>
                                <input class="input-field" type="email" name="" placeholder="abc@xyz.com" id="enterEmail">
                            </span>
                            <span class="d-flex w-100 align-items-between m-0 mt-3">
                                <button class="btn-action" type="submit" id="get_otp_btn">Get OTP</button>
                            </span>
                        </form>
                       
                        <!-- for OTP -->
                        <form action="signup" class="d-flex flex-column" id="reset_otp" style="display: none!important;"><!-- style="display: none!important;" -->
                            <p class="method-desc">Check your inbox for the recieved OTP .</p>
                            <div class="mt-3 justify-content-between">
                                <div class="d-flex justify-content-between mb-">
                                    <div>
                                        <label for="enterOTP">Enter OTP &nbsp</label>
                                        <!-- <br> -->
                                        <span class="mb-0 custom-error" id="otp_reset_error"></span>
                                        <br>
                                        <input class="input-field" type="password" name="enterOTP" placeholder="****" id="enterOtp" maxlength="4">
                                    </div>
                                    <div>
                                        <br>
                                        <button class="btn-action" type="submit" id="reset_otpVerify_btn">Reset Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                       
                        <!-- for new password -->
                        <form action="signup" class="d-flex flex-column" id="enter_pass_reset" style="display: none!important;">
                        <!-- <form action="signup" class="d-flex flex-column" id="enter_pass_reset" style="display: none!important;"> -->
                            <p class="method-desc">Enter a new password.</p>
                            <div class="mt-3 justify-content-between">
                                <div>
                                    <span class="d-flex justify-content-between mb-">
                                    <label for="enterNewPassword">Create New Password</label>
                                    <!-- <br> -->
                                    <span class="mb-0 custom-error" id="password_reset_error"></span>
                                </span>
                                    <input class="input-field" type="password" name="enterNewPassword" placeholder="****" id="reset_password_field">
                                    <a class="color-muted text-xs fst-italic float-right" style="cursor: pointer;  float: right; position: relative; top: -33px; right: 12px;" id="show_password_reset"><img src="<?=base_url('assets/images/eye-icon.png');?>" height="15" ></a>
                                </div>
                                <div class="mt-3">
                                    <label for="reenterNewPassword">Re-enter Password</label>
                                    <br>
                                    <input class="input-field" type="password" name="reenterNewPassword" placeholder="****" id="reset_re_password_field">
                                    <a class="color-muted text-xs fst-italic float-right" style="cursor: pointer;  float: right; position: relative; top: -33px; right: 12px;" id="show_repassword_reset"><img src="<?=base_url('assets/images/eye-icon.png');?>" height="15" ></a>
                                </div>
                                <span class="d-flex flex-row-reverse mt-4">
                                    <button class="btn-action mt-2" type="submit" id="reset_cnfrm_pswd_btn">Confirm New Password</button>
                                </span>
                            </div>
                        </form>
                        <p class="text-xs mt-5 mb-0">* Only enter your registered E-Mail Address.</p>
                        <p class="text-xs mb-0">* An OTP will be sent to your registered E-Mail Address.</p>
                        <p class="text-xs">* Your new password will be associated with your registered e-mail id.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    


    <!-- javascript -->                
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>

    <script src="<?=base_url('assets/js/script-signup.js');?>"></script>

    <script type="text/javascript">
        
        var key="<?php echo $this->security->get_csrf_hash(); ?>";

        // var email_avail=0;

        
        

       $("#get_otp_btn").click(function() {
           event.preventDefault();
           $.ajax({
                type:"post",
                url:"<?=base_url('main_helper/reset_pass');?>",
                dataType:"json",
                async:false,
                data:{
                    "<?php echo $this->security->get_csrf_token_name();?>":key,
                    email:$("#enterEmail").val()
                },
                success:function(data){
                    console.log(data);
                    key=data.key;

                    if(data.data>=1){
                        $("#email_reset_error").html("");   
                        send_otp();
                    }else{
                        if($("#email_reset_error").html()==""){
                            $("#email_reset_error").html("*Account Dosen't Exist");    
                        }else{
                            $("#email_reset_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
                        }
                        
                    }

                },
                error:function(data){
                    console.log(data);
                }        
           });
       });

        function send_otp(){
            $.ajax({
                type:"post",
                    url:"<?=base_url('main_helper/otpSend_registerUser');?>",
                    dataType:"json",
                    data:{
                        "<?php echo $this->security->get_csrf_token_name();?>":key,
                        email:$("#enterEmail").val()
                    },
                    success:function(data){
                        console.log(data);
                        if(data.mail==1){
                            alert("mail is sent");
                            show_hide_htmlBox("#reset_email","#reset_otp");
                        }else if(data.mail==0){
                            alert("otp already exist ");
                            show_hide_htmlBox("#reset_email","#reset_otp");
                        }else if(data.mail==-1){
                            alert("Email Sending Failed");
                        }
    
                        key=data.key;
    
                        },
                    error:function(data){
                        console.log(data);
                        alert("something Went Wrong");
                    }

                });
       }

       function show_hide_htmlBox(hide,show){
        $(show).slideDown('slow');
        $(hide).attr('style', 'display:none!important;');
       }

       $("#reset_otpVerify_btn").click(function() {
          event.preventDefault();
                   $.ajax({
                        type:"post",
                        url:"<?=base_url('main_helper/reset_match_otp');?>",
                        dataType:"json",
                        async:false,
                        data:{
                            "<?php echo $this->security->get_csrf_token_name();?>":key,
                            email:$("#enterEmail").val(),
                            otp:$("#enterOtp").val()
                        },
                        success:function(data){
                            console.log(data);
                            key=data.key;
                            if(data.data==1){
                                show_hide_htmlBox("#reset_otp","#enter_pass_reset");
                            }else{
                                if($("#otp_reset_error").html()==""){
                                    $("#otp_reset_error").html("*Incorrect OTP");    
                                }else{
                                    $("#otp_reset_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
                                }
                            }
                        },
                        error:function(data){   
                            console.log(data);
                        }

                    });
               }); 

       $("#reset_cnfrm_pswd_btn").click(function() {
           event.preventDefault();
           if($("#reset_password_field").val().length>=8){
           if($("#reset_password_field").val()==$("#reset_re_password_field").val()){
                $.ajax({
                type:"post",
                url:"<?=base_url('main_helper/reset_password_modify');?>",
                dataType:"json",
                async:false,
                data:{
                    "<?php echo $this->security->get_csrf_token_name();?>":key,
                    email:$("#enterEmail").val(),
                    password:$("#reset_password_field").val()
                },
                success:function(data){
                        console.log(data);
                        key=data.key;
                        if(data.data==1){
                            $("#password_reset_error").html("");
                            alert("changed");
                        }
                },
                error:function(data){   
                    console.log(data);
                }

            });

           }else{
            $("#password_reset_error").html("*Password Dosen't Match");
           }
       }else{
            $("#password_reset_error").html("*Small Password");
       }    
       });
       


    </script>

</body>
</html>