# sebe
Sistemas Embarcados


## Aulas

- [Sistemas Operacionais](#Sistemas-Operacionais)
- [Introdução ao Linux](#Introdução-ao-Linux)
- [BLOG](#BLOG)
- [Guia Básico para ESP32](#Guia-Básico-para-ESP32)
-  [Trabalho 1](#Trabalho-1)
- [Node-red links de interesse](#Node-red-links-de-interesse)
- [Tago e ESP32](#Tago-e-ESP32)
- [FreeRTOS](#FreeRTOS)
  


## Aula 21/02/2025

### Sistemas Operacionais

<a href=tanenbaum.pdf> Livro </a>

#### Conhecendo o shell Windows

https://github.com/mchavesferreira/sebe/blob/main/sistemaoperacinal.md

## Aula 28/02/2025

### Introdução ao Linux

https://github.com/mchavesferreira/sebe/tree/main/linux

## aula 07/03/2025

### Criação de instância e Servidor Web

Apache e PHP

https://www.oracle.com/br/cloud/free/

Alguns vídeos de orientação:  

https://www.youtube.com/watch?v=CgjfyEt38fI&t=45s

https://www.youtube.com/watch?v=XW7isnD1mWM

https://www.youtube.com/watch?v=2GTPWqv-nAw

### Portas 

Instruções para liberar a porta 80, além de adicionar a regra em "VCN- Virtual cloud network", 
realize no prompt os seguintes comandos:

```java
sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 80 -j ACCEPT
sudo netfilter-persistent save
```
Fonte:  https://blog.tomaszdunia.pl/oracle-free-tier-eng/

Embora os vídes mostrem que o plano Free Tier permita uma instância Free Oracle Cloud VPS (4 Cores 24GB RAM),  não é apenas no domínio Brasil, que está sobrecarregado, uma busca em fóruns revela que outras regiões estão com o mesmo problema. 
Então escolha  Distribuição Linux Ubuntu 20.04 ou 22...   Máquina virtual 1 core 1 GB. No momento foi possível a única disponível porém permite criar duas intâncias.

![Captura de tela 2025-04-03 210148](https://github.com/mchavesferreira/sebe/assets/63993080/abfde088-6210-4a39-9923-e1352c7d8955)

## aula 14/03/2025

## Aula 21/03/2025

- Banco de Dados, uso do mysql

Guia

https://github.com/mchavesferreira/sebe/blob/main/bancodados.md


 orientação:
- https://github.com/mchavesferreira/sebe/blob/main/install_php_apache_mysql.md
- https://github.com/mchavesferreira/sebe/blob/main/slide/desenvolvendo_api_php_html.pdf
- https://insights.ionited.io/ion/configurar-linux-apache-mysql-e-php-lamp-no-ubuntu-2204



## Aula 28/03/2025

IoT Introdução Soc, SBC, Esp32...

Exemplo online Esp32+sensor comunicando com API/PHP:   https://wokwi.com/projects/396067644168942593

https://github.com/mchavesferreira/mcr/blob/main/ESP32.md  >> Introdução ao ESP32

https://github.com/mchavesferreira/mcr/tree/main/esp32_iot  >> Utilizando ESP32 em IoT

Utilizar o repositório como referência: https://github.com/mchavesferreira/php_app




Preparo do servidor para o Trabalho 1


  

Com a finalidade desenvolver aplicações em nuvem preparando ambiente para IOT, o aluno deve implantar criar uma instância Linux Ubuntu 20.0.4 no AWS. 

- Instalar um servidor de web Apache e serviços PHP criação de uma pagina simples código php
  
-  Preparar o esp32 para seu uso como IOT (https://github.com/mchavesferreira/mcr/tree/main/esp32_iot) 

## Aula  04/04/2025

- Aperfeiçoamento transforme a comunicação GET para POST no ESP32, modifique a pagina para uma variavel de projeto individual, ou seja, não utiliza o original Temperatura e Umidade.

## Aula 11/04/2025 

Apresentação final para o Trabalho 1

Utilizando o exemplo disposto no repositório, criar uma API com php. Utilizar um node (esp32 ou Esp8266 para consumir a API utilizando método GET. Instalar o pacote de projeto e adaptar o código na instância. 


Para saber mais sobre ESP32, simulação online: https://github.com/mchavesferreira/mcr/blob/main/ESP32.md

Exemplo em funcionamento:

http://smartcampus.ctd.ifsp.edu.br/aula/php_app/index.php

Insira dados em: http://smartcampus.ctd.ifsp.edu.br/aula/php_app/form.php

Esta atividade compõe 25 % a avaliação final. Apresentar presencialmente em sala de aula ou enviar até 25/04/2025 em SUAP o <b>http://IP</b> de sua instância.


##  Aula 02/05/2025

Node-red Oficial:  https://flows.nodered.org/

Node-red Apresentação:  http://smartcampus.ctd.ifsp.edu.br/blog/index.php?IDselecionado=50

Instalar Node-red: http://smartcampus.ctd.ifsp.edu.br/blog/index.php?IDselecionado=45


##  Aula 09/05/2025

Construindo Dashboard

Práticas com  NodeRED

[flow_exemplos/README.md](https://github.com/mchavesferreira/sebe/tree/main/flow_exemplos)

##  Aula 16/05/2025


### Formato JSON

<a href=https://github.com/mchavesferreira/sebe/blob/main/flow_exemplos/json.md>Saiba mais sobre o formato json</a>

Importe este exemplo para o nodered: <a href=https://github.com/mchavesferreira/sebe/blob/main/flow_exemplos/cotacao_dolar.json>Exemplo de cotação dolar</a>

Instale um plugin no navegador para facilitar a compreensão de um json: <a href=https://addons.mozilla.org/en-US/firefox/addon/json_formatter/>firefox</a>

Crie uma interface que separe dados ou campos de uma url publica com json e apresente a interface nodered.


## Aula 23/05/2025


### Protocolo MQTT

[
Saiba mais Sobre MQTT](https://github.com/mchavesferreira/sebe/tree/main/mqtt)


[flow_exemplos/aula_mqtt.pdf](https://github.com/mchavesferreira/sebe/blob/main/flow_exemplos/aula_mqtt.pdf)



Utilize o exemplo de cotação do dolar para capturar um valor (temperatura, cotações), qualquer exemplo em formato json, separar os campos, exemplificar com gráfico.

Criar um dashboard para seu projeto com nodered/mysql/mqtt.

- Utilizando Tunnel e DNS

 http://smartcampus.ctd.ifsp.edu.br/blog/index.php?IDselecionado=30 Redirecionamento DDNS com DuckDns 
 

### Construção do Trabalho 2: 

Importe para o NodeRED o seguinte fluxo:

https://github.com/mchavesferreira/embarcados_freertos/blob/main/exemplo_node_red_mqtt_mysql_dht_sensor.json

Adicione os nodes não instalados em seu NodeRED:  

ui_led 

node-red-node-mysql

Crie a conexão MQTT local, e conecte ao banco de dados Mysql

A tabela de dados será a mesma utilizada para o projeto 1:

```java
CREATE TABLE tempLog (
    timeStamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    temperature int(11) NOT NULL,
    humidity int(11) NOT NULL,
    PRIMARY KEY (timeStamp) );
```

disponível em: https://github.com/mchavesferreira/php_app

Simule a conexão utilizando o circuito tratado em aulas anteriores, montando posteriormete o circuito em protoboard e personalizando para sua aplicação:  https://wokwi.com/projects/365211000246545409




## Aula 30/05/2025

Preencher SUAP 

Apresentação final para o trabalho 2, Seminários


## Aula 13/06/2025

- Introdução ao RTOS/FreeRTOS

https://github.com/mchavesferreira/embarcados_freertos


## Aula 20/06/2025

FreeRTOS - https://chatgpt.com/g/g-xFCyP0VEc-sebe-r  


Exemplos de códigos:  https://github.com/mchavesferreira/embarcados_freertos/tree/main/example_freertos_arduino

https://github.com/mchavesferreira/embarcados_freertos/tree/main/exemplos_scripts_rtos

https://github.com/mchavesferreira/embarcados_freertos/tree/main/DHT_MQTT_FREERTOS_v_jun21


## Aula 27/06/2025

Apresentação Final para o Trabalho 3


---------------------------

## Trabalho 1: Orientações adicionais

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


##  BLOG

Orientações para a disciplina, acompanhe a postagem de trabalhos de outros alunos
<a href=http://smartcampus.ifsp.online/blog/index.php?raselecionado=CT120893>Acesso as postagem do professor</a>

##  Guia Básico para ESP32
<a href=https://github.com/mchavesferreira/mcr/blob/main/ESP32.md>Acesse o link</a>



## Projeto 2
Idéias de projetos
Os temas apresentado a seguir abrangem áreas como sustentabilidade, agricultura, segurança e monitoramento ambiental. Os alunos podem explorar as tecnologias e técnicas necessárias para implementar esses projetos, incluindo a integração do microcontrolador com sensores, comunicação Wi-Fi, armazenamento de dados em um banco de dados e criação de um dashboard para visualização dos dados coletados.

Esses projetos oferecem oportunidades para os alunos aplicarem conceitos de sistemas embarcados, IoT, programação, gerenciamento de dados e interface do usuário, enquanto desenvolvem soluções práticas e inovadoras para problemas do mundo real.


Algumas Idéias, integrando com APIs de IA Generativa

| Sigla e Nome do Projeto                                   | Descrição (máx. 20 palavras)                                                                                     |
|-----------------------------------------------------------|------------------------------------------------------------------------------------------------------------------|
| (MPC) Movimentação de Pilares de Concreto                 | Monitora pilares de concreto, detecta pequenas mudanças de posição e prevê instabilidades estruturais com alertas automáticos. |
| (DPA) Detecção da Poluição do Ar                          | Mede poluentes atmosféricos, prevê picos de contaminação e envia relatórios para conscientização ambiental e ações preventivas. |
| (UI) Umidificador Inteligente                             | Controla umidade ambiente automaticamente, usando sensores e IA para otimizar consumo de água e conforto.         |
| (DVG) Detecção de Vazamento de Gás                        | Identifica concentrações perigosas de gás, reduz falsos alarmes com IA e envia alertas em tempo real.            |
| (CABPIB) Controle de Acesso c/ Processamento de Imagens e Biometria | Reconhece rostos ou características biométricas, gerencia autorizações e gera registros detalhados de entradas e saídas. |
| (SM) Smart Mirror                                         | Exibe informações no espelho (horário, clima, notícias), interage por voz e integra recursos de IA para personalização. |
| (RI) Rastreamento Inteligente                             | Acompanha posição de pessoas ou objetos via GPS/LoRa, gerando alertas e relatórios de movimentação otimizados com IA. |
| (PiWALL) Matriz de Monitores                              | Cria painel de múltiplas telas com Raspberry Pi, exibindo conteúdo dinâmico, gerenciado por IA ou visão computacional. |
| (DMIA) Detecção de Movimentos (Integração com Ambiente)    | Monitora movimento através de sensores ou câmera, acionando automações e gerando alertas com classificação inteligente. |
| (MCETR) Monitoramento de Consumo de Energia em Tempo Real  | Registra uso de energia, detecta padrões anormais e projeta custos, exibindo dados em dashboards interativos.     |
| (SII) Sistema de Irrigação Inteligente                    | Controla irrigação conforme umidade do solo e previsões climáticas, reduzindo desperdícios e maximizando eficiência. |
| (CARF) Controle de Acesso com Reconhecimento Facial        | Realiza verificação facial em tempo real, previne fraudes e gerencia dados de entrada de forma segura.            |
| (MQAAI) Medição de Qualidade do Ar em Ambientes Internos   | Mede poluentes, temperatura e umidade, identificando riscos à saúde e fornecendo alertas e relatórios de bem-estar. |
| (RAG) Rastreamento de Ativos com Geolocalização            | Localiza e monitora bens em tempo real, usando GPS/LoRaWAN, otimizando logística e evitando perdas.               |
| (MTUA) Monitoramento de Temperatura e Umidade em Ambientes | Acompanha variações climáticas, previne condições inadequadas e emite recomendações automáticas de ventilação ou aquecimento. |
| (SME) Sistema de Monitoramento de Estacionamento           | Detecta vagas livres, registra ocupação em tempo real e fornece orientações aos motoristas por dashboard.         |
| (ARCV) Automação Residencial com Controle por Voz          | Gerencia dispositivos domésticos, interpretando comandos de voz e sugerindo rotinas inteligentes personalizadas para cada usuário. |
| (SMS) Sistema de Monitoramento de Segurança                | Integra câmeras e sensores, diferencia intrusos de falsos alarmes, enviando notificações imediatas e registros detalhados. |
| (GEA) Gerenciamento de Estoque Automatizado                | Monitora níveis de estoque com RFID ou visão computacional, prevendo reposição e criando relatórios de consumo.    |
| (MCAR) Monitoramento de Consumo de Água em Residências     | Mede fluxo em hidrômetros, detecta vazamentos e gera relatórios de uso, incentivando consumo consciente.          |
| (SCEAI) Sistema de Controle de Estufa p/ Agricultura Inteligente | Regula temperatura, umidade e CO₂, otimizando cultivo com IA e enviando alertas para intervenções rápidas.         |
| (MVMI) Monitoramento de Vibração em Máquinas Industriais   | Analisa vibrações, detecta anomalias mecânicas e antecipa falhas, fornecendo manutenção preditiva e relatórios automáticos. |
| (SADI) Sistema de Alarme e Detecção de Intrusão            | Consolida informações de sensores, identifica invasões reais e registra eventos com relatórios inteligentes.      |
| (MNRAU) Monitoramento de Níveis de Ruído em Ambientes Urbanos | Mede poluição sonora, classifica fontes de barulho e gera estatísticas para intervenções em políticas públicas.    |
| (SMSR) Sistema de Monitoramento de Saúde Remoto            | Coleta sinais vitais (frequência cardíaca, SpO₂, temperatura) e fornece alertas médicos e relatórios gerados por IA. |
| (AICP) Automação Industrial com Controle de Processos      | Gerencia processos industriais, usando controle preditivo e relatórios automatizados para otimizar desempenho e reduzir falhas. |
| (CASE) Controle de Acesso e Segurança em Edifícios         | Monitora fluxo de pessoas, integra câmeras e catracas, gerando relatórios e alertas para comportamento suspeito.   |
| (SMQA) Sistema de Monitoramento de Qualidade da Água       | Avalia pH, turbidez e condutividade, detectando contaminações e emitindo relatórios para gestão ambiental.         |
| (MRA) Medição de Radiação em Ambientes                     | Utiliza sensor Geiger-Müller, exibe níveis de radiação e emite alertas de risco com relatórios informativos.       |
| (30) Sistema de Manutenção Preditiva c/ IA Generativa      | Analisa sensores em máquinas e cria relatórios detalhados, auxiliando planejamento preventivo e reduzindo paradas. |
| (31) Sistema de Tutoria Inteligente p/ Usuários Finais     | Identifica falhas de configuração IoT e sugere correções passo a passo, dialogando via IA conversacional.         |
| (32) Detecção de Emoções e Reações via Câmera              | Processa expressões faciais em tempo real, classificando emoções e gerando estatísticas de satisfação ou engajamento. |
| (33) Robô de Inspeção Remota com IA                        | Movimenta-se autonomamente, coleta dados ambientais e gera relatórios inteligentes, permitindo consultas em linguagem natural. |



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

Alternativa Zephyr

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

### API Públicas

https://github.com/public-apis/public-apis

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

Tecnologias:

https://www.airgain.com/technology/    

Choosing a Microcontroller (MCU) or Microprocessor (MPU)

https://www.verytechnology.com/iot-insights/top-iot-boards-for-development-prototyping




