
<?php
include('../../../connection/conn_db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
	<title>Selección- Hablatel CC</title>

	<!-- CSS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/form-elements.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../css/estilo.css">
	
	<script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<style type="text/css">
		.orientar{
			padding-top: 20px;
			text-align: left;
			font-size: 20px;
			padding-left: 70px;
		}
		.test{
			width: 800px;
			text-align: center;
			background:#e4e4e4; 
			margin-left: auto;
			margin-right: auto;
			overflow: scroll;
			height: 600px;
		}
		.conta {
          display: flex;
          flex-direction: column;
          align-items: center;
        }
        
        .header {
          display: flex;
          align-items: center;
        }
        
        .timer, .errors,
        .accuracy, .cpm, .wpm {
          background-color:white;
          height: 80px;
          width: 95px;
          margin: 8px;
          padding: 12px;
          border-radius: 20%;
          box-shadow: grey 5px 8px 5px;
        }
        
        .errors{
          color: red;
        }
        .wpm{
          color: rgb(16, 197, 16);
        }
        .cpm, .wpm  {
          display: none;
        }
        
        .head {
          text-transform: uppercase;
          font-size: 12px;
          font-weight: 600;
          color: skyblue;
          font-weight: bolder;
        }
        
        .init_time, .init_errors,
        .init_accuracy, .init_cpm,
        .init_wpm {
          font-size: 35px;
        }
        
        .content {
          background-color: white;
          font-weight: bolder;
          margin: 10px;
          padding: 25px;
          box-shadow: grey 5px 8px 5px;
          border-radius: 10px 10px 10px 10px;
          color: #333;
        }
        
        .input_box {
          background-color: white;
          height: 100px;
          width: 40%;
          font-size: 18px;
          margin: 10px;
          padding: 15px;
          border: 0px;
          box-shadow: grey 5px 8px 5px;
          border-radius: 10px 10px 10px 10px;
        }
        
        
        .correct{
          color: rgb(82, 200, 82);
        }
        
        .restart {
          display: none;
          background-color: skyblue;
          font-size: 18px;
          padding: 10px;
          border: 0px;
          color: whitesmoke;
          border-radius: 10px 10px 10px 10px;
          width: 30%;
          font-weight: bold;
          box-shadow: grey 5px 8px 5px;
        }
        
        .start {
          background-color: #337ab7;
          font-size: 18px;
          padding: 10px;
          border: 0px;
          color: whitesmoke;
          border-radius: 10px 10px 10px 10px;
          width: 30%;
          box-shadow: grey 5px 8px 5px;
        }

	</style>

</head>

<body>

	<!-- Top menu -->
	<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Hablatel Contac Center</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="top-navbar-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<span class="li-text">
							Puedes ver nuestro
						</span> 
						<a href="#"><strong>Aviso de privacidad</strong></a> 
						<span class="li-social">
							<a href="#" target="_blank"><i class="fa fa-user-shield"></i></a> 
						</span>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="width: 1100px;">
		<div class="row">
			<section>
				<div class="wizard" style="height: 800px;">
					<div class="wizard-inner">
						<div class="connecting-line"></div>
						<ul class="nav nav-tabs" role="tablist">

							<li role="presentation" class="disabled">
								<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
									<span class="round-tab">
										<i class="glyphicon glyphicon-text-color"></i>
										<p style="text-align: center;"></p>
									</span>
								</a>
							</li>

							<li role="presentation" class="disabled">
								<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
									<span class="round-tab">
										<i class="glyphicon glyphicon-scale"></i>
									</span>
								</a>
							</li>
							<li role="presentation" class="active">
								<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
									<span class="round-tab">
										<i class="glyphicon glyphicon-dashboard"></i>
									</span>
								</a>
							</li>
							<li role="presentation" class="disabled">
								<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
									<span class="round-tab">
										<i class="glyphicon glyphicon-user"></i>
									</span>
								</a>
							</li>
							<li role="presentation" class="disabled">
								<a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
									<span class="round-tab">
										<i class="glyphicon glyphicon-headphones"></i>
									</span>
								</a>
							</li>

							<li role="presentation" class="disabled">
								<a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
									<span class="round-tab">
										<i class="glyphicon glyphicon-ok"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>


					<form role="form" action="test-action3.php" method="post">

						<div class="tab-content">
							<div class="tab-pane active" role="tabpanel" id="step1">
								<h3><strong>TEST DE ESCRITURA</strong></h3>
								<p style="font-size: 20px;">Haz click en "Empieza a escribir..." te apareceran una serie de palabras que escribiras, evaluaremos tu habilidad para escribir en teclado.</p>
								<br>
    							<div class="conta">
                                    <div class="border">
                                      <div class="header">
                                
                                        <div class="wpm">
                                          <div class="head">Palabras/m</div>
                                          <div class="init_wpm">100</div>
                                        </div>
                                        
                                        <div class="errors">
                                          <div class="head">Errores</div>
                                          <div class="init_errors">0</div>
                                        </div>
                                        
                                        <div class="timer">
                                          <div class="head">Tiempo</div>
                                          <div class="init_time">60s</div>
                                        </div>
                                        
                                        <div class="accuracy">
                                          <div class="head">Preciso(%)</div>
                                          <div class="init_accuracy">100</div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="content" style="display: none;"></div>
                                    <textarea class="input_box" id="texto" placeholder="Empieza a escribir..." oninput="textInput()"
                                    onfocus="startGame()"></textarea>
                                    <br>
                                    
                                    <button class="restart" onclick="resetValues()">Restart</button>
                                  </div>
                            </div>
							<ul class="list-inline pull-right">
							     <input type="hidden" name="cali" value="">
								<li><button type="submit" class="btn btn-primary next-step" >Guadar y seguir</button></li>
							</ul>
					   </div>
						<?php
						    mysqli_close($conn);
						?>
						<div class="clearfix"></div>
					</form>
				</div>
			</section>
		</div>


		<!-- Javascript -->
		<script src="../assets/js/jquery-1.11.1.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/js/jquery.backstretch.min.js"></script>
		<script src="../assets/js/retina-1.1.0.min.js"></script>
		<script src="../assets/js/scripts.js"></script>
		<script src="../js/wizard.js"></script>
		<script src="../js/speed.js"></script>
		
        <script>
            window.onload = function() {
              var myInput = document.getElementById('texto');
              var tex= 
              myInput.onpaste = function(e) {
                e.preventDefault();
                }
            }
            
            
        </script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

    </html>