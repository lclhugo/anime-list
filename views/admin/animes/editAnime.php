<main>
    <h1>Edit anime</h1>
    <form method='POST' action='/admin/anime/<?= $params['anime']->id ?>/edit'>
        <input type='text' name='title' placeholder='Title' value='<?= $params['anime']->title ?>'>
        <input type='text' name='cover' placeholder='Cover URL' value='<?= $params['anime']->cover ?>'>
        <input type='text' name='synopsis' placeholder='Synopsis' value='<?= $params['anime']->synopsis ?>'>
        <input type='text' name='type' placeholder='Type' value='<?= $params['anime']->type ?>'>
        <input type='number' name='ep_count' placeholder='Episodes' value='<?= $params['anime']->ep_count ?>'>
        <input type='number' name='year' placeholder='Year' value='<?= $params['anime']->year ?>'>
        <input type='text' name='studio' placeholder='Studio' value='<?= $params['anime']->studio ?>'>
        <button type='submit'>Update</button>
    </form>
</main>