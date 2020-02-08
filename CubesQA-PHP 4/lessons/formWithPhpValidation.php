<?php
    // Definisanje varijabli i postavljanje na prazan string. 
    $name = "";
    $email = "";
    $position = "";
    $letter = "";
    $website = "";

    // Definisanje varijabli za greske.
    $nameErr = "";
    $emailErr = "";
    $positionError = "";
    $websiteErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Ime je obavezno";
        } else {
            $name = test_input($_POST["name"]);
            // Provera da li ime sadrži samo slova i eventualno razmak.
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Dozvoljena su samo slova i razmak.";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Mejl je obavezan.";
        } else {
            $email = test_input($_POST["email"]);
            // Provera da li je unet mejl u pravom formatu
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Nepravilan format mejla.";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            //  Provera da li je URL ispravno unet (pomoću regularnog izraza). 
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Nepravilan URL";
            }
        }

        if (empty($_POST["letter"])) {
            $letter = "";
        } else {
            $letter = test_input($_POST["letter"]);
        }

        if (empty($_POST["position"])) {
            $positionError = "Pozicija je obavezna";
        } else {
            $position = test_input($_POST["position"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>CubesQA | Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <link href="../css/forms.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Header -->
        <header>
            <img src="../images/logo.png" alt="Cubes School Logo"/>
        </header>

        <!-- Navigation Bar -->
        <nav>
            <div class="container">
                <a href="../index.html">Naslovna</a>
                <a href="../students.html">Studenti</a>
                <a href="../lessons.html">Lekcije</a>
                <a href="../quiz.html">Kviz</a>
            </div>
        </nav>

        <div class="container">
            <aside class="list">
                <h1>Lekcije</h1>
                <a href="internet.html">Uvod u Web</a>
                <a href="long_page.html">HTML - dugačka stranica</a>
                <a href="form_elements.html">Elementi Forme</a>
                <a href="styled_form_elements.html">Stilizovani elementi forme</a>
                <a href="login.html">Login</a>
                <a href="registration.html">Registracija</a>
            </aside>
            <section>
                <h2>Validacija forme pomoću PHP-a</h2>
                <p>
                    Polja iznačena * su obavezna.
                </p>

                <form name="job-apply" method="post" action="formWithPhpValidation.php">  
                    <div>
                        <label for="name">Ime: *</label>
                        <input id="name" type="text" name="name" value="<?php echo $name; ?>">
                        <span class="error"><?php echo $nameErr; ?></span>
                    </div>

                    <div>
                        <label>Mejl: *</label>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                        <span class="error"><?php echo $emailErr; ?></span>
                    </div>

                    <div>
                        <label>LinkedIn:</label>
                        <input type="text" name="website" value="<?php echo $website; ?>">
                        <span class="error"><?php echo $websiteErr; ?></span>
                    </div>

                    <div>
                        <label>Motivaciono pismo:</label>
                        <textarea name="letter" rows="5" cols="40"><?php echo $letter; ?></textarea>
                    </div>

                    <div>
                        <label>Pozicija: *</label>
                        <span class="error"><?php echo $positionError; ?></span>
                        <br>
                        <input id="r1" type="radio" name="position" <?php if (isset($position) && $position == "qa") echo "checked"; ?> value="qa">
                        <label for="r1">QA tester</label> <br>
                        <input id="r2" type="radio" name="position" <?php if (isset($position) && $position == "php") echo "checked"; ?> value="php">
                        <label for="r2">PHP programer</label> <br>
                        <input id="r3" type="radio" name="position" <?php if (isset($position) && $position == "front") echo "checked"; ?> value="front">
                        <label for="r3">FrontEnd programer</label>
                    </div>
                    
                    <div class="center">
                        <input type="submit" name="submit" value="Pošalji">  
                        <input type="reset" value="Očisti polja">
                    </div>
                </form>

                <?php
                    echo "<h2>Podaci nakon validacije: </h2>";
                    echo "Ime: " . $name;
                    echo "<br>";
                    echo "Email: " . $email;
                    echo "<br>";
                    echo "Pozicija: " . $position;
                    echo "<br>";
                    echo "Sajt: " . $website;
                    echo "<br>";
                    echo "Motivaciono: " . $letter;
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
