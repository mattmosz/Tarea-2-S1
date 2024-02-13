class Clase_habitacion_js{

    constructor(habitacion, ruta){
        this.habitacion = habitacion;
        this.ruta = ruta;
    }

    listar_habitaciones(){

        var html= "";
        $.get(
            "../../Controllers/habitaciones.controller.php?op=listar",
            (res)=> {
                console.log(res);
                try {
                    res = JSON.parse(res);
                } catch (e) {
                    console.error("Error al analizar la respuesta JSON:", e);
                    return;
                }
                $.each(res, (index, habitacion) => {
                    html += `<tr>
                    <td>${index + 1}</td>
                    <td>${habitacion.tipo}</td>
                    <td>${habitacion.capacidad}</td>
                    <td>${habitacion.precio_noche}</td>
                    <td><button class='btn btn-success' onclick='uno(${habitacion.id_habitacion})'>Editar</button>
                    <button class='btn btn-danger'>Eliminar</button </td>
                    </tr>`;
                });
                console.log(html);
                $("#tabla_habitaciones").html(html);
            });
    }
    
    uno(id_habitacion){

        $.post(
            "../../Controllers/habitaciones.controller.php?op=" + this.ruta,
            {id_habitacion: id_habitacion},
            (user) => {
                console.log({ conPOO: user });
            }
        );

    }

    insertar(){
        $.ajax({
            url: "../../Controllers/habitaciones.controller.php?op=" + this.ruta,
            type: "POST",
            data: this.habitacion,
            processData: false,
            contentType: false,
            cache: false,
            success: (res) => {
                try {
                    res = JSON.parse(res);
                } catch (e) {
                    console.error("Error al analizar la respuesta JSON:", e);
                    return;
                }
                if(res){
                    alert("Habitacion registrada");
                }else{
                    alert("Error al registrar habitacion");
                }
            }
        });
    }

}
