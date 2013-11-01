<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>Tutor inteligente</title>

        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>

    <body>

        <div id="page-wrap">

            <h1>Resultado Final</h1>

            <?php
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
            ?>

        </div>
    </body>
</html>