<P>Utilizando banco de dados Mysql e os comandos SQL básicos</P>

Esta aula explicaremos o que é um banco de dados, revisão de métodos GET e POST para envio de dados utilizando o nodemcu para armazenar dados na nuvem. Para começar é preciso ter um servidor linux com serviço de web e bancos de dados com acessos a comandos padrões SQL. Utilizaremos o serviço de instância AWS, porém pode ser realizado localmente em sua rede intranet, desde que o nodemcu e o servidor web tenham acesso entre si. A seguir apresentamos a video aula gravada no TEAMS, e disponilizamos os códigos necessários para implementar no repositório Github e os comandos básicos de SQL utilizados para construir este exemplo de aplicação.

Repositório de arquivos:  https://github.com/mchavesferreira/php_app

Para instalação utilizar o comando:  git clone https://github.com/mchavesferreira/php_app

## Comandos básicos Mysql

### conecta com o banco de dados via terminal localmente

 ```ruby  
 mysql -u root -p

 ```
Acesso remoto utilizando rds

 ```ruby  
mysql -u admin -h enderecoservidor -p

 ```
### mostra base de banco de dados
 ```ruby 
show databases;
 ```
### Cria base de dados

 ```ruby 
Create Database meubanco;
 ```

###  seleciona base de dados

 ```ruby 
use meubanco;
 ```

## Criação de tabelas

### Tipos de Campos Mais Comuns em MySQL


| Tipo de Campo | Descrição | Exemplo de Uso |
|---------------|-----------|----------------|
| INT           | Um número inteiro. Pode ser assinado (negativo e positivo) ou não assinado (apenas positivo). | Idade, quantidade. |
| VARCHAR       | Uma cadeia de caracteres de comprimento variável. Requer um comprimento definido. | Nomes, endereços de email. |
| TEXT          | Um texto longo. Útil para armazenar cadeias de caracteres de comprimento indeterminado. | Descrições de produtos, posts de blog. |
| DATE          | Data no formato YYYY-MM-DD. | Data de nascimento, datas de eventos. |
| DATETIME      | Combina data e hora no formato YYYY-MM-DD HH:MM:SS. | Timestamps de quando um registro foi criado ou atualizado. |
| FLOAT/DOUBLE  | Números com pontos decimais. `FLOAT` é para precisão simples e `DOUBLE` para precisão dupla. | Preços, medidas. |
| BOOLEAN       | Armazena verdadeiro ou falso (representado por 1 e 0, respectivamente). | Status ativo/inativo, opções de sim/não. |
| ENUM          | Um campo que pode armazenar um dos valores predefinidos. | Status de pedido (como `Pendente`, `Completo`, `Cancelado`). |


### Exemplo de criação de tabelas

Para criar uma tabela de cadastro de alunos no MySQL, que inclua os campos ID, Time, Nome e RG, você pode usar o seguinte comando SQL:
```java
CREATE TABLE CadastroAlunos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Time VARCHAR(255),
    Nome VARCHAR(255),
    RG VARCHAR(20) UNIQUE
);

```

#### Neste exemplo, CadastroAlunos é o nome da tabela. Aqui estão alguns detalhes sobre a definição dos campos:


- ID INT AUTO_INCREMENT PRIMARY KEY:
Define o campo ID como um inteiro que é autoincrementado para cada novo registro inserido na tabela. Este campo também é a chave primária, o que garante que cada valor seja único e não nulo.
    
- Time VARCHAR(255):
Define o campo Time como uma string variável que pode conter até 255 caracteres. Ele pode ser usado para armazenar informações sobre a turma ou o horário do aluno.


- Nome VARCHAR(255):
Similar ao campo Time, este campo armazena o nome do aluno e pode conter até 255 caracteres.
     
Define o campo RG para armazenar o RG do aluno, com um máximo de 20 caracteres. O modificador UNIQUE garante que cada RG na tabela seja único, prevenindo registros duplicados.
    

Lembre-se de ajustar o tamanho dos campos VARCHAR conforme necessário para se adequar às suas necessidades específicas. Por exemplo, se você sabe que os nomes dos alunos não excederão 50 caracteres, você pode definir o campo Nome como VARCHAR(50) para economizar espaço na base de dados.



A tabela a seguir descreve os tipos de campos (ou colunas) mais comuns usados em tabelas MySQL, que são essenciais para armazenar diferentes tipos de dados:

### CRIA TABELA

```java
CREATE TABLE tempLog (

timeStamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

temperature int(11) NOT NULL,

humidity int(11) NOT NULL,

PRIMARY KEY (timeStamp) );

 ```

### descreve características da base de dados

 ```ruby 
describe tempLogo;
 ```
 

### insere uma linha de dados

 ```ruby 
INSERT INTO tempLog (temperature, humidity) VALUES ('33','56');
 ```
 
### Exemplo de comandos para seleção de dados todas as linhas da base de dados

SELECT * FROM tempLogo;

SELECT temperature FROM tempLogo;

SELECT * FROM tempLogo limit 1; // limita 1 linha

SELECT * FROM tempLogo limit 2,3; // limita 1 linha

SELECT * FROM tempLogo order by timeStamp ASC;

SELECT * FROM tempLogo order by timeStamp DESC;

SELECT * FROM tempLogo where temperature=23;

SELECT * FROM tempLogo WHERE DATE(timeStamp) = CURDATE();

SELECT * FROM tempLogo WHERE DATE_SUB(CURDATE(),INTERVAL 1 DAY);

 

### apagar linhas da tabela por seleção

DELETE from tempLogr where humidity=50;

 

### apagar tabela completa

DROP TABLE tempLogr;

 

### alterar um campo na tabela

UPDATE users SET nome = Marcos, email = mchavesferreira@gmail.com WHERE ra=CT120893;

 

### adicionar colunas mysql

ALTER TABLE users ADD COLUMN urljson VARCHAR(120);

ALTER TABLE blogusers ADD COLUMN  summary TEXT;


### deletar coluna da tabela

ALTER TABLE DROP COLUMN ;

### modificar coluna

ALTER TABLE blogusers MODIFY title varchar(60);

 

### Select com agrupamento de dados

http://www.artfulsoftware.com/infotree/qrytip.php?id=78


### Referências:

ESP32/ESP8266 Insert Data into MySQL Database using PHP and Arduino IDE:  https://randomnerdtutorials.com/esp32-esp8266-mysql-database-php/

Guia Mysql: https://dev.mysql.com/doc/refman/8.0/en/creating-tables.html

Playlist Curso de Banco de daos Mysql. Curso em Vídeo https://www.youtube.com/playlist?list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r
