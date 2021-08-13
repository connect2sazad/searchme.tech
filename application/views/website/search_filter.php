<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

$this->load->view('website/link_import');
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    






    <!-- FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



</head>

<style>
    body{
        background-color: #212529;
    }
    ul li {
        list-style: none;
        margin-left: -30px;
    }

    .main-content {
        display: flex;
    }

    .student-data {
        margin-left: auto;
        width: 75%;
        padding: 100px;
    }

    .dropdown {
        position: fixed;
        max-width: 30em;
        outline: none;
        overflow: auto;








    }

    #cars {
        margin-top: 10px;
        height: 31px;
        width: 19em !important;
        border-radius: 0px;
        outline: none;
        margin-left: 0px;
        background-color: rgb(243, 243, 243);

    }



    #tittle {
        font-weight: bold;
        color: #1D3354;
    }

    .apply-filter {
        background-color: #4F678B;
        height: 45px;
        width: 15em;
        border-radius: 5px;
        border: 2px solid white;
        color: white;


    }

    .apply-filter:hover {
        background-color: #314666;
        border: 2px solid white;
        color: white;
    }

    #filter-btn {
        display: none;
    }

    .filter-section form {
        z-index: 111;
        position: fixed;
        background-color: #ffffff;
        padding: 100px 80px 80px 80px;
        height: 100%;
        bottom: 0%;


        width: 72em;
        


    }

    .profile {
        background-color: #1D3354;
        height: 40px;
        width: 10em;
        border-radius: 5px;
        border: 2px solid rgb(6, 117, 121);
        font-weight: bolder;
        color: white;


    }

    .profile:hover {
        background-color: #4F678B;
        color: white;
    }

    hr {
        border: 1.5px solid #4F678B;
        width: 15.5em;
    }

    select option {
        background-color: #dddddd;
        outline: none;

    }

    select option:hover {
        background-color: #6e948a;
    }
    #filter img{
        height: 12em;
        width: auto;
        margin: 0 2em;
    }
    #student{
        position: fixed;
        margin: 280px 81em;
    }
    #student img{
        height: 15em;
        opacity: 0.6;
    }

    .navbar-id{
        background-color: #212529;position: fixed;width: 100%;z-index: 10;opacity: 1;z-index: 112;
    }


    @media only screen and (max-width: 600px) {
        
        .student-data {
            margin: auto;
            width: 100%;
            padding: 30px;
        }

        #filter-btn {
            display: block;
            position: fixed;
            bottom: -1px;
            z-index: 111;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            border-radius: 15px 15px 0 0;
            background-color: #4F678B;
            height: 55px;
            border: 1px solid white;



            color: white;
        }
        #filter-btn:hover{
            border: 2px solid white;
            background-color: #334663;



        }

        .filter-section {

            z-index: -1;

            border-radius: 0;

            display: none;


        }

        .filter-section form {

            position: absolute;
            
            padding: 100px 80px 80px 80px;
            border-radius: 0;
            height: 100%;
            width: 100%;
            right: 0%;
            
            





        }

        .dropdown {
            margin-left: auto;
            margin-right: auto;

            max-width: 100%;
            

            overflow: scroll;
            z-index: -1;
            margin-left: -40px;
            
        }

        #cars {
            margin-top: 4px;
            height: 30px;
            width: 15em !important;
            border-radius: 0px;
            outline: none;
            margin-left: 0px;

        }

        .apply-filter {
            
            height: 38px;
            width: 17em;
            border-radius: 5px;
            border: 2px solid white;
            color: white;
            font-size: 13px;
            z-index: 1111;


        }
        .navbar-custom{
            background-color: #212529 !important;
        }

    }
</style>

