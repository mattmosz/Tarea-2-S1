function init(){

    $("#habitaciones_Form").on("submit", (e)=>{
        insertar(e);
    });
}

$().ready(()=>{
    cargarTabla();
});

var cargarTabla = ()=>{
    var habitacionModelojs = new Clase_habitacion_js("", "listar_habitaciones");
    habitacionModelojs.listar_habitaciones();
};

var uno = (id_habitacion)=>{
    var habitacionModelojs = new Clase_habitacion_js("", "uno");
    habitacionModelojs.uno(id_habitacion);
};

var insertar = (e)=>{
    e.preventDefault();
    var habitacion_form = new FormData($("#habitaciones_Form")[0]);
    var habitacionModelojs = new Clase_habitacion_js(habitacion_form, "insertar");
    habitacionModelojs.insertar();
};
init();
