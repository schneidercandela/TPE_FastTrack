<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 07:03:10
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f4710e894141_77778283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf162ab0e568907419bed2506d2a33aba72132f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\header.tpl',
      1 => 1760850185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f4710e894141_77778283 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Track - Ropa Deportiva</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0d0d0d 0%, #1a1a1a 100%);
            min-height: 100vh;
            color: #fff;
        }
        
        .site-header {
            background: rgba(13, 13, 13, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0, 255, 136, 0.1);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo a {
            font-size: 2em;
            font-weight: bold;
            color: #00ff88;
            text-decoration: none;
            text-shadow: 0 0 10px rgba(0, 255, 136, 0.5);
            transition: all 0.3s;
        }
        
        .logo a:hover {
            text-shadow: 0 0 20px rgba(0, 255, 136, 0.8);
        }
        
        .nav-menu ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        .nav-menu a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 25px;
            transition: all 0.3s;
            position: relative;
        }
        
        .nav-menu a:hover {
            color: #000;
            background: linear-gradient(90deg, #00ff88, #00cc6e);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 255, 136, 0.3);
        }
        
        .menu-toggle {
            display: none;
            font-size: 1.8em;
            cursor: pointer;
            color: #00ff88;
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(13, 13, 13, 0.98);
                padding: 20px 0;
            }
            
            .nav-menu.active {
                display: block;
            }
            
            .nav-menu ul {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">⚡ FAST TRACK</a>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productos"><i class="fas fa-tshirt"></i> Productos</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categorias"><i class="fas fa-tags"></i> Categorías</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin"><i class="fas fa-cog"></i> Admin</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
formlogin"><i class="fas fa-user"></i> Login</a></li>
                    </ul>
                </nav>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header><?php }
}
