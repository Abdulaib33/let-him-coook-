<h1>Monsters List</h1>

<button><a href="?page=create">Create A Monster</a></button>

<ul>

    <?php foreach ($monsters as $monster): ?>

        <li>
            <a href="?page=show&id=<?php echo $monster['id']; ?>">
                <?php echo $monster['name'] ?> (PV: <?php echo $monster['pv'] ?>)
            </a>
           
        </li>
        <img src="<?php echo $monster['description'] . $monster['id'] ?>" alt="">

    <?php endforeach;?>

</ul>