<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 06:49:05
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\productosPorCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f46dc185f958_37873434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b33945ced111c43c65feb6fa06d9db7b590aeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\productosPorCategoria.tpl',
      1 => 1760849336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f46dc185f958_37873434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
    <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?>
        <h2>Ropa en la categoría: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h2>
        <?php if ($_smarty_tpl->tpl_vars['productos']->value) {?>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                    <li>
                        <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                        <a class="link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
detalleproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Ver detalles</a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php } else { ?>
            <p>No hay productos en esta categoría</p>
        <?php }?>
    <?php } else { ?>
        <p>Categoría no encontrada</p>
    <?php }?>
</main>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
