{include 'header.tpl'}
<main>
    <h2>Agregar Producto</h2>
    <form action="{$base_url}agregarproducto" method="POST">
        <div>
            <label for="nombre">Nombre del producto:</label>
            <input type="text" name="nombre" required>
        </div>

        <div>
            <label for="detalle">Detalle:</label>
            <textarea name="detalle"></textarea>
        </div>
        
        <div>
            <label for="categoria">Categoría:</label>
            <select name="id_categoria" required>
                <option value="">Seleccioná una categoría</option>
                {foreach $categorias as $categoria}
                    <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                {/foreach}
            </select>
        </div>

        <button type="submit">Agregar Producto</button>
        <a href="{$base_url}admin">Cancelar</a>
    </form>
</main>
{include 'footer.tpl'}