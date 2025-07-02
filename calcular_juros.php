<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Juros Simples</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container results-section" >
        <?php

        if ( isset($_POST['capital']) && !empty(trim($_POST['capital'])) &&
        isset($_POST['taxa']) && $_POST['taxa'] !== ' ' && 
        isset($_POST['periodo']) && $_POST['taxa'] !== ' ' ) ;

                $capital = $_POST['capital'];
                $taxa = $_POST['taxa'];
                $periodo = $_POST['periodo'];



                    if (empty($capital) || empty($taxa) || empty($periodo)) 
                    {
                        echo "<p class= error-message>ERRO: Os campos devem estar todos preenchidos.</p>";
                        
                    } elseif ($capital > 0 && $taxa > 0 && $periodo > 0) 
                    {

                            $jurosSimples =$capital * ($taxa / 100)*$periodo;

                            $montanteFinal = $capital + $jurosSimples;

                            echo "<h2> Resultado do Cálculo de Juros Simples</h2>";


                            echo "<div class = form-group>  <p> Capital inicial: <strong> R$ ".number_format( $capital, 2, ',','.')." </strong></p> </div>";

                            echo "<div class = form-group>  <p> Taxa de juros: <strong> $taxa  % ao mês </strong></p></div>";

                            echo "<div class = form-group>  <p> Período:  <strong>$periodo meses <strong</></p></div>";

                            echo "<div class = form-group > <p> Juros cálculados: <strong> R$  " .number_format ( $jurosSimples , 2, ',','.')."</strong> </p> </div>";

                            echo "<div class = form-group>  <p>  Montante final: <strong> R$ ".number_format  ( $montanteFinal, 2, ',','.')." </strong> </p>   </div>";

                            echo "<a href= 'index.html' class = back-button >Calcular Novamente </a>";

                    }
        ?>
    </div>
</body>

</html>