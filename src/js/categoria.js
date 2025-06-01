import Swal from "sweetalert2";

(function() {

    const categoria = document.querySelector(".categorias");


    if(categoria) {

        const categoriaBoton = document.querySelector("#boton-categoria");
        categoriaBoton.addEventListener("click", guardarCategoria);
        
        const botonEliminar = document.querySelectorAll(".categoria__eliminar");
        botonEliminar.forEach(boton => {
            boton.addEventListener("click", elimarCategoria);

        })


        async function guardarCategoria() {
            const categoriaNombre = document.querySelector("#categoria");
            
            if (!categoriaNombre.value.trim()) {
                const error = document.getElementById("errorCategoria");
                error.textContent = "El campo categoría no puede estar vacío.";
                error.style.display = "block";
                categoriaNombre.classList.add("error");

                return;
            }

            categoriaNombre.classList.remove("error");

            const datos =  new FormData(); 
            datos.append("categoria", categoriaNombre.value);
            
            const url = "/dashboard/categorias/crear";
            const respuesta = await fetch(url, {
                method: "POST",
                body: datos
            });

            const resultado = await respuesta.json();

            if(resultado) {
                window.location.reload();
            }

        }


        async function elimarCategoria(e) {
            const categoriaId = e.target.parentElement.querySelector("[name='id']").value;

            Swal.fire({
                title: "¿Estas Seguro?",
                text: "Si eliminas la categoria, eliminaras los productos vinculadas a ella",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#22c55e",
                cancelButtonColor: "#d33",
                confirmButtonText: "Eliminar"
                }).then(async (result) => {
                if (result.isConfirmed) {

                    const datos = new FormData();
                    datos.append("id", categoriaId)

                    const url = "/dashboard/categorias/eliminar";
                    const respuesta = await fetch(url, {
                        method: 'POST',
                        body: datos
                })

                    const resultado = await respuesta.json();

                        if(resultado) {
                            Swal.fire({
                            title: "Eliminada",
                            text: "La categoria y sus productos fueron eliminados",
                            icon: "success"
                            });
                            
                            setTimeout(() => {
                                location.reload();
                            }, 1200);
                        }
                    }
                });
        }
    }


})();

