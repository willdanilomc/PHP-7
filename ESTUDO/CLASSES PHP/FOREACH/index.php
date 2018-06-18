<?php

$nomeDosAlunos = array(
    "Willian",
    "Gustavo",
    "Everton"
);

//Cria uma array e depois mostra os nome dentro dessa array
foreach ($nomeDosAlunos as $index => $alunos){
    echo $index . "<br>";
    echo " Nomes dos alunos " . $alunos . "<br>";
}

?>

<form action="">

<input type="text" name="nome">
<input type="text" name="nascimento">
<input type="submit" value="ok">

</form>

<?php

if (isset($_GET)) {
    foreach ($_GET as $key) {
        echo "Nome do campo" . $key;
    }
}
?>
