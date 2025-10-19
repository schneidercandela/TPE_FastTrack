{include 'header.tpl'}

<main>
    <h1>Administrar Categorías y Productos</h1>
    <section>
        <a href="{$base_url}formagregarproducto" class="btn-add">➕ Agregar nuevo producto</a>
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
                        <a href="{$base_url}formeditarproducto/{$producto->id_producto}" class="btn-edit">✏️ Editar</a>
                        <a href="{$base_url}eliminarproducto/{$producto->id_producto}" 
                           class="btn-delete"
                           onclick="return confirm('¿Estás seguro de eliminar este producto?')">🗑️ Eliminar</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
    
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #333;
            color: white;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .btn-add {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .btn-edit {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }
        
        .btn-delete {
            color: #dc3545;
            text-decoration: none;
        }
        
        .btn-add:hover, .btn-edit:hover, .btn-delete:hover {
            opacity: 0.8;
        }
    </style>
</main>

{include 'footer.tpl'}