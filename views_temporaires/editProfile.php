<main>
    <section id="user-settings">
        <form id="uploadPfp">
            <input id="imageUpload" type="file" accept="image/*">
            <button type="submit" id="uploadBtn">Upload</button>
            <p>note: the image will be automatically resized to 230*230</p>
        </form>

        <form id="set-biography">
            <textarea maxlength="300" id="bioTextarea"
                placeholder="Write something about yourself... (max 300 characters)"></textarea>
            <div id="the-count">
                <span id="count">300</span>
                <span id="maximum">/ 300</span>
            </div>
            <button type="submit" id="set-biography-btn">Set Biography</button>
        </form>
    </section>
</main>