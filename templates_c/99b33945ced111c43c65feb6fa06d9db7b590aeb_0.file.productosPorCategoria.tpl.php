<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-17 17:33:09
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\productosPorCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f261b5c40b16_97390298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b33945ced111c43c65feb6fa06d9db7b590aeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\productosPorCategoria.tpl',
      1 => 1760715152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f261b5c40b16_97390298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
        <h2>Ropa en la categoría: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h2>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <li>
                    <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                    <a class="link" href="detallesProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Ver detalles</a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
</main>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
