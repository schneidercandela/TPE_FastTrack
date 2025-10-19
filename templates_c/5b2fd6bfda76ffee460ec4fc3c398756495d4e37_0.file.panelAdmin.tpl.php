<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 06:58:22
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\panelAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f46feeb7efd8_66179016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2fd6bfda76ffee460ec4fc3c398756495d4e37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\panelAdmin.tpl',
      1 => 1760849718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f46feeb7efd8_66179016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <h1>Administrar Categorías y Productos</h1>
    <section>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
formagregarproducto" class="btn-add">➕ Agregar nuevo producto</a>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria_nombre;?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
formeditarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn-edit">✏️ Editar</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
eliminarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" 
                           class="btn-delete"
                           onclick="return confirm('¿Estás seguro de eliminar este producto?')">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
