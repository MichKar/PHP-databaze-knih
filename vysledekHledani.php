<?php require_once("structure.php"); ?>
<style>
<?php echo ".navigation {margin-right: 0px;} ";
?>
</style>

<section class="main-section">
    <?php

    // připojení
    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
        die("Nelze se připojit do databáze</body></html>");
    }

    $firstname = "";
    $surname =  "";
    $title =  "";
    $isbn =  "";
    $firstname = htmlspecialchars($_POST["jmenoAutora"]);
    $surname = htmlspecialchars($_POST["prijmeniAutora"]);
    $title = htmlspecialchars($_POST["nazevKnihy"]);
    $isbn = htmlspecialchars($_POST["isbn"]);

    // pokud je alespon něco vyplněno
    if (!empty($firstname) || !empty($surname) || !empty($title) || !empty($isbn)) {
        $sql = "SELECT * FROM knihy WHERE jmeno_autora LIKE '%$firstname%' AND prijmeni_autora LIKE '%$surname%' AND nazev LIKE '%$title%' AND isbn LIKE '%$isbn%'";

        $vysledek = mysqli_query($con, $sql);
        if (!$vysledek) {
            die("<p class='result'>Nelze provést dotaz.</p> </body></html>");
        }

        // podmínka, pokud ve výsledku není žádný řádek,
        if (mysqli_num_rows($vysledek) == 0) {
            echo "<p class='result'>Vašim požadavkům neodpovídá žádná kniha.</p>";
        } else { // pokud ve výsledku řádek nějaký je, vypiš hlavičku
            ?>
                <table class="table-review">
                    <caption>Vyhledané knihy</caption>
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>Název knihy</th>
                            <th>Jméno autora</th>
                            <th>Příjmení autora</th>
                            <th>Popis knihy</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php
        }

        // výpis všech vyhledaných řádků
        while ($radek = mysqli_fetch_array($vysledek)) {
            echo "<tr><td>" . $radek["isbn"] . "</td><td>" . $radek["nazev"] . "</td><td>" . $radek["jmeno_autora"] . "</td><td>" . $radek["prijmeni_autora"] . "</td><td>" . $radek["popis"] . "</td></tr>";
        }

        mysqli_free_result($vysledek);
        mysqli_close($con);

    } else { // pokud není nic vyplněno
        echo "<p class='result'>Musíte zadat alespoň jednu hodnotu.</p>";
    }
            ?>
        </tbody>
    </table>
</section>
</main>

<?php require_once("footer.php"); ?>
</body>

</html>