# Node-Red

No Node-RED, uma ferramenta de programação visual para conectar dispositivos de hardware, APIs e serviços online, as mensagens (msg) são objetos JavaScript que passam através dos nós e contêm dados que podem ser manipulados e utilizados de diversas maneiras. Os atributos msg.payload e msg.topic são duas propriedades comuns em mensagens no Node-RED, e cada uma tem um papel específico:

## Formato de mensagens
### msg.payload

#### Definição: 
O msg.payload é a parte principal dos dados que é transmitida entre os nós. Ele pode conter qualquer tipo de dados, como strings, números, objetos JSON, dados binários, etc.
Uso comum: O msg.payload é frequentemente usado para armazenar o corpo da mensagem que você está interessado em manipular ou transformar. Por exemplo, se você estiver trabalhando com um sensor de temperatura, o msg.payload pode conter o valor atual da temperatura.

## msg.topic

Definição: O msg.topic é uma string que descreve o assunto ou contexto da mensagem. Ele é opcional, mas pode ser extremamente útil em cenários onde múltiplas mensagens são processadas e precisa-se distinguir a origem ou o tipo da mensagem.

Uso comum: msg.topic é usado para filtrar ou direcionar mensagens em fluxos mais complexos. Por exemplo, em uma configuração de casa inteligente, você pode ter diferentes tópicos para diferentes dispositivos ou tipos de dados, como "temperatura/sala1", "luminosidade/sala2", etc., permitindo que você trate essas mensagens de forma diferenciada.

### Comparação Prática

Imagine um cenário onde você está recebendo dados de múltiplos sensores numa rede MQTT e utilizando o Node-RED para processar esses dados. Cada mensagem MQTT que chega pode ter:

msg.payload - O valor atual do sensor, por exemplo, 22°C.

msg.topic - O tópico MQTT associado, como "casa/sala/temperatura", que indica de onde o dado está vindo e o tipo de dado.


## Função

Exemplo:

´´´rubby
let data=new Date();
msg.payload=data
return msg;
´´´


Altere:  
msg.payload=data.toString;
