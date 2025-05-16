<h2>Edit Monsters: <?php echo $monster['name'] ?></h2>

<form action="?page=edit&id=<?php echo $monster['id'] ?>" method="post">

    <p>
        <label> Name: <br>
            <input type="text" name="name" value="<?php echo $monster['name'] ?>" required>
        </label>
    </p>
    
    <p>
        <label> PV: <br>
            <input type="text" name="pv" value="<?php echo $monster['pv'] ?>" required>
        </label>
    </p>

    <p>
        <label> Attack: <br>
            <input type="text" name="attack" value="<?php echo $monster['attack'] ?>" required>
        </label>
    </p>

    <p>
        <label> Defense: <br>
            <input type="text" name="defense" value="<?php echo $monster['defense'] ?>" required>
        </label>
    </p>

    <p>
        <label> Description: <br>
            <textarea name="description" rows="4" cols="40" required><?php echo htmlspecialchars($monster['description']); ?></textarea>
        </label>
    </p>

    <p>
        <button type="submit"> Update Monster</button>
    </p>

</form>


<p>
    <a href="?page=show&id=<?php echo $monster['id'] ?>"> Back to Details</a>
</p>