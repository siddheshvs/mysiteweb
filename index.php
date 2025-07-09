<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Home</title>
	
	<style>
		body{
			font-family: Arial,sans-serif;
			margin:0;
			padding:0;
			background:#f4f4f4;
			color:#333;
		}
		.navbar{
			display: flex;
			justify-content: space-between;
			align-item:center;
			background:#007bff;
			padding: 15px 20px;
			color:white;
			position:fixed;
			top:0;
			width:98%;
			z-index:1000;

		}
		.navbar a{
			color:white;
			text-decoration:none;
			margin: 0 15px;
		}
		.hero{
			text-align:center;
			padding:100px 20px 50px;
			background:linear-gradient(135deg,#6a11cb,#2575fc);
			background-size:cover;
			color:white;
		}
		.hero h1{
			font-size:2.5em;
		}
		.hero2{
			padding:10px;
			text-decoration:none;
			text-align:center;
			background:linear-gradient(135deg,#6a11cb,#4169E1,#2575fc);
			background-size:cover;
			color:white;
		}
		.container{
			text-align:center;
			padding:50px;
			margin-top:80px;
			display:flex;
			flex-wrap:wrap;
			justify-content:center;
		}
		.card{
			flex:1 1 300px;
			max-width:300px;
			margin:10px;
			padding:20px;
			background:linear-gradient(135deg,#84aed9,#f8f9fa);
			box-shadow:0 4px 12px rgba(0,0,0,0.3);
			border-radius:12px;
			text-align:center;
			transition:transform 0.3s ease-in-out;
		}
		.card:hover{
			transform:translateY(-5px);
			box-shadow:0 6px 15px rgba(0,0,0,0.4);
		}
		.card button{
			width:50%;
			padding:10px;
			background:#4facfe;
			color:white;
			border:none;
			border-radius:5px;
			cursor:pointer;
		}
		.booking-form{
			background:white;
			margin:10px;
			padding:10px;
			border-radius:8px;
			box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
			text-align:center;
			width:97%;
			display:flex;
			flex-direction:column;
			justify-content:center;
			align-items:center;
			font-family: Arial,sans-serif;
		}
		.booking-form h2{
			margin-bottom:20px;
			color:#333;
			font-family: Arial,sans-serif;
		}
		.booking-form label{
			display:block;
			font-weight:bold;
			margin-top:10px;
			color:#333;
		}
		.booking-form input{
			width:90%;
			padding:10px;
			margin:10px 0;
			border:1px solid#ccc;
			border-radius:5px;
		}
		.booking-form button{
			width:100%;
			padding:10px;
			background:#4facfe;
			color:white;
			border:none;
			border-radius:5px;
			cursor:pointer;
		}
		.booking-form button:hover{
			background:#00c6ff;
		}
		.close-btn{
			position:absolute;
			top:10px;
			right:15px;
			font-size:18px;
			cursor:pointer;
			color:#999
		}
		.close-btn:hover{
			color:#333;
		}
		.booking-form2{
			
			margin:10px auto;
			padding:20px;
			border:1px;
			max-width:400px;
			text-align:left;
			display:flex;
			flex-direction:column;
			justify-content:center
			font-family: Arial,sans-serif;
		}
		.booking-form2 button{
			background:#4facfe;
			color:white;
			padding:12px 24px;
			border:none;
			border-radius:8px;
			font-size:16px;
			cursor:pointer;
			transition:background-color 0.3s ease
		}
		.footer{
			text-align:center;
			padding:20px;
			background:#333;
			color:white;
		}
		@media(max-width:768px){
			.navbar{
				flex-direction:column;
				text-align:center;
			}
			.navbar a{
				display:block;
				margin:5px 0;
			}
			.hero h1{
				font-size:2em;
			}
			.container{
				flex-direction:column;
			}
		}
	</style>
</head>

<body>

	<div class="navbar">
		<div class="logo">Mysite</div>
		<div>
			<a href="index.php">Home</a>
			<a href="#services">Services</a>
			<a href="#about">About</a>
			<a href="#contact">Contact</a>
		</div>
	</div>

	<div class="hero">
		<h1>Welcome To Mysite</h1>
		<p>Hello</p>
	</div>
	<h2 style="color: black"><marquee>15% Discount Till Date 30 April</marquee></h2>
	<section id="services">
	<div class="container">
		<div class="card">
			<h2>Quality Desigen</h2>
			<p>Best</p>
			<button class="book-btn" onclick="openBookingForm('Web Design')">Book Now</button>
		</div>
		<div class="card">
			<h2> Development</h2>
			<p>Best</p>
			<button class="book-btn" onclick="openBookingForm('Development')">Book Now</button>
		</div>
		<div class="card">
			<h2>Support</h2>
			<p>Best</p>
			<button class="book-btn" onclick="openBookingForm('SEO Optimization')">Book Now</button>
		</div>
	</div>
	</section>

	<div class="booking-form-container" id="bookingForm">
			<div class="booking-form">
				<span class="close-btn" onclick="closeBookingForm()">&times;</span>
				<h2>Book a Service</h2>
				<form id="serviceBookingForm">
					<label for="service">Service:</label>
					<input type="text" id="service" name="service" readonly>
					<label for="name">Your Name:</label>
					<input type="text" id="name" name="name" required>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" required>
					<label for="service">Preferred Date:</label>
					<input type="date" id="date" name="date" required>
					<button type="submit">Submit Booking</button>
				</form>
			</div>
		</div>

		<section id="about">
		<div class="hero">
			<h2>About</h2>
			<p>We Are Here Too Give IT Services And We Have Done Multipel Projects</p>

		</div>
		</section>

		<section id="contact">
		<div class="hero2">
			<h2>Contact Us</h2>
			<p>supportmy@gmail.com</p>
			<p>Phone No:- 0000000000</p>
			<form class="booking-form2" >
					<h6>* For Contacting Us Fill The Form *</h6	>
					<h3>Contact Us :</h3>
					<label >NAME :</label>
					<input type="text" id="name">
					<label for="email">EMAIL ID :</label>
					<input type="eamil" id="email" name="name" required>
					<label for="phone">PHONE NO :</label>
					<input type="tel" id="phone" name="phone" required>
					<label for="">PURPOSE:</label>
					<input type="text" id="purpose" name="perpose" required><br>
					<button type="submit">SUBMIT</button>
				</form>
		</div>
		</section>

	<div class="footer">
		&copy;2025 Mysite.All Right Reserved
	</div>
	<script>
			function openBookingForm(service){
				document.getElementById("service").value= service;
				document.getElementByid("bookingForm").style.display="flex";
			}
			function closeBookingForm(){
				document.getElementById("bookingForm").style.display="none";
				
			}
			document.getElementById("serviceBBookingForm").addEventListener("submit",function(event){
				event.preventDefault();
				alert("Your booking has been submitted!");
				closeBookingForm();
			});

	</script>
</body>
</html>