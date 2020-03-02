

<!DOCTYPE html>
<html>
<head>
	<title>Blog - @yield('Titulo')</title>
</head>
<body>
<h1>Estructuras de control</h1>
<nav>
	

	<!--<li><a href="/contactanos">Contactanos</a></li>
	<li><a href="/redessociales">Redes Sociales</a></li>-->
	<li><a href="/si">If</a></li>
	<li><a href="/else">Else</a></li>
	<li><a href="/for">For</a></li>
	<li><a href="/e-control">Foreach</a></li>

</nav><br>

<div class="contenido">
	@yield('seccion')

</div>


@yield('TP')
<footer>pie de pagina</footer>
</body>

</html>