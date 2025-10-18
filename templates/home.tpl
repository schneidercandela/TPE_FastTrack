<section class="hero-banner">
    <div class="hero-content">
        <h1>FAST TRACK</h1>
        <p>Ropa deportiva para quienes nunca se detienen 🏃‍♀️</p>
        <a href="{$base_url}productos" class="btn-primary">Ver productos</a>
    </div>
</section>

<section class="categorias-destacadas">
    <div class="container">
        <h2>Categorías</h2>
        <div class="categorias-grid">
            {foreach from=$categorias item=categoria}
                <div class="categoria-card">
                    <a href="{$base_url}categoria/{$categoria->id}">
                        <div class="categoria-img" style="background-image: url('{$categoria->imagen}');"></div>
                        <h3>{$categoria->nombre}</h3>
                    </a>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="productos-destacados">
    <div class="container">
        <h2>Productos destacados</h2>
        <div class="productos-grid">
            {foreach from=$productos item=producto}
                <div class="producto-card">
                    <a href="{$base_url}producto/{$producto->id}">
                        <div class="producto-img" style="background-image: url('{$producto->imagen}');"></div>
                        <div class="producto-info">
                            <h4>{$producto->nombre}</h4>
                            <p class="precio">$ {$producto->precio}</p>
                        </div>
                    </a>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<style>
    /* Banner */
    .hero-banner {
        background: linear-gradient(90deg, rgba(0,0,0,0.9), rgba(0,0,0,0.5)), 
                    url('images/banner.jpg') center/cover no-repeat;
        color: #fff;
        text-align: center;
        padding: 120px 20px;
    }

    .hero-content h1 {
        font-size: 4rem;
        color: #00ff88;
        text-shadow: 0 0 15px #00ff88;
        margin-bottom: 15px;
    }

    .hero-content p {
        font-size: 1.3rem;
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #00ff88;
        color: #000;
        padding: 12px 25px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #00cc6e;
        transform: scale(1.05);
    }

    /* Categorías */
    .categorias-destacadas {
        padding: 60px 20px;
        background-color: #121212;
    }

    .categorias-destacadas h2 {
        text-align: center;
        color: #00ff88;
        margin-bottom: 40px;
    }

    .categorias-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
    }

    .categoria-card {
        background-color: #1a1a1a;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .categoria-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 15px #00ff88;
    }

    .categoria-img {
        height: 160px;
        background-size: cover;
        background-position: center;
    }

    .categoria-card h3 {
        text-align: center;
        padding: 15px;
        color: #fff;
    }

    /* Productos */
    .productos-destacados {
        padding: 60px 20px;
        background-color: #0d0d0d;
    }

    .productos-destacados h2 {
        text-align: center;
        color: #00ff88;
        margin-bottom: 40px;
    }

    .productos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 25px;
    }

    .producto-card {
        background-color: #1a1a1a;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .producto-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 15px #00ff88;
    }

    .producto-img {
        height: 220px;
        background-size: cover;
        background-position: center;
    }

    .producto-info {
        padding: 15px;
        text-align: center;
    }

    .producto-info h4 {
        color: #fff;
        margin-bottom: 8px;
    }

    .precio {
        color: #00ff88;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-content p {
            font-size: 1rem;
        }
    }
</style>

