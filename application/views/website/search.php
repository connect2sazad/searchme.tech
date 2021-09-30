<!DOCTYPE html>
<html lang='en'>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<?php

$this->load->view('website/link_import');
?>


<!-- FONTS-->

    <style>
        input:focus, textarea:focus, select:focus{
        outline: none;
    }
        body {
            background-color: var(--dark-blue);
            margin: 0;
            padding: 0%;
            /* overflow: hidden; */
            
        }

        #search_form {
            background-color:var(--cyan);
            
            width: 600px;
            height: 44px;
            border-radius: 40px;
            display: flex;
            flex-direction: row;
            position: relative;
            align-items: center;
            margin-top: 15em;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
        #heading {
            
            
            
            position: relative;
            align-items: center;
            text-align: center;
            top: 14em;
            color: white;
            
            
           
        }
        #heading h1{
            
            color:white;
            font-family: 'Cabin', sans-serif;

            font-size: 3.6em;
        }

        input {
            text-decoration: none;
            border-radius: 40px;
            box-shadow: -3px 31px 32px -14px rgb(46, 46, 46);
            

            font: 16px system-ui;
            color: var(--dark-blue);
            height: 100%;
            width: 100%;
            padding: 6px 10px;
            z-index: 20;
            background-color: rgb(240, 240, 240);
            

        }

        ::placeholder {
            color: rgb(129, 129, 129);
            opacity: 0.7;
        }

        .icon {
            color: #fff;

            width: 24px;
            height: 16spx;
            padding: 12px;

        }

        .icon {
            all: unset;
            cursor: pointer;
            width: 44px;
            height: 44px;

        }
    #image{
        position:absolute;
        top: 393px;
        margin: 0 39em;
        opacity: 0.9;
        height: 2px;
    }
    #image img{
       height: 10em;
       width: auto;
       position: relative;
       top:90px;
    }

        @media only screen and (max-width: 720px) {
            #search_form {
                margin-top: 15em;
               
            
                margin-left: auto;
                margin-right: auto;
                width: 86%;
            }
            #heading h1{
            font-weight:;
            color:var(--cyan);
            font-size: 2em;
        }
        #image{
        position:absolute;
       
        margin:-30px 26%;
        
        
        
    }
    #image img{
       height: 7em;
       width: auto;
    }
        

    }
    </style>
</head>

<body>


        <!-- navbar -->
        <?php

$this->load->view('website/nav_bar');
?>
<div id="main_body_c">

    <span id="heading">
        <h1 >S e a r c h  m e</h1>
    </span>
    
    <form id="search_form">
        
        <input type="search" id="search_input"  name="q" placeholder="Search..." >
        <button id="search_icon" class="icon">
            <img src="<?=base_url();?>assets/images/search-3-24.png" >
        </button>
        
    </form>
    <span id="image">
        <img src="<?=base_url();?>assets/images/search.svg" alt="">
    </span>
</div>
	<?php

        $this->load->view('website/foo_ter');
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <script>
        

        // $("#search_icon").click(function(e) {
        //     e.preventDefault();
        //     location.href="<?=base_url('main/search_filter')?>";
        // });

        $("#search_form").submit(function(e) {
            e.preventDefault();
            var search_input=$("#search_input").val();
            location.href="<?=base_url('main/search_filter?search=')?>"+search_input;
            
            // $.ajax({
            //     url: "<?= base_url('main_helper/get_user_account_data'); ?>",
            //     type: "POST",
            //     async: false,
            //     data: { 
            //         "<?php echo $this->security->get_csrf_token_name(); ?>": key,
            //         user_id: "<?= $this->session->userdata("searchme_login"); ?>"
            //     },
            //     dataType: "json",
            //     success: function(data) {
            //         console.log(data.data);
            //     },
            //     error:function(data){
            //         console.log(data);
            //     }
            // });
        });

        $("#main_body_c").css('min-height',$(window).height()-300);
        console.log($(window).height());

    </script>
</body>

</html>
