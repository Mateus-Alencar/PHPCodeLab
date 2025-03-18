<?php
// função verifica se o login está feito
function checaLogin($login, $status){
      if(isset($login['login'])){
            if(!empty($login['login']) and ($status['status'] == false)) {
                $aviso = 'Você não está logado, faça o login para continuar';
                $status=false;
                echo $aviso;
                die();
            }
        } else {
             $status['status'] = true;
             $aviso = 'Você está logado';
             echo $aviso;
        }
    }
?>
