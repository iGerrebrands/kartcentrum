<?php
include 'includes/header.php';
include 'includes/menu.php';?>
    <section >
        <form  method="post">
            <table>
                <caption>Aanpassen van een bestaande cursus</caption>
                <tr>
                    <td>Naam:</td>
                    <td>
                        <input type="text" placeholder="naam" name="naam"  required="required" value="<?= !empty($soort->getNaam())?$soort->getNaam():'';?>">
                    </td>
                </tr>
                <tr>
                    <td>Min leeftijd:</td>
                    <td>
                        <input type="number" placeholder='0' name="min_leeftijd" required="required" value="<?= !empty($soort->getMin_leeftijd())?$soort->getMin_leeftijd():'';?>">
                    </td>
                </tr>
                <tr>
                    <td>Tijdsduur (min):</td>
                    <td>
                        <input type="number" placeholder='0' name="tijdsduur" required="required" value="<?= !empty($soort->getTijdsduur())?$soort->getTijdsduur():'';?>">
                    </td>
                </tr>
                <tr>
                    <td>Prijs:</td>
                    <td>
                        <input type="number" placeholder='0' name="prijs" required="required" value="<?= !empty($soort->getPrijs())?$soort->getPrijs():'';?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="verander">
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>
        <br >
    </section>
<?php include 'includes/footer.php';