<body>

    <div>
        <button id="filter-btn" onclick="myFunctions()">
            <b> APPLY FILTER</b>
        </button>
    </div>
    <div id="student">
        <img src="<?=base_url();?>/assets/images/student.svg" alt="">

    </div>



    <?php

        $this->load->view('website/nav_bar');
    ?>

    <div class="filter-section" style="">
        <div>


            <form class="dropdown" style="top:50px;">
                <label for="cars" id="tittle">Course:</label>
                <select name="cars" id="cars" title="Select your Course">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">Branch:</label>
                <select name="cars" id="cars" title="Select your Department">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">Year :</label>
                <select name="cars" id="cars" style="width: 16em;" title="Select your Year">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">Hostel No:</label>
                <select name="cars" id="cars" style="width: 13.6em;" title="Select your Hostel no">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">Room No:</label>
                <select name="cars" id="cars" style="width: 14em;" title="Select your Room no">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">State:</label>
                <select name="cars" id="cars" style="width: 15.7em;" title="Select your State">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">Day Schlor/Hostel:</label>
                <select name="cars" id="cars" style="width:9.5em;" title="Day Schlor/Hostel">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>
                <label for="cars" id="tittle">Lateral Entry: </label>
                <select name="cars" id="cars" style="width: 12em;" title="Lateral Entry">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <button class="apply-filter" style="margin-top: 20px;">
                    <b> APPLY FILTER</b>
                </button><br>
                <hr>

                <label for="cars" id="tittle">Name:</label>
                <select name="cars" id="cars" style="margin-top: 5px;width: 10.8em;">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">Year:</label>
                <select name="cars" id="cars" style="width: 11.4em;">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <label for="cars" id="tittle">Gender:</label>
                <select name="cars" id="cars" style="width: 10em;">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>

                <button class="apply-filter" style="margin-top: 15px;">
                    <b> SORT</b>
                </button><br><br>

                <div id="filter" >
                    <img src="<?=base_url();?>/assets/images/filter.svg" alt="">
                </div>

            </form>

        </div>


    </div>










    <div class="main-content">



        <div class="student-data">

            <div class="row d-flex justify-content-center">

                <div class="card mb-4  row d-flex justify-content-center"
                    style="max-width: 680px;margin-top: 0;background-color:var(--light);">
                    <div class="row g-1" id="color">
                        <div class="col-md-4">
                            <img src="<?=base_url('assets/images/dummy.jpg');?>" class="img-fluid rounded-start" alt="..."
                                style="padding: 30px;border-color: white;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="">
                                <h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>
                                <ul>
                                    <li class="card-text"><strong>Name:</strong>Aditya Chowdhary</li>
                                    <li class="card-text"><strong>Degree:</strong>Btech</li>
                                    <li class="card-text"><strong>Branch:</strong>ECE</li>
                                    <li class="card-text"><strong>Passion:</strong>Designing</li>
                                    <li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li>
                                </ul>



                                <button class="profile">Profile</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center">

                <div class="card mb-4  row d-flex justify-content-center"
                    style="max-width: 680px;background-color:var(--light);">
                    <div class="row g-1">
                        <div class="col-md-4">
                            <img src="<?=base_url('assets/images/dummy.jpg');?>" class="img-fluid rounded-start" alt="..." style="padding: 30px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>
                                <ul>
                                    <li class="card-text"><strong>Name:</strong>Aditya Chowdhary</li>
                                    <li class="card-text"><strong>Degree:</strong>Btech</li>
                                    <li class="card-text"><strong>Branch:</strong>ECE</li>
                                    <li class="card-text"><strong>Passion:</strong>Designing</li>
                                    <li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li>
                                </ul>
                                <button class="profile">Profile</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center">

                <div class="card mb-4  row d-flex justify-content-center"
                    style="max-width: 680px;background-color:var(--light);">
                    <div class="row g-1">
                        <div class="col-md-4">
                            <img src="<?=base_url('assets/images/dummy.jpg');?>" class="img-fluid rounded-start" alt="..." style="padding: 30px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>
                                <ul>
                                    <li class="card-text"><strong>Name:</strong>Aditya Chowdhary</li>
                                    <li class="card-text"><strong>Degree:</strong>Btech</li>
                                    <li class="card-text"><strong>Branch:</strong>ECE</li>
                                    <li class="card-text"><strong>Passion:</strong>Designing</li>
                                    <li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li>
                                </ul>
                                <button class="profile">Profile</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="card mb-4  row d-flex justify-content-center"
                    style="max-width: 680px;background-color:var(--light);">
                    <div class="row g-1">
                        <div class="col-md-4">
                            <img src="<?=base_url('assets/images/dummy.jpg');?>" class="img-fluid rounded-start" alt="..." style="padding: 30px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>
                                <ul>
                                    <li class="card-text"><strong>Name:</strong>Aditya Chowdhary</li>
                                    <li class="card-text"><strong>Degree:</strong>Btech</li>
                                    <li class="card-text"><strong>Branch:</strong>ECE</li>
                                    <li class="card-text"><strong>Passion:</strong>Designing</li>
                                    <li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li>
                                </ul>
                                <button class="profile">Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center">

                <div class="card mb-4  row d-flex justify-content-center"
                    style="max-width: 680px;background-color:var(--light);">
                    <div class="row g-1">
                        <div class="col-md-4">
                            <img src="<?=base_url('assets/images/dummy.jpg');?>" class="img-fluid rounded-start" alt="..." style="padding: 30px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>
                                <ul>
                                    <li class="card-text"><strong>Name:</strong>Aditya Chowdhary</li>
                                    <li class="card-text"><strong>Degree:</strong>Btech</li>
                                    <li class="card-text"><strong>Branch:</strong>ECE</li>
                                    <li class="card-text"><strong>Passion:</strong>Designing</li>
                                    <li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li>
                                </ul>
                                <button class="profile">Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="card mb-4  row d-flex justify-content-center"
                    style="max-width: 680px;background-color:var(--light);">
                    <div class="row g-1">
                        <div class="col-md-4">
                            <img src="<?=base_url('assets/images/dummy.jpg');?>" class="img-fluid rounded-start" alt="..." style="padding: 30px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>
                                <ul>
                                    <li class="card-text"><strong>Name:</strong>Aditya Chowdhary</li>
                                    <li class="card-text"><strong>Degree:</strong>Btech</li>
                                    <li class="card-text"><strong>Branch:</strong>ECE</li>
                                    <li class="card-text"><strong>Passion:</strong>Designing</li>
                                    <li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li>
                                </ul>
                                <button class="profile">Profile</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
    var key="<?php echo $this->security->get_csrf_hash(); ?>";
    function myFunctions() {
        var divset = document.getElementsByClassName("filter-section");
        for (var i = 0; i < divset.length; i++) {
            divset[i].style.display = "block";
        };

        var divset2 = document.getElementsByClassName("student-data");
        for (var f = 0; f < divset2.length; f++) {
            divset2[f].style.display = "none";
        };
    }

    $.ajax({
        url: "<?=base_url('main_helper/filter_data_search');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            course:"",
            branch:"",
            hostel_no: "",
            room_no: "",
            address:""
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

</body>

</html>
