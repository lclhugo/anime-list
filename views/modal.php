// modal qui apparait lorsqu'on clique sur le bouton "Ajouter" dans la liste 

    <section id="modal-form">
        <form action="">

            <label for="watching-status">Status:</label>
            <select name="watching-status" id="watching-status">
                <option value="watching">Watching</option>
                <option value="completed">Completed</option>
                <option value="planning">Planning</option>
            </select>

            <label for="watching-score">Score:</label> 
            <input type="number" name="watching-score" id="watching-score" min="0" max="10" value="0">

            <label for="watching-progress">Progress:</label>
            <input type="number" name="watching-progress" id="watching-progress" min="0" max="100" value="0">

            <button type="submit">Submit</button>
            <button type="delete">Remove from list</button>


        </form>

    </section>