<?php require_once("dbLogin.php"); ?>
<?php require_once("structure.php"); ?>
<style>
.navigation {margin-right: 0px;}
</style>

<section class="main-section">
<div>
            <?php
            $con = mysqli_connect($host, $user, $password, $db);
            if (!$con) {
                die("Nelze se připojit do databáze</body></html>");
            }
            $sql = "SELECT isbn,jmeno_autora,prijmeni_autora,nazev,popis FROM knihy";
            if (!$vysledek = mysqli_query($con, $sql)) {
                die("Nelze provést dotaz. </body></html>");
            }
            ?>
            <table class="table-review">
                <caption>Přehled knih</caption>
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
                    while ($radek = mysqli_fetch_array($vysledek)) {
                        echo    "<tr><td>" . $radek["isbn"] . "</td>
                                <td>" . $radek["nazev"] . "</td>
                                <td>" . $radek["jmeno_autora"] . "</td>
                                <td>" . $radek["prijmeni_autora"] . "</td>
                                <td>" . $radek["popis"] . "</td>
                                </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>


</section>
</main>

<?php require_once("footer.php"); ?>
</body>

</html>