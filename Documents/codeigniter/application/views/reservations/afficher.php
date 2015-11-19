<h1> 
    <?php echo "$titre";
    ?> 
</h1>
<p> Liste des réservations </p>
<?php foreach ($reserv as $reserv_item):
    ?>
    <h3>
        <p> N° réservations
        </p>
        <?php echo $reserv_item['idReserv'];
        ?>
    </h3>
    <h4>
        <p> N° client 
        </p>
        <?php echo $reserv_item['idUtil'];
        ?>
    </h4>
<?php endforeach;
?>