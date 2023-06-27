function incrementar(precio, num, valor) {
    var numInput = document.getElementById(num);
    var numValue = parseInt(numInput.value);
    numValue++;
    numInput.value = numValue;

    var subtotalElement = document.getElementById(precio);
    var subtotalValue = parseFloat(subtotalElement.innerHTML);
    var nuevoSubtotal = subtotalValue * numValue;
    var valor = document.getElementById(valor);
    valor.innerHTML = nuevoSubtotal.toFixed(2);
}

function decrementar(precio, num, valor) {
    var numInput = document.getElementById(num);
    var numValue = parseInt(numInput.value);
    if (numValue > 0) {
        numValue--;
        numInput.value = numValue;

        var subtotalElement = document.getElementById(precio);
        var subtotalValue = parseFloat(subtotalElement.innerHTML);
        var nuevoSubtotal = subtotalValue * numValue;
        var valor = document.getElementById(valor);
        valor.innerHTML = nuevoSubtotal.toFixed(2);
    }
    if (numValue === 0) {
        var decrementButton = document.getElementById("decremento");
        decrementButton.disabled = true;
    }
}

//Sumar
var nTotal = 0;

function cerrarpop() {
    const pop = document.getElementById('pop');
    pop.style.display = 'none';
    const errorMessage = document.getElementById("error-message");
    errorMessage.style.display = 'block';
}

function sumar(precio, num, producto) {
    var cantidad = parseFloat(document.getElementById(num).value);
    if (cantidad === 0) {
        var pop = document.getElementById('pop');
        pop.style.display = "block";
        const errorMessage = document.getElementById("error-message");
        errorMessage.style.display = 'block';
        return;
    } else {
        var sumaTotal = parseFloat(document.getElementById(precio).innerHTML);
        var cantidad = parseFloat(document.getElementById(num).value);
        var display = document.getElementById('display');
        display.style.display = "block";
        var valores = document.getElementById('valores');
        var izq = document.getElementById(producto).innerHTML;
        valores.innerHTML += '<br> ➤ ' + cantidad + '(' + izq + ')' + ' = s/.' + sumaTotal.toFixed(2);

        //acumular precio
        var precioTotal = parseFloat(document.getElementById('mtotal').innerHTML.replace('s/.', ''));
        if (isNaN(precioTotal)) {
            precioTotal = 0;
        }
        var nuevoTotal = precioTotal + sumaTotal;
        document.getElementById('mtotal').innerHTML = 's/.' + nuevoTotal.toFixed(2);

        // acumular cantidad en nTotal
        nTotal += cantidad;
        document.getElementById('numeroT').innerHTML = nTotal;
        numeroT.classList.remove('rezoom');
        numeroT.classList.add('zoom');
        setTimeout(function() {
            numeroT.classList.remove('zoom');
            numeroT.classList.add('rezoom');
        }, 400);
    }
}

function pedido() {
    const valores = document.getElementById("valores").innerHTML;
    const valorespop = document.getElementById("valores-pop");

    const valoresConSaltos = valores.replace(/<br>/g, '\n');

    const valorespopConSaltos = valorespop.innerHTML + '\n' + valoresConSaltos;

    valorespop.innerHTML = valorespopConSaltos.split('\n').map(val => val.trim() !== '' ? `<br>${val}` : '').join('');

    const precio = document.getElementById("mtotal").innerHTML;
    const preciopop = document.getElementById("mtotal-pop");
    preciopop.innerHTML = '\n' + precio;
}

function pedidol() {
    const valores = document.getElementById("valores").innerHTML;
    const valorespop = document.getElementById("valores-pop");

    const valoresConSaltos = valores.replace(/<br>/g, '\n');

    const valorespopConSaltos = valorespop.innerHTML + '\n' + valoresConSaltos;

    valorespop.innerHTML = valorespopConSaltos.split('\n').map(val => val.trim() !== '' ? `<br>${val}` : '').join('');

    const precio = document.getElementById("mtotal").innerHTML;
    const preciopop = document.getElementById("mtotal-pop");
    preciopop.innerHTML = '\n' + precio;
}

function refresh() {
    location.reload(true);
}

function wasa() {
    var valores = document.getElementById("valores-pop").innerText;
    valores = valores.replace(/<br>/g, '\n');

    var mtotal = document.getElementById("mtotal-pop").innerHTML.trim();

    var telefono = "51938315754";
    var mensaje = "Hola Rincón Trujillano, mi pedido es el siguiente:\n" + valores + "\n\nTotal: " + mtotal;
    var url = "https://wa.me/" + telefono + "?text=" + encodeURIComponent(mensaje);
    window.open(url);
}

//

document.addEventListener("DOMContentLoaded", function() {
    updateInfusionText("zenit", "zeniti", "zenitt");
    updateInfusionText("infusion", "infusioni", "infusiont");
    updateInfusionText("bardock", "bardocki", "bardockt");

    function updateInfusionText(infusionId, selectId, resultId) {
        const selectElement = document.getElementById(selectId);
        selectElement.addEventListener("change", (event) => {
            const infusionText = document.getElementById(infusionId).innerHTML;
            const resultado = document.getElementById(resultId);
            resultado.textContent = `${infusionText} ${event.target.value}`;
        });
    }
});

