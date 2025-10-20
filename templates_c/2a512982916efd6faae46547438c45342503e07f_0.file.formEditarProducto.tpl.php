<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 02:40:06
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\formEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f584e6871b80_74192331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a512982916efd6faae46547438c45342503e07f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\formEditarProducto.tpl',
      1 => 1760920792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f584e6871b80_74192331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h1><i class="fas fa-edit"></i> Editar Producto</h1>
                <p>Modifica los datos del producto</p>
            </div>
            
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
editarproducto" method="POST" class="product-form">
                <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
                
                <div class="form-info">
                    <span class="info-label">ID del Producto:</span>
                    <span class="info-value">#<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
</span>
                </div>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nombre">
                            <i class="fas fa-tag"></i> Nombre del producto
                        </label>
                        <input type="text" 
                               id="nombre" 
                               name="nombre" 
                               value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
"
                               required 
                               placeholder="Ej: Remera Running Pro">
                        <span class="form-hint">Ingresa un nombre descriptivo</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="id_categoria">
                            <i class="fas fa-folder"></i> Categoría
                        </label>
                        <select name="id_categoria" id="id_categoria" required>
                            <option value="">Selecciona una categoría</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['categoria']->value->id_categoria == $_smarty_tpl->tpl_vars['producto']->value->categoria) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

                                </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <span class="form-hint">Elige la categoría apropiada</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="detalle">
                        <i class="fas fa-align-left"></i> Descripción
                    </label>
                    <textarea name="detalle" 
                              id="detalle" 
                              rows="5" 
                              placeholder="Describe las características del producto..."><?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
</textarea>
                    <span class="form-hint">Opcional: Agrega detalles del producto</span>
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
