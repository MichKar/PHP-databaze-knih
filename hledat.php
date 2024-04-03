<?php require_once("structure.php"); ?>
<style>
<?php echo ".navigation {margin-right: 0px;} ";?>
</style>

<section class="main-section">
<div class="finding">
    <form class="form-find" action="vysledekHledani.php" method="POST">
                <h2>Hledání knihy</h2>
                <input type="text" name="isbn" placeholder="ISBN"><br>
                <input type="text" name="nazevKnihy" placeholder="Název knihy"><br>
                <input type="text" name="jmenoAutora" placeholder="Jméno autora"><br>
                <input type="text" name="prijmeniAutora" placeholder="Příjmení autora"><br>
                <input class="btn" type="submit" name="submit" value="Vyhledat knihu">
            </form>
        </div>

</section>
</main>

<?php require_once("footer.php"); ?>
</body>

</html>
