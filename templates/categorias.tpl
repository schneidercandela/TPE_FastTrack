{include 'header.tpl'}
<main>
    <div> 
        {foreach $categorias as $categoria}
            <a class="link" href="{$base_url}productosporcategoria/{$categoria->id_categoria}">
                <h1>{$categoria->nombre}</h1>
            </a>
        {/foreach}
    </div>
</main>
{include 'footer.tpl'}