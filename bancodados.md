<P>Utilizando banco de dados Mysql e os comandos SQL básicos</P>

Esta aula explicaremos o que é um banco de dados, revisão de métodos GET e POST para envio de dados utilizando o nodemcu para armazenar dados na nuvem. Para começar é preciso ter um servidor linux com serviço de web e bancos de dados com acessos a comandos padrões SQL. Utilizaremos o serviço de instância AWS, porém pode ser realizado localmente em sua rede intranet, desde que o nodemcu e o servidor web tenham acesso entre si. A seguir apresentamos a video aula gravada no TEAMS, e disponilizamos os códigos necessários para implementar no repositório Github e os comandos básicos de SQL utilizados para construir este exemplo de aplicação.

Repositório de arquivos:  https://github.com/mchavesferreira/php_app

Para instalação utilizar o comando:  git clone https://github.com/mchavesferreira/php_app

Aula síncrona TEAMS Banco de dados e requisições POST e GET

5:59 Protocolo Http, www, TCP/IP, DNS

12:05 Requisições GET e POST

15:44 Projeto NodeMcu

22:28 Introdução ao Mysql.

38:31 Repositório projeto php_app Comentários sobre arquivos

41:01 - Criando base de dados, uso de comandos SQL

56:20 Utilizando RDS com base de dados e uso do repositório php_app

1:06:30 Inserindo dados via POST e GET via php

1:09:59 Uso de um código .ino para envio de dados via GET e POST (arquivo1 e  arquivo2)
Comandos básicos Mysql

// conecta com o banco de dados via terminal localmente

 mysql -u root -p

Acesso remoto utilizando rds

mysql -u admin -h database-1.cscbnowewjwj.sa-east-1.rds.amazonaws.com -p

// mostra base de banco de dados

show databases;

// Cria base de dados

Create Database meubanco;

// seleciona base de dados

use meubanco;

 

// CRIA TABELA

CREATE TABLE tempLog (

timeStamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

temperature int(11) NOT NULL,

humidity int(11) NOT NULL,

PRIMARY KEY (timeStamp) );

 

// descreve características da base de dados

describe tempLogo;

 

// insere uma linha de dados

INSERT INTO tempLog (temperature, humidity) VALUES ('33','56');

 

// Exemplo de comandos para seleção de dados todas as linhas da base de dados

SELECT * FROM tempLogo;

SELECT temperature FROM tempLogo;

SELECT * FROM tempLogo limit 1; // limita 1 linha

SELECT * FROM tempLogo limit 2,3; // limita 1 linha

SELECT * FROM tempLogo order by timeStamp ASC;

SELECT * FROM tempLogo order by timeStamp DESC;

SELECT * FROM tempLogo where temperature=23;

SELECT * FROM tempLogo WHERE DATE(timeStamp) = CURDATE();

SELECT * FROM tempLogo WHERE DATE_SUB(CURDATE(),INTERVAL 1 DAY);

 

//apagar linhas da tabela por seleção

DELETE from tempLogr where humidity=50;

 

// apagar tabela completa

DROP TABLE tempLogr;

 

// alterar um campo na tabela

UPDATE users SET nome = Marcos, email = mchavesferreira@gmail.com WHERE ra=CT120893;

 

// adicionar colunas mysql

ALTER TABLE users ADD COLUMN urljson VARCHAR(120);

ALTER TABLE blogusers ADD COLUMN  summary TEXT;

// deletar coluna da tabela

ALTER TABLE DROP COLUMN ;

//modificar coluna

ALTER TABLE blogusers MODIFY title varchar(60);

 

// Select com agrupamento de dados

http://www.artfulsoftware.com/infotree/qrytip.php?id=78

Referências:

ESP32/ESP8266 Insert Data into MySQL Database using PHP and Arduino IDE:  https://randomnerdtutorials.com/esp32-esp8266-mysql-database-php/

Guia Mysql: https://dev.mysql.com/doc/refman/8.0/en/creating-tables.html

Playlist Curso de Banco de daos Mysql. Curso em Vídeo https://www.youtube.com/playlist?list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r
