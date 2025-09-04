<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha empresinha</title>
    <link rel="stylesheet" href="php.css">
    <img rel="icon" hrel="assets/download-removebg-preview.png">
</head>
<body>
  <?php
  //criptografia da senha
 <form action=""></form>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
 <nav class="navbar">
    <ul class="nav-list">
    <li><a href="#home">Home</a></li>
            <li><a href="#Formulário">Contato</a></li>
          </ul>
        </nav>
        <div class="title">
            <section id="home">
            $nost= 'localhost'
            $user= 'root'; //user padrão
            $password= ''; //senha padrão(vazia)
            $database= 'davinto';

            //conectar ao banco

            $conn= new MYSQL($host$user$password,$database);

            //verificar conexão

            if($conn -> connect_error){
              die("falha na conexão"$conn -> connect_error);

            }

            //receber dados do forms

            $dados= filter_input_arrax (input_fort,filter_default);

            //acessar if quando enviar

            if(!empty($dados["senologin"])){

              //preparar consulta SQL

              $query_usuario= "select (0, senha fazer usuario virefe usuario= ? limit 1";
              $stmt= $icon-> prepare ($query_usuario);
              $stmt-> bind_param("$",$dados["usuario"]);
              $stmt-> execute();
              $resultado= $smt-> get_result();

              if($resultado-> num_rows = = 1){
                //user encontrado, verificar senha

                $row_usuario = $resultado-> fetcw_snoc();
                if(password_verify)

            

            ?>
            </html>
