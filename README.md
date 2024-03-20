# sebe
Sistemas Embarcados

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

## Instalação de pacotes no servidor
Apache, PHP, Mysql

Videos de orientação:
- https://insights.ionited.io/ion/configurar-linux-apache-mysql-e-php-lamp-no-ubuntu-2204
- 

## Trabalho 1
Verificar condições no SUAP. 
Utilizar o seguinte repositório:

- https://github.com/mchavesferreira/php_app/
  
- http://smartcampus.ifsp.online/blog/index.php?raselecionado=CT120893

Com a finalidade desenvolver aplicações em nuvem preparando ambiente para IOT, o aluno deve implantar criar uma instância Linux Ubuntu 20.0.4 no AWS. 

Instalar um servidor de web Apache e serviços PHP criação de uma pagina simples código php (prazo: /03/2024)

Aperfeiçoar exibição da pagina com utilização da busca e separação de campos com Json  (prazo: /04/2024 14h00)

Instalar Mysql e exemplificar uma aplicação  banco de Dados Mysql.   (prazo: /04/2024 14h00)

Utilizando o exemplo disposto no repositório, criar uma API com php. Utilizar um node (esp32 ou Esp8266 para consumir a API utilizando método GET. Instalar o pacote de projeto e adaptar o código na instância. 
Utilizar o repositório como referência: https://github.com/mchavesferreira/php_app
Para saber mais sobre ESP32, simulação online: https://github.com/mchavesferreira/mcr/blob/main/ESP32.md
Exemplo em funcionamento:
http://smartcampus.ctd.ifsp.edu.br/aula/php_app/index.php
Insira dados em: http://smartcampus.ctd.ifsp.edu.br/aula/php_app/form.php

Esta atividade compõe 30% a avaliação final. 

Preencher o Blog com a proposta da atividade. (Prazo final 26/04/2024) 14h00

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
<a href=http://smartcampus.ctd.ifsp.edu.br/blog/index.php?raselecionado=CT120893>Acesso as postagem do professor</a>

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


