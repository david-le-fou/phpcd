<div class="insert">
    <p> ajouter css</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="css">Attibut</label>
            <input type="text" name="attribut" id="attribut" required>
        <label for="description">Description</label>
            <input type="text" name="description_attr" id="description_attr">
            <button type="submit">Insert</button>
    </form>
</div>
<p>valeur css</p>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <label for="select_attr">Attribut css </label>
    <select name="attr_select" id="attr_select">
        <?php
            foreach($result as $c=>$v):
                    echo "<option valeur=".$result[$c]->getValeur().">".$result[$c]->getValeur()."</option>";
            endforeach;
        ?>      
    </select>
    <label for="css">valeur</label>
        <input type="text" name="valeur" id="valeur" required>
    <label for="description">Description</label>
        <input type="text" name="description_val" id="description_val">
        <button type="submit">Insert</button>
</form>