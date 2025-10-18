<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 16:55:13
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3aa512029b7_52272313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa56c8217e8c24e3a00cf38399e3bdee86c8c95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\login.tpl',
      1 => 1760798055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f3aa512029b7_52272313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
            <h2>Iniciar Sesión</h2>
            <div>
            <form action="login" method="POST">
                <label for="Usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Ingresar</button>
            </form>
            </div>
</main>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
