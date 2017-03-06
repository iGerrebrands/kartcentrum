<?php 
include 'includes/header.php';
include 'includes/menu.php';?>
    <section >
        <table >
            <caption>Dit zijn alle activiteiten van het kartcentrum</caption>
            <thead>
                <tr>
                    <td>Datum</td>
                    <td>Tijd</td>
                    <td>Soort Activiteit</td>
                    <td>Deelnemers</td>
                    <td colspan="2">acties</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($activiteiten as $activiteit):?>
                <tr>
                    
                    <td><?= $activiteit->getDatum();?></td>
                    <td> <?= $activiteit->getTijd();?></td>
                    <td><?= $activiteit->getSoort();?></td>
                    <td><?= $activiteit->getAantal();?></td>
                    
                    <td title="bewerk de gegevens van deze activiteit"><a href='?control=medewerker&action=update&id=<?= $activiteit->getId();?>'><img src="img/bewerk.png"></a></td>
                    <td title="verwijder deze activiteit is definitief"><a href='?control=medewerker&action=delete&id=<?= $activiteit->getId();?>'><img src="img/verwijder.png"></a></td>
                </tr>
                <?php endforeach;?>
                <tr>
                    <td>
                        <a href='?control=medewerker&action=add'>
                            <figure>
                                <img src="img/toevoegen.png" alt='voeg een activiteit toe' title='voeg een activiteit toe' />
                            </figure>
                        </a>
                    </td>
                    <td colspan='8'>Voeg een activiteit toe</td>
                </tr>
            </tbody>
        </table>
        <table>
            <caption>Dit zijn alle soorten activiteiten</caption>
            <thead>
                <tr>
                    <td>Naam</td>
                    <td>Min leeftijd</td>
                    <td>Tijdsduur</td>
                    <td>Prijs</td>
                    <td colspan="2">acties</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($soortActiviteiten as $soort): ?>
                <tr>
                    <td><?= $soort->getNaam();?></td>
                    <td><?= $soort->getMin_leeftijd();?></td>
                    <td><?= $soort->getTijdsduur();?></td>
                    <td><?= $soort->getPrijs();?></td>

                    <td title="bewerk de gegevens van deze soort"><a href='?control=medewerker&action=updateSoort&id=<?= $soort->getId();?>'><img src="img/bewerk.png"></a></td>
                    <td title="verwijder deze soort is definitief"><a href='?control=medewerker&action=deleteSoort&id=<?= $soort->getId();?>'><img src="img/verwijder.png"></a></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td>
                        <a href='?control=medewerker&action=addSoort'>
                            <figure>
                                <img src="img/toevoegen.png" alt='voeg een soort toe' title='voeg een soort toe' />
                            </figure>
                        </a>
                    </td>
                    <td colspan='8'>Voeg een soort toe</td>
                </tr>
            </tbody>
        </table>
        <br />
    </section>
<?php include 'includes/footer.php';