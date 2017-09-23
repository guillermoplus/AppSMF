// Título o nombre de la App
var title = "Solo Massey Ferguson";

// Función que coloca el título entre etiquetas <title></title> en cada página de la App
function app_title_tag(){
	document.write('<title>'+title+'</title>');
}

// Función que muestra solo el título de la App
function app_title(){
	document.write(title);
}
