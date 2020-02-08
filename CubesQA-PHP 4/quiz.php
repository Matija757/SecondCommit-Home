<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer1 = $_POST['question-1'];
    $answer2 = $_POST['question-2'];
    $answer3 = $_POST['question-3'];
    $answer4 = $_POST['question-4'];
    $answer5 = $_POST['question-5'];

    $totalCorrect = 0;

    if ($answer1 == "A") {
        $totalCorrect++;
    }
    if ($answer2 == "B") {
        $totalCorrect++;
    }
    if ($answer3 == "A") {
        $totalCorrect++;
    }
    if ($answer4 == "A") {
        $totalCorrect++;
    }
    if ($answer5 == "A") {
        $totalCorrect++;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CubesQA | Naslovna</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <style>
            .result {
                color: blue;
                font-size: 30px;
            }
            
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <img src="images/logo.png" alt="Cubes School Logo"/>
        </header>

        <!-- Navigation Bar -->
        <nav>
            <div class="container">
                <a href="index.php">Naslovna</a>
                <a href="students.html">Studenti</a>
                <a href="lessons.html">Lekcije</a>
                <a href="quiz.php">Kviz</a>
            </div>
        </nav>

        <div class="container">
            <aside>
                <h2>Veštine:</h2>
                <p class="skill"><a href="https://www.tutorialspoint.com/web_developers_guide/web_basic_concepts.htm">Web basics</a></p>
                <p class="skill"><a href="https://www.w3schools.com/html/">HTML</a></p>
                <p class="skill"><a href="https://www.w3schools.com/css/default.asp">CSS</a></p>
                <p class="skill"><a href="https://www.w3schools.com/js/default.asp">JS</a></p>

            </aside>
            <section>
                <h1>Kviz znanja</h1>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo "<div class='result'>$totalCorrect / 5 tačnih</div>";
                    } else { ?>

                <form action="" method="post">
                    <div id="boxForm">
                    <div class="container">
                     <list align="left">
                        
                     <p>
                        1. <b>CSS je:</b>
                     </p>
                        <ol>
                            <li>
                                <label><input type="radio" name='question-1' value="A" required>Cascading Style Sheets</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-1' value="B">Computer Styled Sections</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-1' value="C">Crazy Solid Shapes</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-1' value="D">None of the above</label>
                            </li>
                        </ol>
                    </list>
                    </div>
                    
                    <div class="container">
                     <list align="left">
                        
                     <p>
                        2. <b>Sta nije tacno za GET metodu?</b>
                             
                     </p>
                        <ol>
                            <li>
                                <label><input type="radio" name='question-2' value="A" required>Podaci nisu prikazani u URL-u</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-2' value="B">Koristi se za dohvatanje podataka (ne i menjanje)</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-2' value="C">Moze da se bookmark-uje</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-2' value="D">Ostaje u istoriji pretrazivaca</label>
                            </li>
                        </ol>
                    </list>
                    </div>
                  
                    <div class="container">
                     <list align="left">
                        
                        <p>
                           3. <b>Sta znaci skracenica SEO</b>
                        </p>
                        <ol>
                            <li>
                                <label><input type="radio" name='question-3' value="A" required>Search Engine Optimization</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-3' value="B">Secret Enterprise Organizations</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-3' value="C">Special Endowment Opportunity</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-3' value="D">Seals And Olives</label>
                            </li>
                        </ol>
                    </list>
                    </div>
                  
                     <div class="container">
                     <list align="left">
                        
                        <p>
                           4. <b>Greska 404 je:</b>
                        </p>
                        <ol>
                            <li>
                                <label><input type="radio" name='question-4' value="A" required>HTTP status kod koji oznacava da stranica nije pronadjena</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-4' value="B">Nacin dizajniranja pojedinih stranica</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-4' value="C">Signal da programer nije na poslu</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-4' value="D">Sve navedeno</label>
                            </li>
                        </ol>
                    </list>
                    </div>
                    
                    <div class="container">
                     <list align="left">
                        
                        <p>
                           5. <b>Osnovne tri tehnologije u FrontEnd-u su:</b>
                        </p>
                        <ol>
                            <li>
                                <label><input type="radio" name='question-5' value="A" required>HTML, CSS, JS</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-5' value="B">CSS, JS, Ruby</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-5' value="C">HTML, jQuery, PHP</label>
                            </li>
                            <li>
                                <label><input type="radio" name='question-5' value="D">HTML, CSS, PHP</label>
                            </li>
                        </ol>
                    </list>
                    </div>
                    
                    <div>
                        <button type="submit" id="submitQuiz" class="button" name="send">Zavrsi kviz</button>
                        
                        <script type="text/javascript" src="js/validate.js"></script>
                    </div>
                    </div>
                </form>
                    


                    <?php
                }
                ?>

            </section>
        </div>

        <!-- Footer -->
        <footer>
            <h2>QA kurs 2019</h2>
            <p>Cubes škola je mesto gde ćete napraviti Vaše prve korake u IT karijeri.</p>
        </footer>

    </body>
</html>
