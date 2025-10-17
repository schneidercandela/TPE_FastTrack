<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-17 17:04:48
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f25b10272e81_38179017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81696710f8fb4c058951031447a614ebaa6547c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\categorias.tpl',
      1 => 1760713483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f25b10272e81_38179017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
        <div> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                    <a class="link" href="productosporcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">
                        <h1><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
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
