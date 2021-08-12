<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">-->
    <!---- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style-user_account.css">
	
	<?php

$this->load->view('website/link_import');
?>

</head>

<body>

<?php

        $this->load->view('website/nav_bar');
    ?>

    <div class="profile-wrapper">


        <section class="profile section-padding" style="background:#b8dafc;">
            <div class="container">
                <i class="fa fa-pencil" style="font-size: 32px; float: right;color: black; cursor:pointer;"></i>

                <div class="picture-profile-wrapper">
                    <div class="picture-profile">
                        <span><img src="<?=base_url();?>assets/images/dummy.jpg" alt="" /></span>
                        <svg version="1.1" viewBox="0 0 350 350">
  
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -9" result="cm" />
    </filter>
  </defs>
  
  
<g filter="url(#goo)" >  
  
  <circle id="main_circle" class="st0" cx="171.5" cy="175.6" r="130"/>
  
  <circle id="circle" class="bubble0 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble1 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble2 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble3 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble4 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble5 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble6 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble7 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble8 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble9 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble10 st1" cx="171.5" cy="175.6" r="122.7"/>

</g>  
</svg>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="name-wrapper">
                    <h1>User <br/>Name</h1>
                    <div>
                        <button>Follow</button>
                        <button>Message</button>
                    </div>

                </div>


                <div class="clearfix"></div>

                <div class="contact-info clearfix">
                    <h2 style="text-align:left;color: rgb(29, 28, 28);font-weight: 900;font-size:24px;">Details

                    </h2><br>

                    <ul class="list-titles">

                        <li>Call</li>
                        <li>Mail</li>
                        <li>Web</li>
                        <li>Home</li>
                        <li>College</li>
                    </ul>
                    <ul class="list-content ">
                        <li>+91 123 456 7890</li>
                        <li>userwebsite123@mail.com</li>
                        <li><a href="#" style="color:darkblue;">searchme.com</a></li>
                        <li>Place, Country</li>
                        <li>College Name</li>
                    </ul>
                </div>

                <div class="contact-presentation">
                    <h2 style="text-align:left;color: rgb(29, 28, 28);font-weight: 900;font-size:24px;">About
                    </h2><br>

                    <p><span class="bold">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod congue nisi, nec consequat quam. In consectetur faucibus turpis eget laoreet. Sed nec imperdiet purus. </p>
                </div>
                <h2 style="text-align:left;color: rgb(29, 28, 28);font-weight: 900;font-size:24px;">Social Contact
                </h2><br>
                <div class="contact-social clearfix">

                    <ul class="list-titles">
                        <li>Linkedin</li>
                        <li>Instagram</li>
                        <li>Github</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                    </ul>
                    <ul class="list-content">
                        <li><a href="" style="color:darkblue;">@linkedin</a></li>
                        <li><a href="" style="color:darkblue;">@instaid</a></li>
                        <li><a href="" style="color:darkblue;">@github</a></li>
                        <li><a href="" style="color:darkblue;">@facebook</a></li>
                        <li><a href="" style="color:darkblue;">@twitter</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="experience section-padding">
            <div class="container">
                <h3 class="experience-title">Experience <i class="fa fa-pencil" aria-hidden="true" style="cursor:pointer;"></i>
                </h3>

                <div class="experience-wrapper">
                    <div class="company-wrapper clearfix">
                        <div class="experience-title">Company name</div>
                        <div class="time">Nov 2021 - Present</div>
                    </div>

                    <div class="job-wrapper clearfix">
                        <div class="experience-title">Front End Developer </div>
                        <div class="company-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in, dignissim magna.</p>
                        </div>
                    </div>

                    <div class="company-wrapper clearfix">
                        <div class="experience-title">Company name</div>
                        <div class="time">Nov 2021 - Present</div>
                    </div>

                    <div class="job-wrapper clearfix">
                        <div class="experience-title">Web Designer / Web Developer</div>
                        <div class="company-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in, dignissim magna.</p>
                        </div>
                    </div>

                    <div class="company-wrapper clearfix">
                        <div class="experience-title">Company name</div>
                        <div class="time">Nov 2020 - Nov 2021</div>
                    </div>

                    <div class="job-wrapper clearfix">
                        <div class="experience-title">Backend</div>
                        <div class="company-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in, dignissim magna.</p>
                        </div>
                    </div>

                </div>

                <div class="section-wrapper clearfix">
                    <h3 class="section-title">Skills <i class="fa fa-pencil" aria-hidden="true" style="cursor:pointer;"></i>
                    </h3>
                    <ul>
                        <li class="skill-percentage">HTML / HTML5</li>
                        <li class="skill-percentage">CSS / CSS3 / SASS / LESS</li>
                        <li class="skill-percentage">Javascript</li>
                        <li class="skill-percentage">React</li>
                        <li class="skill-percentage">Wordpress</li>
                        <li class="skill-percentage">PHP</li>

                    </ul>

                </div>

                <div class="section-wrapper clearfix">
                    <h3 class="section-title">Hobbies <i class="fa fa-pencil" aria-hidden="true" style="cursor:pointer;"></i>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in, dignissim magna.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in, dignissim magna.</p>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <!---- <div class="project">
                <h2 class="pp">Projects</h2>

                <form action="/action_page.php">
                    <label for="homepage">Github link:</label>
                    <input type="url" id="homepage" name="homepage"><br><br>
                    <input type="submit" style="position: relative;
                    height: 35px;
                    left: -78px;
                    width: 100px;
                    margin: 0 2px;
                    font-size: 18px;
                    font-weight: 400;
                    border-radius: 5px;
                    text-transform: uppercase;
                    border: 1px solid transparent;
                    outline: none;
                    cursor: pointer;
                    background: #0d0d0d;
                    overflow: hidden;
                    transition: 0.6s;">
                </form>
            </div>-->

            <!-- Feed Starts -->
            <h3 class="experience-title">Post</h3>
            <div class="feed">
                <div class="feed__inputContainer">
                    <div class="feed__input">
                        <i class="material-icons"> create </i>
                        <form>
                            <input type="text" />
                            <button type="submit">Send</button>
                        </form>
                    </div>

                    <div class="feed__inputOptions">
                        <div class="inputOption">
                            <i style="color: #70b5f9" class="material-icons"> insert_photo </i>
                            <h4 class="text">Photo</h4>
                        </div>
                        <div class="inputOption">
                            <i style="color: #e7a33e" class="material-icons"> subscriptions </i>
                            <h4 class="text">Video</h4>
                        </div>
                        <div class="inputOption">
                            <i style="color: #c0cbcd" class="material-icons"> event_note </i>
                            <h4 class="text">Event</h4>
                        </div>
                        <div class="inputOption">
                            <i style="color: #7fc15e" class="material-icons"> calendar_view_day </i>
                            <h4 class="text">Write Article</h4>
                        </div>
                    </div>
                </div>

                <h3>SearchMe&#169;2021</h3>
        </section>

        <div class="clearfix"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
        <script src="<?=base_url();?>assets/js/function.js"></script>

</body>

<script>
var key="<?php echo $this->security->get_csrf_hash(); ?>";

$.ajax({
            url: "<?=base_url('main_helper/get_user_account_data');?>",
            type:"POST",
            async:false,
            data:{
                "<?php echo $this->security->get_csrf_token_name();?>":key,
                user_id:"<?=$this->session->userdata("searchme_login");?>"
            },
            dataType:"json",
            success:function(data){
                console.log(data);
                
            },
            error:function(data){
                console.log(data);
            }

        });



</script>

</html>
