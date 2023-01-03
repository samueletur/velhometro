<?php 
$data_inicio = new DateTime("2022-12-24 15:00:00");
$data_fim = new DateTime("now");

$dateInterval = $data_inicio->diff($data_fim);
$kms = $dateInterval->days * 37.5;
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://antonioborba.com.br/velhometro/dist/output.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center bg-yellow-500 justify-center">
    <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
        <div class="text-yellow-100">
            <h1 class="text-5xl lg:text-9xl text-center mb-2 lg:mb-5">VELHÔMETRO</h1>
            <h1 class="text-2xl lg:text-7xl text-center mb-6 lg:mb-10 font-light">Data de início: <span class="font-medium	" >25/12/2022</span></h1>
            <div class="text-6xl lg:text-9xl text-center flex w-full items-center justify-center">
                <div class="mx-1 px-8 py-3 bg-white text-yellow-500 rounded-lg">
                    <div class="font-mono leading-none" x-text="days"><?=$kms?><span class="font-mono uppercase text-2xl">Km<small>s</small></span></div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>