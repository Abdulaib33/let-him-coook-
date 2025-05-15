<h1>Monsters List</h1>

<ul>

    <?php foreach ($monsters as $monster): ?>

        <li>
            <a href="?page=show&id=<?php echo $monster['id']; ?>">
                <?php echo $monster['name'] ?> (PV: <?php echo $monster['pv'] ?>)
            </a>
           
        </li>

    <?php endforeach;?>

</ul>