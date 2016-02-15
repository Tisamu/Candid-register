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
        <h1>Liste des candidats</h1>
        <select id="candid_list">
            <?php
                require('db/database.class.php');
                
                $db = new Database();
                
                $db->query('SELECT id_candidat,fname,lname FROM candidats');
                
                $candids = $db->resultset();
                
                foreach ($candids as $person){
                    echo '<option value='.$person['id_candidat'].'>'.$person['fname'].' '.$person['lname'].'</option>';
                }
            ?>            
        </select>
        
        <div id="selected_candid" class="container-fluid">
            <div class="row person">
                <div class="col-xs-1">
                    <h5>Age: </h5>
                </div>
                <div class="col-xs-1" id='age'>
                    
                </div> 
            </div>
            
            <div class="row person">
                <div class="col-xs-1">
                    <h5>Commentaire: </h5>
                </div>
                <div class="col-xs-6" id='comment'>
                    
                </div> 
            </div>
            
            <div class="row person">
                <div class="col-xs-1">
                    <h5>Note: </h5>
                </div>
                <div class="col-xs-1">
                    <input id="rate" type="number" class="rating" readonly>
                </div> 
            </div>
                
            
            
        </div>
        
        
    
        
        
        
        <!-- Jquery JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Star Rating JS -->
        <script type="text/javascript" src="js/star-rating/star-rating.min.js"></script>
        <!-- My JS -->
        <script type="text/javascript" src="js/main.js"></script>
        
        <script type="text/javascript">
            $('.rating').rating({showClear: false, showCaption: false, step: 0.5, size: 'xs' });
        </script>
    </body>
</html>
