<?php 
include 'includes/header.php';
include 'includes/menu.php';?>
        <section >
            <form  method="post"  > 
                
                <table>
                    <caption>Toevoegen van een nieuwe activiteit</caption>
                    <tr>
                        <td>Naam:</td>
                        <td>
                            <input type="text" placeholder="naam" name="naam"  required="required" value="<?= !empty($form_data['naam'])?$form_data['naam']:'';?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Min leeftijd:</td>
                        <td>
                            <input type="number" placeholder='0' name="min_leeftijd" required="required" value="<?= !empty($form_data['min_leeftijd'])?$form_data['min_leeftijd']:'';?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tijdsduur (min):</td>
                        <td>
                            <input type="number" placeholder='0' name="tijdsduur" required="required" value="<?= !empty($form_data['tijdsduur'])?$form_data['tijdsduur']:'';?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>Prijs:</td>
                        <td>
                            <input type="number" placeholder='0' name="prijs" required="required" value="<?= !empty($form_data['prijs'])?$form_data['prijs']:'';?>" >
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="voeg toe">
                            <input type="reset" value="reset"> 
                        </td>
                    </tr>
                   
                </table>
                    
            </form> 
            <br >
        </section>
<?php include 'includes/footer.php';

