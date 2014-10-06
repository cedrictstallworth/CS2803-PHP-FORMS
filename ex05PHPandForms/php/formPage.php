<DOCTYPE!>
<html>
<head>
	<title> PHP and Forms </title>
	<!-- <link href="css/styles.css" type="text/css" rel="stylesheet" />	 -->
</head>

<body>
	<h1>PHP and Forms Example</h1>

	<form id="dispalyInfo" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
		<h1 class="titleText">Title Text</h1>

		<span id="titleTextSelPrompt">Enter the title text:</span>
		<input type="text" name="titleTextSel" id="titleTextSel" value="Title Text"> <br><br>

		<span>Choose the Position of the title text:</span> &nbsp;
		L <input type="radio" name="titlePosSel" value="left" checked="true"> &nbsp;
		C <input type="radio" name="titlePosSel" value="center"> &nbsp; 
		R <input type="radio" name="titlePosSel" value="right"> &nbsp; 
		
		<br><br>

		<span id="rgbSelPrompt">Choose a background color for this strip:</span>
		<div id="rgbSel">
		R <input type="range" name="red" id="red" min="0" max="255" value="0"> <br>
		G <input type="range" name="green" id="green" min="0" max="255" value="0"> <br>
		B <input type="range" name="blue" id="blue" min="0" max="255" value="0"> <br>
		</div>

		<br><br>

		<textarea id="middleTextSel" name="middleTextSel">Please enter the text that you want to display in the middle box. </textarea>

		<br><br>	
		
		<span id="imageSelPrompt">Select an image:</span>
		<select id="imageSel" name="imageSel">
			<option value="sports">Sports</option>
			<option value="people">People</option>
			<option value="animals">Animals</option>
			<option value="transport">Transportation</option>
			<option value="cats">Cats</option>
		</select>
		
		<br><br>

		<span id="logoSelPrompt">Click on a logo: </span>
		<span id="logoSel"> 
			<input type="radio" name="logoSel" value="&#x262F;">&#x262F; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2602;">&#x2602; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x260E;">&#x260E; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2622;">&#x2622; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x262E;">&#x262E; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2620;">&#x2620; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2744;">&#x2744; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2624;">&#x2624; &nbsp; &nbsp;
		 </span>
		
		<br><br>

		<span id="socialMediaIconsSelPrompt">Select social media icons for the footer:</span>
		<input type="checkbox" name="socialMediaIconsSel[]" value="facebook.png">Facebook 
		<input type="checkbox" name="socialMediaIconsSel[]" value="instagram.png">Instagram
		<input type="checkbox" name="socialMediaIconsSel[]" value="pintress.jpg">Pintress
		<input type="checkbox" name="socialMediaIconsSel[]" value="twitter.jpg">Twitter

		<br><br>

		<input type="submit">
	</form>

	<h1>Your Input</h1>

	<?php
		if (isset($_REQUEST["titleTextSel"])){ 
			$titleTextSel = $_REQUEST["titleTextSel"]; 
			echo $titleTextSel . '<br>'; 
		}

		if (isset($_REQUEST["titlePosSel"])){ 
			$titlePosSel = $_REQUEST["titlePosSel"]; 
			echo $titlePosSel . '<br>'; 
		}

		if (isset($_REQUEST["red"])){ 
			$red = $_REQUEST["red"]; 
			echo $red . '<br>'; 
		}

		if (isset($_REQUEST["green"])){ 
			$green = $_REQUEST["green"]; 
			echo $green . '<br>'; 
		}

		if (isset($_REQUEST["blue"])){ 
			$blue = $_REQUEST["blue"]; 
			echo $blue . '<br>'; 
		}				

		if (isset($_REQUEST["middleTextSel"])){ 
			$middleTextSel = $_REQUEST["middleTextSel"]; 
			echo $middleTextSel . '<br>'; 
		} 

		if (isset($_REQUEST["imageSel"])){ 
			$imageSel = $_REQUEST["imageSel"]; 
			echo $imageSel . '<br>'; 
		}

		if (isset($_REQUEST["logoSel"])){ 
			$logoSel = $_REQUEST["logoSel"]; 
			echo $logoSel . '<br>'; 
		}

		if (isset($_REQUEST["socialMediaIconsSel"])){
			for ($i=0; $i<count($_REQUEST["socialMediaIconsSel"]); $i++){ 
				$socialMediaIconsSel = $_REQUEST["socialMediaIconsSel"][$i]; 
				echo $socialMediaIconsSel . ' '; 
			}
		}


	?>
</body>
</html>