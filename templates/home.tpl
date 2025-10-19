{include 'header.tpl'}

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">FAST TRACK</h1>
            <p class="hero-subtitle">Supera tus límites con el mejor equipamiento deportivo</p>
            <div class="hero-buttons">
                <a href="{$base_url}productos" class="btn btn-primary">Ver Productos</a>
                <a href="{$base_url}categorias" class="btn btn-secondary">Explorar Categorías</a>
            </div>
        </div>
        <div class="hero-image"></div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>Envío Rápido</h3>
                    <p>Entrega en 24-48 horas</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-medal"></i>
                    <h3>Calidad Premium</h3>
                    <p>Productos de alta performance</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Garantía Total</h3>
                    <p>30 días de devolución</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-headset"></i>
                    <h3>Soporte 24/7</h3>
                    <p>Atención personalizada</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Preview -->
    {if $categorias}
    <section class="categories-preview">
        <div class="container">
            <h2 class="section-title">Nuestras Categorías</h2>
            <div class="categories-grid">
                {foreach from=$categorias item=categoria}
                <div class="category-card">
                    <a href="{$base_url}productosporcategoria/{$categoria->id_categoria}">
                        <div class="category-icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <h3>{$categoria->nombre}</h3>
                        <span class="category-link">Ver productos <i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                {/foreach}
            </div>
        </div>
    </section>
    {/if}

    <!-- Products Preview -->
    {if $productos}
    <section class="products-preview">
        <div class="container">
            <h2 class="section-title">Productos Destacados</h2>
            <div class="products-grid">
                {foreach from=$productos item=producto name=productos}
                {if $smarty.foreach.productos.index < 6}
                <div class="product-card">
                    <a href="{$base_url}detalleproducto/{$producto->id_producto}">
                        <div class="product-image">
                            <span class="product-badge">NUEVO</span>
                            <i class="fas fa-tshirt fa-4x"></i>
                        </div>
                        <div class="product-info">
                            <h4>{$producto->nombre}</h4>
                            <p class="product-category">{$producto->categoria_nombre}</p>
                            <div class="product-price">
                                <span class="price">$15.999</span>
                            </div>
                        </div>
                    </a>
                </div>
                {/if}
                {/foreach}
            </div>
            <div class="text-center">
                <a href="{$base_url}productos" class="btn btn-outline">Ver todos los productos</a>
            </div>
        </div>
    </section>
    {/if}
</main>

<style>
    /* Hero Section */
    .hero {
        min-height: 600px;
        background: linear-gradient(135deg, #0d0d0d, #1a1a1a);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }
    
    .hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(0, 255, 136, 0.1) 0%, transparent 70%);
        animation: pulse 4s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    
    .hero-content {
        flex: 1;
        padding: 60px 40px;
        position: relative;
        z-index: 1;
    }
    
    .hero-title {
        font-size: 4.5em;
        font-weight: 900;
        background: linear-gradient(90deg, #00ff88, #00cc6e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
        animation: glow 2s ease-in-out infinite;
    }
    
    @keyframes glow {
        0%, 100% { text-shadow: 0 0 20px rgba(0, 255, 136, 0.5); }
        50% { text-shadow: 0 0 30px rgba(0, 255, 136, 0.8); }
    }
    
    .hero-subtitle {
        font-size: 1.4em;
        color: #ccc;
        margin-bottom: 40px;
    }
    
    .hero-buttons {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    
    .btn {
        padding: 15px 35px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        display: inline-block;
    }
    
    .btn-primary {
        background: linear-gradient(90deg, #00ff88, #00cc6e);
        color: #000;
    }
    
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 255, 136, 0.4);
    }
    
    .btn-secondary {
        border: 2px solid #00ff88;
        color: #00ff88;
        background: transparent;
    }
    
    .btn-secondary:hover {
        background: #00ff88;
        color: #000;
    }
    
    .btn-outline {
        border: 2px solid #00ff88;
        color: #00ff88;
        background: transparent;
        margin-top: 30px;
    }
    
    .btn-outline:hover {
        background: #00ff88;
        color: #000;
        transform: translateY(-3px);
    }
    
    /* Features Section */
    .features {
        padding: 80px 0;
        background: rgba(0, 255, 136, 0.02);
    }
    
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .feature-card {
        background: rgba(26, 26, 26, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 255, 136, 0.2);
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        border-color: #00ff88;
        box-shadow: 0 10px 30px rgba(0, 255, 136, 0.2);
    }
    
    .feature-card i {
        font-size: 3em;
        color: #00ff88;
        margin-bottom: 20px;
    }
    
    .feature-card h3 {
        color: #fff;
        margin-bottom: 10px;
    }
    
    .feature-card p {
        color: #999;
    }
    
    /* Categories Section */
    .categories-preview, .products-preview {
        padding: 80px 0;
    }
    
    .section-title {
        text-align: center;
        font-size: 2.5em;
        color: #00ff88;
        margin-bottom: 50px;
        position: relative;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, transparent, #00ff88, transparent);
    }
    
    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .category-card {
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 255, 136, 0.05));
        border: 2px solid rgba(0, 255, 136, 0.3);
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        transition: all 0.3s;
    }
    
    .category-card:hover {
        transform: translateY(-10px);
        border-color: #00ff88;
        box-shadow: 0 15px 40px rgba(0, 255, 136, 0.3);
    }
    
    .category-card a {
        text-decoration: none;
        color: inherit;
    }
    
    .category-icon {
        font-size: 3em;
        color: #00ff88;
        margin-bottom: 20px;
    }
    
    .category-card h3 {
        color: #fff;
        margin-bottom: 15px;
        font-size: 1.5em;
    }
    
    .category-link {
        color: #00ff88;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    /* Products Grid */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 30px;
    }
    
    .product-card {
        background: #1a1a1a;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s;
        border: 1px solid rgba(0, 255, 136, 0.1);
    }
    
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 255, 136, 0.3);
        border-color: #00ff88;
    }
    
    .product-card a {
        text-decoration: none;
        color: inherit;
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
        top: 10px;
        right: 10px;
        background: #00ff88;
        color: #000;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8em;
        font-weight: 600;
    }
    
    .product-info {
        padding: 20px;
    }
    
    .product-info h4 {
        color: #fff;
        margin-bottom: 8px;
        font-size: 1.2em;
    }
    
    .product-category {
        color: #00ff88;
        font-size: 0.9em;
        margin-bottom: 15px;
    }
    
    .price {
        font-size: 1.5em;
        color: #00ff88;
        font-weight: bold;
    }
    
    .text-center {
        text-align: center;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 3em;
        }
        
        .hero-subtitle {
            font-size: 1.1em;
        }
        
        .section-title {
            font-size: 2em;
        }
    }
</style>

{include 'footer.tpl'}