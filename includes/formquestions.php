<script src="js/hide.js"></script>

<form method="post" action="traitement.php" onchange="hide()" id="form-questions">
    <div class="col-sx-3 col-md-6">
        <select class="form-control" name="choix">
            <option value="choix1" id="to_hide">categorie de la question</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
        </select>
    </div>
    <div class="col-sx-3 col-md-6">
        <select class="form-control" name="question" onchange="hide1()" >
            <option value="q1" id="to_hide1">numeros de la question</option>
            <option value="c2">q2</option>
            <option value="q3">q3</option>
            <option value="q4">q4</option>
        </select><br>
    </div>
    <div class="form-group">
        <textarea name="message"disabled="disabled" rows="8" cols="50">
            replacement par la question sortie de la bases de donnees
        </textarea>
    </div>
    <div class="radio">
        <label class="radio-inline">
            <input type="radio" name="rep" value="rep1" id="rep1" /> <label for="rep1">tres bien</label>
        </label>
        <label class="radio-inline">
            <input type="radio" name="rep" value="rep2" id="rep2" /> <label for="rep2">bien</label>
        </label>
        <label class="radio-inline">
            <input type="radio" name="rep" value="rep3" id="rep3" /> <label for="rep3">passable</label>
        </label>
        <label class="radio-inline">
            <input type="radio" name="rep" value="rep4" id="rep4" /> <label for="re41">decevant</label>
        </label>
        <label class="radio-inline">
            <input type="radio" name="rep" value="rep4" id="rep4" /> <label for="rep5">rien</label>
        </label>
    </div>


</form>

</div>
