<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 06:58:33
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\formAgregarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f46ff91e5939_88774200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c78589b2e079f228cbf7623120722c90bda1d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\formAgregarProducto.tpl',
      1 => 1760849659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f46ff91e5939_88774200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
    <h2>Agregar Producto</h2>
    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
agregarproducto" method="POST">
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <button type="submit">Agregar Producto</button>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin">Cancelar</a>
    </form>
</main>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
