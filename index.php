<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Remplacement txt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Code pour les photos du marketing">
    <meta name="author" content="Mathieu Dubroca">

    <!-- Le style -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

  </head>
  

  <body>
    <div class="container-fluid">

<img
    src="img/ripcurl.png" 
    height="60px" 
    width="100px" 
/>


<form id="upload_form" action="remplacement.php" method="post">
 <p>Path du dossier d'images : <input type="text" name="path" /></p>
 <p><input type="hidden" name="<?php echo ini_get('session.upload_progress.name');?>" value="progression" /></p>
 <p><button id="submit-button" class="btn btn-primary" onclick="upload()">Envoyer</button></p>
</form>



<div id="progress" class="progress progress-success progress-striped" style="width:700px;">
        
    <div class="bar"></div>
        
      </div>
      
      <iframe id="result_frame" name="result_frame" style="border:none;width:400px;height:400px;" frameBorder="0" scrolling="no"></iframe>
      
    </div> <!-- /container -->
    

<!-- Le javascript -->
    
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="script.js"></script>

</body>
</html>





