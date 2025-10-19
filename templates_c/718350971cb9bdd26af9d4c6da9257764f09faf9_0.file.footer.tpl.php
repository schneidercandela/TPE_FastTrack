<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 07:05:57
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f471b5dcfa12_56690087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718350971cb9bdd26af9d4c6da9257764f09faf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\footer.tpl',
      1 => 1760850351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f471b5dcfa12_56690087 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>⚡ FAST TRACK</h3>
                    <p>Equipamiento deportivo de alta performance</p>
                    <p><i class="fas fa-map-marker-alt"></i> Olavarrría, Buenos Aires, Argentina</p>
                </div>
                <div class="footer-links">
                    <h4>Enlaces Rápidos</h4>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productos">Productos</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categorias">Categorías</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin">Administración</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Síguenos</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Fast Track - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
    
    <style>
        .site-footer {
            background: linear-gradient(180deg, #1a1a1a, #0d0d0d);
            color: #fff;
            padding: 40px 0 20px;
            margin-top: 80px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }
        
        .footer-info h3 {
            color: #00ff88;
            margin-bottom: 15px;
            font-size: 1.5em;
        }
        
        .footer-links h4, .footer-social h4 {
            color: #00ff88;
            margin-bottom: 15px;
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #00ff88;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icons a {
            width: 40px;
            height: 40px;
            background: rgba(0, 255, 136, 0.1);
            border: 2px solid #00ff88;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #00ff88;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background: #00ff88;
            color: #000;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 255, 136, 0.5);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(0, 255, 136, 0.2);
            color: #999;
        }
    </style>
    
    <?php echo '<script'; ?>
>
        const toggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        toggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
