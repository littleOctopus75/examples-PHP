
function Presentador(modelo, vista) {
    this.modelo = modelo;
    this.vista = vista;

    // Configurar eventos
    var self = this;
    this.vista.changeButton.addEventListener("click", function() {
        var nuevoMensaje = self.modelo.obtenerNuevoMensaje();
        self.modelo.mensaje = nuevoMensaje;
        self.vista.mostrarMensaje(nuevoMensaje);
    });

    // Inicializar la vista con el mensaje actual del modelo
    this.vista.mostrarMensaje(this.modelo.mensaje);
}
