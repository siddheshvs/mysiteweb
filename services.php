<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> Our Services</title>
	<link rel="stylesheet" href="style.css">
	<style>
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
		h2{
			margin-bottom:20px;
			color:#333;
			font-family: Arial,sans-serif;
	
		}
		label{
			display:block;
			font-weight:bold;
			margin-top:10px;
			color:#333;
			

		}
		select{
			width:97%;
			padding:10px;
			margin:10px 0;
			border:1px solid#ccc;
			border-radius:5px;
		}

		input{
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

	</style>


	
	
</head>
<body>
		
	<div class="booking-form-container" id="bookingForm">
			<div class="booking-form">
				<span class="close-btn" onclick="closeBookingForm()">&times;</span>
				<h2>Book a Service</h2>
				<form id="serviceBookingForm">
					<label for="service">Service:</label>
					<select name="service" required>
						<option value"">Select<option>
						<option value"repairing">repairing<option>
						<option value"bike wash">bike wash<option>
						<option value"car wash">car wash<option>
					</select><br>

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
		
</body>
</html>