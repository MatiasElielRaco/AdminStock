(function() {

    const dashboard = document.querySelector(".dashboard");


    if(dashboard) {

        const inputBusqueda = document.querySelector("#busqueda");
        const filtroCategoria = document.querySelector("#filtroCategoria");
        const filtroStock = document.querySelector("#filtroStock");
        const precioMin = document.querySelector("#precioMin");
        const precioMax = document.querySelector("#precioMax");

        
        // Ejecutar con Enter en el input de búsqueda
        inputBusqueda.addEventListener("keydown", (e) => {
            if (e.key === "Enter") {
                actualizarURL();
            }
        });

        // Ejecutar al cambiar select o inputs de precio
        [filtroCategoria, filtroStock, precioMin, precioMax].forEach(el => {
            el.addEventListener("change", actualizarURL);
        });


        function actualizarURL() {
            const url = new URL(window.location.href);
            const params = url.searchParams;

            // Leer valores
            const busqueda = inputBusqueda.value.trim();
            const categoria = filtroCategoria.value;
            const stock = filtroStock.value;
            const min = precioMin.value;
            const max = precioMax.value;

            // Setear o eliminar según el valor
            busqueda ? params.set("buscar", busqueda) : params.delete("buscar");
            categoria ? params.set("categoria", categoria) : params.delete("categoria");
            stock ? params.set("stock", stock) : params.delete("stock");
            min ? params.set("min", min) : params.delete("min");
            max ? params.set("max", max) : params.delete("max");

            // Reiniciar la paginación cuando se cambian filtros
            params.set("page", 1);

            // Redirigir con los nuevos parámetros
            window.location.href = url.toString();
        }

    }

})();