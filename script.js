let total = 0;

function agregarCarrito(nombre, precio){

    let lista = document.getElementById("listaCarrito");

    let item = document.createElement("li");

    item.innerHTML =
    `${nombre} - $${precio}
    <button onclick="quitarProducto(this, ${precio})">
    Quitar
    </button>`;

    lista.appendChild(item);

    total += precio;

    document.getElementById("total").innerHTML = total;
}

function quitarProducto(boton, precio){

    boton.parentElement.remove();

    total -= precio;

    document.getElementById("total").innerHTML = total;
}