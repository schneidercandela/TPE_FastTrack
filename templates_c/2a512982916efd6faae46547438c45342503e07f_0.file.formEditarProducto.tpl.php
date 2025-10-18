<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 17:36:36
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\formEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3b404ad90a3_95657007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a512982916efd6faae46547438c45342503e07f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\formEditarProducto.tpl',
      1 => 1760801569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f3b404ad90a3_95657007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <h2>Editar Producto</h2>

    <form action="editarproducto" method="POST">
        <!-- Campo oculto con el ID del producto -->
        <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">

        <div>
            <label for="nombre">Nombre del producto:</label>
            <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" required>
        </div>

        <div>
            <label for="detalle">Detalle:</label>
            <textarea name="detalle"><?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
</textarea>
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
"
                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value->id_categoria == $_smarty_tpl->tpl_vars['producto']->value->categoria) {?>selected<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

                    </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <button type="submit">Guardar Cambios</button>
    </form>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
