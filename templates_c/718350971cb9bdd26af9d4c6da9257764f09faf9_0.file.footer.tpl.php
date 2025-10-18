<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 20:37:00
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3de4c5baba9_06829368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718350971cb9bdd26af9d4c6da9257764f09faf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\footer.tpl',
      1 => 1760812618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f3de4c5baba9_06829368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<footer class="site-footer">
    <div class="container footer-content">
        <div class="footer-info">
            <h4>Fast Track</h4>
            <p>Ropa deportiva para hombres y mujeres</p>
            <p>📍 Buenos Aires, Argentina</p>
        </div>
        <div class="footer-social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© <?php echo smarty_modifier_date_format(time(),"%Y");?>
 Fast Track - Todos los derechos reservados.</p>
    </div>
</footer>

<style>
    .site-footer {
        background-color: #0d0d0d;
        color: #fff;
        padding: 30px 0 15px;
        margin-top: 40px;
        text-align: center;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-info h4 {
        color: #00ff88;
        margin-bottom: 10px;
    }

    .footer-social a {
        color: #fff;
        margin: 0 10px;
        font-size: 1.4em;
        transition: color 0.3s, text-shadow 0.3s;
    }

    .footer-social a:hover {
        color: #00ff88;
        text-shadow: 0 0 8px #00ff88;
    }

    .footer-bottom {
        margin-top: 20px;
        font-size: 0.9em;
        opacity: 0.7;
    }

    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>

<!-- Librería de iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<?php }
}
