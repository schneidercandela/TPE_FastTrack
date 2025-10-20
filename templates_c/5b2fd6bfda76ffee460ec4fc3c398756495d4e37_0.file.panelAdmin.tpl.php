<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 02:37:29
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\panelAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f584496ebaa6_16183781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2fd6bfda76ffee460ec4fc3c398756495d4e37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\panelAdmin.tpl',
      1 => 1760920647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f584496ebaa6_16183781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="admin-header">
            <h1><i class="fas fa-cogs"></i> Panel de Administración</h1>
            <p>Gestiona tus productos y categorías</p>
        </div>
        
        <div class="admin-stats">
            <div class="stat-card">
                <i class="fas fa-box"></i>
                <div class="stat-content">
                    <span class="stat-number"><?php echo count($_smarty_tpl->tpl_vars['productos']->value);?>
</span>
                    <span class="stat-label">Productos</span>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-tags"></i>
                <div class="stat-content">
                    <span class="stat-number"><?php echo count($_smarty_tpl->tpl_vars['categorias']->value);?>
</span>
                    <span class="stat-label">Categorías</span>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-chart-line"></i>
                <div class="stat-content">
                    <span class="stat-number">+24%</span>
                    <span class="stat-label">Ventas</span>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <div class="stat-content">
                    <span class="stat-number">1.2k</span>
                    <span class="stat-label">Clientes</span>
                </div>
            </div>
        </div>
        
        <div class="admin-actions">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
formagregarproducto" class="btn btn-primary">
                <i class="fas fa-plus"></i> Agregar Producto
            </a>
        </div>
        
        <div class="admin-table">
            <h2>Listado de Productos</h2>
            <?php if ($_smarty_tpl->tpl_vars['productos']->value) {?>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Detalle</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                        <tr>
                            <td class="text-center">#<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
</td>
                            <td class="product-name"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                            <td class="product-detail"><?php if ($_smarty_tpl->tpl_vars['producto']->value->detalle) {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->detalle,50,"...");
} else { ?>-<?php }?></td>
                            <td>
                                <span class="category-badge"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria_nombre;?>
</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
formeditarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn-action btn-edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
eliminarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" 
                                       class="btn-action btn-delete" 
                                       title="Eliminar"
                                       onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
            <?php } else { ?>
            <div class="empty-table">
                <i class="fas fa-box-open fa-3x"></i>
                <p>No hay productos registrados</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
formagregarproducto" class="btn btn-primary">Agregar primer producto</a>
            </div>
            <?php }?>
        </div>
    </div>
</main>

<style>
    .admin-header {
        text-align: center;
        padding: 40px 0;
    }
    
    .admin-header h1 {
        color: #00ff88;
        font-size: 2.5em;
        margin-bottom: 10px;
    }
    
    .admin-header p {
        color: #999;
        font-size: 1.1em;
    }
    
    .admin-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .stat-card {
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 255, 136, 0.05));
        border: 1px solid rgba(0, 255, 136, 0.2);
        border-radius: 15px;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: all 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 255, 136, 0.2);
    }
    
    .stat-card i {
        font-size: 2.5em;
        color: #00ff88;
    }
    
    .stat-content {
        display: flex;
        flex-direction: column;
    }
    
    .stat-number {
        font-size: 2em;
        font-weight: bold;
        color: #fff;
    }
    
    .stat-label {
        color: #999;
        font-size: 0.9em;
    }
    
    .admin-actions {
        margin-bottom: 30px;
    }
    
    .admin-table {
        background: rgba(26, 26, 26, 0.9);
        border-radius: 15px;
        padding: 30px;
        border: 1px solid rgba(0, 255, 136, 0.1);
    }
    
    .admin-table h2 {
        color: #00ff88;
        margin-bottom: 25px;
    }
    
    .table-responsive {
        overflow-x: auto;
    }
    
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    
    thead {
        background: rgba(0, 255, 136, 0.1);
    }
    
    th {
        color: #00ff88;
        padding: 15px;
        text-align: left;
        font-weight: 600;
        border-bottom: 2px solid rgba(0, 255, 136, 0.3);
    }
    
    tbody tr {
        border-bottom: 1px solid rgba(0, 255, 136, 0.1);
        transition: all 0.3s;
    }
    
    tbody tr:hover {
        background: rgba(0, 255, 136, 0.05);
    }
    
    td {
        padding: 15px;
        color: #ccc;
    }
    
    .text-center {
        text-align: center;
    }
    
    .product-name {
        color: #fff;
        font-weight: 500;
    }
    
    .category-badge {
        display: inline-block;
        background: rgba(0, 255, 136, 0.1);
        color: #00ff88;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 0.9em;
        border: 1px solid rgba(0, 255, 136, 0.3);
    }
    
    .action-buttons {
        display: flex;
        gap: 10px;
    }
    
    .btn-action {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s;
    }
    
    .btn-edit {
        background: rgba(0, 123, 255, 0.1);
        color: #4da6ff;
        border: 1px solid rgba(0, 123, 255, 0.3);
    }
    
    .btn-edit:hover {
        background: #007bff;
        color: #fff;
        transform: scale(1.1);
    }
    
    .btn-delete {
        background: rgba(255, 0, 0, 0.1);
        color: #ff6666;
        border: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .btn-delete:hover {
        background: #dc3545;
        color: #fff;
        transform: scale(1.1);
    }
    
    .empty-table {
        text-align: center;
        padding: 60px 20px;
        color: #999;
    }
    
    .empty-table i {
        color: rgba(0, 255, 136, 0.3);
        margin-bottom: 20px;
    }
    
    .empty-table p {
        margin-bottom: 20px;
        font-size: 1.1em;
    }
    
    @media (max-width: 768px) {
        .admin-stats {
            grid-template-columns: 1fr 1fr;
        }
        
        table {
            font-size: 0.9em;
        }
        
        .product-detail {
            display: none;
        }
    }
</style>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
