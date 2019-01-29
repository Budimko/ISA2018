<?php
    header('Content-type: text/plain; charset=utf-8');
    header("Content-Type: text/html; charset=UTF-8");
    date_default_timezone_set("Europe/Belgrade");

    $root_temp = dirname(__FILE__);
    $root_temp_2 = str_replace("\\","/",$root_temp);
    $root_temp_2 = $root_temp_2."/";
    define("SITE_ROOT", $root_temp_2);

    include SITE_ROOT."protected/config.php";
    

    if( isset($_GET['strana']) ){
        $strana = $_GET['strana'];
    }else{
        $strana = "pocetna";
    }
    
    
    $title = "Pocetna";
    
    if($strana!=NULL){
        $str_path = SITE_ROOT.'protected/controller/'.$strana.'.php';
        if(file_exists($str_path)){
            include $str_path;
        }
    }
    
?>





<html>
    <head>

        <title><?php echo $title; ?></title>

    </head>

    <body>
        

        <div class="container">
            
            <div class="header">
                <?php include SITE_ROOT."protected/view/header.php"; ?>
            </div>

            <div class="content">
                <?php 
                

                    if($strana!=NULL){
                        $str_path = SITE_ROOT.'protected/view/'.$strana.'.php';
                        if(file_exists($str_path)){
                            include $str_path;
                        }
                    }
                
                ?>
                
            </div>
            
            <div class="foot">
                <?php include SITE_ROOT."protected/view/foot.php"; ?>
            </div>

        </div>





    </body>



</html>






