{include 'header.tpl'}

<main>
    <h2>Editar Producto</h2>

    <form action="editarproducto" method="POST">
        <!-- Campo oculto con el ID del producto -->
        <input type="hidden" name="id_producto" value="{$producto->id_producto}">

        <div>
            <label for="nombre">Nombre del producto:</label>
            <input type="text" name="nombre" value="{$producto->nombre}" required>
        </div>

        <div>
            <label for="detalle">Detalle:</label>
            <textarea name="detalle">{$producto->detalle}</textarea>
        </div>

        <div>
            <label for="categoria">Categoría:</label>
            <select name="id_categoria" required>
                <option value="">Seleccioná una categoría</option>
                {foreach $categorias as $categoria}
                    <option value="{$categoria->id_categoria}"
                        {if $categoria->id_categoria == $producto->categoria}selected{/if}>
                        {$categoria->nombre}
                    </option>
                {/foreach}
            </select>
        </div>

        <button type="submit">Guardar Cambios</button>
    </form>
</main>

{include 'footer.tpl'}