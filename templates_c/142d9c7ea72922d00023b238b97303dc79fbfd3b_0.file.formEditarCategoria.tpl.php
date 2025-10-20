<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 21:09:59
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\formEditarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f68907b25977_04755086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '142d9c7ea72922d00023b238b97303dc79fbfd3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\formEditarCategoria.tpl',
      1 => 1760987394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f68907b25977_04755086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h1><i class="fas fa-edit"></i> Editar Categoria</h1>
                <p>Modifica la categoria</p>
            </div>
            
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
editarcategoria" method="POST" class="product-form">
                <input type="hidden" name="id_categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nombre">
                            <i class="fas fa-tag"></i> Nombre de la categoria
                        </label>
                        <input type="text" 
                               id="nombre" 
                               name="nombre" 
                               value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
"
                               required 
                               placeholder="...">
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar Cambios
                    </button>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>

<style>
    .form-info {
        background: rgba(0, 255, 136, 0.1);
        border: 1px solid rgba(0, 255, 136, 0.3);
        border-radius: 10px;
        padding: 15px 20px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .info-label {
        color: #999;
        font-weight: 500;
    }
    
    .info-value {
        color: #00ff88;
        font-weight: bold;
        font-size: 1.1em;
    }
    
    /* Reutilizamos los estilos del formulario de agregar */
    .form-container {
        max-width: 800px;
        margin: 40px auto;
        background: rgba(26, 26, 26, 0.9);
        border-radius: 20px;
        padding: 40px;
        border: 1px solid rgba(0, 255, 136, 0.2);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }
    
    .form-header {
        text-align: center;
        margin-bottom: 40px;
    }
    
    .form-header h1 {
        color: #00ff88;
        font-size: 2em;
        margin-bottom: 10px;
    }
    
    .form-header p {
        color: #999;
    }
    
    .product-form {
        margin-top: 30px;
    }
    
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        margin-bottom: 25px;
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
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 15px;
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(0, 255, 136, 0.2);
        border-radius: 10px;
        color: #fff;
        font-size: 1em;
        transition: all 0.3s;
        font-family: inherit;
    }
    
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #00ff88;
        box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
        background: rgba(0, 0, 0, 0.5);
    }
    
    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #666;
    }
    
    .form-group select option {
        background: #1a1a1a;
        color: #fff;
    }
    
    .form-group textarea {
        resize: vertical;
    }
    
    .form-hint {
        display: block;
        color: #666;
        font-size: 0.85em;
        margin-top: 5px;
    }
    
    .form-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid rgba(0, 255, 136, 0.1);
    }
    
    .form-actions .btn {
        padding: 15px 30px;
        font-size: 1em;
    }
    
    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        
        .form-actions {
            flex-direction: column;
        }
    }
</style>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
