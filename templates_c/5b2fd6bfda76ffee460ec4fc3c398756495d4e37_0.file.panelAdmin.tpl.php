<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 20:13:13
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\panelAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3d8b958f3a5_65530501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2fd6bfda76ffee460ec4fc3c398756495d4e37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\panelAdmin.tpl',
      1 => 1760811158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f3d8b958f3a5_65530501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                            <a href="formeditarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Editar</a>
                            <a href="eliminarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Eliminar</a>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

</main>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
