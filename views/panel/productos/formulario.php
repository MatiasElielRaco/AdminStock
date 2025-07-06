<div class="formulario__campo">
    <label for="nombre" class="formulario__label">Nombre</label>
    <input 
        type="text" 
        class="formulario__input" 
        name="nombre" 
        id="nombre" 
        placeholder="Ej: Laptop" 
        value="<?php echo $producto->nombre ?? "" ?>"
    >
</div>

<div class="formulario__campo">
    <label for="categoria" class="formulario__label">Categoría</label>
    <select 
        name="categoria" 
        id="categoria" 
        class="formulario__input">

    <option value="">-- Seleccionar --</option>
    <?php foreach($categorias as $categoria) : ?>
        <option <?php echo ($producto->categoria === $categoria->categoria) ? "selected" : "" ?> value="<?php echo $categoria->categoria; ?>"> <?php echo $categoria->categoria; ?> </option>
        <?php endforeach; ?>
    </select>
</div>

<div class="formulario__campo">
    <label for="cantidad" class="formulario__label">Cantidad</label>
    <input 
        type="number" 
        class="formulario__input" 
        name="cantidad" 
        id="cantidad" 
        placeholder="Ej: 100"
        value="<?php echo $producto->cantidad ?? "" ?>"
    >
</div>

<div class="formulario__campo">
    <label for="precio" class="formulario__label">Precio</label>
    <input 
        type="number" 
        class="formulario__input" 
        name="precio" 
        id="precio" 
        step="0.01" 
        placeholder="Ej: 1254,60"
        value="<?php echo $producto->precio ?? "" ?>"
    >
</div>
