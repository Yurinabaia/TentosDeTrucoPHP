<!DOCTYPE html>
<html>
<head>
	<title>Tento do Truco</title>
	<meta charset="utf-8">
	<style type="text/css">
			#esquerda{

		float: left; width: 50%;			
	}

			#direita{
			 float: right; width: 50%;
			}
	</style>
</head>
	<body>	
		<div id="imagem">
			<img src="https://www.odefensor.com.br/site/wp-content/uploads/2018/06/truco.jpg">
		</div>
			<div id="esquerda"> 
			<form method="get" action="TentoA.php">

				<h1>Equipe A</h1>
					<h3>Valor: 
					<!--Aqui vai ser retornado o banco de dados -->  
										<!--Aqui vai ser retornado o banco de dados -->               
<?php  
$Conut = 0;
$valoe = 0;
$valorFazernada = 0;
					// conecta ao banco de dados
				include_once("conexaoA.php");
				$sql = "SELECT * FROM tentosa"; //Recebendo valores do Banco de dados
		 		$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
while ($registro = mysqli_fetch_array($resultado))//Transformando os dados do bancos em array
 {
   $nome = $registro['equipeA'];
   $id = $registro['id'];
   $Conut++;
 }
 $sql = "SELECT sum(equipeA) FROM tentosa";//Fazendo a soma dos dados do Banco de dados
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
 while ($registro = mysqli_fetch_array($resultado)) //Transformando os dados do banco de dados da soma em array
 {
 	$soma = $registro['sum(equipeA)'];
 }
 if($soma >= 12)//Verificando se os valores são maiores que 12, se for 12 apagar todos os valores do banco de dados
 {
	 for ($i=0; $i < $Conut; $i++) 
	 { 
		 $sql = "DELETE FROM `tentosa` WHERE `tentosa`.`id` = $id";//Deletando valores do banco
		 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
		 //echo $id; //apenas para testar o apagamento dos dados no banco
		 $id = $id -1;
	 }
	 echo "Parabéns EQUIPE A venceu o jogo";
	 $valorFazernada =1;
}
if($valorFazernada ==0) 
{
	 echo $soma;
}
 //echo  "<br> Quantidade é " .$Conut; //Quantidade de vezes que está pecorrendo meu vetor

 mysqli_close($strcon);

?> 
				                  
					</h3>
				<button formmethod="post" value="0" name="Tentos">Zero</button>
				<br>
				<br>
				<button formmethod="post" value="2" name="Tentos">Dois</button>
				<br>
				<br>
				<button formmethod="post" value="4" name="Tentos">Truco</button>
				<br>
				<br>
				<button formmethod="post" value="8" name="Tentos">Seis</button>
				<br>
				<br>
				<button formmethod="post" value="10" name="Tentos">Nove</button>
				<br>
				<br>
				<button formmethod="post" value="12" name="Tentos">Doze</button>
				<br>
				<br>
				<br>
			</div>
			</form>

			<div id="direita"> 
			<form method="post" action="TentoB.php">
				<h1>Equipe B</h1>
					<h3>Valor: 
					<!--Aqui vai ser retornado o banco de dados -->  
										<!--Aqui vai ser retornado o banco de dados -->               
<?php  
$Conut = 0;
$valoe = 0;
$valorFazernada = 0;
					// conecta ao banco de dados
				include_once("conexaoB.php");
				$sql = "SELECT * FROM tentosb"; //Recebendo valores do Banco de dados
		 		$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
while ($registro = mysqli_fetch_array($resultado))//Transformando os dados do bancos em array
 {
   $nome = $registro['equipeB'];
   $id = $registro['id'];
   $Conut++;
 }
 $sql = "SELECT sum(equipeB) FROM tentosb";//Fazendo a soma dos dados do Banco de dados
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
 while ($registro = mysqli_fetch_array($resultado)) //Transformando os dados do banco de dados da soma em array
 {
 	$soma = $registro['sum(equipeB)'];
 }
 if($soma >= 12)//Verificando se os valores são maiores que 12, se for 12 apagar todos os valores do banco de dados
 {
	 for ($i=0; $i < $Conut; $i++) 
	 { 
		 $sql = "DELETE FROM `tentosb` WHERE `tentosb`.`id` = $id";//Deletando valores do banco
		 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");//Verificando se a algum erro na hora de carregar os valores
		 //echo $id; //apenas para testar o apagamento dos dados no banco
		 $id = $id -1;
	 }
	 echo "Parabéns EQUPIE B venceu o jogou ";
	 $valorFazernada = 1;
}
if($valorFazernada ==0) 
{
	 echo $soma;
}
 //echo  "<br> Quantidade é " .$Conut; //Quantidade de vezes que está pecorrendo meu vetor

 mysqli_close($strcon);

?> 
				     
					</h3>
				<button formmethod="post" value="0" name="TentosB">Zero</button>
				<br>
				<br>
				<button formmethod="post" value="2" name="TentosB">Dois</button>
				<br>
				<br>
				<button formmethod="post" value="4" name="TentosB">Truco</button>
				<br>
				<br>
				<button formmethod="post" value="8" name="TentosB">Seis</button>
				<br>
				<br>
				<button formmethod="post" value="10" name="TentosB">Nove</button>
				<br>
				<br>
				<button formmethod="post" value="12" name="TentosB">Doze</button>
				<br>
				<br>
				<br>
				
			</form>

			</div>				
	</body>
</html>