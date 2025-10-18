<footer class="site-footer">
    <div class="container footer-content">
        <div class="footer-info">
            <h4>Fast Track</h4>
            <p>Ropa deportiva para hombres y mujeres</p>
            <p>📍 Buenos Aires, Argentina</p>
        </div>
        <div class="footer-social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© {$smarty.now|date_format:"%Y"} Fast Track - Todos los derechos reservados.</p>
    </div>
</footer>

<style>
    .site-footer {
        background-color: #0d0d0d;
        color: #fff;
        padding: 30px 0 15px;
        margin-top: 40px;
        text-align: center;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-info h4 {
        color: #00ff88;
        margin-bottom: 10px;
    }

    .footer-social a {
        color: #fff;
        margin: 0 10px;
        font-size: 1.4em;
        transition: color 0.3s, text-shadow 0.3s;
    }

    .footer-social a:hover {
        color: #00ff88;
        text-shadow: 0 0 8px #00ff88;
    }

    .footer-bottom {
        margin-top: 20px;
        font-size: 0.9em;
        opacity: 0.7;
    }

    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>

<!-- Librería de iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
