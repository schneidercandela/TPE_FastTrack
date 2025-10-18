<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 16:55:09
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3aa4d2a81f3_54380329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11d36706ef8b9c61549085619f0751aace3ba16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\home.tpl',
      1 => 1760798281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f3aa4d2a81f3_54380329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <header>
        <h1>Catálogo 2025</h1>
    </header>
  <main>
    <section class="intro">
        <h2>Bienvenido</h2>
        <p>Explora nuestra colección de ropa deportiva.</p>
        <a href="categorias">Ver categorias</a>
        <a href="productos">Ver productos</a>
        <a href="formlogin">Iniciar sesion</a>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
