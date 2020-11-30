{include file="../header.tpl"}
<section class="contenedorProductos">
        <article class="contenido-productos">
<div class="logAndSign">
                <form class="formularioLogin" action="verificarUsuario" method="POST">
                        <label class="formlabel" for="user">User Name</label>
                        <input class="formlabel" type="text" name="input_user" value="">
                        <label class="formlabel" for="password">Password</label>
                        <input class="formlabel" type="password" name="input_pass" value="">
                        <button type="submit" name="agregar">Log In</button>
                </form>
                <form class="formularioRegistro" action="registrarUser" method="GET">
                        <button type="submit" name="registrar">Sign In</button>
                 </form>
            {$message}
         </div>        

        </article>     
           <aside> </aside>
</section>         
    {include file="../footer.tpl"}