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
		<input type="text" name="titleTextSel" id="titleTextSel" value='<?php echo isset($_REQUEST['titleTextSel']) ? $_REQUEST['titleTextSel'] : "Title Text" ?>' > <br><br>

		<span>Choose the Position of the title text:</span> &nbsp;
		L <input type="radio" name="titlePosSel" value="left" <?php echo isset($_REQUEST['titlePosSel']) ? ($_REQUEST['titlePosSel']=='left' ? 'checked' : '') : 'checked' ?> > &nbsp;
		C <input type="radio" name="titlePosSel" value="center" <?php echo isset($_REQUEST['titlePosSel']) ? ($_REQUEST['titlePosSel']=='center' ? 'checked' : '') : '' ?> > &nbsp; 
		R <input type="radio" name="titlePosSel" value="right" <?php echo isset($_REQUEST['titlePosSel']) ? ($_REQUEST['titlePosSel']=='right' ? 'checked' : '') : '' ?> > &nbsp; 
		
		<br><br>

		<span id="rgbSelPrompt">Choose a background color for this strip:</span>
		<div id="rgbSel">
		R <input type="range" name="red" id="red" min="0" max="255" value='<?php echo isset($_REQUEST['red']) ? $_REQUEST['red'] : 0 ?>'> <br>
		G <input type="range" name="green" id="green" min="0" max="255" value='<?php echo isset($_REQUEST['green']) ? $_REQUEST['green'] : 0?>'> <br>
		B <input type="range" name="blue" id="blue" min="0" max="255" value='<?php echo isset($_REQUEST['blue']) ? $_REQUEST['blue'] : 0 ?>'> <br>
		</div>

		<br><br>

		<textarea id="middleTextSel" name="middleTextSel"> <?php echo isset($_REQUEST['middleTextSel']) ? $_REQUEST['middleTextSel'] : "Please enter the text that you want" ?> </textarea>

		<br><br>	
		
		<span id="imageSelPrompt">Select an image:</span>
		<select id="imageSel" name="imageSel">
			<option value="sports" <?php echo isset($_REQUEST['imageSel']) ? ($_REQUEST['imageSel']=='sports' ? 'selected' : '') : 'selected' ?> >Sports</option>
			<option value="people" <?php echo isset($_REQUEST['imageSel']) ? ($_REQUEST['imageSel']=='people' ? 'selected' : '') : '' ?> >People</option>
			<option value="animals" <?php echo isset($_REQUEST['imageSel']) ? ($_REQUEST['imageSel']=='animals' ? 'selected' : '') : '' ?> >Animals</option>
			<option value="transport" <?php echo isset($_REQUEST['imageSel']) ? ($_REQUEST['imageSel']=='transport' ? 'selected' : '') : '' ?> >Transportation</option>
			<option value="cats"  <?php echo isset($_REQUEST['imageSel']) ? ($_REQUEST['imageSel']=='cats' ? 'selected' : '') : '' ?> >Cats</option>
		</select>
		
		<br><br>

		<span id="logoSelPrompt">Click on a logo: </span>
		<span id="logoSel"> 
			<input type="radio" name="logoSel" value="&#x262F;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=="'&#9775;'" ? 'checked' : '') : 'checked' ?>>&#x262F; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2602;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=='&#9730;' ? 'checked' : '') : '' ?>>&#x2602; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x260E;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=='&#9742;' ? 'checked' : '') : '' ?>>&#x260E; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2622;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=='&#9762;' ? 'checked' : '') : '' ?>>&#x2622; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x262E;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=='&#9774;' ? 'checked' : '') : '' ?>>&#x262E; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2620;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=='&#9760;' ? 'checked' : '') : '' ?>>&#x2620; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2744;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=='&#10052;' ? 'checked' : '') : '' ?>>&#x2744; &nbsp; &nbsp;
			<input type="radio" name="logoSel" value="&#x2624;" <?php echo isset($_REQUEST['logoSel']) ? ($_REQUEST['logoSel']=='&#9764;' ? 'checked' : '') : '' ?>>&#x2624; &nbsp; &nbsp;
		 </span>
		
		<br><br>

		<span id="socialMediaIconsSelPrompt">Select social media icons for the footer:</span>
		<input type="checkbox" name="socialMediaIconsSel[]" value="facebook.png" <?php echo isset($_REQUEST['socialMediaIconsSel']) ? (array_search('facebook.png', $_REQUEST['socialMediaIconsSel'])>-1 ? 'checked' : '') : '' ?>>Facebook 
		<input type="checkbox" name="socialMediaIconsSel[]" value="instagram.png" <?php echo isset($_REQUEST['socialMediaIconsSel']) ? (array_search('instagram.png', $_REQUEST['socialMediaIconsSel'])>-1? 'checked' : '') : '' ?>>Instagram
		<input type="checkbox" name="socialMediaIconsSel[]" value="pintress.jpg" <?php echo isset($_REQUEST['socialMediaIconsSel']) ? (array_search('pintress.jpg', $_REQUEST['socialMediaIconsSel'])>-1 ? 'checked' : '') : '' ?>>Pintress
		<input type="checkbox" name="socialMediaIconsSel[]" value="twitter.jpg" <?php echo isset($_REQUEST['socialMediaIconsSel']) ? (array_search('twitter.jpg', $_REQUEST['socialMediaIconsSel'])>-1 ? 'checked' : '') : '' ?>>Twitter

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