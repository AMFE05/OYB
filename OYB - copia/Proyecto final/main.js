function App() {}

window.onload = function (event) {
    var app = new App();
    window.app = app;
};

App.prototype.processingButton = function(event) {
    const btn = event.currentTarget;
    const listadiseñada = event.currentTarget.parentNode;
    const espacio= event.currentTarget.parentNode.querySelector('#Forma');
    const listadocarru = espacio.querySelectorAll('.Desplazamiento');

    const carril = listadocarru[0].offsetWidth;
    
    const carril2 = espacio.offsetWidth;
    const list = listadiseñada.offsetWidth;

    espacio.style.left == ""  ? izquierda = espacio.style.left = 0 : izquierda = parseFloat(espacio.style.left.slice(0, -2) * -1);

    btn.dataset.button == "atras" ? prevAction(izquierda,carril,espacio) : nextAction(izquierda,carril2,list,carril,espacio)
}

let prevAction = (izquierda,carril,espacio) => {
    if(izquierda > 0) {
        console.log("entro 2")
        espacio.style.left = `${-1 * (izquierda - carril)}px`;
    }
}

let nextAction = (izquierda,carril2,list,carril,espacio) => {
    if(izquierda < (carril2 - list)) {
        espacio.style.left = `${-1 * (izquierda + carril)}px`;
    }
}