function confirmacion(e) {
    if (confirm("¿Está seguro de que deseas eliminar este registro?")) {
        return true;
    } else {
        e.preventDefault();
    }
}

    let linkDelete = document.querySelectorAll(".eliminar_regist");

    for (var i = 0; i < linkDelete.length; i++) {
        linkDelete[i].addEventListener('click', confirmacion);
    }