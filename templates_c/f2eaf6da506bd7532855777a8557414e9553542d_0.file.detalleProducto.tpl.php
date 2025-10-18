<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 16:24:07
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\detalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3a307d353b7_72904141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2eaf6da506bd7532855777a8557414e9553542d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\detalleProducto.tpl',
      1 => 1760797205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f3a307d353b7_72904141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main> 
    <h2>Ropa en la categoría: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h2>
    <div>
        <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3></li>
        <h4>Detalle: <?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
</h4></li>
    </div>
</main>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
