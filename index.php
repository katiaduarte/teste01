<?php
$jogador01name="computador";
$jogador02name="você";
$descricao="Este é um jogo de JokenPo <br> 0-pedra <br> 1-papel <br> 2 - tesoura<br><br>";
$min=0;
$max=2;
$jogador1=rand($min,$max);
$jogador2=rand($min,$max);

echo $descricao;
echo "$jogador01name: $jogador1 <br>";
echo "$jogador02name: $jogador2 <br><br>";

$pedra=0;
$papel=1;
$tesoura=2;

if(($jogador1>=0 && $jogador1<=2)&&($jogador2>=0 && $jogador2<=2)){
	if($jogador1==$jogador2){
		echo "Empate! Que pena, atualize a página e tente a sorte novamente!";
	}elseif(($jogador1 - $jogador2==-2) || ($jogador1 - $jogador2==1)){
        echo "O $jogador01name ganhou! Que pena, atualize a página e tente a sorte novamente!";
    }else{
        echo "Parabéns! $jogador02name ganhou! Atualize a página e tente a sorte novamente! ";
    }
}else{
	echo "Deu a louca no sistema!!! Nosso programador já foi acionado!";
}

?>