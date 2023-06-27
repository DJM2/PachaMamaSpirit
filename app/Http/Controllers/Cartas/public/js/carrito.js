// Crear un objeto para almacenar los datos del carrito
var carrito = [];

// Función para agregar un producto al carrito
function agregarProducto(nombre, precio, cantidad, subtotal) {
    // Agregar un objeto al array carrito con los datos del producto
    carrito.push({
        nombre: nombre,
        precio: precio,
        cantidad: cantidad,
        subtotal: subtotal
    });

    // Actualizar el valor del campo oculto con los datos del carrito
    document.getElementById("carrito").value = JSON.stringify(carrito);

    // Enviar el formulario mediante Ajax o fetch
    fetch('/guardar-productos', {
            method: 'POST',
            body: new FormData(document.getElementById('miFormulario'))
        })
        .then(response => {
            console.log('Respuesta del servidor:', response);
            // Hacer algo con la respuesta del servidor
        })
        .catch(error => {
            console.error('Error en la solicitud:', error);
        });
}