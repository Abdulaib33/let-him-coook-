<h2> Create a New Monster</h2>

<form action="?page=create" method="post">
    <p>
        <label>Name: <br>
            <input type="text" name="name" required>
        </label>
    </p>

    <p>
        <label>PV: <br>
            <input type="number" name="pv" required>
        </label>
    </p>

    <p>
        <label>Attack: <br>
            <input type="number" name="attack" required>
        </label>
    </p>

    <p>
        <label>Defense: <br>
            <input type="defense" name="defense" required>
        </label>
    </p>

    <p>
        <label>Description: <br>
            <textarea name="description" rows="4" cols="40"></textarea>
        </label>
    </p>

    <p>
        <button type="submit">Create Monster</button>
    </p>

</form>

<p><a href="?page=list"> Back to List</a></p>