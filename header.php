<!DOCTYPE HTML>
<html lang="cs">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Mozilla.cz</title>
	
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
	<link href="http://mozorg.cdn.mozilla.net/media/css/tabzilla-min.css" rel="stylesheet" />
	<script src="http://mozorg.cdn.mozilla.net/cs/tabzilla/tabzilla.js"></script>
</head>
<body>

<div id="page">
	<div id="page-content">
		<header>
			<a href="https://www.mozilla.org/" id="tabzilla" title="Odkazy na Mozillu">mozilla</a>
			
			<nav id="main-menu">
				<ul>
					<li><a href="/produkty/" title="Přehled produktů a služeb">Produkty</a></li>
					<li><a href="/stahnout/" title="Stažení programů">Stáhnout</a></li>
					<li><a href="/podpora/" title="Chci poradit">Podpora</a></li>
					<li><a href="/mozilla/" title="Kdo jsme a co děláme">O nás</a></li>
				</ul>
			</nav>
			
			<h1><a href="http://www.mozilla.cz">Mozilla v České republice</a></h1>
			<div id="site-description">Děláme Internet lepším světem pro všechny</div>
		</header>
		
		<?php if (function_exists('vslider')) { vslider('vslider_options'); }?>


