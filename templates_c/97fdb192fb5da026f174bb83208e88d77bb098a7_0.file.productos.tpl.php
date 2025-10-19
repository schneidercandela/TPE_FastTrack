<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 06:49:20
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f46dd01bfa67_37077512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97fdb192fb5da026f174bb83208e88d77bb098a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\productos.tpl',
      1 => 1760849017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f46dd01bfa67_37077512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
    <div> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
detalleproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
                <h1><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>
            </a>           
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</main>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
