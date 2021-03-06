<?php 

require_once("../inc/config.php");

 ?>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
	$email = trim($email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
	$message = trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING));

	if ($name == "" && $email == "" && $message == "") {
		$error_message = "You must specify a name, email address, and message.";
	}

	if (!isset($error_message) && $name == "") {
		$error_message = "Please enter your name.";
	}

	if (!isset($error_message) && $message == "") {
		$error_message = "Please enter a message.";
	}

	if (!isset($error_message) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_message = $email . " is <strong>NOT</strong> a valid email address.";
	}

	if (!isset($error_message)) {
		foreach ($_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
				$error_message = "There was a problem with the information you entered.";
			}
		}
	}

	if (!isset($error_message) && $_POST["address"] != "") {
		$error_message = "Your form submission has an error.";
	}

	require_once(ROOT_PATH . 'inc/phpmailer/class.phpmailer.php');
	$mail = new PHPMailer();

	if (!isset($error_message) && !$mail->ValidateAddress($email)){
		$error_message = "You must specify a valid email address.";
	}

	if (!isset($error_message)) { // check if error_message is set
		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body . "Email: " . $email . "<br>";
		$email_body = $email_body . "Message: " . $message;

		// Send Email
		$mail->SetFrom($email,$name);
		$address = "charlie@charliemcr.com";
		$mail->AddAddress($address, "Charlie Mcr");

		$mail->Subject    = "Charlie Mcr Contact Form Submission | " . $name;
		$mail->MsgHTML($email_body);

		if($mail->Send()) {
			header("Location: " . BASE_URL . "contact/thanks/");
			exit;
		} else {
			$error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
		}
		// Sent

	}
} // end if request == POST

 ?>

<?php 

$pageTitle = "Contact Charlie Mcr";
$section = "contact";
include(ROOT_PATH . 'inc/header.php');
 ?>


	<div class="wrapper group">
			<div class="col s4 contact group">
				<div class="group inner">
					
					<h2>Contact</h2>

					<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
					<p>Thanks for the email. I&rsquo;ll be in touch shortly.</p>
					<?php } else { ?>

						<?php 
							if (!isset($error_message)) {
								echo "<p>I&rsquo;d love to hear from you.</p>";
							} else {
								echo '<p>' . $error_message . '</p>';
							}
						?>

						<form method="post" action="<?php echo BASE_URL . "contact/"; ?>">

							<label for="name">Name:</label>
							<input type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" value="<?php if (isset($email)) { echo htmlspecialchars($email); } ?>">
							<label for="message">Message:</label>
							<textarea name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
							<div style="display: none;">
								<label for="address">Address:</label>
								<input type="text" name="address" id="address">
								<p>Please leave this field blank.</p>
							</div>
							<input type="submit" value="Send">

						</form>

					<?php } //end else ?>


				</div>
			</div>







<?php include(ROOT_PATH . 'inc/footer.php'); ?>