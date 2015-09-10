<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Contact";
require_once(dirname(__DIR__) . "/php/lib/head-utils.php");
?>

<body class="sfooter">
	<div class="sfooter-content">
		<div class="design-background">
			<header>
				<?php require_once(dirname(__DIR__) . "/php/lib/header.php"); ?>
			</header>
			<main>
				<div class="container">
					<div class="form-contact">
						<form>
							<div class="form-group">
								<label for="userEmail">email address</label>
								<input type="email" class="form-control" id="userEmail" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="userPhone">phone number</label>
								<input type="text" class="form-control" id="userPhone" placeholder="Phone Number">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</main>
			<footer>
				<?php require_once(dirname(__DIR__) . "/php/lib/footer.php") ?>
			</footer>
</body>
</html>