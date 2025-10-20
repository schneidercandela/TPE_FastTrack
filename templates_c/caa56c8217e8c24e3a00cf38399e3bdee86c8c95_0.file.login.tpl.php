<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 02:36:36
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f584144a42a2_27501582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa56c8217e8c24e3a00cf38399e3bdee86c8c95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\login.tpl',
      1 => 1760920592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f584144a42a2_27501582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="login-wrapper">
            <div class="login-box">
                <div class="login-header">
                    <i class="fas fa-user-circle fa-4x"></i>
                    <h2>Iniciar Sesión</h2>
                    <p>Accede al panel de administración</p>
                </div>
                
                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login" method="POST" class="login-form">
                    <div class="form-group">
                        <label for="usuario">
                            <i class="fas fa-user"></i> Usuario
                        </label>
                        <input type="text" id="usuario" name="usuario" required placeholder="Ingresa tu usuario">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i> Contraseña
                        </label>
                        <input type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">
                    </div>
                    
                    <div class="form-remember">
                        <label>
                            <input type="checkbox"> Recordarme
                        </label>
                        <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-sign-in-alt"></i> Ingresar
                    </button>
                </form>
                
                <div class="login-footer">
                    <p>¿No tienes cuenta? <a href="#">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .login-wrapper {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }
    
    .login-box {
        background: rgba(26, 26, 26, 0.9);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(0, 255, 136, 0.2);
        border-radius: 20px;
        padding: 40px;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }
    
    .login-header {
        text-align: center;
        margin-bottom: 40px;
    }
    
    .login-header i {
        color: #00ff88;
        margin-bottom: 20px;
    }
    
    .login-header h2 {
        color: #fff;
        font-size: 2em;
        margin-bottom: 10px;
    }
    
    .login-header p {
        color: #999;
    }
    
    .login-form {
        margin-bottom: 30px;
    }
    
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-group label {
        display: block;
        color: #00ff88;
        margin-bottom: 10px;
        font-weight: 500;
    }
    
    .form-group label i {
        margin-right: 8px;
    }
    
    .form-group input {
        width: 100%;
        padding: 15px;
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(0, 255, 136, 0.2);
        border-radius: 10px;
        color: #fff;
        font-size: 1em;
        transition: all 0.3s;
    }
    
    .form-group input:focus {
        outline: none;
        border-color: #00ff88;
        box-shadow: 0 0 10px rgba(0, 255, 136, 0.3);
    }
    
    .form-group input::placeholder {
        color: #666;
    }
    
    .form-remember {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        color: #999;
    }
    
    .form-remember label {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .forgot-link {
        color: #00ff88;
        text-decoration: none;
        font-size: 0.9em;
    }
    
    .forgot-link:hover {
        text-decoration: underline;
    }
    
    .btn-block {
        width: 100%;
        padding: 18px;
        font-size: 1.1em;
    }
    
    .login-footer {
        text-align: center;
        color: #999;
    }
    
    .login-footer a {
        color: #00ff88;
        text-decoration: none;
    }
    
    .login-footer a:hover {
        text-decoration: underline;
    }
</style>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
