<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>title</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<nav class="menubar">
<div class="container">
<img src="img/logo.png" alt="AlbatrosCSS">
<ul class="right">
	<li>Item 01</li>
	<li class="active">Active Item</li>

	<ul><li>DropDown</li>
		<li>first</li>
		<li>middle</li>
		<li>last</li>
	</ul>

</ul>

</div>
</nav>

<div class="container">


<div class="row">

	<div class="bl20">Buttons</div>

	<div class="bl80">
		<form>
			<button type="submit">Submit from button</button>
		</form>
		<br>
		<button>Button</button>
		<button class="btnRed">Button Red</button>
		<button class="btnGreen">Button Green</button>
		<button class="btnBorder">Button Border</button>
		<br>
		<button class="extraSmall">Extrasmall Button</button>
		<button class="small">Small Button</button>
		<button class="large">Large Button</button>
		<button class="extraLarge">Extralarge Button</button>
		<button disabled>Disabled</button>
	</div>

</div>


<div class="row">

	<div class="bl20">Selectors</div>

	<div class="bl80">

		<div class="selectorVert">
			<ul>
				<li>Item01</li>
				<li>Item02</li>
				<li class="active">Item03</li>
				<li>Item04</li>
			</ul>
		</div>

		<div class="selectorHor">
			<ul>
				<li class="bl4 keep">Item01</li>
				<li class="bl4 keep">Item02</li>
				<li class="bl4 keep active">Item03</li>
				<li class="bl4 keep">Item04</li>
			</ul>
		</div>

		<br>

	</div>

</div>

<div class="row">

	<div class="bl20">blocks</div>

	<div class="bl80">
		<div class="divDefault leftie">Default Block</div><br>
		<div class="divPrimary leftie">Primary Block</div><br>
		<div class="divSecondary leftie">Secondary Block</div><br>

		<div class="keepAspect divSecondary leftie">Keep aspect block</div>
		<br>
	</div>
</div>

<div class="row">

	<div class="bl20">Forms</div>

	<div class="bl80">
		
		
		<input type="text" name="" class="extraSmall" value="" placeholder="Extrasmall">
		<input type="text" name="" class="small" value="" placeholder="small">
		<input type="text" name="" class="large" value="" placeholder="Large">
		<input type="text" name="" class="extraLarge" value="" placeholder="Extralarge">
		
		<input type="text" name="" value="" placeholder="Text">
		<input disabled type="text" name="" value="" placeholder="Disabled">
		<br>

		<input type="radio" name="rdio" value="0"> <input type="radio" name="rdio" value="1">
		<br>
		<input type="range" name="" value="100">
		<br>
		<input type="checkbox" name="" value=""> <input type="checkbox" name="" value="">
	</div>

</div>

<hr>

<div class="row">

	<div class="bl20">Headlines</div>

	<div class="bl80">
		<h1>Headline1</h1>
		<h2>Headline2</h2>
		<h3>Headline3</h3>
		<h4>Headline4</h4>
		<h5>Headline5</h5>
		<h6>Headline6</h6>
	</div>

</div>



<div class="row">

	<div class="bl20">Texts</div>

	<div class="bl80">
		<span class="textLarge">Large text</span><br>
		<span>Standard text</span><br>
		<span class="textSmall">Small text</span><br><br>

		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Pellentesque tincidunt pretium <a href="">eros id pharetra</a>. Quisque at nulla scelerisque,
		elementum augue eu, pretium massa. Vivamus bibendum tempor ipsum sit amet consectetur.
		Proin vitae elit id magna posuere lobortis. Sed odio sapien, iaculis a mollis vitae,
		ultrices eu nulla. In quam mauris, congue volutpat convallis a, egestas in tortor.
		<br><br>
		<span class="textInfo">Infotext / description.</span><br>

	</div>

</div>



<div class="row">

	<div class="bl20">Lists</div>

	<div class="bl80">

		
		<ul class="listClean">
			<li>Item01</li>
			<li>Item02</li>
			<ul>
				<li>moreItem01</li>
				<li>moreItem02</li>
			</ul>
		</ul>
		<br>
		Dotted List
		<ul class="listDot">
			<li>Item01</li>
			<li>Item02</li>
			<ul>
				<li>moreItem01</li>
				<li>moreItem02</li>
			</ul>
		</ul>
		<br>
		Numeric List
		<ul class="listNum">
			<li>Item01</li>
			<li>Item02</li>
			<ul>
				<li>moreItem01</li>
				<li>moreItem02</li>
			</ul>
		</ul>


	</div>

</div>

<div class="row">

	<div class="bl20">Table</div>

	<div class="bl80">

	<table>
		<caption>Caption</caption>
			<tr>
				<th>Item01</th>
				<th>Item02</th>
			</tr>
			<tr>
				<td>data</td>
				<td>data</td>
			</tr>
			<tr>
				<td>data</td>
				<td>data</td>
			</tr>
	</table>

	</div>

</div>


<div class="row">

	<div class="bl20">Loaders</div>

	<div class="bl80">
		<div class="loaderSmall dark"></div>
		<div class="loader dark"></div>
		<div class="loaderLarge dark"></div>
		<div class="divPrimary p10">
			<div class="loaderSmall light"></div>
			<div class="loader light"></div>
			<div class="loaderLarge light"></div>
		</div>
	</div>

</div>


</div>


<script src="js/albatros.min.js"></script>
</body>
</html>