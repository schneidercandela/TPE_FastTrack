<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 06:49:28
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f46dd8d7b093_84950255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11d36706ef8b9c61549085619f0751aace3ba16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\home.tpl',
      1 => 1760849069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f46dd8d7b093_84950255 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="hero-banner">
    <div class="hero-content">
        <h1>FAST TRACK</h1>
        <p>Ropa deportiva para quienes nunca se detienen 🏃‍♀️</p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productos" class="btn-primary">Ver productos</a>
    </div>
</section>

<section class="categorias-destacadas">
    <div class="container">
        <h2>Categorías</h2>
        <div class="categorias-grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                <div class="categoria-card">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productosporcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">
                        <div class="categoria-img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['categoria']->value->imagen;?>
');"></div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h3>
                    </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>

<style>
    /* Banner */
    .hero-banner {
        background: linear-gradient(90deg, rgba(0,0,0,0.9), rgba(0,0,0,0.5)), 
                    url('images/banner.jpg') center/cover no-repeat;
        color: #fff;
        text-align: center;
        padding: 120px 20px;
    }

    .hero-content h1 {
        font-size: 4rem;
        color: #00ff88;
        text-shadow: 0 0 15px #00ff88;
        margin-bottom: 15px;
    }

    .hero-content p {
        font-size: 1.3rem;
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #00ff88;
        color: #000;
        padding: 12px 25px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #00cc6e;
        transform: scale(1.05);
    }

    /* Categorías */
    .categorias-destacadas {
        padding: 60px 20px;
        background-color: #121212;
    }

    .categorias-destacadas h2 {
        text-align: center;
        color: #00ff88;
        margin-bottom: 40px;
    }

    .categorias-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
    }

    .categoria-card {
        background-color: #1a1a1a;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .categoria-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 15px #00ff88;
    }

    .categoria-img {
        height: 160px;
        background-size: cover;
        background-position: center;
    }

    .categoria-card h3 {
        text-align: center;
        padding: 15px;
        color: #fff;
    }

    /* Productos */
    .productos-destacados {
        padding: 60px 20px;
        background-color: #0d0d0d;
    }

    .productos-destacados h2 {
        text-align: center;
        color: #00ff88;
        margin-bottom: 40px;
    }

    .productos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 25px;
    }

    .producto-card {
        background-color: #1a1a1a;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .producto-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 15px #00ff88;
    }

    .producto-img {
        height: 220px;
        background-size: cover;
        background-position: center;
    }

    .producto-info {
        padding: 15px;
        text-align: center;
    }

    .producto-info h4 {
        color: #fff;
        margin-bottom: 8px;
    }

    .precio {
        color: #00ff88;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-content p {
            font-size: 1rem;
        }
    }
</style>

<?php }
}
