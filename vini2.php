<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "banco";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
    $conexao = new mysqli("localhost", "root", "", "banco");

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Obter dados do formulário
    $roteador_ap_antena = $_POST["roteador_ap_antena"];
    $ip = $_POST["ip"];
    $mascara = $_POST["mascara"];
    $porta = $_POST["porta"];
    $porta_https = $_POST["porta_https"];
    $admin_http = $_POST["admin_http"];
    $senha = $_POST["senha"];
    $admin_ssh = $_POST["admin_ssh"];
    $senha_ssh = $_POST["senha_ssh"];
    $ip_wan = $_POST["ip_wan"];
    $mascara_wan = $_POST["mascara_wan"];
    $gateway = $_POST["gateway"];
    $dns_1 = $_POST["dns_1"];
    $dns_2 = $_POST["dns_2"];
    $ddns = $_POST["ddns"];
    $ssid = $_POST["ssid"];
    $canal = $_POST["canal"];
    $tipo_seguranca = $_POST["tipo_seguranca"];
    $encriptacao = $_POST["encriptacao"];
    $chave = $_POST["chave"];

    // Inserir dados na tabela roteadores
    $sql = "INSERT INTO roteadores (ROTEADOR_AP_ANTENA, IP, MÁSCARA, PORTA, PORTA_HTTPS, ADMIN_HTTP, SENHA, ADMIN_SSH, SENHA_SSH, IP_WAN, MÁSCARA_WAN, GATEWAY, DNS_1, DNS_2, DDNS, SSID, CANAL, TIPO_DE_SEGURANÇA, ENCRIPTAÇÃO, CHAVE) VALUES ('$roteador_ap_antena', '$ip', '$mascara', '$porta', '$porta_https', '$admin_http', '$senha', '$admin_ssh', '$senha_ssh', '$ip_wan', '$mascara_wan', '$gateway', '$dns_1', '$dns_2', '$ddns', '$ssid', '$canal', '$tipo_seguranca', '$encriptacao', '$chave')";

    if ($conexao->query($sql) === TRUE) {
        echo "Dados do Roteador inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados do Roteador: " . $conexao->error;
    }

    // Fechar conexão
    $conexao->close();
}
?>
