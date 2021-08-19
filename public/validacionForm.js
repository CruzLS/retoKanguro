$(document).ready(function() {

    if ($("#envioForm").length > 0) {
        $("#envioForm").validate({
    
            rules: {
                lugarOrigen: {
                    required: true,
                  
                },
                destino: {
                    required: true,
                  
                },
                descripcion: {
                    required: true,
                  
                },
                paqueteria: {
                    required: true,
                  
                },
               
            },
            messages: {
    
                lugarOrigen: {
                    required: "Selecciona el lugar origen del paquete",
                },
                destino: {
                    required: "Selecciona el lugar de destino del paquete",
                },
                descripcion: {
                    required: "Agrega una descripción del envío",
                },
                paqueteria: {
                    required: "Selecciona una paquetería",
                },
               
    
            },
        })
    } 
    
});
