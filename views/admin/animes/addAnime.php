<main>
    <form method='POST' action='/admin/anime/add'>
        <input type='text' name='title' placeholder='Title'>
        <input type='text' name='cover' placeholder='Cover URL'>
        <input type='text' name='synopsis' placeholder='Synopsis'>
        <input type='text' name='type' placeholder='Type'>
        <input type='number' name='ep_count' placeholder='Episodes'>
        <input type='number' name='year' placeholder='Year'>
        <input type='text' name='studio' placeholder='Studio'>
        <button type='submit'>Add to database</button>
    </form>
</main>