<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 21:33:00
  from 'C:\xampp\htdocs\TPE_FastTrack\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3eb6c380520_75089644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7a6269011c8f4d78e9e006491673f6229d06829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_FastTrack\\templates\\header.tpl',
      1 => 1760815118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f3eb6c380520_75089644 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
                <img src="images/logo.png" alt="Fast Track" />
            </a>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Inicio</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productos">Productos</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categorias">Categorías</a></li>
                <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
logout">Salir</a></li>
                <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login">Login</a></li>
                <?php }?>
            </ul>
        </nav>
        <div class="menu-toggle">
            ☰
        </div>
    </div>
</header>

<style>
    .site-header {
        background-color: #0d0d0d;
        color: #fff;
        padding: 15px 0;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .site-header .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .logo img {
        height: 50px;
    }

    .nav-menu ul {
        list-style: none;
        display: flex;
        gap: 25px;
    }

    .nav-menu a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav-menu a:hover {
        color: #00ff88;
        text-shadow: 0 0 8px #00ff88;
    }

    .menu-toggle {
        display: none;
        font-size: 1.8em;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .nav-menu {
            display: none;
            position: absolute;
            top: 70px;
            right: 0;
            background-color: #0d0d0d;
            width: 100%;
        }

        .nav-menu ul {
            flex-direction: column;
            align-items: center;
            padding: 10px 0;
            gap: 15px;
        }

        .menu-toggle {
            display: block;
        }
    }
</style>

<?php echo '<script'; ?>
>
    const toggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    toggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        navMenu.style.display = navMenu.classList.contains('active') ? 'block' : 'none';
    });
<?php echo '</script'; ?>
>
<?php }
}
