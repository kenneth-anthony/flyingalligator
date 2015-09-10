<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Kenneth Anthony";
require_once("php/lib/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">
		<header>
			<?php require_once("php/lib/header.php"); ?>
		</header>
		<main>
			<section class="parallax" data-stellar-background-ratio="0.5" id="design">
				<a href="design">
					<h2>DESIGN</h2>
					<h5>some text goes here</h5>
				</a>
				<div class="container">
					<div class="row">
						<div class="design-text">

							<!--				<div id="design" onmouseover="()" onmouseout="() ;">-->

						</div>
					</div>
				</div>
			</section>
			<section class="parallax" data-stellar-background-ratio="0.5" id="photography">
				<div class="container">
					<div class="row">
						<a href="photography"><h2>PHOTOGRAPHY</h2></a>
						<h5>some text goes here</h5>
					</div>
				</div>
			</section>
			<section class="parallax" data-stellar-background-ratio="0.5" id="branding">

				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>BRANDING</h2>
							<h5>some text goes here</h5>
						</div>
					</div>
				</div>
			</section>
			<!--			<section class="parallax" data-stellar-bacground-ratio="1.5" id="motion">-->
			<!--				<div class="container">-->
			<!--					<div class="row">-->
			<!--						<div class="col-xs-12">-->
			<!--							<h2>Motion Graphics</h2>-->
			<!--							<h5>some text goes here</h5>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</section>-->
		</main>
		<footer>
			<?php require_once("php/lib/footer.php"); ?>
		</footer>
	</div>
</body>
</html>