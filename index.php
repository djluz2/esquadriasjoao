<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Sesc-RS | InovaSesc</title>
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="css/geral.css" rel="stylesheet">
	<style type="text/css">
		.carousel-caption {
			bottom: 0;
			background-color: #00000066;
			left: 0;
			right: 0;
			width: 100%;
			padding-bottom: 45px;
			color: #fff;
		}

		.carousel-caption a, .carousel-caption a:visited, .carousel-caption a:hover, .carousel-caption a:active {
			color: #fff;
		}

		.carousel-indicators li {
			height: 8px;
		}

		.teste-bg-fixed {
			/*min-height: 300px;*/
			background-image: url("img/carrossel/alumat_banner.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: 50% 50%;
			padding-top: 75px;
			padding-bottom: 75px;
		}

	</style>
	<script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<!--<script language="javascript" type="text/javascript" src="js/scripts.js"></script>​-->
	<script type="text/javascript">
		$(document).ready(function() {

			/*** MOSTRA LARGURA DA PÁGINA ***/
	
			$(window).resize(function() {
				var largura = $(this).width();
				console.log(largura);
			});

			console.log($(window).width());

		});
	</script>
</head>
<body>

	<?php
	
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);

	//require_once("../classes/projetos/model.php");
	//require_once("classes/model/mpvsModel.php");
	/*
	require_once("class/carrosselModel.php");

	//$mpvs = new MpvsModel();
	$carrossel = new CarrosselModel();

	$dados = $carrossel->listaResultados();
	$carouselIndicators = '';
	$carouselItem = '';
	$carouselItemActive = '';
	$carouselIndicatorsActive = '';

	
	for($i=0; $i < count($dados); $i++) {
		//echo "<p>".$dados[$i]['id']." - ".$dados[$i]['imagem']." - ".$dados[$i]['link']." - ".$dados[$i]['titulo']." - ".$dados[$i]['subtitulo']." - ".$dados[$i]['usuario']." - ".$dados[$i]['datacadastro']."</p>";
		$carouselItemActive = '';
		$carouselIndicatorsActive = '';

		if($i == 0) {
			$carouselIndicatorsActive = ' class="active"';
			$carouselItemActive = ' active';
		}

		//$carouselIndicators .= '<li data-target="#carousel" data-slide-to="0" class="active"></li>';
		$carouselIndicators .= '<li data-target="#carousel" data-slide-to="'.$i.'"'.$carouselIndicatorsActive.'></li>';

		$carouselItem .= '
			<div class="carousel-item'.$carouselItemActive.'">
				<a href="'.$dados[$i]['link'].'" target="_blank"><img src="img/carrossel/'.$dados[$i]['imagem'].'" class="img-carousel" alt="Los Angeles"></a>
				<div class="carousel-caption">
					<h3><a href="'.$dados[$i]['link'].'" target="_blank">'.$dados[$i]['titulo'].'</a></h3>
					<p><a href="'.$dados[$i]['link'].'" target="_blank">'.$dados[$i]['subtitulo'].'</a></p>
				</div>
			</div>
		';
	}
	*/

	?>

	<div class="linha geral">
    
		<div class="linha topo">
        	<?php include('menu_topo.php'); ?>
		</div>
        
        <?php
        
        //$secoes = $mpvs->listaSecoesTextos($_GET['id']);
        //$titulo = $secoes[0]['titulo'];
        //$texto = '';

        ?>

		<div class="linha conteudo-centro" style="min-height: 200px;">
			<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
					<?php //echo $carouselIndicators; ?>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/carrossel/fabrica-de-esquadrias-de-alumínio-1280x720.jpg" class="img-carousel" alt="Los Angeles">
						<div class="carousel-caption" style="display: none;">
							<h3>asd sa sdsa</h3>
							<p>as dsa a sa a sa fd fds sdfds gsd dffg sd d</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="img/carrossel/esquadrias-piscina.jpg" class="img-carousel" alt="Chicago">
						<div class="carousel-caption" style="display: none;">
							<h3>eee ew ew e</h3>
							<p>cxvc faf s as sa</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="img/carrossel/esquadrias-linha-gold.jpg" class="img-carousel" alt="New York">
						<div class="carousel-caption" style="display: none;">
							<h3>htnthn n  ngrgg</h3>
							<p>as dad s dasll jefijweotweje</p>
						</div>
					</div>
					<?php //echo $carouselItem; ?>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#carousel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#carousel" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
			<div class="linha centro">
				<div class="linha-meio">
					<div class="linha inline-block bloco-poscarrossel">
						<div class="linha bloco-card">
							<div class="linha img-poscarrossel">
								<img src="img/icone-esquadria.png">
							</div>
							<div class="linha">
								<h4>Esquadrias de Alumínio</h4>
							</div>
							<div class="linha">
								Realizamos a execução de projetos de acordo com seu desejo e necessidade.
							</div>
						</div>
						<div class="linha bloco-card">
							<div class="linha img-poscarrossel">
								<img src="img/icone-telefone.png">
							</div>
							<div class="linha">
								<h4>Contato</h4>
							</div>
							<div class="linha">
								Entre em contato pelo telefone (51) 33458666 para que possamos agendar um orçamento.
							</div>
						</div>
						<div class="linha bloco-card">
							<div class="linha img-poscarrossel">
								<img src="img/icone-dinheiro.png">
							</div>
							<div class="linha">
								<h4>Investimento</h4>
							</div>
							<div class="linha">
								Consições especiais e variadas formas de pagamento para atender a sua necessidade.
							</div>
						</div>
					</div>
				</div>

				<div class="linha box-projeto teste-bg-fixed">
					<div class="linha-meio">
						<div class="linha inline-block orcamento-left" style="">
							<span style="font-weight: 900; text-shadow: -1px -1px 2px #444;">Precisa de um orçamento?</span>
							<span style="font-weight: 900; text-shadow: -1px -1px 2px #444;">Entre em contato conosco</span>
						</div>
						<div class="linha inline-block orcamento-right" style=""><a href="tel:+5551999887766" class="btn btn-primary" style="width: 200px; padding-top: 15px; padding-bottom: 15px; font-size: 18px; font-weight: 600;">Ligue agora</a></div>
					</div>
				</div>

				<div class="linha-meio">
					<div class="linha inline-block bloco-poscarrossel">
						<div class="linha" style="padding-bottom: 20px;">
							<h1 class="titulo-quicksand">Projetos em destaque</h1>
						</div>
						
						<!--<div class="linha box-projeto">
							<div class="img-projetos" style=""><img src="img/cellphone-close-up-devices-92903.png" style=""></div>
							<div class="descritivo-projetos" style="">
								<div class="linha esquerda">
									<h3>Sesc App 2.0</h3>
								</div>
								<div class="linha esquerda">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim pellentesque neque vel ullamcorper. Maecenas sagittis sapien eget mi malesuada, vitae bibendum orci semper. Aliquam non felis ut nibh hendrerit semper.
								</div>
								<div class="linha direita" style="margin-top: 20px;">
									<div class="ajusta-tags-direita tag">
										<a href="#">
											<label>
												Mais
												<span class="material-icons ajusta-tags-direita">keyboard_arrow_right</span>
											</label>
										</a>
									</div>
									<div class="ajusta-tags-direita tag">
										<span class="material-icons ajusta-tags-esquerda">phonelink</span>
										<label>
											Tecnologia
										</label>
									</div>
									<div class="ajusta-tags-direita tag">
										<span class="material-icons ajusta-tags-esquerda">monetization_on</span>
										<label>
											Economia
										</label>
									</div>
								</div>
							</div>
						</div>-->

						<!--<div class="linha box-projeto">
							<div class="img-projetos" style=""><img src="img/cellphone-close-up-devices-92903.png" style=""></div>
							<div class="descritivo-projetos" style="">
								<div class="linha esquerda">
									<h3>Microsoft Planner e como descomplicar o planejamento</h3>
								</div>
								<div class="linha esquerda">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim pellentesque neque vel ullamcorper. Maecenas sagittis sapien eget mi malesuada, vitae bibendum orci semper. Aliquam non felis ut nibh hendrerit semper.
								</div>
								<div class="linha direita" style="margin-top: 20px;">
									<div class="ajusta-tags-direita tag">
										<a href="#">
											<label>
												Mais
												<span class="material-icons ajusta-tags-direita">keyboard_arrow_right</span>
											</label>
										</a>
									</div>
									<div class="ajusta-tags-direita tag">
										<span class="material-icons ajusta-tags-esquerda">phonelink</span>
										<label>
											Tecnologia
										</label>
									</div>
									<div class="ajusta-tags-direita tag">
										<span class="material-icons ajusta-tags-esquerda">monetization_on</span>
										<label>
											Economia
										</label>
									</div>
								</div>
							</div>
						</div>-->

						<div class="linha box-projeto">
							<div class="img-projetos" style=""><img src="img/Esquadrias-de-alumínio.jpg" style=""></div>
							<div class="descritivo-projetos" style="">
								<div class="linha esquerda">
									<h3>Esquadrias práticas em tempos de economia</h3>
								</div>
								<div class="linha esquerda">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim pellentesque neque vel ullamcorper. Maecenas sagittis sapien eget mi malesuada, vitae bibendum orci semper. Aliquam non felis ut nibh hendrerit semper.
								</div>
								<!--<div class="linha direita" style="margin-top: 20px;">
									<div class="ajusta-tags-direita tag">
										<a href="#">
											<label>
												Mais
												<span class="material-icons ajusta-tags-direita">keyboard_arrow_right</span>
											</label>
										</a>
									</div>
									<div class="ajusta-tags-direita tag">
										<span class="material-icons ajusta-tags-esquerda">phonelink</span>
										<label>
											Tecnologia
										</label>
									</div>
									<div class="ajusta-tags-direita tag">
										<span class="material-icons ajusta-tags-esquerda">monetization_on</span>
										<label>
											Economia
										</label>
									</div>
								</div>-->
							</div>
						</div>

						<!--<div class="linha box-projeto">
							<a href="" class="btn bt-conheca-projetos">Conheça mais projetos como estes</a>
						</div>-->

					</div>
				</div>
			</div>
        </div>

        <div class="linha rodape">
	    	<!--<a href="http://www.sesc-rs.com.br"><img src="img/logo_sesc.png"></a>-->
	    	<div class="linha centro margem-baixo fonte-branca">
	    		<div class="linha bloco-card">
	    			<div class="linha esquerda">
						<h3>Equadrias João</h3>
					</div>
					<div class="linha esquerda">
						<div class="linha">Esquadrias de alumínio</div>
						<div class="linha">Porto Alegre / RS</div>
						<div class="linha">Aceitamos todos os cartões</div>
						<div class="linha"></div>
					</div>
	    		</div>
	    		<div class="linha bloco-card">
	    			<div class="linha esquerda">
						<h3>Localização</h3>
					</div>
					<div class="linha esquerda">Av. Teresópolis, 123</div>
					<div class="linha esquerda">Bairro Teresópolis</div>
					<div class="linha esquerda">Porto Alegre - RS</div>
					<div class="linha esquerda">CEP 91000-000</div>

	    		</div>
	    		<div class="linha bloco-card">
	    			<div class="linha esquerda">
						<h3>Horário de atendimento</h3>
					</div>
					<div class="linha esquerda">De segunda a sexta-feira das 9h às 18h</div>
					<div class="linha esquerda">
						<h3>Contato</h3>
					</div>
					<div class="linha esquerda">(51) 3322.6634</div>
					<div class="linha esquerda">(51) 99887.4256</div>
	    		</div>
	    	</div>
	    </div>
             
	</div>
    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>