//Refrescantes
document.addEventListener("DOMContentLoaded", function() {
    updateLimonadaText("limonada", "limonadai", "limonadat", "sub-limonada", "valor-limonada", 2, 12, "num-limonada");
    updateLimonadaText("morada", "moradai", "moradat", "sub-morada", "valor-morada", 2, 12, "num-morada");
});

function updateLimonadaText(limonadaId, selectId, resultId, sub, valor, precioV, precioJ, numId) {
    const selectElement = document.getElementById(selectId);
    selectElement.addEventListener("change", (event) => {
        const infusionText = document.getElementById(limonadaId).innerHTML;
        const resultado = document.getElementById(sub);
        const valorT = document.getElementById(valor);
        const precio = (event.target.value === "Vaso") ? precioV : precioJ;
        const valorUnidad = parseInt(document.getElementById(numId).value);
        const valorTotal = valorUnidad * precio;
        resultado.innerHTML = precio;
        valorT.innerHTML = valorTotal;
        const texto = document.getElementById(resultId);
        texto.innerHTML = `${infusionText} ${event.target.value}`;
    });
}

document.addEventListener("DOMContentLoaded", function() {
    chanchito("chanchito", "chanchitoi", "chanchitot", "sub-chanchito", "valor-chanchito", 24, 27, "num-chanchito");
});

function chanchito(limonadaId, selectId, resultId, sub, valor, precioV, precioJ, numId) {
    const selectElement = document.getElementById(selectId);
    selectElement.addEventListener("change", (event) => {
        const infusionText = document.getElementById(limonadaId).innerHTML;
        const resultado = document.getElementById(sub);
        const valorT = document.getElementById(valor);
        const precio = (event.target.value === "Con tamal") ? precioJ : precioV;
        const valorUnidad = parseInt(document.getElementById(numId).value);
        const valorTotal = valorUnidad * precio;
        resultado.innerHTML = precio;
        valorT.innerHTML = valorTotal;
        const texto = document.getElementById(resultId);
        texto.innerHTML = `${infusionText} ${event.target.value}`;
    });
}
//Gaseosas

document.addEventListener("DOMContentLoaded", function() {
    updateGasText("gaseosa", "gaseosai", "gaseosat", "sub-gaseosa", "valor-gaseosa", 3, 4, 5, 9, 10, 13, "num-gaseosa");
});

function updateGasText(limonadaId, selectId, resultId, sub, valor, precioV, precioJ, precioK, preciol, preciom, precion, numId) {
    const selectElement = document.getElementById(selectId);
    selectElement.addEventListener("change", (event) => {
        const infusionText = document.getElementById(limonadaId).innerHTML;
        const resultado = document.getElementById(sub);
        const valorT = document.getElementById(valor);
        let precio;
        if (event.target.value === "mediana") {
            valueText = "Mediana";
            precio = precioV;
        } else if (event.target.value === "mediolitro") {
            valueText = "Medio Litro";
            precio = precioJ;
        } else if (event.target.value === "gordita") {
            valueText = "Gordita";
            precio = precioK;
        } else if (event.target.value === "litro") {
            valueText = "Litro";
            precio = preciol;
        } else if (event.target.value === "litromedio") {
            valueText = "Litro y medio";
            precio = preciom;
        } else if (event.target.value === "2litros") {
            valueText = "2 Litros";
            precio = precion;
        }
        const valorUnidad = parseInt(document.getElementById(numId).value);
        const valorTotal = valorUnidad * precio;
        resultado.innerHTML = precio;
        valorT.innerHTML = valorTotal;
        const texto = document.getElementById(resultId);
        texto.innerHTML = `${infusionText} ${valueText}`;
    });
}

document.addEventListener("DOMContentLoaded", function() {
    chelaCausa("cerveza", "cervezai", "cervezat", "sub-cerveza", "valor-cerveza", 8, 10, 10, 11, 13, "num-cerveza");
});

function chelaCausa(limonadaId, selectId, resultId, sub, valor, precioV, precioJ, precioK, preciol, preciom, numId) {
    const selectElement = document.getElementById(selectId);
    selectElement.addEventListener("change", (event) => {
        const infusionText = document.getElementById(limonadaId).innerHTML;
        const resultado = document.getElementById(sub);
        const valorT = document.getElementById(valor);
        let precio;
        if (event.target.value === "negra") {
            valueText = "Negra Pequeña";
            precio = precioV;
        } else if (event.target.value === "blanca") {
            valueText = "Blanca 620";
            precio = precioJ;
        } else if (event.target.value === "negra6") {
            valueText = "Negra 620";
            precio = precioK;
        } else if (event.target.value === "trigo") {
            valueText = "Trigo 620";
            precio = preciol;
        } else if (event.target.value === "litro") {
            valueText = "Blanca Litro";
            precio = preciom;
        }
        const valorUnidad = parseInt(document.getElementById(numId).value);
        const valorTotal = valorUnidad * precio;
        resultado.innerHTML = precio;
        valorT.innerHTML = valorTotal;
        const texto = document.getElementById(resultId);
        texto.innerHTML = `${infusionText} ${valueText}`;
    });
}

var oferta = document.getElementById("oferta");
        document.getElementById("cerrar-oferta").addEventListener("click", function() {
            oferta.classList.remove("show");
        });
        setTimeout(function() {
            oferta.classList.add("show");
        }, 3000);