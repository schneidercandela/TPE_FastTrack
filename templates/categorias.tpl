{include 'header.tpl'}

<main>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Categorías</h1>
            <p class="page-subtitle">Explora nuestras categorías de productos</p>
        </div>
        
        {if $categorias}
        <div class="categories-grid">
            {foreach from=$categorias item=categoria}
            <div class="category-card">
                <a href="{$base_url}productosporcategoria/{$categoria->id_categoria}">
                    <div class="category-icon">
                        <i class="fas fa-running fa-3x"></i>
                    </div>
                    <div class="category-content">
                        <h2>{$categoria->nombre}</h2>
                        <p>Descubre nuestra colección completa</p>
                        <span class="category-action">
                            Explorar <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            {/foreach}
        </div>
        {else}
        <div class="empty-state">
            <i class="fas fa-folder-open fa-4x"></i>
            <h2>No hay categorías disponibles</h2>
            <a href="{$base_url}" class="btn btn-primary">Volver al inicio</a>
        </div>
        {/if}
    </div>
</main>

<style>
    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        padding: 40px 0;
    }
    
    .category-card {
        background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
        border: 2px solid rgba(0, 255, 136, 0.2);
        border-radius: 20px;
        padding: 40px;
        text-align: center;
        transition: all 0.4s;
        position: relative;
        overflow: hidden;
    }
    
    .category-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(0, 255, 136, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.4s;
    }
    
    .category-card:hover::before {
        opacity: 1;
    }
    
    .category-card:hover {
        transform: translateY(-10px);
        border-color: #00ff88;
        box-shadow: 0 20px 40px rgba(0, 255, 136, 0.3);
    }
    
    .category-card a {
        text-decoration: none;
        color: inherit;
    }
    
    .category-icon {
        color: #00ff88;
        margin-bottom: 25px;
        transition: all 0.4s;
    }
    
    .category-card:hover .category-icon {
        transform: scale(1.1);
        filter: drop-shadow(0 0 20px rgba(0, 255, 136, 0.8));
    }
    
    .category-content h2 {
        color: #fff;
        font-size: 2em;
        margin-bottom: 15px;
    }
    
    .category-content p {
        color: #999;
        margin-bottom: 20px;
    }
    
    .category-action {
        color: #00ff88;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
    }
    
    .category-card:hover .category-action {
        transform: translateX(10px);
    }
</style>

{include 'footer.tpl'}