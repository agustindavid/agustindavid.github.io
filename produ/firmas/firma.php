<style>
    input{
        display:block;
        margin:15px 0;
        width:100%;
        padding:10px;
    }
    
    input[type='submit']{
        max-width:120px;
        float:right;
    }
    
    .container{
        width:500px; margin:auto;
        font-family:arial;
        padding:20px;
        text-align:center;
    }
    
    h1{
        text-align:center;
    }
</style>
<div class="container">
    <img src="images/logo-header.png" >
    <h1>Generar firma digital</h1>
    <form action="generar.php" method="post"  enctype="multipart/form-data">
        <input type="text" placeholder="nombre" name="nombre">
        <input type="text" placeholder="cargo" name="cargo">
        <input type="email" name="mail" placeholder="mail">
        <input name="skype" type="text" placeholder="skype">
        <input type="number" name="tlf" placeholder="tlf">
        <input type="number" name="celular" placeholder="celular">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <p>Imagen de dimensiones requerido 112px x 112px</p>
        <input type="submit" value="enviar">
    </form>
</div>