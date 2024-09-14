<?php include "cabecalho.php"; ?>
<?php
//Array de 14 índices (0 a 13)
$nomes = Array("Jonas Silva Jatobá", "Marcos Vinicius Sanches Cardoso", "Mariana dos Santos", "Matheus Marquezin Genebra", "Rafael Tsutai Massaki", "Rebéca Rodrigues de Oliveira", "Rodolfo Leonardo Romo", "Rodrigo Miranda dos Santos", "Sarah Vitória Pedroso da Silva", "Tayna Adriana da Silva", "Vanessa Alvares Bernardo", "Vinicius Gabriel Gonçalves dos Santos", "Vitor Takayuki Hirotomi", "Wylliam dos Santos Florentino");
?>
<h1>Sorteador de nomes</h1>
<p>Este site sorteia um dos nomes abaixo aleatoriamente.</p>
<?php 
    for ($i = 0; $i < count($nomes); $i++) { //Este for exibe os nomes disponíveis para sorteio
        echo "<pre>";
        echo "$nomes[$i]";
        echo "</pre>";
    }
?>
<button type="button" class="btn btn-primary" onClick="window.location.reload()">Sortear um nome</button><br> <?php //Este botão recarrega a página ?>
<br>

<?php 
$nomeSorteado = rand(0,13); //Gerador de número aleatório
echo "Nome sorteado: $nomes[$nomeSorteado]"; //Escreve na tela o nome sorteado
?>
<br>
<br>
<br>
<br>
<?php include "rodape.php"; ?>