<?php require_once("structure.php"); ?>
<style>
    .navigation {margin-right: 0px;}
</style>

<section class="main-section">
    <div class="adding">
        <form class="form-add" action="vysledekVlozeni.php" method="POST">
            <h2>Přidání knihy</h2>
            <input type="text" name="isbn" placeholder="ISBN *"><br>
            <input type="text" name="nazevKnihy" placeholder="Název knihy *"><br>
            <input type="text" name="jmenoAutora" placeholder="Jméno autora *"><br>
            <input type="text" name="prijmeniAutora" placeholder="Příjmení autora *"><br>
            <textarea name="popis" id="" cols="30" rows="10" placeholder="Krátký popis knihy"></textarea><br>
            <input class="btn" type="submit" name="submit" value="Přidat knihu do databáze">
            <p>* povinné pole</p>
        </form>
    </div>

</section>
</main>

<?php require_once("footer.php"); ?>
</body>

</html>