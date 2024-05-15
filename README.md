# sebe
Sistemas Embarcados

## Aula 15/05/2024

Prática com NodeRED

Formato JSON

Exemplo de cotação dolar


Protocolo MQTT
flow_exemplos/aula_mqtt.pdf

##  Aula 08/05/2024

Node-red Oficial:  https://flows.nodered.org/

Node-red Apresentação:  http://smartcampus.ctd.ifsp.edu.br/blog/index.php?IDselecionado=50

Instalar Node-red: http://smartcampus.ctd.ifsp.edu.br/blog/index.php?IDselecionado=45


Dashboard exemplo:  
http://avrchaves.duckdns.org:1880/ui


## Aula 24/04/2024

IoT Introdução
Soc, SBC, Esp32...

Exemplo online Esp32+sensor comunicando com API/PHP:   https://wokwi.com/projects/396067644168942593

https://github.com/mchavesferreira/mcr/blob/main/ESP32.md  >> Introdução ao ESP32

https://github.com/mchavesferreira/mcr/tree/main/esp32_iot  >> Utilizando ESP32 em IoT

---------------------------

## Trabalho 1: Orientações para quem não veio nas ultimas aulas.

Passos:
- Criar instância no cloud oracle, com email pessoal ou institucional, escolher instância free, e sistema linux ubuntu (20.xx ou 22.xx)
  
- Instalar Apache, php. (Liberar porta 80 nas configurações de rede, abaixo tem comentário e link de orientação. Conferir a pasta /var/www/html  crie um arquivo .php  para verificar funcionamento)
  
