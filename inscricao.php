<!DOCTYPE html>
<html lang="pt-br">
	<?php  include "./elementos/head.php"; ?>
	<body>
		<?php  include "./elementos/nav.php"; ?>
		<main>
			<div class="deposito">
				Para participar das palestras, você deverá: <br/>
				1. Fazer a Inscrição que é sem custos.<br><br>
				<img class="inscreva" src="IMG/inscreva.jpg">
				          
				2. Caso queria participar de algum mini curso:<br><br>
				    Realizar depósito bancário para:<br>
				     <b>Banco do Brasil<br/>
				     Agência: 2014-1<br/>
				     Conta-Corrente: 29.911-1<br/>
				     Titular: Marcelo Alves Guimarães</b><br/><br/>
				3. Verificar se o mini-curso tem <b>pré-requisito</b> e se o inscrito se encaixa.
				    <br/><br/>

				     4. Enviar a cópia do <b> comprovante de depósito</b>
				     para o e-mail: <a href="mailto:coreti@protonmail.com"><u>coreti@protonmail.com</u></a> em até 48 horas após ter concluído o preenchimento do Formulário, para confirmação da sua inscrição.
				    <br/><br/>
				<table class="striped responsive-table">
					<thead class="black white-text">
						<tr>
							<th>Mini-Cursos</th>
							<th>02/10/2017</th>
							<th>05/11/2017</th>
							<th>Vagas</th>
							<th>Pré-Requisitos</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Introdução ao Arduíno</td>
							<td>R$15,00</td>
							<td>R$20,00</td>
							<td>20</td>
							<td></td>
						</tr>
						<tr>
							<td>BootStrap</td>
							<td>R$15,00</td>
							<td>R$20,00</td>
							<td>20</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Photoshop</td>
							<td>R$15,00</td>
							<td>R$20,00</td>
							<td>20</td>
							<td></td>
						</tr>
						<tr>
							<td>Introdução ao Linux</td>
							<td>R$15,00</td>
							<td>R$20,00</td>
							<td>20</td>
							<td></td>
						</tr>
						<tr>
							<td>Segurança:Teste de Vulnerabilidade</td>
							<td>R$15,00</td>
							<td>R$20,00</td>
							<td>20</td>
							<td>X</td>
						</tr>
					</tbody>
				</table>
				<div class="row">
					<div class="col s12 l3 m12">
					</div>
					<div class="col s12 l3 m12">
						<a class="waves-effect waves-light black btn modal-trigger" href="#modal2" >Fazer inscrição</a>
					</div>
					<div class="col s12 l3 m12">
						<a class="waves-effect waves-light black btn modal-trigger" href="#modal1">Pré-requisitos</a>
					</div>
				</div>
				
			</div>
		<?php  include "modal-requisito.php"; ?>
		<?php  include "modal-inscricao.php"; ?>
		</main>

		
		<?php  include "./elementos/footer.php"; ?>
		<?php  include "./elementos/scripts.php"; ?>

	</body>
</html>