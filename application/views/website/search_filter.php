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



	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">




	<!-- FONTS-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<script>
		function get_branches(e) {
			if (e.value === "B.Tech") {
				$('#filter_branch').empty();
				$('#filter_branch').html('<option value="Computer Science & Engineering">Computer Science & Engineering</option><option value="Computer Science & Technology">Computer Science & Technology</option><option value="Computer Science & IT">Computer Science & IT</option><option value="Computer Science Engineering & Artificial Intelligence">Computer Science Engineering & Artificial Intelligence</option><option value="Computer Science Engineering & Data Science">Computer Science Engineering & Data Science</option><option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option><option value="Electrical Engineering">Electrical Engineering</option><option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option><option value="Mechanical Engineering">Mechanical Engineering</option><option value="Civil Engineering">Civil Engineering</option>');
				$('#filter_branch').prop('disabled', false);
			} else if (e.value === "M.Tech") {
				$('#filter_branch').html('<option value="Electrical Engineering (Power System)">Electrical Engineering (Power System)</option><option value="Computer Sc Engg/Tech/IT">Computer Sc Engg/Tech/IT</option><option value="Mechanical Engineering (Thermal)">Mechanical Engineering (Thermal)</option><option value="Mechanical Engineering (Production Engineering)">Mechanical Engineering (Production Engineering)</option>');
				$('#filter_branch').prop('disabled', false);
			} else if (e.value === "MBA") {
				$('#filter_branch').html('<option value="MBA">MBA</option>');
				$('#filter_branch').prop('disabled', 'disabled');
			} else if (e.value === "MCA") {
				$('#filter_branch').html('<option value="MCA">MCA</option>');
				$('#filter_branch').prop('disabled', 'disabled');
			}
		}
	</script>

</head>

