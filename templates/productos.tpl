{include 'header.tpl'}

<main>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Todos los Productos</h1>
            <p class="page-subtitle">Encuentra el equipamiento perfecto para tu entrenamiento</p>
        </div>
        
        {if $productos}
        <div class="products-grid">
            {foreach from=$productos item=producto}
            <div class="product-card">
                <a href="{$base_url}detalleproducto/{$producto->id_producto}">
                    <div class="product-image">
                        <div class="product-overlay">
                            <span class="view-details">Ver Detalles</span>
                        </div>
                        <i class="fas fa-tshirt fa-4x"></i>
                    </div>
                    <div class="product-info">
                        <h3>{$producto->nombre}</h3>
                        <p class="product-category">{$producto->categoria_nombre}</p>
                        <div class="product-footer">
                            <span class="price">$12.999</span>
                            <span class="btn-view">Ver más <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            {/foreach}
        </div>
        {else}
        <div class="empty-state">
            <i class="fas fa-box-open fa-4x"></i>
            <h2>No hay productos disponibles</h2>
            <p>Pronto agregaremos nuevos productos</p>
            <a href="{$base_url}" class="btn btn-primary">Volver al inicio</a>
        </div>
        {/if}
    </div>
</main>

<style>
    .page-header {
        text-align: center;
        padding: 60px 0 40px;
    }
    
    .page-title {
        font-size: 3em;
        color: #00ff88;
        margin-bottom: 15px;
        text-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
    }
    
    .page-subtitle {
        color: #999;
        font-size: 1.2em;
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        padding: 40px 0;
    }
    
    .product-card {
        background: rgba(26, 26, 26, 0.9);
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s;
        border: 1px solid rgba(0, 255, 136, 0.1);
    }
    
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 255, 136, 0.3);
        border-color: #00ff88;
    }
    
    .product-card a {
        text-decoration: none;
        color: inherit;
    }
    
    .product-image {
        height: 250px;
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 255, 136, 0.05));
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    
    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 255, 136, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .product-card:hover .product-overlay {
        opacity: 1;
    }
    
    .view-details {
        color: #000;
        font-weight: 600;
        font-size: 1.2em;
    }
    
    .product-info {
        padding: 25px;
    }
    
    .product-info h3 {
        color: #fff;
        margin-bottom: 10px;
        font-size: 1.4em;
    }
    
    .product-category {
        color: #00ff88;
        font-size: 0.9em;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .product-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .price {
        font-size: 1.8em;
        color: #00ff88;
        font-weight: bold;
    }
    
    .btn-view {
        color: #00ff88;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .product-card:hover .btn-view {
        transform: translateX(5px);
    }
    
    .empty-state {
        text-align: center;
        padding: 100px 20px;
        color: #999;
    }
    
    .empty-state i {
        color: rgba(0, 255, 136, 0.3);
        margin-bottom: 20px;
    }
    
    .empty-state h2 {
        color: #fff;
        margin-bottom: 10px;
    }
</style>

{include 'footer.tpl'}