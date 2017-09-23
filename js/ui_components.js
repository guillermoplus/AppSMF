function menu_principal(){
	var mainmenu = `<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
		<button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a href="inicio.html" title="Ir a inicio" class="navbar-brand text-right"><script>app_title();</script></a>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="proformas.html" title="" class="nav-link"><i class="fa fa-gears" aria-hidden="true"></i> Proformas</a></li>
				<li class="nav-item"><a href="clientes.html" title="" class="nav-link"><i class="fa fa-group" aria-hidden="true"></i> Clientes</a></li>
				<li class="nav-item"><a href="misdatos.html" title="" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Mis datos</a></li>
				<li class="nav-item"><a href="index.html" title="" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>
			</ul>
		</div>
	</nav>`;

	document.write(mainmenu);
}