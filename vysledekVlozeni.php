<?php require_once("structure.php"); ?>
<style>
    <?php echo ".navigation {margin-right: 0px;} "; ?>
</style>

<section class="main-section">
    <?php
    if (!$con = mysqli_connect($host, $user, $password, $db)) {
        die("nelze se připojit k databázi. </body></html>");
    }

    if (
        isset($_POST["isbn"]) && isset($_POST["nazevKnihy"])
        && isset($_POST["jmenoAutora"])  && isset($_POST["prijmeniAutora"])  && ($_POST["isbn"] != "") && ($_POST["nazevKnihy"] != "") && ($_POST["jmenoAutora"] != "") && ($_POST["prijmeniAutora"] != "")
    ) {
        if (mysqli_query($con, "INSERT INTO knihy
            (isbn,nazev,jmeno_autora,prijmeni_autora,popis) 
            VALUES (
                '" . $_POST["isbn"] . "',
                '" . $_POST["nazevKnihy"] . "',
                '" . $_POST["jmenoAutora"] . "',
                '" . $_POST["prijmeniAutora"] . "',
                '" . $_POST["popis"] . "'
            )")) {
            echo "<p class='result'>úspěšně vloženo</p>";
        } else {
            echo "<p class='result'>Nelze provést dotaz</p>";
        }
    } else {
        echo "<p class='result'>* Musíte vyplnit všechna povinná pole.</p>";
    }
    ?>

</section>
</main>

<?php require_once("footer.php"); ?>
</body>

</html>