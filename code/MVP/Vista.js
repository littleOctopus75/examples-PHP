
function Vista() {
    this.display = document.getElementById("display");
    this.changeButton = document.getElementById("changeButton");
}

Vista.prototype = {
    mostrarMensaje: function(mensaje) {
        this.display.innerText = mensaje;
    }
};
