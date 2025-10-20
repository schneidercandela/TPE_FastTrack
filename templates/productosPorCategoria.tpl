{include 'header.tpl'}

<main>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                {if $categoria}
                    {$categoria->nombre}
                {else}
                    Productos
                {/if}
            </h1>
            <p class="page-subtitle">Explora nuestra selección</p>
            <a href="{$base_url}categorias" class="btn-back">
                <i class="fas fa-arrow-left"></i> Volver a categorías
            </a>
        </div>
        
        {if $productos && count($productos) > 0}
        <div class="products-grid">
            {foreach from=$productos item=producto}
            <div class="product-card">
                <div class="product-image">
                    <span class="product-badge">HOT</span>
                    <i class="fas fa-tshirt fa-4x"></i>
                </div>
                <div class="product-content">
                    <h3>{$producto->nombre}</h3>
                    {if $producto->detalle}
                    <p class="product-description">{$producto->detalle|truncate:100:"..."}</p>
                    {/if}
                    <div class="product-actions">
                        <span class="price">$14.999</span>
                        <a href="{$base_url}detalleproducto/{$producto->id_producto}" class="btn-detail">
                            Ver detalles <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            {/foreach}
        </div>
        {else}
        <div class="empty-state">
            <i class="fas fa-inbox fa-4x"></i>
            <h2>No hay productos en esta categoría</h2>
            <p>Pronto agregaremos productos aquí</p>
            <a href="{$base_url}categorias" class="btn btn-primary">Ver otras categorías</a>
        </div>
        {/if}
    </div>
</main>

<style>
    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #00ff88;
        text-decoration: none;
        margin-top: 20px;
        transition: all 0.3s;
    }
    
    .btn-back:hover {
        transform: translateX(-5px);
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        padding: 40px 0;
    }
    
    .product-card {
        background: rgba(26, 26, 26, 0.9);
        border-radius: 15px;
        overflow: hidden;
        border: 1px solid rgba(0, 255, 136, 0.1);
        transition: all 0.3s;
    }
    
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 255, 136, 0.3);
        border-color: #00ff88;
    }
    
    .product-image {
        height: 200px;
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 255, 136, 0.05));
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    .product-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #ff0066;
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8em;
        font-weight: 600;
    }
    
    .product-content {
        padding: 25px;
    }
    
    .product-content h3 {
        color: #fff;
        font-size: 1.5em;
        margin-bottom: 12px;
    }
    
    .product-description {
        color: #999;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .product-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .price {
        font-size: 1.8em;
        color: #00ff88;
        font-weight: bold;
    }
    
    .btn-detail {
        background: linear-gradient(90deg, #00ff88, #00cc6e);
        color: #000;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-detail:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 255, 136, 0.4);
    }
</style>

{include 'footer.tpl'}