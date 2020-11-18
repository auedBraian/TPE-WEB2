{include file="../header.tpl"}
<section class="contenedorProductos">
        <article class="contenido-productos">
                <form class="formularioRegistro" action="registrarUser" method="POST">
                        <label class="formlabel" for="new_user">User Name</label>
                        <input class="formlabel" type="text" name="new_user" value="">
                        <label class="formlabel" for="new_pass">Password</label>
                        <input class="formlabel" type="password" name="new_pass" value="">
                        <button type="submit" name="agregar">Sign In</button>
                </form>
         {$message}
        </article>           
           <aside></aside>
</section>         
    {include file="../footer.tpl"}