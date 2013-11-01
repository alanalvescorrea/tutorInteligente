<?
session_start();
$nome = $_SESSION['login'];

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
    <head>
        <title>Tutor inteligente</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="initial-scale=1.0, width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" >
        <link rel="stylesheet" href="../css/html-elements.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="../css/sidebar.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="../css/form-elements.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="../css/website.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="../css/handheld.css" type="text/css" media="handheld" />	
        <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />


        <!--[if IE 8]>
                <link rel="stylesheet" href="../css/ie_8.css" type="text/css" media="screen, projection" />
        <![endif]-->

        <!--[if IE 7]>
                <link rel="stylesheet" href="../css/ie_7.css" type="text/css" media="screen, projection" />
        <![endif]-->

        <!--[if IE 6]>
                <link rel="stylesheet" href="../css/ie_6.css" type="text/css" media="screen, projection" />
        <![endif]-->

    </head>
    <body class="fixed-layout">
        <div id="wrapper" class="sidebar-right">
            <div id="wrapper-inner">

                <div id="header">
                    <div id="header-inner">
                        <div id="logo"><a href="../templates/index.html" title="Teste de inglês"><img src="../images/logotutor.png" alt="image-logo"/></a></div> <!-- /#logo-->
                        <div id="quick-login">

                        </div> <!-- /#quick-login-->
                    </div> <!-- /#header-inner-->
                </div> <!-- /#header-->

                <div id="navigation">
                    <div id="navigation-inner">        
                        <ul class="sf-menu">	 
                            Teste de competências: Listen, writer e read
                        </ul> 
                    </div> <!-- /#navigation-inner-->
                </div> <!-- /#navigation-->

                <div id="container">
                    <div id="content" class="clearfix">
                        <div id="content-inner">

                            <div id="content-header">
                                <div id="content-header-inner">

                                    <div id="content-title">
                                        <h1 class="title">Resultado da avaliação</h1>
                                    </div>  <!-- /#content-title-->

                                </div> <!-- /#content-header-inner-->
                            </div> <!-- /#content-header-->

                            <div id="content-area">
                                <div id="content-area-inner">
                                    <?php
                                    if (isset($_SESSION['login'])) {
                                        echo $nome.", logo abaixo segue o resultado de sua avaliação." ;
                                        echo '<br><br>';
                                    
                                                                                                      
                                    $answer1 = $_POST['question-1-answers'];
                                    $answer2 = $_POST['question-2-answers'];
                                    $answer3 = $_POST['question-3-answers'];
                                    $answer4 = $_POST['question-4-answers'];
                                    $answer5 = $_POST['question-5-answers'];
                                    $answer6 = $_POST['question-6-answers'];
                                    $answer7 = $_POST['question-7-answers'];
                                    $answer8 = $_POST['question-8-answers'];
                                    $answer9 = $_POST['question-9-answers'];

                                    $totalCorrectlisten = 0;
                                    $totalCorrectread = 0;
                                    $totalCorrectwrite = 0;
//testando o listen
                                    if ($answer1 == "B") {
                                        $totalCorrectlisten++;
                                    }
                                    if ($answer2 == "A") {
                                        $totalCorrectlisten++;
                                    }
                                    if ($answer3 == "C") {
                                        $totalCorrectlisten++;
                                    }
//testando o read

                                    if ($answer4 == "D") {
                                        $totalCorrectread++;
                                    }
                                    if ($answer5 == "B") {
                                        $totalCorrectread++;
                                    }
                                    if ($answer6 == "C") {
                                        $totalCorrectread++;
                                    }
//testando o writer
                                    if ($answer7 == "D") {
                                        $totalCorrectwrite++;
                                    }
                                    if ($answer8 == "A") {
                                        $totalCorrectwrite++;
                                    }
                                    if ($answer9 == "A") {
                                        $totalCorrectwrite++;
                                    }

                                    $tl = (($totalCorrectlisten / 3) * 100);
                                    echo "Corretas Listen.......";
                                    echo $totalCorrectlisten . '/ 3 (';
                                    echo number_format($tl) . "%)<br>";

                                    $tr = (($totalCorrectread / 3) * 100);
                                    echo "Corretas Read........";
                                    echo $totalCorrectread . '/ 3 (';
                                    echo number_format($tr) . "%)<br>";


                                    $tw = (($totalCorrectwrite / 3) * 100);
                                    echo "Corretas Writer......";
                                    echo $totalCorrectwrite . '/ 3 (';
                                    echo number_format($tw) . "%)<br>";

                                    if ($tl < 60) {
                                        echo '<br><a href="http://www.w3schools.com/" target="_blank">Melhore seu Listen clicando aqui</a>';
                                    }
                                    if ($tr < 60) {
                                        echo '<br><a href="http://www.w3schools.com/" target="_blank">Melhore seu Read clicando aqui</a>';
                                    }
                                    if ($tw < 60) {
                                        echo '<br><a href="http://www.w3schools.com/" target="_blank">Melhore seu Writer clicando aqui</a>';
                                    }
                                    
                                    } else {
                                        echo "Acesso não autenticado!";
                                    }
                                    ?>

                                </div> 
                            </div> 
                        </div>  
                    </div> 
                </div> <!-- /#container -->



            </div> <!-- /#footer-inner-->
        </div> <!-- /#footer-->

    </div> <!-- /#wrapper-inner-->
</div> <!-- /#wrapper/.sidebar-right-->




</body>
</html>
