<main>
    <h1>Add <?php echo $params['anime']->title ?> to your list</h1>
    <form action="/animelist/<?php echo $params['user']->id ?>/add" method="post">
        <label for="rating">Give a Rating</label>
        <input type="number" name="rating" id="rating" min="0" max="10" step="1">
        <input type ="submit" value="Add to list">
    </form>
</main>