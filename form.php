
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		function main_view()
		{
			$form='<form  class ="contact_form" action="" method="post">
			<ul>
			<li>	
				<h2>Contact Us</h2>
				<span class ="requiered_notification">* Denotes Required Fields</span>
			</li>
			<li>
			<label for="name"> Name:</label>
			<input type = "text" name ="name" placeholder="John Doe" required>
			</li>
			<li>
				<label for="email">Email:</label>
				<input type = "text" name ="email" placeholder="john_doe@example.com" required>
				<span class="form_hint">Proper format "name@something.com"</span>
				
			</li>
			<li>
				<label for="website"> Website:</label>
				<input type ="url" name ="website" placeholder="http://johndoe.com/" required>
				<span class ="form_hint"> Proper format "http://someaddress.com"</span>
			</li>
			<li>
				<label for = "message"> Message:</label>
				<textarea name = "message" cols ="40" rows ="6" required></textarea>
			</li>
			<li>
				<button class ="submit" type="submit"> Submit Forms</button>
			</li>
				</form>';	
			return $form;
		}
		function result_view()
		{

		
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calcSalario")
			{
				$view = result_view();
			}
			
		else
		{
			$view = main_view();
		}
	}
	else{
		$view =main_view();
	}
include 'template.php';
?>
