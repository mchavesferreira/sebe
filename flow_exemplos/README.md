# Node-Red

No Node-RED, uma ferramenta de programação visual para conectar dispositivos de hardware, APIs e serviços online, as mensagens (msg) são objetos JavaScript que passam através dos nós e contêm dados que podem ser manipulados e utilizados de diversas maneiras. Os atributos msg.payload e msg.topic são duas propriedades comuns em mensagens no Node-RED, e cada uma tem um papel específico:

![Captura de tela 2024-05-15 124810](https://github.com/mchavesferreira/sebe/assets/63993080/857efca0-bce3-4c91-b5d3-2a3eec879872)

![Captura de tela 2024-05-15 124828](https://github.com/mchavesferreira/sebe/assets/63993080/506fc857-7ad0-4266-917e-9d4a7d0ea50c)

![Captura de tela 2024-05-15 124921](https://github.com/mchavesferreira/sebe/assets/63993080/a2f06857-d476-4816-9e2e-4d8569add843)


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

![Captura de tela 2024-05-15 125027](https://github.com/mchavesferreira/sebe/assets/63993080/b53e99be-1984-4496-9cb8-0ce9ff04bc52)


## Função

Exemplo:

```ruby
let data=new Date();
msg.payload=data
return msg;
```


Altere:  
```ruby
msg.payload=data.toString;
```

![image](https://github.com/mchavesferreira/sebe/assets/63993080/577f6384-9956-43bd-ae77-e4a90b496a8a)

<details><summary>Codigo</summary>
<p>

```ruby
[
    {
        "id": "ad46570c.7c11d8",
        "type": "inject",
        "z": "f6f2187d.f17ca8",
        "name": "",
        "props": [
            {
                "p": "payload"
            },
            {
                "p": "topic",
                "vt": "str"
            }
        ],
        "repeat": "",
        "crontab": "",
        "once": false,
        "onceDelay": 0.1,
        "topic": "",
        "payload": "",
        "payloadType": "date",
        "x": 140,
        "y": 480,
        "wires": [
            [
                "a5ca5a5d.8d7fd"
            ]
        ]
    },
    {
        "id": "a5ca5a5d.8d7fd",
        "type": "http request",
        "z": "f6f2187d.f17ca8",
        "name": "Cotação Dólar",
        "method": "GET",
        "ret": "txt",
        "paytoqs": "ignore",
        "url": "https://economia.awesomeapi.com.br/json/last/USD-BRL",
        "tls": "",
        "persist": false,
        "proxy": "",
        "authType": "",
        "x": 120,
        "y": 540,
        "wires": [
            [
                "7f25f1d1.a10eb8",
                "76d173da70211228"
            ]
        ]
    },
    {
        "id": "7f25f1d1.a10eb8",
        "type": "json",
        "z": "f6f2187d.f17ca8",
        "name": "",
        "property": "payload",
        "action": "",
        "pretty": false,
        "x": 330,
        "y": 540,
        "wires": [
            [
                "d6f506b6.2129b8",
                "22ed231a9ad130c8"
            ]
        ]
    },
    {
        "id": "d6f506b6.2129b8",
        "type": "function",
        "z": "f6f2187d.f17ca8",
        "name": "Formatar Dólar",
        "func": "var high = msg.payload.USDBRL.high;\nvar low = msg.payload.USDBRL.low;\n\nmsg.payload = `O preço atual do dólar é ${high} (alta) / ${low} (baixa).`;\n\nreturn msg;",
        "outputs": 1,
        "timeout": "",
        "noerr": 0,
        "initialize": "",
        "finalize": "",
        "libs": [],
        "x": 500,
        "y": 540,
        "wires": [
            [
                "8900313a.6596f8",
                "d29a739ae590e316"
            ]
        ]
    },
    {
        "id": "8900313a.6596f8",
        "type": "ui_template",
        "z": "f6f2187d.f17ca8",
        "group": "ca22fa0e.65a208",
        "name": "Cotação Dólar",
        "order": 1,
        "width": 10,
        "height": 2,
        "format": "<div style=\"text-align:center;font-size:30px\">{{msg.payload}}</div>",
        "storeOutMessages": true,
        "fwdInMessages": true,
        "resendOnRefresh": true,
        "templateScope": "local",
        "className": "",
        "x": 720,
        "y": 540,
        "wires": [
            []
        ]
    },
    {
        "id": "76d173da70211228",
        "type": "debug",
        "z": "f6f2187d.f17ca8",
        "name": "debug 6",
        "active": false,
        "tosidebar": true,
        "console": false,
        "tostatus": false,
        "complete": "false",
        "statusVal": "",
        "statusType": "auto",
        "x": 260,
        "y": 600,
        "wires": []
    },
    {
        "id": "22ed231a9ad130c8",
        "type": "debug",
        "z": "f6f2187d.f17ca8",
        "name": "debug 7",
        "active": false,
        "tosidebar": true,
        "console": false,
        "tostatus": false,
        "complete": "false",
        "statusVal": "",
        "statusType": "auto",
        "x": 460,
        "y": 600,
        "wires": []
    },
    {
        "id": "d29a739ae590e316",
        "type": "debug",
        "z": "f6f2187d.f17ca8",
        "name": "debug 8",
        "active": false,
        "tosidebar": true,
        "console": false,
        "tostatus": false,
        "complete": "true",
        "targetType": "full",
        "statusVal": "",
        "statusType": "auto",
        "x": 640,
        "y": 600,
        "wires": []
    },
    {
        "id": "ec6a00d39ca4cb03",
        "type": "function",
        "z": "f6f2187d.f17ca8",
        "d": true,
        "name": "function 4",
        "func": "    var dados = msg.payload.USDBRL;\n\n    // Separando cada campo\n    msg.payload = {\n        code: dados.code,\n        codein: dados.codein,\n        name: dados.name,\n        high: dados.high,\n        low: dados.low,\n        varBid: dados.varBid,\n        pctChange: dados.pctChange,\n        bid: dados.bid,\n        ask: dados.ask,\n        timestamp: dados.timestamp,\n        create_date: dados.create_date\n    };\n\n    // Retorna a mensagem modificada para continuar o fluxo\n    return msg;",
        "outputs": 1,
        "timeout": 0,
        "noerr": 0,
        "initialize": "",
        "finalize": "",
        "libs": [],
        "x": 460,
        "y": 680,
        "wires": [
            [
                "fb35721b95f9f506",
                "4431601db61e0556"
            ]
        ]
    },
    {
        "id": "fb35721b95f9f506",
        "type": "debug",
        "z": "f6f2187d.f17ca8",
        "d": true,
        "name": "debug 9",
        "active": true,
        "tosidebar": true,
        "console": false,
        "tostatus": false,
        "complete": "payload",
        "targetType": "msg",
        "statusVal": "",
        "statusType": "auto",
        "x": 520,
        "y": 760,
        "wires": []
    },
    {
        "id": "4431601db61e0556",
        "type": "ui_template",
        "z": "f6f2187d.f17ca8",
        "d": true,
        "group": "ca22fa0e.65a208",
        "name": "Cotação Dólar",
        "order": 3,
        "width": 0,
        "height": 0,
        "format": "<div style=\"\n        font-family: Arial, sans-serif;\n        margin: 20px;\n        background-color: #f4f4f4;\n        color: #333;\n    }\n    table {\n        width: 100%;\n        margin-top: 20px;\n        border-collapse: collapse;\n    }\n    th, td {\n        padding: 8px;\n        text-align: left;\n        border-bottom: 1px solid #ddd;\n    }\n    th {\n        background-color: #4CAF50;\n        color: white;\n    }\n    td {\n        background-color: #f8f8f8;\n    }\n\">\n\n<h1>Cotação do Dólar Americano / Real Brasileiro</h1>\n<table>\n    <tr>\n        <th>Campo</th>\n        <th>Valor</th>\n    </tr>\n    <tr>\n        <td>Código</td>\n        <td>{{msg.payload.USDBRL.code}}</td>\n    </tr>\n    <tr>\n        <td>Código IN</td>\n        <td>{{payload.USDBRL.codein}}</td>\n    </tr>\n    <tr>\n        <td>Nome</td>\n        <td>{{payload.USDBRL.name}}</td>\n    </tr>\n    <tr>\n        <td>Máximo</td>\n        <td>{{msg.payload.high}}</td>\n    </tr>\n    <tr>\n        <td>Mínimo</td>\n        <td>{{payload.USDBRL.low}}</td>\n    </tr>\n    <tr>\n        <td>Variação</td>\n        <td>{{payload.USDBRL.varBid}}</td>\n    </tr>\n    <tr>\n        <td>Mudança Percentual</td>\n        <td>{{payload.USDBRL.pctChange}}%</td>\n    </tr>\n    <tr>\n        <td>Lance</td>\n        <td>{{payload.USDBRL.bid}}</td>\n    </tr>\n    <tr>\n        <td>Pedido</td>\n        <td>{{payload.USDBRL.ask}}</td>\n    </tr>\n    <tr>\n        <td>Timestamp</td>\n        <td>{{payload.USDBRL.timestamp}}</td>\n    </tr>\n    <tr>\n        <td>Data de Criação</td>\n        <td>{{payload.USDBRL.create_date}}</td>\n    </tr>\n</table>\n\n</div>",
        "storeOutMessages": true,
        "fwdInMessages": true,
        "resendOnRefresh": true,
        "templateScope": "local",
        "className": "",
        "x": 660,
        "y": 680,
        "wires": [
            []
        ]
    },
    {
        "id": "ca22fa0e.65a208",
        "type": "ui_group",
        "name": "Cotação Dólar",
        "tab": "84f5f56f.0f223",
        "order": 1,
        "disp": true,
        "width": 10,
        "collapse": false
    },
    {
        "id": "84f5f56f.0f223",
        "type": "ui_tab",
        "name": "Dashboard",
        "icon": "dashboard",
        "order": 1,
        "disabled": false,
        "hidden": false
    }

]

```
</details>

<p>







