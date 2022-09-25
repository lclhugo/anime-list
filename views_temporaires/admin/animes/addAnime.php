     <section id="addAnimeToDb">
        <form id="uploadCover" action="AddAnime.php" method='POST'>
            <input id="imageUpload" type="file" accept="image/*">
            <button type="submit" id="uploadCoverBtn">Upload</button>
            <textarea maxlength="300" id="bioTextarea"placeholder="synopsis"></textarea>        
            <select id="animeType">
                <option value="">Select type</option>
                <option value="TV">TV</option>
                <option value="Movie">Movie</option>
                <option value="OVA">OVA</option>
                <option value="Special">Special</option>
                <option value="ONA">ONA</option>
                <option value="Music">Music</option>
            <input type="number" id="episodesNumber" placeholder="Episodes" min="1" max="999">
            <input type="date" id="releaseDate" placeholder="Release date">
            <input type="date "id="finishDate" placeholder="Finish date">
            <input type="text" id="studio" placeholder="Studio">
            <input type="text" id="genres" placeholder="Genres">
            <input type="submit" value="Add to d"/>

        </form>
    </section>