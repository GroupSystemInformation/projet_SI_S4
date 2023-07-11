<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php foreach ($regime as $regime) : ?>
    <div class="card">
        <div class="card-header">
            <?php echo $regime->nom_regime; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Repas</h5>
            <table>
                <?php foreach ($repas as $repa) : ?>

                    <?php foreach ($repa as $item) : ?>
                        <?php if ($item->id_regime === $regime->id_regime) : ?>
                        <tr>
                            <td><?php echo $item->matin; ?></td>
                            <td><?php echo $item->soir; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    
                <?php endforeach; ?>
            </table>

            <h5 class="card-title">Sports</h5>
            <table>
                <?php foreach ($sport as $sp) : ?>
                    <?php foreach ($sp as $item) : ?>
                        <?php if ($item->id_regime === $regime->id_regime) : ?>
                            <tr>
                                <td><?php echo $item->nom_sport; ?></td>
                                <td><?php echo $item->duree_heure_jour; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    
                <?php endforeach; ?>
            </table>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>
