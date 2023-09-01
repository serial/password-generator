<?php
/*

      _/_/    _/        _/_/_/    _/_/    _/_/_/_/_/
   _/    _/  _/          _/    _/    _/        _/
  _/_/_/_/  _/          _/    _/_/_/_/      _/
 _/    _/  _/          _/    _/    _/    _/
_/    _/  _/_/_/_/  _/_/_/  _/    _/  _/_/_/_/_/
                      aliaz werbeagentur | gmbh

*/
?>

<!DOCTYPE html>

<html>
    <head>
			<title>Password Generator</title>
			<link rel="shortcut icon" href="/favicon.ico">
			<link rel="icon" type="image/png" href="/favicon.png" sizes="16x16">

        <!-- STYLES -->
        <link rel="stylesheet" type="text/css" href="css/style.min.css">

        <!-- SCRIPTS -->
				<script type="text/javascript" src="js/libs/jquery-2.1.1.min.js"></script>

        <!-- FONTS -->
				<link rel="stylesheet" type='text/css' href="fonts/fontawesome-pro-6.4.2-web/css/all.min.css">
        <link rel='stylesheet' type='text/css' href='fonts/oswald-v53-latin/oswald.min.css'>
        <link rel='stylesheet' type='text/css' href='fonts/share-tech-v21-latin/share-tech.min.css' >

        <!-- META -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

    </head>
    <body>

		<a class="github-fork-ribbon right-top fixed" target="_blank" href="https://github.com/serial/password-generator" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>

      <div id="logo">
      	<img  src="img/aliaz_Logo_150ppi_white.png" alt="aliaz-logo" />
      </div>

			<div class="container wrapper">

				<div class="header_container flex between">
					<h1 class="title"><span class="fa-brands fa-dashcube"></span> Password Generator</h1>
					<h1 class="bolt"><span class="fa fa-bolt white button activate-fancy-bg" aria-hidden="true"></span></h1>
				</div>


				<div class="settings_container flex between">
					<div class="settings specialchars">
						<input type="checkbox" name="sonderzeichen" id="special_chars" value="yes" />
						<label for="special_chars">Special Chars</label>
					</div>
					<div class="settings safechars">
						<input type="checkbox" name="safechars" id="safe_chars" value="yes" />
						<label for="safe_chars">Safe Chars</label>
					</div>
					<div class="settings prefix">
						<input type="text" name="prefix" id="prefixchars" value="aZ" maxlength="3" />
						<label for="prefixchars">Prefix Chars</label>
					</div>
					<div class="settings length">
						<input type="number" id="length" min="5" max="50" value="12" />
						<label for="length">Characters</label>
					</div>
				</div>

				<div class="spacer h-10"></div>

				<div class="generate_container">
					<button id="generate" class="glow-on-hover submit uppercase" type="button">Generate!</button>
				</div>

				<div class="spacer h-20"></div>

				<div class="password_container">
					<input type="text" id="field_password" class="hidden_password" readonly />
					<span id="alert"> </span>
				</div>

				<div class="spacer h-20"></div>

				<div class="copy_container">
					<button id="button_copy" class="cybr-btn">
						Copy<span aria-hidden>_</span>
						<span aria-hidden class="cybr-btn__glitch">Copy_</span>
						<span aria-hidden class="cybr-btn__tag">AZ</span>
					</button>
				</div>

			</div>

      <script type="text/javascript" src="./js/func.min.js"></script>
    </body>
</html>

