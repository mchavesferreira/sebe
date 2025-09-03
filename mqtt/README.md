# MQTT

<BR>Comunicação de dados IOT utilizando protocolo MQTT
<img src=https://github.com/mchavesferreira/mcr/blob/main/esp32_iot/imagens/mqtt-publish-subscribe.png><br>Mqtt.org
<img src=https://github.com/mchavesferreira/mcr/blob/main/esp32_iot/imagens/mqtt_mensagem.png><BR>

O MQTT (Message Queuing Telemetry Transport) é um protocolo de comunicação leve e eficiente, projetado para conectar dispositivos em redes com largura de banda limitada ou conexões instáveis, como em aplicações de Internet das Coisas (IoT). Ele utiliza o modelo de publicação/assinatura, onde os clientes podem publicar mensagens em tópicos específicos ou assinar tópicos para receber atualizações, com a intermediação de um servidor central chamado "broker". O MQTT é otimizado para minimizar o uso de recursos, sendo ideal para dispositivos com pouca capacidade de processamento e energia, como sensores e atuadores.

Saiba mais:  https://www.gta.ufrj.br/ensino/eel878/redes1-2019-1/vf/mqtt/


## Broker:

Utilizando um broker MQTT publico
	  http://www.hivemq.com/demos/websocket-client/
   <P><P>
Referências:<BR>
https://wiki.foz.ifpr.edu.br/wiki/index.php/Arduino:_MQTT
https://mqtt.org/
https://embarcados.com.br/mqtt-protocolos-para-iot/
https://aws.amazon.com/pt/what-is/mqtt/
https://embarcados.com.br/mqtt-protocolos-para-iot/


 
## O Protocolo MQTT em IOT

### Como instalar o mqtt (mosquito)
aula <BR>  http://smartcampus.ctd.ifsp.edu.br/blog/index.php?IDselecionado=48

### Instalando Broker no nodered 
Utilize o node    node-red-contrib-aedes 

![image](https://github.com/user-attachments/assets/d79cad10-7069-457f-b312-4c4b32506409)


Aplicativo: Dash MQTT  
https://play.google.com/store/apps/details?id=net.routix.mqttdash

Exemplo utilizando broker MQTT Público:  http://www.hivemq.com/demos/websocket-client/<BR>
Configure os campos:<BR>
host:  broker.hivemq.com<BR>
username: mchavesferreira<BR>
password: Embar2022<BR>
topic: movel/acelerax<BR>

## Exemplo Wokwi, com tópico em IFSP/led<BR>

Acesse o seguinte exemplo como aplição do mqtt, onde um led pode ser controlado seu status com o envio de mensagens para um broker

https://wokwi.com/projects/347942096378790483

<img src=![mqtt1](https://github.com/user-attachments/assets/1758b978-b122-4008-b7d2-57d9a780e185)
>

# Formato Json

## JSON

O JSON (JavaScript Object Notation) é um formato leve de troca de dados, fácil de ler e escrever para humanos, e simples de analisar e gerar para máquinas. A estrutura de um JSON é construída com base em duas estruturas universais:

Objetos: Um objeto JSON é uma coleção de pares chave/valor delimitados por chaves {}. Cada chave é uma string e é seguida por dois pontos : e o valor correspondente. Os pares chave/valor são separados por vírgulas. Por exemplo:

{
  "nome": "João",
  "idade": 30,
  "casado": true
}

<a href=https://github.com/mchavesferreira/sebe/blob/main/flow_exemplos/json.md> Saiba Mais sobre o formato JSON</a>

### exemplo mqtt com mensagem em json

Acesse o seguinte exemplo como aplição do mqtt com json


<img src=![mqtt2mensagem](https://github.com/user-attachments/assets/0f063666-5696-4c7c-ac59-d981f0182613)
>


https://wokwi.com/projects/412639452245191681


Configure no seu dashboard para android o Path do objeto da mensagem, exemplo 

Topic= esp32/out

path Json= $.analogico

# Trabalho 

Seguindo as instruções sobre MQTT e Json nesta url

e o exemplo de código

https://wokwi.com/projects/412639452245191681


Crie um novo script para o nodered publique este trabalho, modifique os tópicos para que um trabalho não interfira em outro.



## Entrega o resultado em Trabalho SUAP enviando o link do wokwi e a interface com link do nodered  http://seuip:1880/ui 
