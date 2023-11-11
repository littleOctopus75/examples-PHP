function Modelo() {
    this.mensaje = "¡Hola Mundo!";
}

Modelo.prototype = {
    obtenerNuevoMensaje: function() {
        // Puedes implementar lógica para obtener un nuevo mensaje aquí
        return "Nuevo Mensaje";
    }
};
