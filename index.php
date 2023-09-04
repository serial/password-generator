<!DOCTYPE html>

<html lang="en">
<head>
	<title>Password Generator</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon.png" sizes="16x16">

	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css">

	<!-- SCRIPTS -->
	<script type="text/javascript" src="js/libs/jquery-3.6.4.min.js"></script>
	<script type="text/javascript" src="js/libs/popper-2.11.8.min.js"></script>

	<!-- FONTS -->
	<link rel="stylesheet" type='text/css' href="assets/fonts/fontawesome-pro-6.4.2-web/css/all.min.css">
	<link rel='stylesheet' type='text/css' href='assets/fonts/oswald-v53-latin/oswald.min.css'>
	<link rel='stylesheet' type='text/css' href='assets/fonts/share-tech-v21-latin/share-tech.min.css'>

	<!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
</head>

<body>

<div class="body_wrapper">

	<div id="page" class="container page">
		<div class="github ribbon">
			<a class="github-fork-ribbon right-top fixed" target="_blank" href="https://github.com/serial/password-generator"
				 data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>
		</div>

		<div class="container logo">
			<img src="assets/img/aliaz_Logo_150ppi_white.png" alt="aliaz-logo"/>
		</div>

		<div class="container page-wrapper">

			<div class="header_container flex-between">
				<h1 class="title uppercase"><span class="fa-brands fa-dashcube electric-green"></span> Password Generator</h1>
				<h1 class="bolt"><span class="fa fa-bolt link-light button activate-fancy-bg" aria-hidden="true"></span></h1>
			</div>

			<div class="settings_container flex-between">
				<div class="settings special-chars">
					<input type="checkbox" name="special-chars" id="special_chars" value="yes"/>
					<label for="special_chars">Special Chars</label>
				</div>

				<div class="settings safe-chars tooltip">
					<input type="checkbox" name="safe-chars" id="safe_chars" value="yes"/>
					<label for="safe_chars">Safe Chars</label>

					<div class="tooltip-element pl-2" aria-describedby="tooltip">
						<span class="fa-light fa-circle-question electric-green"></span>
					</div>
					<div class="tooltip-text" role="tooltip">
						Prevent similar looking characters.
						<div id="arrow" data-popper-arrow></div>
					</div>
				</div>

				<div class="settings prefix gap-x-4">
					<input type="text" name="prefix" id="prefix_chars" value="aZ" maxlength="3"/>
					<label for="prefix_chars">Prefix Chars</label>
				</div>
				<div class="settings length gap-x-4">
					<input type="number" name="length" id="length" min="5" max="50" value="12"/>
					<label for="length">Characters</label>
				</div>
			</div>
			<input type="checkbox" name="showpassword" id="show_password" value="yes"/>

			<div class="spacer h-20"></div>

			<div class="generate_container">
				<button id="generate" class="glow-on-hover submit uppercase" type="button">Generate!</button>
			</div>

			<div class="spacer h-30"></div>

			<div class="password_container">
				<input type="text" id="field_password" class="hidden_password" readonly/>
				<span id="alert"> </span>
			</div>

			<div class="spacer h-30"></div>

			<div class="copy_container">
				<button id="button_copy" class="cybr-btn">
					Copy<span aria-hidden>_</span>
					<span aria-hidden class="cybr-btn__glitch">Copy_</span>
					<span aria-hidden class="cybr-btn__tag">AZ</span>
				</button>
			</div>

		</div>
	</div>

	<footer id="footer">
		<div class="footer_container flex-around">
			<div class="footer_content text-center">
				<p class="footer_text">
					&copy; <span id="copyright" class="current-year"></span>
					<a href="https://aliaz.de" target="_blank" class="text-decoration-none">aliaz werbeagentur</a>
				</p>
				<p>
					<a href="https://github.com/serial" target="_blank" class="text-decoration-none"><span class="fa-brands fa-github"></span>
						micha</a>
				</p>
			</div>
		</div>
	</footer>

</div>

<script type="text/javascript" src="js/init.min.js"></script>
<script type="text/javascript" src="js/tooltip.js"></script>

</body>
</html>

