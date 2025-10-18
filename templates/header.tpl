<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="{$base_url}">
                <img src="images/logo.png" alt="Fast Track" />
            </a>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="{$base_url}">Inicio</a></li>
                <li><a href="{$base_url}productos">Productos</a></li>
                <li><a href="{$base_url}categorias">Categorías</a></li>
                {if isset($usuario)}
                    <li><a href="{$base_url}logout">Salir</a></li>
                {else}
                    <li><a href="{$base_url}login">Login</a></li>
                {/if}
            </ul>
        </nav>
        <div class="menu-toggle">
            ☰
        </div>
    </div>
</header>

<style>
    .site-header {
        background-color: #0d0d0d;
        color: #fff;
        padding: 15px 0;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .site-header .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .logo img {
        height: 50px;
    }

    .nav-menu ul {
        list-style: none;
        display: flex;
        gap: 25px;
    }

    .nav-menu a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav-menu a:hover {
        color: #00ff88;
        text-shadow: 0 0 8px #00ff88;
    }

    .menu-toggle {
        display: none;
        font-size: 1.8em;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .nav-menu {
            display: none;
            position: absolute;
            top: 70px;
            right: 0;
            background-color: #0d0d0d;
            width: 100%;
        }

        .nav-menu ul {
            flex-direction: column;
            align-items: center;
            padding: 10px 0;
            gap: 15px;
        }

        .menu-toggle {
            display: block;
        }
    }
</style>

<script>
    const toggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    toggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        navMenu.style.display = navMenu.classList.contains('active') ? 'block' : 'none';
    });
</script>