<style>
	:root {
		--light: #E9FFF9;
		--cyan: #9ED8D8;
		--dark-blue: #1D3354;
		--dark: #121212;
		--muted: #4F678B;
	}

	#nav {
		position: fixed !important;
		z-index: 9 !important;
	}

	body {
		background-color: #1D3354;
	}


	label {
		display: inline-block;
		margin-bottom: -0.5rem;
	}

	.main-content {
		display: flex;
	}

	.student-data {
		margin-left: auto;
		width: 75%;
		padding: 135px;
	}

	.dropdown {
		position: fixed;
		max-width: 30em;
		outline: none;
		overflow: auto;








	}

	.cars {
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

	.filter-section {

		z-index: -1;

	}

	.filter-section form {
		z-index: 111;
		position: fixed;
		background-color: #ffffff;
		padding: 72px;
		height: 100%;
		bottom: 0%;
		margin-top: 71px;

		width: 72em;
		border-radius: 0 8px 0 0;



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

	#filter img {
		height: 12em;
		width: auto;
		margin: 0 2em;
	}

	#student {
		position: fixed;
		margin: 280px 81em;
	}

	#student img {
		height: 15em;
		opacity: 0.6;
	}

	.navbar-id {
		background-color: #212529;
		position: fixed;
		width: 100%;
		z-index: 10;
		opacity: 1;
		z-index: 112;
	}

	.dropdown::-webkit-scrollbar {
		width: 15px !important;
		border-radius: 100px;
	}



	.dropdown::-webkit-scrollbar-thumb {
		background-color: #384861 !important;

		border-radius: 100px;

	}

	.apply-filter {
		background-color: #4F678B;
		height: 45px;
		width: 15em;
		border-radius: 5px;
		border: 2px solid white;
		color: white;


	}

	#heading h1 {

		color: var(--cyan);
		font-family: 'Cabin', sans-serif;

		font-size: 2.6em;
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

		#filter-btn:hover {
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

			padding: 100px 80px 80px 56px;
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

		.cars {
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



		.apply-filter {

			height: 38px;
			width: 17em;
			border-radius: 5px;
			border: 2px solid white;
			color: white;
			font-size: 13px;
			z-index: 1111;


		}

		.search-student input {
			width: 100% !important;
		}

		#heading h1 {
			font-weight: ;
			color: var(--cyan);
			font-size: 2em;
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
		<img src="<?= base_url(); ?>/assets/images/student.svg" alt="">

	</div>



	<?php

	$this->load->view('website/nav_bar');
	?>

	<div class="filter-section" style="margin-top:0;">
		<div>


			<form id="form_com" class="dropdown" style="top:50px;">


				<div style="margin-bottom: 20px;justify-content: center;text-align: center;" class="search-student">
					<span id="heading">
						<h1>Searchme</h1>
					</span>
					<input type="search" id="search_input" style="outline: none;border-bottom: 2px solid var(--cyan);margin: auto;width:100%;" placeholder="Search any student">
					<button class="apply-filter" style="margin-top: 20px;text-align: center;border-radius:30px;justify-content: center;background-color: var(--cyan);">
						<b>SEARCH</b>
					</button><br>
				</div>


				<label for="cars" id="tittle">Course:</label>
				<select name="cars" id="filter_course" class="cars" title="Select your Course" onchange="get_branches(this)">
					<option value="">-Select-</option>
					<option value="B.Tech">B.Tech</option>
					<option value="M.Tech">M. Tech</option>
					<option value="MCA">MCA</option>
					<option value="MBA">MBA</option>
				</select><br>

				<label for="cars" id="tittle">Branch:</label>
				<select name="cars" class="cars" id="filter_branch" title="Select your Branch">
					<option value="">-Select-</option>
					<option value="Computer Science & Engineering">Computer Science & Engineering</option>
					<option value="Computer Science & Technology">Computer Science & Technology</option>
					<option value="Computer Science & IT">Computer Science & IT</option>
					<option value="Computer Science Engineering & Artificial Intelligence">Computer Science Engineering & Artificial Intelligence</option>
					<option value="Computer Science Engineering & Data Science">Computer Science Engineering & Data Science</option>
					<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
					<option value="Electrical Engineering">Electrical Engineering</option>
					<option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
					<option value="Mechanical Engineering">Mechanical Engineering</option>
					<option value="Civil Engineering">Civil Engineering</option>
				</select><br>

				<label for="cars" id="tittle">Year :</label>
				<select name="cars" id="filter_year" class="cars" style="width: 16em;" title="Select your Year">
					<option value="">-Select-</option>
					<option value="1st Year">1st Year</option>
					<option value="2nd Year">2nd Year</option>
					<option value="3rd Year">3rd Year</option>
					<option value="4th Year">4th Year</option>
				</select><br>

				<label for="cars" id="tittle">Hostel No:</label>
				<select name="cars" id="filter_hostel" class="cars" style="width: 13.6em;" title="Select your Hostel no">
					<option value="">-Select-</option>
					<optgroup label="Girls">

						<option value="GH 1">GH 1</option>
						<option value="GH 2">GH 2</option>
						<option value="GH 3">GH 3</option>
						<option value="GH 4">GH 4</option>
						<option value="GH 5">GH 5</option>
					</optgroup>
					<optgroup label="Boys">
						<option value="BH 1">BH 1</option>
						<option value="BH 2">BH 2</option>
						<option value="BH 3">BH 3</option>
						<option value="BH 4">BH 4</option>
						<option value="BH 5">BH 5</option>
						<option value="BH 6">BH 6</option>
						<option value="BH 7">BH 7</option>
						<option value="BH 8">BH 8</option>
						<option value="BH 9">BH 9</option>
						<option value="BH 10">BH 10</option>
						<option value="BH 11">BH 11</option>
						<option value="BH 12">BH 12</option>
						<option value="BH 13">BH 13</option>
						<option value="BH 14">BH 14</option>
						<option value="BH 15">BH 15</option>
						<option value="BH 16">BH 16</option>
						<option value="BH 17">BH 17</option>
					</optgroup>
				</select><br>

				<label for="cars" id="tittle">Room No:</label>
				<select name="cars" id="filter_room_no" class="cars" style="width: 14em;" title="Select your Room no">
					<option value="">-Select-</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select><br>

				<label for="cars" id="tittle">State:</label>
				<select name="cars" id="filter_state" class="cars" style="width: 15.7em;" title="Select your State">
					<option value="">-Select-</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Puducherry">Puducherry</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="West Bengal">West Bengal</option>
				</select><br>

				<label for="cars" id="tittle">Day Schlor/Hostel:</label>
				<select name="cars" id="filter_living" class="cars" style="width:9.5em;" title="Day Schlor/Hostel">
					<option value="">-Select-</option>
					<option value="Day Scholar">Day Scholar</option>
					<option value="Hostel">Hostel</option>
				</select><br>
				<label for="cars" id="tittle">Lateral Entry: </label>
				<select name="cars" id="filter_islateral" class="cars" style="width: 12em;" title="Lateral Entry">
					<option value="">-Select-</option>
					<option value="Regular">Regular</option>
					<option value="Lateral Entry">Lateral Entry</option>
				</select><br>

				<button id="apply_filter" class="apply-filter" style="margin-top: 20px;">
					<b> APPLY FILTER</b>
				</button><br>
				<hr>

				<label for="cars" id="tittle">Name:</label>
				<select name="cars" class="cars" style="margin-top: 5px;width: 10.8em;">
					<option value="volvo">Volvo</option>
					<option value="saab">Saab</option>
					<option value="opel">Opel</option>
					<option value="audi">Audi</option>
				</select><br>

				<label for="cars" id="tittle">Year:</label>
				<select name="cars" class="cars" style="width: 11.4em;">
					<option value="volvo">Volvo</option>
					<option value="saab">Saab</option>
					<option value="opel">Opel</option>
					<option value="audi">Audi</option>
				</select><br>

				<label for="cars" id="tittle">Gender:</label>
				<select name="cars" class="cars" style="width: 10em;">
					<option value="volvo">Volvo</option>
					<option value="saab">Saab</option>
					<option value="opel">Opel</option>
					<option value="audi">Audi</option>
				</select><br>

				<button class="apply-filter" style="margin-top: 15px;">
					<b> SORT</b>
				</button><br><br>

				<div id="filter">
					<img src="<?= base_url(); ?>/assets/images/filter.svg" alt="">
				</div>

			</form>

		</div>


	</div>










	<div class="main-content">



		<div class="student-data">

			<div class="row d-flex justify-content-center" id="results-information-section">

				<div class="card mb-4  row d-flex justify-content-center" id="clone-sample" style="max-width: 680px;margin-top: 0;background-color:var(--light);">
					<div class="row g-1" id="color">
						<div class="col-md-4">
							<img src="<?= base_url('assets/images/dummy.jpg'); ?>" class="img-fluid rounded-start" alt="..." style="padding: 30px;border-color: white;">
						</div>
						<div class="col-md-8">
							<div class="card-body" style="">
								<h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>
								<ul>
									<li class="card-text"><strong>Name:</strong><span data-id="name">Aditya Chowdhary</span></li>
									<li class="card-text"><strong>Course:</strong><span data-id="course">Btech</span></li>
									<li class="card-text"><strong>Branch:</strong><span data-id="branch">ECE</span></li>
									<!-- <li class="card-text"><strong>Passion:</strong>Designing</li>
									<li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li> -->
								</ul>



								<button class="profile">Profile</button>

							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>

	<?php
	$search_get = $_GET['search'];

	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



	<script>
		var key = "<?php echo $this->security->get_csrf_hash(); ?>";

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

		$("#search_input").val("<?= $search_get; ?>");

		$("#form_com").submit(function(e) {
			e.preventDefault();
		});

		$("#apply_filter").click(function(e) {
			e.preventDefault();
			main_ajax();

		});


		function search_output() {
			search_box_url = $("#search_input").val();
			if (search_box_url != "") {
				window.history.replaceState(null, null, "<?= base_url('main/search_filter'); ?>?search=" + $("#search_input").val());
			}


			// load_page_content(1);
		}

		function main_ajax() {
			$.ajax({
				url: "<?= base_url('main_helper/filter_data_search'); ?>",
				type: "POST",
				async: false,
				data: {
					"<?php echo $this->security->get_csrf_token_name(); ?>": key,
					search_text: $("#search_input").val(),
					course: $("#filter_course").val(),
					branch: $("#filter_branch").val(),
					hostel_no: $("#filter_hostel").val(),
					room_no: $("#filter_room_no").val(),
					state: $("#filter_state").val(),
					living: $("#filter_living").val(),
					islateral: $("#filter_islateral").val()
				},
				dataType: "json",
				success: function(data) {
					key = data.key;

					// console.log(data.data);
					// console.log(data.data.length);
					var student_html = "";

					if (data.data.length >= 1) {
						// var clone_sample = $('#clone-sample');

						// var clone_no = 0;
						// data.data.forEach(element => {
						// 	clone_sample.clone(true).attr('id', 'clone-' + clone_no).appendTo('#results-information-section');
						// 	clone_no++;
						// });
						// clone_sample.html("");

						// for (let index = 0; index < clone_no; index++) {
						// 	$("#clone-" + index + " .row .col-md-8 .card-body ul li [data-id='name']").text(" " + data.data[index]['first_name'] + " " + data.data[index]['middle_name'] + " " + data.data[index]['last_name']);
						// 	$("#clone-" + index + " .row .col-md-8 .card-body ul li [data-id='course']").text(" " + data.data[index]['course']);
						// 	$("#clone-" + index + " .row .col-md-8 .card-body ul li [data-id='branch']").text(" " + data.data[index]['branch']);

						// }
						data.data.forEach(element => {
							console.log(element);
							student_html += '<div class="card mb-4  row d-flex justify-content-center" id="clone-sample" style="max-width: 680px;margin-top: 0;background-color:var(--light);">';
							student_html += '<div class="row g-1" id="color">';
							student_html += '<div class="col-md-4">';
							student_html += '<img src="<?= base_url('assets/images/dummy.jpg'); ?>" class="img-fluid rounded-start" alt="..." style="padding: 30px;border-color: white;">';
							student_html += '</div>';
							student_html += '<div class="col-md-8">';
							student_html += '<div class="card-body" style="">';
							student_html += '<h4 class="card-title" style="color:rgb(32, 161, 161);"><b>GITA BBSR</b></h4>';
							student_html += '<ul>';
							student_html += '<li class="card-text"><strong>Name:</strong><span data-id="name"> '+element['first_name']+' '+element['middle_name']+' '+element['last_name']+'</span></li>';
							student_html += '<li class="card-text"><strong>Course:</strong><span data-id="course"> '+element['course']+'</span></li>';
							student_html += '<li class="card-text"><strong>Branch:</strong><span data-id="branch"> '+element['branch']+'</span></li>';
							student_html += '<!-- <li class="card-text"><strong>Passion:</strong>Designing</li>';
							student_html += '<li class="card-text"><strong>Extra Activity:</strong>Football,Dancing,Painting</li> -->';
							student_html += '</ul>';
							student_html += '<button class="profile">Profile</button></div></div></div></div>';
						});
						$("#results-information-section").html(student_html);

					} else {
						$('#results-information-section').text("No results found!");
					}
					// console.log(data.data.length);
					search_output();

				},
				error: function(data) {
					console.log(data);
				}
			});
		}
		main_ajax();
	</script>

</body>

</html>
