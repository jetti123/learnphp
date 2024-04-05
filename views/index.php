<?php include '<partials/header.php'; ?>
    <h1>Hello <?=$name?></h1>
    <ul>
        <?php foreach ($fruits as $fruit) : ?>
            <?php if ($fruit != 'Apple') : ?>
                <li>
                    <?=$fruit?>
                </li>
            <?php else : ?>
                <li>
                    <i>
                        <?=$fruit?>
                    </i>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>      
    </ul>
<?php include 'partials/footer.php'; ?>

