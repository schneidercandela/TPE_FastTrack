{include 'header.tpl'}
<main>
    <h2>Iniciar Sesión</h2>
    <div>
        <form action="{$base_url}login" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Ingresar</button>
        </form>
    </div>
</main>
{include 'footer.tpl'}