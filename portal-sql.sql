-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 06-Set-2018 às 19:19
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `cd_id` int(255) NOT NULL AUTO_INCREMENT,
  `nm_titulo` varchar(255) NOT NULL,
  `nm_slug` varchar(255) NOT NULL,
  `ds_descricao` mediumtext NOT NULL,
  `ds_palavraschave` mediumtext NOT NULL,
  `ds_conteudo` mediumtext NOT NULL,
  `nm_imagem` varchar(255) NOT NULL DEFAULT '/imagens/noticias/null.jpg',
  `dt_data` timestamp NOT NULL,
  `cd_destaque` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`cd_id`, `nm_titulo`, `nm_slug`, `ds_descricao`, `ds_palavraschave`, `ds_conteudo`, `nm_imagem`, `dt_data`, `cd_destaque`) VALUES
(1, 'Museu Nacional conseguiu R$ 20 milhões para reforma em 2014, mas governo federal não aplicou verba', '03-09-2018-museu-nacional-conseguiu-r-20-milhoes-para-reforma-em-2014-mas-governo-federal-nao-aplicou-verba', 'Emenda que destinava montante para a instituição chegou a ser aprovada pelo Congresso e incluída no orçamento, mas não houve execução. Ministério do Planejamento disse que, em 2014, não existia a obrigação de repassar verba de emendas de bancada.', 'museu nacional incendio sem reforma', 'O Museu Nacional da Universidade Federal do Rio de Janeiro (UFRJ), que foi destruído em um incêndio de grandes proporções na noite deste domingo (2), conseguiu incluir, no orçamento da União para 2014, uma verba de R$ 20 milhões que seria usada para seus projetos mais urgentes, como a retirada de objetos guardados em álcool e, portanto, inflamáveis. O valor, porém, não foi utilizado pelo governo federal.\r\n\r\nUm levantamento da Câmara dos Deputados mostrou, nesta segunda-feira (3), que a verba destinada ao museu encolheu mais de R$ 330 mil entre 2013 e 2017.\r\n\r\nOs R$ 20 milhões foram incluídos no orçamento por meio da emenda parlamentar 7120019, feita pela bancada do Rio de Janeiro na Câmara dos Deputados. O dinheiro era destinado à \"implantação, instalação e modernização de espaços e equipamentos culturais do Museu Nacional no Município do Rio de Janeiro\" (veja na imagem acima).\r\n\r\nPorém, o sistema do orçamento federal mostra que esse valor jamais foi utilizado, segundo uma consulta ao Sistema Integrado de Administração Financeira (Siafi) – que permite o monitoramento dos gastos do govern ofederal – feita pela Associação Contas Abertas a pedido da reportagem.\r\n\r\n\"Como não houve empenho, não aconteceu nada, é a mesma coisa que não tivessem colocado nada no orçamento\", diz Gil Castello Branco, especialista em gastos públicos e economista da associação. Segundo ele, as emendas de bancada não são impositivas. Nos últimos anos, há um entendimento do governo para liberar obrigatoriamente apenas as verbas de emendas individuais e, em 2017, um acordo entre governo e Congresso garantiu a obrigatoriedade de repasse de verbas apenas de duas emendas por bancada.\r\n\r\nNa noite desta segunda, o Ministério do Planejamento afirmou que \"em 2014 não havia ainda emendas de bancada impositivas\", que \"essas emendas eram executadas com o limite orçamentário destinado às despesas discricionárias\" e que, \"sendo assim, cabia ao Ministério da Cultura a priorização da utilização do limite disponível entre suas despesas discricionárias, incluindo aí as despesas da emenda de bancada\".\r\n\r\nO G1 questionou o Ministério da Cultura (MinC) e o Instituto Brasileiro de Museus (Ibram), órgão vinculado ao MinC e destinarário da verba, sobre os motivos pelos quais o valor nunca chegou a ser gasto, mas não recebeu resposta até a publicação desta reportagem.\r\n\r\nA emenda da bancada do Rio foi a primeira de uma série de tentativas do Museu Nacional para conseguir os recursos necessários para adequar sua infra-estrutura administrativa e de exposições, preservar a segurança do acervo e aproximar o local de outros grandes museus de história natural do mundo. Veja a cronologia:\r\n\r\nOutubro de 2013: Ruth Saldanha é contratada para buscar fontes alternativas de financiamento para os projetos de reforma mais urgentes do museu\r\nDezembro de 2013: o Museu Nacional consegue uma emenda da bancada de parlamentares do Rio no valor de R$ 20 milhões\r\nDezembro de 2014: o ano termina sem que a verba de R$ 20 milhões fosse utilizada (procurados, ministérios do Planejamento e da Cultura não explicaram o motivo até a publicação da reportagem)\r\nJulho de 2015: o Museu Nacional começa a negociar junto ao BNDES um contrato de financiamento para executar os projetos mais urgentes de reformas, em valor equivaletne ao da emenda.\r\n6 de junho de 2018: depois de três anos de negociação, visitas, vistorias e obtenção de certidões e documentação, BNDES, UFRJ e a Associação Amigos do Museu Nacional anunciam o contrato de financiamento de R$ 20 milhões; a primeira parcela do dinheiro, no valor de R$ 3 milhões, seria repassada em outubro\r\n2 de setembro de 2018: um incêndio destrói o Palácio de São Cristóvão, na Quinta da Boa Vista, que onde estava o acervo de mais de 20 milhões de itens do Museu Nacional.', 'assets/img/noticias/brazil-fire-museum-2018-09-03t014410.jpg', '2018-09-04 11:00:00', 1),
(2, 'BNDES anuncia edital de R$ 25 milhões para projetos de segurança e prevenção contra incêndio de museus', 'bndes-anuncia-edital-de-r-25-milhoes-para-projetos-de-seguranca-e-prevencao-contra-incendio-de-museus', 'Anúncio foi feito pelo governo federal em Brasília, após reunião para discutir a recuperação do Museu Nacional, destruído em um incêndio no último domingo (2).', 'bndes verba projetos incendio museu', 'O governo federal anunciou nesta terça-feira (4) que o Banco Nacional de Desenvolvimento Econômico e Social (BNDES) lançará um edital de R$ 25 milhões para que museus, arquivos e instituições que lidam com acervos façam projetos de segurança e prevenção de incêndio e modernização de instalações.\r\n\r\nO anúncio do edital foi feito pelo presidente do BNDES, Dyogo Oliveira, após reunião com o presidente Michel Temer e ministros, na qual foi discutida a recuperação do Museu Nacional do Rio de Janeiro, destruído por um incêndio no domingo (2).\r\n\r\n“Nessa reunião de hoje nós sugerimos, e o presidente acatou, o lançamento de um novo edital do BNDES no valor de R$ 25 milhões para projetos de segurança e prevenção contra incêndio e modernização das instalações”, disse Dyogo durante entrevista ao lado de ministros.\r\n\r\nEm 2014, o Museu Nacional conseguiu incluir no orçamento da União uma verba de R$ 20 milhões que seria usada para seus projetos mais urgentes, como a retirada de objetos guardados em álcool e, portanto, inflamáveis. O valor, porém, não foi utilizado pelo governo federal.', 'assets/img/noticias/ministros-planalto-setembro.jpg', '2018-09-03 18:00:00', 0),
(3, 'Museu Nacional: O mistério da múmia que \'provocava transe\' nos anos 60 e foi consumida pelo fogo', 'museu-nacional-o-misterio-da-mumia-que-provocava-transe-nos-anos-60-e-foi-consumida-pelo-fogo', 'Kherima chegou a virar objeto de culto e era a estrela de aulas de egiptologia que aconteciam dentro do museu com a presença de médiuns e sessões de hipnose coletiva.', 'museu nacional mumia mistério', 'Entre os 20 milhões de itens que compunham o acervo do Museu Nacional e que foram consumidos pelo fogo, um em particular despertava grande curiosidade entre os visitantes – e não apenas por sua raridade.\r\n\r\nA múmia Kherima, com cerca de 2 mil anos, foi trazida ao Brasil em um caixote de madeira em 1824 pelo comerciante Nicolau Fiengo. Dois anos depois, foi oferecida em leilão e arrematada por Dom Pedro 1º, que a doou ao então Museu Real, fundado em 1818 e instalado à época no Campo de Santana, na região central da cidade do Rio de Janeiro.\r\n\r\nKherima destacava-se por apresentar membros enfaixados individualmente e decorados sobre linho, o que lhe dava aparência similar à de uma boneca – um estilo de mumificação diferente do da época, menos detalhista, em que os corpos eram \"empacotados\". Além dela, há apenas nove múmias desse tipo no mundo.\r\n\r\n\"Esse era um exemplar muito importante, por conta do tipo de enfaixamento, que preservava a humanidade do corpo; no caso, o contorno do corpo feminino\", diz à BBC News Brasil Rennan Lemos, doutorando em Arquelogia na Universidade de Cambridge, na Inglaterra, e pesquisador-associado do Laboratório de Egiptologia do Museu Nacional (Seshat).\r\n\r\nNo entanto, não era apenas essa característica que atiçava o interesse do público. Relatos de quase 60 anos atrás dão conta que Kherima teria provocado transe em quem se aproximava dela.', 'assets/img/noticias/kherima.jpg', '2018-09-03 11:00:00', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
