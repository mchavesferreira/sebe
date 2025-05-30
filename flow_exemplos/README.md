# Node-RED


#### O que é o Node-RED?
Node-RED é uma plataforma de programação visual usada para conectar dispositivos IoT e criar fluxos de dados. Ele é baseado em **JavaScript** e executado no **Node.js**.

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


# Node-RED Cursos

## Sugestões para Capacitação em Node-RED

### Instalação de Nodes Extras

- **Node-RED Dashboard Extra Nodes**  
  [Node-RED Dashboard extra nodes (collection) - Node-RED (nodered.org)](https://nodered.org/)

---

### Introdução ao Node-RED


#### Como Instalar o Node-RED?
Siga os passos abaixo para instalar o Node-RED:

1. Instale o Node.js na sua máquina, se ainda não estiver instalado. Você pode baixá-lo no [site oficial do Node.js](https://nodejs.org/).
2. Após a instalação do Node.js, você pode instalar o Node-RED usando o seguinte comando no terminal:
   ```bash
   npm install -g --unsafe-perm node-red

### Instalar node extras (pacotes)

Utilize o menu "Gerenciar Paleta"  para adicionar mais pacotes ao seu Node-RED. Conheças os pacotes em:

<a href=https://flows.nodered.org/collection/590bc13ff3a5f005c7d2189bbb563976>Node-RED Dashboard extra nodes (collection) - Node-RED (nodered.org)</a>

## Criando um Fluxo Básico no Node-RED

### Objetivo

Criar um fluxo básico para buscar a cotação do dólar em formato **JSON** e exibi-la em um **Dashboard**.

### Passos:

1. **Arraste** um nó `inject` e um nó `http request` para o canvas do Node-RED.
2. Configure o nó `inject` para injetar a mensagem a cada 5 segundos.
3. Configure o nó `http request` para fazer uma solicitação `GET` para a URL:
```ruby 
https://economia.awesomeapi.com.br/json/last/USD-BRL
```
4. **Conecte** o nó `inject` ao nó `http request`.
5. **Arraste** um nó `debug` para o canvas e conecte-o ao nó `http request`.
6. Clique em **Deploy** para salvar e implantar o fluxo.
7. Abra a guia **Debug** na interface do Node-RED para ver a resposta da solicitação HTTP.


## Exibindo a Cotação do Dólar em um Dashboard

Agora que temos a cotação do dólar em formato **JSON**, vamos exibi-la em um **dashboard**.

### Passos:

1. **Arraste** um nó `template` para o canvas.
2. Configure o nó `template` para exibir a cotação do dólar no seguinte formato:

   ```html
   O preço atual do dólar é {{payload.USD_BRL.high}}.

   ```


3. Conecte o nó http request ao nó template.
4. Arraste um nó ui_template para o canvas do Node-RED e configure-o para exibir o conteúdo do nó template.
5. Clique em "Deploy" para salvar e implantar o fluxo.
6. Abra o dashboard do Node-RED em uma nova guia do navegador. Acesse a URL http://localhost:1880/ui para visualizar o dashboard.
7. O valor da cotação do dólar deve ser exibido no dashboard.
```ruby
http://localhost:1880/ui
```

Este é apenas um exemplo básico de como usar o Node-RED para buscar dados de uma API e exibi-los em um dashboard. Existem muitos outros recursos disponíveis no Node-RED, como bancos de dados, integração com outros


<a href=https://github.com/mchavesferreira/sebe/blob/main/flow_exemplos/cotacao_dolar.json>Script Cotação do dolar</a>: elaboração de um script flow que busque uma informação de cotação de dolar em formato json e exiba em dashboard.


**Node-RED Dashboard 2.0**, também chamada de **Node-RED Dashboard Next**, uma nova abordagem para interfaces gráficas no Node-RED, desenvolvida pela comunidade sob a organização do projeto *FlowFuse*.

Abaixo está um resumo detalhado sobre essa versão:

---

## 🧭 Visão Geral — Node-RED Dashboard 2.0

A Dashboard 2.0 é uma evolução completa da interface gráfica tradicional usada no Node-RED, sendo **reconstruída do zero** com foco em:

* **Modernização da interface (UI/UX)**
* **Arquitetura desacoplada (Frontend separado do Backend)**
* **Desempenho superior em dispositivos embarcados**
* **Suporte a temas e responsividade nativa**
* **Integração com bibliotecas modernas como WebSocket, Tailwind, Vue.js**

---

## ⚙️ Características principais

| Recurso                       | Dashboard 1.0 | Dashboard 2.0 (Next)                        |
| ----------------------------- | ------------- | ------------------------------------------- |
| UI baseado em AngularJS       | Sim           | Não                                         |
| Framework moderno             | Não           | Sim (Vue.js + Tailwind CSS)                 |
| Suporte mobile responsivo     | Limitado      | Sim, nativamente responsivo                 |
| Suporte a múltiplos painéis   | Limitado      | Sim                                         |
| Layouts customizáveis         | Difícil       | Sim, com grid visual e drag & drop          |
| Integração com MQTT/WebSocket | Sim           | Sim                                         |
| Temas customizáveis           | Limitado      | Sim                                         |
| Separação entre UI e lógica   | Não           | Sim (frontend e backend independentes)      |
| Componentes personalizados    | Complexo      | Facilitado (via Vue ou HTML Web Components) |



# Tutoriais, pdfs e vídeos sobre o Node-RED


[1] <a href=http://inf.ufes.br/~zegonc/material/Redes%20de%20Sensores%20sem%20Fio/Minicurso%20Node-RED.pdf target=_blank>Slide: <a/> Desenvolvimento de aplicações integrando serviços Web, fontes de dados e dispositivos IoT com o uso do Node-RED. Ministrantes: Celso Alberto Saibel Santos e Jordano Ribeiro Celestrin  
<BR><BR>
<a href=https://github.com/jordanorc/curso-node-red>
<img src=https://raw.githubusercontent.com/jordanorc/curso-node-red/master/assets/minicurso.png width=300 height=200><BR></BR>Repositório do autor<a/>



<BR><BR><BR><BR>
[2] ***Curso Udemy*** de <a href=https://www.udemy.com/course/node-red/>Reginaldo Santos. Do Zero ao Node-Red (Prototipagem rápida).</a> Assista ao curso liberado no Canal Youtube do Autor 

<img src=https://raw.githubusercontent.com/mchavesferreira/paginaaws/main/cursonodeudemy.png width=300 height=200>


https://www.youtube.com/playlist?list=PL07l7JtVlEwJoWNaX_sn0N8j9aUZyScWK : playlist do curso Liberada no yotube.


https://www.youtube.com/watch?v=q9etCbnHLzo Versão com qualidade de audio otimizada


http://https//youtu.be/Hy06QIhayYg  Seção 7 Front End 



<img src=https://github.com/mchavesferreira/sebe/blob/main/imagens/video.png>

https://www.youtube.com/watch?v=O88f7OxXSlk : Resumo do curso, Video com a seção de criação de uma dashboard para uma estação


<BR><BR>[3] <a href="https://nerdiy.de/en/nodered-mit-dashboard-nodes-eine-benutzeroberflaeche-erstellen/" target="_blank">HowTo: Node Red &ndash; Creating a User Interface with Dashboard Nodes</a></p>

<BR><BR>[4] Slide aplica&otilde;es: <a href="https://sesam-world.com/_pdf/sesam-134/05-IBM.pdf" target="_blank">https://sesam-world.com/_pdf/sesam-134/05-IBM.pdf</a></p>

<BR><BR>[5]Passe, Fernando et al .<a href="http://www2.sbc.org.br/ceacpad/ijcae/v6_n1_dec_2017/IJCAE_v6_n1_dez_2017_paper_6_vf.pdf" target="_blank"> Perspectivas para o uso do Node-Red no Ensino de IoT</a></p>

<BR><BR>[6]da Silva, Esdras Barbosa Lima J.&nbsp; <a href="https://www.cin.ufpe.br/~tg/2020-3/TG_EC/tg_eblsj.pdf" target="_blank">Node-RED KNoT: Um m&oacute;dulo de integra&ccedil;&atilde;o da ferramenta Node-RED com a meta plataforma KNoT</a></p>

[7] Usando Node-RED para integrar dispositivos

<img src=https://raw.githubusercontent.com/mchavesferreira/sebe/refs/heads/main/imagens/netio.png>

<a href=https://www.netio-products.com/en/application-notes/an31-node-red-example-of-rest-xml-communication-with-netio-4x> Node-RED example of REST XML communication with NETIO</a>
