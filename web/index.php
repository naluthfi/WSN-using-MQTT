<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	  <script>
		var refreshId = setInterval(function()
		{
			$("#tabelkuy").load("tabel.php");
		}, 5000);
		var refreshgraf = setInterval(function()
		{
			$("#grafikkuy").load("grafik.php");
		}, 5000);
		var refreshnil = setInterval(function()
		{
			$("#nilaikuy").load("nilai.php");
		}, 5000);
	   </script>
	   <!-- Navbar -->
	  <div class="col l12" style="background-color: #4e77ba; color: white; font-family: 'Francois One', sans-serif; padding:10px; font-size:20px;">
		 KELOMPOK 5
	  </div>
	  <!-- Utama -->
	  <div class=" row col l12">
		  <!-- Dashboard samping -->
		  <div class="col l2" style="Background:#253959; padding-bottom:389px; margin-bottom:-30px; padding-top:20px;">
			<div class="col l12" style="margin-left:-10px;margin-top:15px; border-bottom:solid white 2px;">
				<div  class="col l2" style="margin-left:-10px; margin-right:10px;"> <img style="width: 600%; border-radius:50%;" src="img/luthfi.jpg">
				</div >
				<div class="col l10" style="color: white; padding-top:15px; padding-left:30px; font-family: 'Francois One', sans-serif;">
					Luthfi Nur Aida
				</div>
			</div>
			<div class="col l12" style="margin-left:-10px;margin-top:15px; border-bottom:solid white 2px;">
				<div class="col l2" style="margin-left:-10px; margin-right:10px;"> <img style="width: 600%; border-radius:50%;" img src="img/dandi.jpg">
				</div>
				<div class="col l10" style="color: white; padding-top:15px; padding-left:30px; font-family: 'Francois One', sans-serif;">
					Dandi Wibowo
				</div>
			</div>
			<div class="col l12" style="margin-left:-10px; margin-top:15px; border-bottom:solid white 2px; margin-right:-20px;" >
				<div class="col l2" style="margin-left:-10px; margin-right:10px;"> <img style="width: 600%; border-radius:50%;" img src="img/habib.jpg">
				</div>
				<div class="col l10" style="color: white;  padding-left:30px; padding-top:15px; font-family: 'Francois One', sans-serif;">
					Habib Al-Hakim
				</div>
			</div>
		  </div>
		  
		   <!-- Isi -->
		  <div div class="col l10" style="Background:white;">
			<!-- Sensor -->
			<div class="row col l12" style="background-color:#f4f4f4;">
				<div class="col l3" style="Padding:15px;">
					<div class="col l5" style="background-color:#2571ce; color: white; padding-top:30px; padding-bottom:13px;">
						<i class="material-icons"  style="font-size:80px;">rss_feed</i>
					</div>
					<div class="col l7" style="background-color:white;padding:5px;">
						<div style="font-family: 'Francois One', sans-serif; font-size:20px; margin-bottom:0px;">Ultrasonik</div>
						<div class="row col l12" style="margin-bottom:0px;">
							<div class="col l12" style="font-family: 'Francois One', sans-serif; font-size:40px;  margin-bottom:-40px;" id="nilaikuy"></div>
							<div class="col l12" style="font-family: 'Francois One', sans-serif; font-size:20px; padding-top:40px;">centimeter</div>
						</div>
					</div>
				</div>
				<div class="col l3" style="Padding:15px;">
					<div class="col l5" style="background-color:#f4427a; color: white; padding-top:30px; padding-bottom:13px;">
						<i class="material-icons"  style="font-size:80px;">clear</i>
					</div>
					<div class="col l7" style="background-color:white;padding:5px;">
						<div style="font-family: 'Francois One', sans-serif; font-size:20px; margin-bottom:15px;">Not Connected</div>
						<div class="row col l12" style="margin-bottom:35px;">
							<div class="col l6" style="font-family: 'Francois One', sans-serif; font-size:60px;"></div>
							<div class="col l6" style="font-family: 'Francois One', sans-serif; font-size:20px; padding-top:40px;"></div>
						</div>
					</div>
				</div>
				<div class="col l3" style="Padding:15px;">
					<div class="col l5" style="background-color:#41f48c; color: white; padding-top:30px; padding-bottom:13px;">
						<i class="material-icons"  style="font-size:80px;">clear</i>
					</div>
					<div class="col l7" style="background-color:white;padding:5px;">
						<div style="font-family: 'Francois One', sans-serif; font-size:20px; margin-bottom:15px;">Not Connected</div>
						<div class="row col l12" style="margin-bottom:35px;">
							<div class="col l6" style="font-family: 'Francois One', sans-serif; font-size:60px;"></div>
							<div class="col l6" style="font-family: 'Francois One', sans-serif; font-size:20px; padding-top:40px;"></div>
						</div>
					</div>
				</div>
				<div class="col l3" style="Padding:15px;">
					<div class="col l5" style="background-color:#f44143; color: white; padding-top:30px; padding-bottom:13px;">
						<i class="material-icons"  style="font-size:80px;">clear</i>
					</div>
					<div class="col l7" style="background-color:white;padding:5px;">
						<div style="font-family: 'Francois One', sans-serif; font-size:20px; margin-bottom:15px;">Not Connected</div>
						<div class="row col l12" style="margin-bottom:35px;">
							<div class="col l6" style="font-family: 'Francois One', sans-serif; font-size:60px;"></div>
							<div class="col l6" style="font-family: 'Francois One', sans-serif; font-size:20px; padding-top:40px;"></div>
						</div>
					</div>
				</div>
				
			</div>
			 <!-- bawah -->
			  <div class="col l12">
				<div class="col l6" id="grafikkuy">
					
				</div>
				<div class="col l6" style="width: 530px;height:400px;overflow: scroll;">
					<div id='tabelkuy'>
					</div>
				</div>
			  </div>
		  </div>
		  
		 
	  </div>
    </body>
  </html>