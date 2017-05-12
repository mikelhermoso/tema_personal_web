<?php 
    $lang = $_GET['lang'];
    if ($lang == "en") {
        require('strings/strings_en.php'); 
    } else {
        require('strings/strings_es.php'); 
    }
?>
<html>
    <head>
        <title>tema_personal_web</title>
        <link REL=StyleSheet HREF="css/style.css">
        <link REL=StyleSheet HREF="css/styleHeader.css">
        <link REL=StyleSheet HREF="css/styleNav.css">
        <link REL=StyleSheet HREF="css/styleSobreMi.css">
        <link REL=StyleSheet HREF="css/styleHabilidades.css">
        <link REL=StyleSheet HREF="css/styleRedes.css">
        <link REL=StyleSheet HREF="css/styleContacto.css">
        <link REL=StyleSheet HREF="css/styleFooter.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smoove/0.2.6/jquery.smoove.min.js"></script>
    </head>
    
    <header>
        <?php include 'layouts/header.php';?>
    </header>
    
    <body>
        <a name="sobremi"></a>
        <?php include 'layouts/sobremi.php';?>
        
        <a name="habs"></a>
        <?php include 'layouts/habilidades.php';?>
        
        <a name="contacto"></a>
        <?php include 'layouts/contacto.php';?>
        
        
        
    </body>
    
    <footer>
        <a name="redes"></a>
        <?php include 'layouts/redesSociales.php';?>
       <?php include 'layouts/footer.php';?> 
    </footer>
</html>

<script>
    $(function(){
        
        $(window).scroll(function(){
            if ($(window).scrollTop() > 30) {
                $("#cabecera").fadeOut();
            } else {
                $("#cabecera").fadeIn();
            }
        });
        
        $(window).scroll(function(){
           if ($(window).scrollTop() > 400) {
               $("#cabeceraFix").fadeIn();
               $(".ir-arriba").fadeIn();
           } else {
               $("#cabeceraFix").fadeOut();
               $(".ir-arriba").fadeIn();
           }
        });
        
        $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
        
        $(document).ready(function(){
        $("#cabecera").hide(0).delay(300).fadeIn(2000);
        });
        
        $("#containerHabilidades1, #containerHabilidades2").smoove({
            offset  : '20%',
            moveX   : '100px',
            moveY   : '100px'
        });
        $("#containerHabilidades3, #containerHabilidades4").smoove({
            offset  : '20%',
            moveX   : '-100px',
            moveY   : '100px'
        });
        $("#contentImgContacto, #contentImgContact").smoove({
            offset  : '20%',
            moveY   : '200px'
        });
         $("#contentTextoSobreMi, #containerContacto").smoove({
            offset  : '20%',
            moveX   : '100px'
        });
        $("#containerRedesSociales").smoove({
            offset  : '10%',
            moveX   : '100px'
        });
    });
</script>