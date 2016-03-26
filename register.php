<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- BootStrap CSS -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <!-- Star Rating CSS -->
        <link type="text/css" href="css/star-rating.min.css" rel="stylesheet">
        <link type="text/css" href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <h1>Enregistrement de candidats</h1>
        <div id="content" class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <h5>Prénom: </h5>
                </div>
                <div class="col-md-1">
                    <input id="fname_input" type="text">
                </div> 
            </div>
            
            <div class="row">
                <div class="col-md-1">
                    <h5>Nom: </h5>
                </div>
                <div class="col-md-1">
                    <input id="lname_input" type="text">
                </div> 
            </div>
            
            <div class="row">
                <div class="col-md-1">
                    <h5>Age: </h5>
                </div>
                <div class="col-md-1">
                    <input id="age_input" type="number" min="18" value="18">
                </div> 
            </div>
            
            <div class="row">
                <div class="col-md-1">
                    <h5>Commentaire: </h5>
                </div>
                <div class="col-md-1">
                    <textarea id="comment_input" rows="5" cols="20"></textarea>
                </div> 
            </div>
            
            
            <div class="row">
                <div class="col-md-1">
                    <h5>Note: </h5>
                </div>
                <div class="col-md-1">
                    <input id="rate_input" id="stars" type="number" class="rating">
                </div> 
            </div>
            
            <div class="col-md-2">
                <h3 id="register_button">Inscrire</h3>   
            </div>
            
        </div>
        
    
        
        
        
        <!-- Jquery JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Star Rating JS -->
        <script type="text/javascript" src="js/star-rating/star-rating.min.js"></script>
        <!-- My jS -->
        <script type="text/javascript" src="js/main.js"></script>
        
        <script type="text/javascript">
            $('.rating').rating({showClear: false, showCaption: false, step: 0.5, size: 'xs' });
        </script>
    </body>
</html>