- Instalar mysql  (Liberar porta 3306. A primeira instação será sem senha. Configure senha para "root", pratique os comandos de criação de banco de dados exemplos neste <a href=https://github.com/mchavesferreira/sebe/blob/main/install_php_apache_mysql.md target=_blank>link</a>

Caso tenha erro de conexão com o login root no mysql realize os seguintes passos:

O erro "ERROR 1698 (28000): Access denied for user 'root'@'localhost'" ocorre quando o usuário 'root' não tem permissão de acesso ao MySQL. Esse erro é comum em sistemas como Ubuntu, onde o MySQL usa o plugin de autenticação auth_socket por padrão para o usuário 'root', ao invés de uma senha. Aqui está como você pode corrigir este erro:
Opção 1: Alterar para Autenticação por Senha
 Acesse o MySQL usando sudo:
```java
sudo  mysql -u root
```
Altere o método de autenticação para 'root':

```java
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'sua_nova_senha';
```
Atualize as permissões:

```java
FLUSH PRIVILEGES;
```
Saia do MySQL:

```java
EXIT;
```
Tente conectar novamente sem sudo:

```java
    mysql -u root -p
```
Você será solicitado a inserir a senha que você configurou.


- Acesse via prompt a pasta do apache
  
```java
  cd /var/www/html/
```
Utilize o comando para clonar o projeto para o servidor, caso o comando "git" não esteja instalado, <b>instale!</b>

```java
git clone https://github.com/mchavesferreira/php_app.git
```

Confira que a pasta será copiada automaticamente para o seu servidor, mas ao acessar, faltará configurações de banco de dados, exempo acesse sua pagina no navegador

```java
http://ipdoseuservidor/php_app   
```

Utilize o arquivo:  https://github.com/mchavesferreira/php_app/blob/main/ExComandosSQL.php  para criar o banco de dados <B>sensor</b>, e criar a tabela <b>tempLog</b>, acessao via prompt o seu mysql.

Acesse a pagina e edite as configurações de banco de dados.  No arquivo connect.php, coloque a senha e o banco de dados

```java
sudo su
cd  /var/www/html/php_app
nano  /var/www/html/php_app/connect.php
```

Com isso, sua api deve funcionar, caso o mysql não esteja conectando ao php, confira as autorizações.

Acessando através do navegador (browser), será possível inserir dados manualmente
```java
http://ipdoseuservidor/php_app/form.php
```

<B>Modifique cores, e nomes, cores da api personalize. </b>

## Aulas

- [Sistemas Operacionais](#Sistemas-Operacionais)
- [Trabalho 1](#Trabalho-1)
- [Comandos Básicos para Linux](#Comandos-Básicos-para-Linux)
- [BLOG](#BLOG)
- [Guia Básico para ESP32](#Guia-Básico-para-ESP32)
- [Node-red links de interesse](#Node-red-links-de-interesse)
- [Tago e ESP32](#Tago-e-ESP32)
- [FreeRTOS](#FreeRTOS)

## Sistemas Operacionais
<a href=tanenbaum.pdf> Livro </a>

## Conhecendo o shell Windows
https://github.com/mchavesferreira/sebe/blob/main/sistemaoperacinal.md

## Introdução ao Linux

https://github.com/mchavesferreira/sebe/blob/main/linux.md

## Criação de instância

https://www.oracle.com/br/cloud/free/

Alguns vídeos de orientação:  

https://www.youtube.com/watch?v=CgjfyEt38fI&t=45s

https://www.youtube.com/watch?v=XW7isnD1mWM

https://www.youtube.com/watch?v=2GTPWqv-nAw

Obs: 
Instruções para liberar a porta 80, além de adicionar a regra em "VCN- Virtual cloud network", 
realize no prompt os seguintes comandos:

```java
sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 80 -j ACCEPT
sudo netfilter-persistent save
```
Fonte:  https://blog.tomaszdunia.pl/oracle-free-tier-eng/

Embora os vídes mostrem que o plano Free Tier permita uma instância Free Oracle Cloud VPS (4 Cores 24GB RAM),  não é apenas no domínio Brasil, que está sobrecarregado, uma busca em fóruns revela que outras regiões estão com o mesmo problema. 
Então escolha  Distribuição Linux Ubuntu 20.04 ou 22...   Máquina virtual 1 core 1 GB. No momento foi possível a única disponível porém permite criar duas intâncias.

![Captura de tela 2024-04-03 210148](https://github.com/mchavesferreira/sebe/assets/63993080/abfde088-6210-4a39-9923-e1352c7d8955)



## Instalação de pacotes no servidor
Apache, PHP, Mysql

 orientação:
- https://github.com/mchavesferreira/sebe/blob/main/install_php_apache_mysql.md
- https://github.com/mchavesferreira/sebe/blob/main/slide/desenvolvendo_api_php_html.pdf
- https://insights.ionited.io/ion/configurar-linux-apache-mysql-e-php-lamp-no-ubuntu-2204

## Trabalho 1
Verificar condições no SUAP. 
Utilizar o seguinte repositório:

- https://github.com/mchavesferreira/php_app/
  
- http://smartcampus.ifsp.online/blog/index.php?raselecionado=CT120893

Com a finalidade desenvolver aplicações em nuvem preparando ambiente para IOT, o aluno deve implantar criar uma instância Linux Ubuntu 20.0.4 no AWS. 

<h2>Atividade 03/04/2024 </h2>
Instalar um servidor de web Apache e serviços PHP criação de uma pagina simples código php 

<h2>Atividade 10/04/2024 14h00) </h2>
Instalar Mysql e exemplificar a aplicação  banco de Dados Mysql.  

<h2>Atividade Final Trabalho 1: 21/04/2024 14h00 </h2>
Utilizando o exemplo disposto no repositório, criar uma API com php. Utilizar um node (esp32 ou Esp8266 para consumir a API utilizando método GET. Instalar o pacote de projeto e adaptar o código na instância. 
Utilizar o repositório como referência: https://github.com/mchavesferreira/php_app
Para saber mais sobre ESP32, simulação online: https://github.com/mchavesferreira/mcr/blob/main/ESP32.md
Exemplo em funcionamento:
http://smartcampus.ctd.ifsp.edu.br/aula/php_app/index.php
Insira dados em: http://smartcampus.ctd.ifsp.edu.br/aula/php_app/form.php

Esta atividade compõe 25 % a avaliação final. Apresentar presencialmente em sala de aula ou enviar até 21/04/2024 em SUAP o <b>http://IP</b> de sua instância.


##  Comandos Básicos para Linux


Comando	Resumo	Exemplo
ps	Exibe informações sobre os processos em execução no sistema	ps aux exibe informações detalhadas de todos os processos em execução
top	Exibe informações em tempo real sobre a utilização do sistema, incluindo processos e threads	top -H exibe informações detalhadas sobre os threads em execução
pstree	Exibe uma árvore hierárquica de todos os processos em execução no sistema	pstree -p exibe a árvore hierárquica de processos e seus respectivos IDs

| Command | Description |
| --- | --- |

| Comando | Resumo | Exemplo |
| --- | --- | --- |
| ps | Lista informações sobre os processos em execução | ps -ef |
| top | Mostra em tempo real os processos em execução, uso de CPU e memória | top |
| htop | Similar ao top, mas com uma interface mais amigável | htop |
| pstree
| Mostra a estrutura hierárquica dos processos em execução | pstree |
| kill | Envia um sinal para encerrar um processo especificado | kill 1234 |
| killall | Encerra todos os processos com o nome especificado | killall firefox |
| pgrep | Procura por processos com base em seus nomes ou outras informações | pgrep ssh |
| pkill | Encerra processos com base em seus nomes ou outras informações | pkill firefox |
| ps aux | Lista informações detalhadas sobre todos os processos em execução | ps aux |
|ps -eLf | Lista informações sobre os threads em execução em cada processo | ps -eLf |
| --- | --- | --- |


##  BLOG

Orientações para a disciplina, acompanhe a postagem de trabalhos de outros alunos
<a href=http://smartcampus.ifsp.online/blog/index.php?raselecionado=CT120893>Acesso as postagem do professor</a>

##  Guia Básico para ESP32
<a href=https://github.com/mchavesferreira/mcr/blob/main/ESP32.md>Acesse o link</a>



## Projeto 2
Idéias de projetos
Os temas apresentado a seguir abrangem áreas como sustentabilidade, agricultura, segurança e monitoramento ambiental. Os alunos podem explorar as tecnologias e técnicas necessárias para implementar esses projetos, incluindo a integração do microcontrolador com sensores, comunicação Wi-Fi, armazenamento de dados em um banco de dados e criação de um dashboard para visualização dos dados coletados.

Esses projetos oferecem oportunidades para os alunos aplicarem conceitos de sistemas embarcados, IoT, programação, gerenciamento de dados e interface do usuário, enquanto desenvolvem soluções práticas e inovadoras para problemas do mundo real.


Algumas Idéias:


    (MPC)  Movimentação de Pilares de Concreto
    (DPA)  Detecção da Poluição do Ar
    (UI)  Umidificador Inteligente
    (DVG)  Detecção de Vazamento de Gás
    (CABPIB)  Controle de Acesso Baseado em Processamento de Imagens e Biometria
    (SM) Smart Mirror
    (RI)  Rastreamento Inteligente
    (PiWALL)  Matriz de Monitores
    (DMIA)  Detecção de Movimentos para a Integração com o Ambiente
    (MCETR)Monitoramento de Consumo de Energia em Tempo Real 
    (SII) Sistema de Irrigação Inteligente 
    (CARF) Controle de Acesso com Reconhecimento Facial 
    (MQAAI) Medição de Qualidade do Ar em Ambientes Internos
    (RAG)Rastreamento de Ativos com Geolocalização 
    (MTUA) Monitoramento de Temperatura e Umidade em Ambientes 
    (SME) Sistema de Monitoramento de Estacionamento 
    (ARCV) Automação Residencial com Controle por Voz 
    (SMS) Sistema de Monitoramento de Segurança 
    (GEA) Gerenciamento de Estoque Automatizado 
    (MCAR) Monitoramento de Consumo de Água em Residências 
    (SCEAI) Sistema de Controle de Estufa para Agricultura Inteligente 
    (MVMI) Monitoramento de Vibração em Máquinas Industriais 
    (SADI) Sistema de Alarme e Detecção de Intrusão 
    (MNRAU) Monitoramento de Níveis de Ruído em Ambientes Urbanos 
    (SMSR) Sistema de Monitoramento de Saúde Remoto 
    (AICP) Automação Industrial com Controle de Processos 
    (CASE) Controle de Acesso e Segurança em Edifícios 
    (SMQA) Sistema de Monitoramento de Qualidade da Água 
    (MRA) Medição de Radiação em Ambientes 


21 Open Source Projects for IoT
https://www.linux.com/NEWS/21-OPEN-SOURCE-PROJECTS-IOT/

<BR><BR>
## Tago e ESP32
    
<BR>Aula com a plataforma Tago.IO, experiências com node-red e mqtt.
<BR>

<BR>Exemplo ESP32, mqtt e dashboard node-red

<BR>https://wokwi.com/projects/365211000246545409

<Br><BR> Exemplo em node-red
<Br><BR>  http://embarcadosifsp.duckdns.org:1880/ui


<BR>https://github.com/mchavesferreira/mcr/blob/main/esp32_iot/node_red1.json

<BR>https://github.com/mchavesferreira/mcr/blob/main/esp32_iot/node_red_estudo.json
<BR><BR>    
   <BR> 

## FreeRTOS
### Projeto 3      

FreeRTOS + Node red + mysql + ESP32
Este trabalho considerará o estudo do tema FREERTOS utilizando a prática com node MCU ESP32, não utilizando portanto o ambiente de prototipação Arduino.
Disponibilidade de material e scripts fornecido pelo docente (github):
       
https://github.com/mchavesferreira/embarcados_projeto_exemplo
       
https://wokwi.com/projects/365853246230678529  Simulador
       
https://github.com/mchavesferreira/embarcados_freertos      

Os recursos do projeto deve implementar (node, mysql, .ino, ..) e o formato de entrega de scripts de seu projeto deve ser acordado com o docente .
       
## Links interessantes
###Mapas
<BR><BR>Redes Internet
<BR><a href=https://bbmaps.itu.int/bbmaps/>rede de fibra óptia ITU</a>

<BR><BR>LPWan
<BR>https://www.teleco.com.br/lpwa_cobertura.asp

 <BR><BR>Torres de celular
<BR>http://www.telecocare.com.br/mapaerbs/index.php 
<BR>http://sistemas.anatel.gov.br/siec-servico-movel-web/

<BR><BR>
##  Ferramentas de desenvolvimento
Terminais shell gratis e online
Referência: https://ubunlog.com/pt/terminales-online-gnulinux-navegador/?msclkid=48141829be5911ec94c7a0d473f4b695%2F

https://bellard.org/jslinux/

https://copy.sh/v86/?profile=linux26

http://www.webminal.org/terminal/

https://www.tutorialspoint.com/unix_terminal_online.php

http://www.masswerk.at/jsuix/index.html

http://cb.vu/

https://codeanywhere.com/editor/


## Node-red e MQTT links de interesse <BR>
###  Exemplo flow para node-red
    <BR>https://github.com/mchavesferreira/sebe/blob/main/tutorial_exemplo_flow_nodered.json
<BR><BR> Dashboard extrs: https://flows.nodered.org/collection/590bc13ff3a5f005c7d2189bbb563976
<BR><BR> Configuring the Node-Red MQTT Publish and Subscribe Nodes - https://stevesnoderedguide.com/configuring-the-mqtt-publish-node
<BR><BR> DESENVOLVIMENTO DE UMA APLICAÇÃO PARA MONITORAMENTO UTILIZANDO CONCEITOS DE INTERNET DAS COISAS <a href=https://repositorio.uft.edu.br/handle/11612/2182>Link</a>


## DNS
<BR><BR> Consultar propagação DNS
<BR><BR> https://www.whatsmydns.net/
<BR><BR> Registro traceroute Registro.br
<BR><BR> https://registro.br/tecnologia/ferramentas/traceroute/


