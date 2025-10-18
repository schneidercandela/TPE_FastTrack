{include 'header.tpl'}

<main>
    <h1>Administrar Categorias y Productos</h1>
    <section>
        <a href="formagregarproducto">Agregar nuevo producto</a>
    </section>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Detalle</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {foreach $productos as $producto}
                    <tr>
                        <td>{$producto->id_producto}</td>
                        <td>{$producto->nombre}</td>
                        <td>{$producto->detalle}</td>
                        <td>{$producto->categoria_nombre}</td>
                        <td>
                            <a href="formeditarproducto/{$producto->id_producto}">Editar</a>
                            <a href="eliminarproducto/{$producto->id_producto}">Eliminar</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>

</main>

{include 'footer.tpl'}