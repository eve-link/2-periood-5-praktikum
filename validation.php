<?php $issubmitted = isset($_POST["submit"]);
			if ($issubmitted) {
			$username = $_POST['username'];
}
			if (isset($username) || $username == "") {
			$usernameMessage = "<div class='form-message'>Palun sisesta Kasutajanimi</div>";
} 
			else {
			$usernameMessage = "<div class='form-message'>Kasutajanimi sobis!</div>";
}
?>
