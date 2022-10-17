<?php
$xml_signo = "<?xml version='1.0' encoding='UTF-8'?>
<signos>
    <signo>
        <dataInicio>21/03</dataInicio>
        <dataFim>20/04</dataFim>
        <signoNome>Aries</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>21/04</dataInicio>
        <dataFim>20/05</dataFim>
        <signoNome>Touro</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>21/05</dataInicio>
        <dataFim>20/06</dataFim>
        <signoNome>Gemeos</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>21/06</dataInicio>
        <dataFim>22/07</dataFim>
        <signoNome>Cancer</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>23/07</dataInicio>
        <dataFim>22/08</dataFim>
        <signoNome>Leao</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>23/08</dataInicio>
        <dataFim>22/09</dataFim>
        <signoNome>Virgem</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>23/09</dataInicio>
        <dataFim>23/10</dataFim>
        <signoNome>Libra</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>23/10</dataInicio>
        <dataFim>21/11</dataFim>
        <signoNome>Escorpiao</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>22/11</dataInicio>
        <dataFim>21/12</dataFim>
        <signoNome>Sargitario</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>22/12</dataInicio>
        <dataFim>20/01</dataFim>
        <signoNome>Capricornio</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>21/01</dataInicio>
        <dataFim>19/02</dataFim>
        <signoNome>Aquario</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
    <signo>
        <dataInicio>19/02</dataInicio>
        <dataFim>20/03</dataFim>
        <signoNome>Peixes</signoNome>
        <descricao>Lorem ipsum dolor sit amet.</descricao>
    </signo>
</signos>";

$data = $_POST['data'];
$dia = $data->format('d');
$mes = $data->format('m');
$xml = new SimpleXMLElement($xml_signo);
?>

<!--Corpo html da página-->
<!DOCTYPE html>
<html lang="pt-br">
<head><title>Forum - Prgramação Web</title></head>
<body>
    <div>
        <h3>O signo é?</h3>

        <?php 
            foreach($xml->signo as $sig):
                $dataInicio = $sig->dataInicio;
                $dataFim    = $sig->dataFim;
				
				$diaSignoInicio = $dataInicio->format('d');
				$mesSignoInicio = $dataInicio->format('m');
				
				$diaSignoFim = $dataInicio->format('d');
				$mesSignoFim = $dataInicio->format('m');								

                if (($dia >= $diaSignoInicio && $mes >= $mesSignoInicio) &&
					($dia <= $diaSignoFim && $mes <= $mesSignoFim))
				{
                    <span>Signo: <?php echo $sig->signoNome . '</br>'; ?>
                    <span>Sobre: <?php echo $sig->descricao . '</br>'; ?>
                }            
            endforeach;
            echo '</br>'
        ?>
    </div>       
</body>
</html>