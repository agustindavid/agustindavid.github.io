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
    
    input[type='radio'] {
        display: inline;
        width: auto;
        margin: 0 25px;
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
    <h1>Generar footer</h1>
    <form action="generar.php" method="post"  enctype="multipart/form-data">
        <input type="text" placeholder="Link Facebook" name="facebook">
        <input type="text" placeholder="Titulo Facebook" name="facebook_text">
        <input type="text" placeholder="Link Twitter" name="twitter">
        <input type="text" placeholder="Titulo Twitter" name="twitter_text">
        <input type="text" placeholder="Link Linkedin" name="linkedin">
        <h3>Links a redes sociales</h3>
        <input type="text" placeholder="Facebook" name="produ_facebook">
        <input type="text" placeholder="Twitter" name="produ_twitter">
        <input type="text" placeholder="Youtube" name="produ_youtube">
        <input type="text" placeholder="Instagram" name="produ_instagram">
        <input type="submit" value="enviar">
    </form>
</div>