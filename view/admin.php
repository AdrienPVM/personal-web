<section>
    <article>
        <form id="addForm" action="add.php" method="post">
            <label>Admin Control Panel</label>
            <input class="formObject" type="text" name="title" placeholder="Titre">
            <textarea class="formObject textarea" name="text" rows="4" cols="50" form="addForm" placeholder="Description"></textarea>
            <input class="formObject" type="text" name="image" placeholder="Image URL">
            <input class="formObject submit" type="submit" name="submit" value="Add">
        </form>
    </article>
</section>