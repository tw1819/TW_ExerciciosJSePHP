<?php
class Tabuada {
    public $tamanho;
    public $tabuada;

    public function __construct($t,$n) {
        $this->tamanho = $t;
        $this->tabuada = $n;
    }

    public function geraHTML() {
        echo "<div>";
        echo "<h3> Tabuada do ".$this->tabuada."</h3>";
        for($i=0; $i<=$this->tamanho; $i++) {
            echo "<p>".$this->tabuada." x ". $i . " = ". $i * $this->tabuada;
        }
        echo "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Esta é a minha página das tabuadas </h1>
<?php

$tabA = new Tabuada(5,8);
$tabB = new Tabuada(9,10);

echo "<p>". $tabA->tamanho . "</p>";
echo "<p>". $tabB->tamanho . "</p>";

$tabB->geraHTML();
?>
</body>
</html>
