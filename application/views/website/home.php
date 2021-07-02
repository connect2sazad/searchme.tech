<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchMe:- Home</title>
     
    <?php

        $this->load->view('website/link_import');
    ?>
    
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style-homepage.css">

        
</head>
<body>
   <?php

        $this->load->view('website/nav_bar');
    ?>

    <!-- landing-->
    <section class="landing container-custom pb-3 pb-md-0">
        <div class="landing-image-wrap d-none d-md-inline">
            <img src="<?=base_url();?>/assets/images/landing-illustration.svg" alt="landing-image">
        </div>
        <div class="landing-content mt-5 pt-0 pt-md-5 mb-5">
            <div class="row m-0">
                <h3 class="color-light fw-semibold mb-1">Your Search Ends Here</h3>
                <h1 class="display-1 color-cyan fw-bold mb-0">SearchMe</h1>
                <h5 class="color-light fw-normal">Search.Select.Connect</h5>
            </div>
            <div class="row justify-content-center m-0">
                <img src="<?=base_url();?>/assets/images/landing-illustration.svg" class="my-3 d-md-none img-fluid img-wrap-sm" alt="">
            </div>
            <div class="container-fluid mt-md-5 pt-2 pt-md-5">
                <h5 class="d-none d-md-block color-light fw-normal mb-3">Join Now. Click on the button below.</h5>
                
                <!-- <form action="<?=base_url('signup');?>" method ="post"> -->
                    <!-- <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>"> -->
                    <!-- <input type="hidden" value="0" name="signup_select"> -->
                    <button class="landing-button-signup px-4 py-3 text-decoration-none text-reset" id="signup_btn_home">Sign Up for Free</button>
                        <!-- <a href="<?=base_url('signup');?>" class="landing-button-signup px-4 py-3 text-decoration-none text-reset">Sign Up for Free</a> -->
                    
                <!-- </form> -->
                    
            </div>
        </div>
    </section>
    
    <!-- features -->
    <section class="features container-custom py-2 py-md-5">
        <h2 class="font-weight-bold mt-5">Features</h2>
        <div class="py-5 my-5 d-flex flex-column flex-md-row align-items-center justify-content-md-between">
            <div class="card-wrap py-5 px-4 d-flex flex-column">
                <img src="<?=base_url();?>/assets/images/feature-database.svg" class="align-self-center" height="180px" alt="">
                <h6 class="mt-4 mb-0 font-weight-semibold color-light">Manually verified & Safe <br class="d-none d-md-block"> Student Database</h6>
            </div>
            <div class="card-wrap py-5 px-4 mt-5 mt-md-0 d-flex flex-column">
                <img src="<?=base_url();?>/assets/images/feature-search.svg" class="align-self-center" height="180px" alt="">
                <h6 class="mt-4 mb-0 font-weight-semibold color-light">Search for anyone, <br class="d-none d-md-block"> from anywhere. It’s easy.</h6>
            </div>
            <div class="card-wrap py-5 px-4 mt-5 mt-md-0 d-flex flex-column">
                <img src="<?=base_url();?>/assets/images/feature-friends.svg" class="align-self-center" height="180px" alt="">
                <h6 class="mt-4 mb-0 font-weight-semibold color-light">Find new people near you. <br> Make new friends.</h6>
            </div>
        </div>
    </section>

    <?php

        $this->load->view('website/foo_ter');
    ?>

    <!-- javascript -->                

<!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    
<!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 

    <script type="text/javascript">
        $(document).ready(function(){
            $("#nav_home a").addClass('pl-2');
            $("#nav_home a").addClass('active');

            $("#signup_btn_home").click(function() {
                window.location.href = "<?= base_url('signup?s=0');?>";
            });

            

        })

    var mix=[
            {key:"t",value:"graded"},
            {key:"rf",value:"iSpring Solutions"},

            ]

    console.log(mix);

    </script>

</body>
</html>