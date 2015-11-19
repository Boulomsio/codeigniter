<form>

<?php echo validation_errors(); ?>

<?php echo form_open('form/myform'); ?>

    <label for="idClient">Quel est votre ID utilisateur ?</label>
    <input type="number" name="idClient" /><br />

    <label for="Date_Arrivee">Date d'Arrivee</label>
    <input type="date" name="Date_Arrivee" placehorder="YYYY-MM-DD"><br />
    
    <label for="Date_Depart">Date de Depart</label>
    <input type="date" name="Date_Depart" placehorder="YYYY-MM-DD"><br />
    
    <label for="Nb_Personnes">Pour combien de personne(s) ?</label>
    <input type="number" name="Nb_Personnes" /><br />
    
    <label for="Menage">Souhaitez vous un forfait menage ?</label>
    <br>
    <input type="radio" name="Menage" value="1">oui<br>
    <input type="radio" name="Menage" value="0">Non<br />
    <input type="submit" name="submit" value="Réserver !" />

</form>

    