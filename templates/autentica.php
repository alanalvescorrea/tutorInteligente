<?
session_start();
$_SESSION['login'] = $_POST['login'];
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
                                        <h1 class="title">Seja Bem-vindo!</h1>
                                    </div>  <!-- /#content-title-->

                                </div> <!-- /#content-header-inner-->
                            </div> <!-- /#content-header-->

                            <div id="content-area">
                                <div id="content-area-inner">
                                    <?php
                                    if (isset($_SESSION['login'])) {
                                        echo "Olá " . $nome . "! Seja bem vindo.";
                                        echo '<br><br>';
                                        ?>
                                        <form action="grade.php" method="post" id="quiz">
                                            
                                                <!--questão 1 -->
                                                <li>
                                                    <h3>Questão 1</h3>
                                                    <div>
                                                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                                                        <label for="question-1-answers-A">A) 1a </label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                                        <label for="question-1-answers-B">B) 1b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                                        <label for="question-1-answers-C">C) 1c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                                        <label for="question-1-answers-D">D) 1d</label>
                                                    </div>
                                                </li>
                                                <!--questão 2 -->

                                                <li>
                                                    <h3>Questão 2</h3>
                                                    <div>
                                                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                                                        <label for="question-2-answers-A">A) 2a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                                        <label for="question-2-answers-B">B) 2b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                                        <label for="question-2-answers-C">C) 2c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                                                        <label for="question-2-answers-D">D) 2d</label>
                                                    </div>
                                                </li>

                                                <!--questão 3 -->
                                                <li>
                                                    <h3>Questão 3</h3>
                                                    <div>
                                                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                                                        <label for="question-3-answers-A">A) 3a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                                        <label for="question-3-answers-B">B) 3b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                                                        <label for="question-3-answers-C">C) 3c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                                                        <label for="question-3-answers-D">D) 3d</label>
                                                    </div>
                                                </li>

                                                <!--questão 4 -->
                                                <li>
                                                    <h3>Questão 4</h3>
                                                    <div>
                                                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                                                        <label for="question-4-answers-A">A) 4a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                                        <label for="question-4-answers-B">B) 4b</label>
                                                    </div>

                                                    <div>
                                                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                                        <label for="question-4-answers-C">C) 4c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                                        <label for="question-4-answers-D">D) 4d</label>
                                                    </div>
                                                </li>

                                                <!--questão 5 -->
                                                <li>
                                                    <h3>Questão 5</h3>
                                                    <div>
                                                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                                                        <label for="question-5-answers-A">A) 5a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                                        <label for="question-5-answers-B">B) 5b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                                        <label for="question-5-answers-C">C) 5c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                                        <label for="question-5-answers-D">D) 5d</label>
                                                    </div>
                                                </li>

                                                <!--questão 6 -->
                                                <li>
                                                    <h3>Questão 6</h3>
                                                    <div>
                                                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                                                        <label for="question-6-answers-A">A) 6a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                                        <label for="question-6-answers-B">B) 6b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                                        <label for="question-6-answers-C">C) 6c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                                        <label for="question-6-answers-D">D) 6d</label>
                                                    </div>
                                                </li>

                                                <!--questão 7 -->
                                                <li>
                                                    <h3>Questão 7</h3>
                                                    <div>
                                                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                                                        <label for="question-7-answers-A">A) 7a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                                        <label for="question-7-answers-B">B) 7b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                                        <label for="question-7-answers-C">C) 7c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                                                        <label for="question-7-answers-D">D) 7d</label>
                                                    </div>
                                                </li>

                                                <!--questão 8 -->
                                                <li>
                                                    <h3>Questão 8</h3>
                                                    <div>
                                                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                                                        <label for="question-8-answers-A">A) 8a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                                        <label for="question-8-answers-B">B) 8b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                                        <label for="question-8-answers-C">C) 8c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                                                        <label for="question-8-answers-D">D) 8d</label>
                                                    </div>
                                                </li>

                                                <!--questão 9 -->
                                                <li>
                                                    <h3>Questão 9</h3>
                                                    <div>
                                                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                                                        <label for="question-9-answers-A">A) 9a</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                                        <label for="question-9-answers-B">B) 9b</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                                        <label for="question-9-answers-C">C) 9c</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                                        <label for="question-9-answers-D">D) 9d</label>
                                                    </div>
                                                </li>
                                                <!--fim questionário-->
                                            
                                            <input type="submit" value="Finalizar avaliação" />
                                        </form>

                                        <?php
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
