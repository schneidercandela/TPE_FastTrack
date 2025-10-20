<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 19:18:00
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\formAgregarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f66ec8442fc3_63018697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df338dbdc551a330f45ef6cdaaddaf50af23a27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\formAgregarCategoria.tpl',
      1 => 1760978634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f66ec8442fc3_63018697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h1><i class="fas fa-plus-circle"></i> Agregar Categoria</h1>
            </div>
            
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
agregarcategoria" method="POST" class="product-form">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nombre">
                            <i class="fas fa-tag"></i> Nombre de la categoria
                        </label>
                        <input type="text" 
                               id="nombre" 
                               name="nombre" 
                               required 
                               placeholder="Ej: Unisex">
                    </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar Categoria
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
