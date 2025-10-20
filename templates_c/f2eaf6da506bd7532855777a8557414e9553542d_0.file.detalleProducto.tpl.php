<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 02:35:27
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\detalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f583cfb7e779_97956017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2eaf6da506bd7532855777a8557414e9553542d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\detalleProducto.tpl',
      1 => 1760920522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f583cfb7e779_97956017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Inicio</a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categorias">Categorías</a>
            <i class="fas fa-chevron-right"></i>
            <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productosporcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a>
            <i class="fas fa-chevron-right"></i>
            <?php }?>
            <span><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</span>
        </div>
        
        <div class="product-detail">
            <div class="product-gallery">
                <div class="main-image">
                    <i class="fas fa-tshirt fa-8x"></i>
                </div>
                <div class="image-thumbnails">
                    <div class="thumbnail active"><i class="fas fa-tshirt fa-2x"></i></div>
                    <div class="thumbnail"><i class="fas fa-tshirt fa-2x"></i></div>
                    <div class="thumbnail"><i class="fas fa-tshirt fa-2x"></i></div>
                </div>
            </div>
            
            <div class="product-info">
                <div class="product-header">
                    <h1><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>
                    <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?>
                    <span class="category-tag"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</span>
                    <?php }?>
                </div>
                
                <div class="product-price">
                    <span class="price-label">Precio</span>
                    <span class="price-amount">$24.999</span>
                    <span class="price-discount">15% OFF</span>
                </div>
                
                <div class="product-description">
                    <h3>Descripción</h3>
                    <p><?php if ($_smarty_tpl->tpl_vars['producto']->value->detalle) {
echo $_smarty_tpl->tpl_vars['producto']->value->detalle;
} else { ?>Producto de alta calidad diseñado para maximizar tu rendimiento deportivo.<?php }?></p>
                </div>
                
                <div class="product-features">
                    <h3>Características</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Material de alta resistencia</li>
                        <li><i class="fas fa-check"></i> Tecnología anti-transpirante</li>
                        <li><i class="fas fa-check"></i> Diseño ergonómico</li>
                        <li><i class="fas fa-check"></i> Disponible en varios colores</li>
                    </ul>
                </div>
                
                <div class="product-actions">
                    <button class="btn btn-primary btn-large">
                        <i class="fas fa-shopping-cart"></i> Agregar al carrito
                    </button>
                    <button class="btn btn-secondary btn-large">
                        <i class="fas fa-heart"></i> Favoritos
                    </button>
                </div>
                
                <div class="product-meta">
                    <div class="meta-item">
                        <i class="fas fa-truck"></i>
                        <span>Envío gratis a todo el país</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Garantía de 30 días</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-exchange-alt"></i>
                        <span>Cambios sin cargo</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="back-button">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productos" class="btn btn-outline">
                <i class="fas fa-arrow-left"></i> Ver más productos
            </a>
        </div>
    </div>
</main>

<style>
    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 20px 0;
        color: #999;
        flex-wrap: wrap;
    }
    
    .breadcrumb a {
        color: #00ff88;
        text-decoration: none;
        transition: opacity 0.3s;
    }
    
    .breadcrumb a:hover {
        opacity: 0.8;
    }
    
    .breadcrumb i {
        font-size: 0.8em;
    }
    
    .product-detail {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        padding: 40px 0;
    }
    
    .product-gallery {
        position: sticky;
        top: 100px;
    }
    
    .main-image {
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 255, 136, 0.05));
        border-radius: 20px;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        border: 2px solid rgba(0, 255, 136, 0.2);
    }
    
    .main-image i {
        color: rgba(0, 255, 136, 0.5);
    }
    
    .image-thumbnails {
        display: flex;
        gap: 15px;
    }
    
    .thumbnail {
        width: 80px;
        height: 80px;
        background: rgba(26, 26, 26, 0.9);
        border: 2px solid rgba(0, 255, 136, 0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .thumbnail.active,
    .thumbnail:hover {
        border-color: #00ff88;
        transform: scale(1.05);
    }
    
    .thumbnail i {
        color: rgba(0, 255, 136, 0.5);
    }
    
    .product-header {
        margin-bottom: 30px;
    }
    
    .product-header h1 {
        font-size: 2.5em;
        color: #fff;
        margin-bottom: 15px;
    }
    
    .category-tag {
        display: inline-block;
        background: rgba(0, 255, 136, 0.1);
        color: #00ff88;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.9em;
        border: 1px solid rgba(0, 255, 136, 0.3);
    }
    
    .product-price {
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), transparent);
        padding: 25px;
        border-radius: 15px;
        margin-bottom: 30px;
        border: 1px solid rgba(0, 255, 136, 0.2);
    }
    
    .price-label {
        display: block;
        color: #999;
        margin-bottom: 10px;
    }
    
    .price-amount {
        font-size: 3em;
        color: #00ff88;
        font-weight: bold;
        margin-right: 15px;
    }
    
    .price-discount {
        background: #ff0066;
        color: #fff;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.9em;
    }
    
    .product-description,
    .product-features {
        margin-bottom: 30px;
    }
    
    .product-description h3,
    .product-features h3 {
        color: #00ff88;
        margin-bottom: 15px;
        font-size: 1.3em;
    }
    
    .product-description p {
        color: #ccc;
        line-height: 1.8;
    }
    
    .product-features ul {
        list-style: none;
    }
    
    .product-features li {
        color: #ccc;
        padding: 8px 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .product-features i {
        color: #00ff88;
    }
    
    .product-actions {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
    }
    
    .btn-large {
        padding: 18px 35px;
        font-size: 1.1em;
    }
    
    .product-meta {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding: 30px 0;
        border-top: 1px solid rgba(0, 255, 136, 0.1);
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #999;
    }
    
    .meta-item i {
        color: #00ff88;
        font-size: 1.2em;
    }
    
    .back-button {
        text-align: center;
        padding: 40px 0;
    }
    
    @media (max-width: 768px) {
        .product-detail {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .product-gallery {
            position: static;
        }
        
        .product-actions {
            flex-direction: column;
        }
    }
</style>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
