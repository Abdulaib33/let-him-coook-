<h2><?php echo $monster['name'] ?></h2>

<ul>
    <li><strong>PV:</strong> <?php echo $monster['pv'] ?></li>
    <li><strong>Attack:</strong> <?php echo $monster['attack'] ?></li>
    <li><strong> Defense:</strong> <?php echo $monster['defense'] ?></li>
    <li><strong>Created:</strong> <?php echo $monster['created_at']?></li>
    <li><a href="?page=edit&id=<?php echo $monster['id'] ?>"> ✏️ Edit this monster</a></li>
    <!-- <li><a href="?page=list">Return to list</a></li> -->
</ul>