<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>
<?php
if (isset($_GET)) { //Se $_GET não é nulo
    # code...

foreach ($_GET as $key => $value) {

    echo "Nome do campo: ". $key;
    echo "<br>Valor do campo: ".$value;
    echo "<hr>";
    # code...
}}
?>