<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @author Suellyn Specie <Twitter: @suspecie>
 */
/**
 * Instancia a classe TCPDF que transforma o relatório em PDF
 */
include './PHPJasperXML/class/tcpdf/tcpdf.php';

/**
 * Instancia a classe PHPJasperXML
 */
include './PHPJasperXML/class/PHPJasperXML.inc.php';

/**
 * Inclui o arquivo com a conexão do banco de dados
 */
include './PHPJasperXML/setting.php';




//caminho do arquivo jrxml
$xml = simplexml_load_file('./relatorio/phpjasperxml.jrxml');

//instancia a classe PHPJasperXML
$PHPJasperXML = new PHPJasperXML();

//se true mostra o sql
$PHPJasperXML->debugsql = false;

$descricao = null;
$titulo = null;
$pageheader = null;
$footer = null;
$pagefooter = null;
$summary = null;


//verifica se o post esta diferente de vazio
if (!empty($_POST)) {
  $descricao = $_POST["descricao"]; //recebendo o parâmetro descrição
  $titulo = $_POST["titulo"];
  $pageheader = $_POST["pageheader"];
  $footer = $_POST["footer"];
  $pagefooter = $_POST["pagefooter"];
  $summary = $_POST["summary"];
}

//verifica se o get esta diferente de vazio
if (!empty($_GET['descricao'])) {

  $descricao = $_GET["descricao"]; //recebendo o parâmetro descrição
  $titulo = $_GET["titulo"];
  $pageheader = $_GET["pageheader"];
  $footer = $_GET["footer"];
  $pagefooter = $_GET["pagefooter"];
  $summary = $_GET["summary"];
}


//passa o parâmetro cadastrado no iReport
$PHPJasperXML->arrayParameter = array("descricao" => $descricao,
  "titulo" => $titulo,
  "pageheader" => $pageheader,
  "footer" => $footer,
  "pagefooter" => $pagefooter,
  "summary" => $summary,
); 


$PHPJasperXML->xml_dismantle($xml);

//conecta com o banco de dados
$PHPJasperXML->connect($server, $user, $pass, $db);

$PHPJasperXML->transferDBtoArray($server, $user, $pass, $db);

// método de saída página I: saída padrão D: Baixar o arquivo
$PHPJasperXML->outpage("I");
?> 
