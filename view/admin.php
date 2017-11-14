<section>
    <article>
        <form id="addForm" action="add_card.php" method="post">
            <label>Add new to: Cards</label>
            <input class="formObject" type="text" name="title" placeholder="Titre">
            <textarea class="formObject textarea" name="text" rows="4" cols="50" form="addForm" placeholder="Description"></textarea>
            <input class="formObject" type="text" name="image" placeholder="Image URL">
            <input class="formObject submit" type="submit" name="submit" value="Add">
        </form>
    </article>
    <article>
        <form id="addFormPortfolio" action="add_portfolio.php" method="post">
            <label>Add new to: Portfolio</label>
            <input class="formObject" type="text" name="title" placeholder="Titre">
            <textarea class="formObject textarea" name="text" rows="4" cols="50" form="addFormPortfolio" placeholder="Description"></textarea>
            <input class="formObject" type="text" name="image" placeholder="Image URL">
            <input class="formObject" type="text" name="link" placeholder="Link to URL">
            <input class="formObject submit" type="submit" name="submit" value="Add">
        </form>
    </article>
</section>