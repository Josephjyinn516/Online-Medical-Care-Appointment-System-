
<!DOCTYPE html>
<html>
<head>
<title>Add New Contact</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
		body {
			font-family: 'Roboto', sans-serif;
		}
		.section {
			margin-bottom: 10px;
		}
</style>
</head>

<body>
<?php
include("connMedic.php");
$id = intval($_GET['id']); //intval — Get the integer value of a variable
$result = mysqli_query($con,"SELECT * FROM doctor WHERE DoctorID=$id");
while($row = mysqli_fetch_array($result))
{
?>
<form action="update.php" method="post" >
<input type="hidden" name="id" value="<?php echo $row['DoctorID'] ?>">
<div id="container">
<h2>My Address Book</h2>
<h3>Edit Contact</h3>
	<div class="section">
		<div class="label">
			Name
		</div>
		<div class="field">
			<input type="text" name="name" required="required" value="<?php echo $row['DoctorName'] ?>">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Phone Number
		</div>
		<div class="field">
			<input type="tel" name="phone_num" required="required" value="<?php echo $row['Telephone'] ?>">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Email Address
		</div>
		<div class="field">
			<input type="email" name="email_address" required="required" value="<?php echo $row['DoctorEmailAddress'] ?>">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Gender
		</div>
		<div class="field" style="padding-top:10px;">
			<input type="radio" name="gender" value="Male" required="required"
			<?php if ($row['Gender'] == "Male") { ?>
			checked
			<?php } ?>			
			> &nbsp;&nbsp;Male &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Female" required="required"
			<?php if ($row['Gender'] == "Female") { ?>
			checked
			<?php } ?>
			> &nbsp;&nbsp;Female 
		</div>
	</div>
	<div class="section" style="padding-top:15px;">
		<div class="label">
			Specialty Name
		</div>
		<div class="field">
		<select name="Specialty Name" required="required">
			<option value="">Please select</option>

			<option value="Allergists" 
			<?php 
				if ($row['SpecialtyName'] == "Allergists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Allergists</option>



			<option value="Anesthesiologists" 
			<?php 
				if ($row['SpecialtyName'] == "Anesthesiologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Anesthesiologists</option>



			<option value="Cardiologists"
			<?php 
				if ($row['SpecialtyName'] == "Cardiologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Cardiologists</option>



			<option value="Dermatologists" 
			<?php 
				if ($row['SpecialtyName'] == "Dermatologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Dermatologists</option>



			<option value="Endocrinologists" 
			<?php 
				if ($row['SpecialtyName'] == "Endocrinologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Endocrinologists</option>

				
			<option value="Gastroenterologists" 
			<?php 
				if ($row['SpecialtyName'] == "Gastroenterologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Gastroenterologists</option>



			<option value="Hematologists" 
			<?php 
				if ($row['SpecialtyName'] == "Hematologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Hematologists</option>



			<option value="Infectious Disease Specialists" 
			<?php 
				if ($row['SpecialtyName'] == "Infectious Disease Specialists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Infectious Disease Specialists</option>



			<option value="Nephrologists" 
			<?php 
				if ($row['SpecialtyName'] == "Nephrologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Nephrologists</option>



			<option value="Neurologists" 
			<?php 
				if ($row['SpecialtyName'] == "Neurologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Neurologists</option>



			<option value="Oncologists" 
			<?php 
				if ($row['SpecialtyName'] == "Oncologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Oncologists</option>



			<option value="Ophthalmologists" 
			<?php 
				if ($row['SpecialtyName'] == "Ophthalmologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Ophthalmologists</option>



			<option value="Physiatrists" 
			<?php 
				if ($row['SpecialtyName'] == "Physiatrists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Physiatrists</option>



			<option value="Podiatrists" 
			<?php 
				if ($row['SpecialtyName'] == "Podiatrists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Podiatrists</option>



			<option value="Psychiatrists" 
			<?php 
				if ($row['SpecialtyName'] == "Psychiatrists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Psychiatrists</option>



			<option value="Pulmonologists" 
			<?php 
				if ($row['SpecialtyName'] == "Pulmonologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Pulmonologists</option>



			<option value="Radiologists" 
			<?php 
				if ($row['SpecialtyName'] == "Radiologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Radiologists</option>



			<option value="Rheumatologists" 
			<?php 
				if ($row['SpecialtyName'] == "Rheumatologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Rheumatologists</option>



			<option value="Urologists" 
			<?php 
				if ($row['SpecialtyName'] == "Urologists") 
				{ 
			?>
				selected
			<?php 
				} 
			?>
			>Urologists</option>

			</select>
		</div>
	</div>

	<div class="section">
		<div class="label">
			&nbsp;
		</div>
		<div class="field">
			<button type="submit" class="btn">Submit</button>
			<button type="reset" class="btn">Reset</button>
		</div>
	</div>
</div>
</form>
<?php
}
mysqli_close($con);
?>
</body>
</html>
