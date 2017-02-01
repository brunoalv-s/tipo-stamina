<?php
    $NomeEmpresa       = 'Clinica Veterinária Klabin';
    $slogan            = 'Proporcionamos cuidados médicos com carinho e atenção para seu Animal.';
    $author            = 'http://www.tipopublicidade.com.br';
    $creditos          = 'Tipo Publicidade';
    //$url			   = 'http://localhost/Klabin/site/;
    $url               = 'http://www.tipopublicacao.com.br/Klabin/';
    $ramo              = 'recepcaoo@veterinariaklabin.com.br';
    $email             = 'Clinica Veterinária';
    $tel               = '(11) 2371-5065';
    $whats             = '(11) 98810-9132';
    $horafuncionamento = 'Segunda a Sexta das 09:00 às 21:00 e Sábados das 09:00 às 19:00.';
    $endereco          = 'Rua Professor Serafim Orlandi, 70';
    $bairro            = 'Chácara Klabin';
    $cep               = '04115-090';
    $cidade            = 'São Paulo - SP';
    $logotipo          = 'assets/imagens/logo.png';
    $logofoot          = 'assets/imagens/logo.png';
    $favicon           = 'favicon.ico';

    $myURL             = explode("/", $_SERVER['PHP_SELF']);
    $urlPagina         = end($myURL);
    $imagem            = str_replace('.php', '.jpg', $urlPagina);
    $urlPagina         = str_replace('.php', '', $urlPagina);
    $canonical         = $url.$urlPagina;

    //Redes Sociais
    $linkgoogle        = 'https://plus.google.com/u/0/b/114082044214562474874/114082044214562474874/about';
    $linkface          = 'https://www.facebook.com/vetklabin';
    $CodFanpage        = '133738616787932'; //findmyfbid.com
    $linktwitter       = 'https://twitter.com/ClinicaKlabin';
    $creatortwitter    = '@ClinicaKlabin';
?>
