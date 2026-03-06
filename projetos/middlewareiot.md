
**middleware IoT hoje não é apenas “um painel que recebe MQTT”**.
As propostas mais atuais tendem a separar pelo menos quatro camadas: **conectividade/protocolo**, **gestão de dispositivos**, **modelo de contexto ou digital twin** e **integração analítica/edge**. Isso ajuda a mostrar aos alunos por que o Node-RED continua excelente didaticamente, mas já não representa sozinho todo o ecossistema de middleware IoT. ([ThingsBoard][1])

## 1) Como eu situaria o Node-RED em sala

O **Node-RED** continua muito forte como ferramenta de **orquestração visual, integração rápida, prototipação e automação de fluxos**. Ele é ótimo para aula porque torna visível o caminho do dado: sensor → broker → processamento → dashboard → alerta. A própria documentação do projeto enfatiza a construção de fluxos e integrações, o que o torna ideal para ensino introdutório e intermediário. ([nodered.org][2])

Mas, para uma atualização conceitual, vale dizer aos alunos que o Node-RED normalmente ocupa **uma parte do middleware**, não todo ele. Em projetos maiores, ele costuma atuar como:

* camada de integração rápida;
* motor de regras simples;
* ponte entre APIs, bancos, MQTT e dashboards;
* ferramenta de protótipo antes da adoção de uma plataforma maior.
  Isso o diferencia de plataformas que já trazem nativamente **multi-tenant, gestão massiva de dispositivos, digital twin, controle de acesso, persistência histórica, edge e integração corporativa**. ([ThingsBoard][1])

## 2) Onde entram FIWARE e dojot

A **FIWARE** segue muito relevante quando o foco é **cidade inteligente, contexto urbano, interoperabilidade e digital twin contextual**. O núcleo da arquitetura é o **Context Broker**, com API **NGSI-LD**, cercado por agentes de IoT, conectores de dados históricos, componentes de visualização, BI e controle de identidade. O material oficial da FIWARE mostra explicitamente essa visão de arquitetura em camadas, colocando o broker de contexto no centro e integrando sensores, câmeras, sistemas legados e aplicações verticais. 

A **dojot**, por sua vez, continua sendo uma referência importante para o contexto brasileiro. Sua documentação descreve uma arquitetura com **API Gateway, gerenciamento de dispositivos, fluxos de processamento, notificações e integração com bancos externos**, o que a torna útil como exemplo nacional de plataforma IoT aberta voltada a casos reais. O repositório oficial também a apresenta como uma plataforma brasileira nascida com foco em cidades inteligentes e necessidades locais. ([dojotdocs.readthedocs.io][3])

## 3) O caso do Rio de Janeiro: exemplo brasileiro próximo da realidade

Aqui há um ponto importante de correção histórica para sua aula: **a Copa do Mundo no Brasil foi em 2014**; **o grande evento do Rio em 2016 foram os Jogos Olímpicos e Paralímpicos**. O **Centro de Operações Rio (COR)** foi usado e fortalecido nesse contexto. 

O COR não deve ser apresentado como “uma plataforma IoT pura”, mas como um **centro integrado de operações urbanas**, muito mais próximo do que hoje chamaríamos de **plataforma de integração operacional com dados urbanos em tempo real**. A literatura sobre o caso mostra que o COR integrou sistemas, documentos e infraestrutura de TI para apoiar a operação durante os Jogos Rio 2016. 

Sobre a base tecnológica, as fontes indicam que o COR foi desenvolvido com forte participação da **IBM**, dentro da proposta de centro integrado de operações da cidade. A parceria anunciada previa consolidar informações de vários sistemas municipais para permitir **visualização, monitoramento e análise em tempo real**, inicialmente com foco em chuvas, enchentes e incidentes, e depois ampliando para mobilidade e grandes eventos. ([Cidades Digitais UCLG][4])

 COR já mostrava, na prática, como arquitetura moderna de middleware urbano:

* **integração de múltiplos órgãos** em um centro único;
* **dados georreferenciados**;
* **previsão meteorológica e monitoramento de risco**;
* **visualização em tempo real**;
* apoio à **tomada de decisão operacional**. ([Cidades Digitais UCLG][4])

Também é útil mencionar que o COR foi concebido para integrar dados e processos de vários órgãos municipais, e que a tecnologia envolvia parceiros como **IBM, Cisco, Samsung e Google**, com uso de georreferenciamento e transmissão de dados por operadoras. Isso ajuda os alunos a entenderem que projetos urbanos reais dificilmente dependem de uma única ferramenta: eles são **ecossistemas de middleware e integração**. ([use.metropolis.org][5])

## 4) O que mudou de lá para cá

De 2010–2016 para 2025–2026, houve uma mudança importante. O modelo mais antigo era muito centrado em:

* sala de controle;
* integração vertical;
* dashboards operacionais;
* centro único de comando.

As arquiteturas atuais caminham para:

* **microserviços**;
* **edge computing**;
* **digital twins**;
* **APIs padronizadas**;
* interoperabilidade semântica;
* separação entre ingestão, contexto, analytics e aplicação. ([ThingsBoard][1])

Em outras palavras: o COR é um excelente exemplo **histórico e brasileiro** de integração operacional urbana; as plataformas atuais estendem isso para uma visão mais distribuída, aberta e componível.

## 5) Plataformas e propostas atuais que valem entrar na atualização da aula

### a) ThingsBoard

O **ThingsBoard** continua sendo uma das opções mais fortes para ensino e laboratório, porque já entrega em um pacote relativamente acessível:

* conectividade por **MQTT, HTTP e CoAP**;
* gerenciamento de dispositivos e ativos;
* dashboards;
* rule engine;
* integrações com sistemas externos. ([ThingsBoard][1])

Didaticamente, ele é interessante porque fica entre o Node-RED e plataformas mais complexas como FIWARE: o aluno vê gestão de dispositivos, telemetria, alarmes e regras sem precisar montar tudo “na mão”.

### b) Mainflux

O **Mainflux** representa bem a tendência de middleware **modular e cloud/edge**, com foco em APIs, conectividade e integração com sistemas corporativos. A documentação pública destaca arquitetura aberta, deploy on-premises ou cloud e suporte a **HTTP, WebSocket, MQTT e CoAP**, além de gateway/edge próprio. ([Mainflux Labs][6])

Para pós-graduação, ele é excelente para discutir **arquitetura distribuída** e **plataforma componível**, embora seja menos amigável para demonstração rápida do que Node-RED ou ThingsBoard.

### c) FIWARE

A **FIWARE** permanece muito forte para **smart cities, data spaces, interoperabilidade e contexto semântico**. O diferencial é não tratar apenas o dado bruto do sensor, mas o **estado contextual das entidades** da cidade ou do sistema. Isso é muito valioso para discutir cidades inteligentes, mobilidade, resíduos, energia, defesa civil e agricultura conectada. 

### d) Eclipse Ditto + Eclipse Hono

Esse conjunto representa uma proposta mais “acadêmica/arquitetural” e moderna:

* **Hono** para conectar muitos dispositivos ao backend de forma uniforme, independentemente do protocolo;
* **Ditto** para oferecer a camada de **digital twin**, abstraindo o dispositivo físico via APIs. ([projects.eclipse.org][7])

Isso é muito valioso para mostrar aos alunos a passagem de “telemetria pura” para **gêmeos digitais e interoperabilidade de aplicações**.

### e) EdgeX Foundry

O **EdgeX Foundry** é uma referência forte quando você quer explicar que nem todo middleware deve estar na nuvem. Ele foi projetado como uma plataforma aberta de **edge computing IoT**, com forte ênfase em interoperabilidade entre dispositivos e aplicações na borda. A documentação oficial destaca ingestão, normalização, inteligência na borda e compartilhamento de dados. ([The Linux Foundation][8])

Para sua aula, ele é ótimo se quiser discutir:

* gateways inteligentes;
* processamento local;
* baixa latência;
* operação mesmo com conectividade intermitente.

### f) oneM2M

O **oneM2M** não é tanto uma plataforma pronta quanto um **padrão de arquitetura de middleware**. Ele define uma camada horizontal comum entre dispositivos, redes e aplicações, com funções padronizadas para descoberta, segurança, gerenciamento e interoperabilidade. Em pós-graduação, ele é importante porque ajuda a mostrar o conceito mais abstrato de middleware como **camada de serviços comum**. ([recipes.onem2m.org][9])

### g) OpenRemote

O **OpenRemote** merece aparecer como opção contemporânea para **smart building, smart city, energia e asset management**, com gestão de ativos, mapas, dashboards e regras em plataforma 100% open source. ([OpenRemote][10])

### h) TagoIO

Embora seja uma proposta mais voltada a produto/plataforma comercial, o **TagoIO** é muito útil como exemplo mais próximo do mercado latino-americano. A documentação pública destaca gestão de dispositivos, dashboards, conectores e grande variedade de integrações. Para aula, ele ajuda a mostrar a diferença entre **piloto acadêmico** e **plataforma pronta para operação com clientes**. ([TagoIO][11])

### i) EMQX Neuron / NeuronEX

Se quiser incluir **IoT industrial/IIoT**, essa é uma atualização muito relevante. O **Neuron** e o **NeuronEX** são voltados à conectividade de campo com protocolos industriais, processamento na borda e integração com plataformas IoT. A documentação destaca suporte a **100+ protocolos**, processamento local e integração com dados de equipamentos industriais e legados. ([www.emqx.com][12])

## 6) Uma classificação didática que funciona muito bem em aula

Você pode atualizar sua aula dizendo que hoje existem **quatro famílias** de middleware IoT:

**1. Middleware de fluxo e integração rápida**
Ex.: **Node-RED**.
Melhor para ensino inicial, protótipo, automação e integração rápida. ([nodered.org][2])

**2. Plataformas IoT completas**
Ex.: **ThingsBoard, Mainflux, Kaa, TagoIO, OpenRemote**.
Melhor para gestão de dispositivos, dashboards, alarmes, APIs e operação contínua. ([ThingsBoard][1])

**3. Middleware orientado a contexto/digital twin**
Ex.: **FIWARE, Eclipse Ditto**.
Melhor para cidades inteligentes, integração semântica, representação de entidades e aplicações multi-domínio. 

**4. Middleware de edge e IIoT**
Ex.: **EdgeX Foundry, EMQX Neuron/NeuronEX**.
Melhor para gateways inteligentes, interoperabilidade industrial e processamento local. ([The Linux Foundation][8])

## 7) O que eu recomendaria como narrativa para sua aula

Uma narrativa forte para pós-graduação seria esta:

1. **Começar com Node-RED**, porque ele mostra visualmente o fluxo.
2. Apresentar a limitação: “isto resolve integração, mas não resolve sozinho o ciclo completo de uma operação IoT grande”.
3. Subir para **ThingsBoard** como plataforma integrada.
4. Mostrar **FIWARE** como arquitetura de cidade inteligente baseada em contexto.
5. Trazer o **Centro de Operações Rio** como exemplo brasileiro de integração urbana em tempo real, ligado à preparação para grandes eventos e à gestão de risco.
6. Fechar com o presente: **digital twins, edge computing, IIoT e interoperabilidade padronizada**. ([ThingsBoard][1])

## 8) Síntese pronta para você usar em aula

Você pode dizer algo como:

> “Node-RED continua excelente para ensinar a lógica de integração IoT, mas o middleware atual evoluiu para arquiteturas em camadas. Plataformas como ThingsBoard e Mainflux ampliam a gestão operacional; FIWARE e Ditto introduzem contexto e digital twins; EdgeX e Neuron levam inteligência para a borda. No Brasil, o Centro de Operações Rio é um exemplo concreto de integração urbana em tempo real, mostrando como dados de sensores, clima, mobilidade e incidentes podem apoiar decisão operacional em escala municipal.” ([nodered.org][2])

## 9) Minha sugestão objetiva de “stack” para comparar em sala

Para não sobrecarregar os alunos, eu selecionaria estes cinco exemplos:

* **Node-RED** → integração visual e didática
* **ThingsBoard** → plataforma IoT completa para laboratório
* **FIWARE** → smart city e contexto NGSI-LD
* **EdgeX Foundry** → edge middleware
* **Centro de Operações Rio** → caso brasileiro de integração operacional urbana ([nodered.org][2])

Se desejar, eu posso transformar esta pesquisa em um **roteiro de aula em Markdown**, com **tabela comparativa**, **arquitetura em camadas** e **exemplo de sequência didática de 2 horas**.

[1]: https://thingsboard.io/?utm_source=chatgpt.com "ThingsBoard — Open-source IoT (Internet of Things) Platform"
[2]: https://nodered.org/docs/?utm_source=chatgpt.com "Documentation"
[3]: https://dojotdocs.readthedocs.io/pt_BR/latest/architecture.html?utm_source=chatgpt.com "1. Arquitetura — documentação dojot v0.7.1"
[4]: https://uclg-digitalcities.org/en/the-city-of-rio-de-janeiro-and-ibm-sign-a-partnership-to-turn-rio-into-a-smart-city/ "The City of Rio de Janeiro and IBM sign a partnership to turn Rio into a smart city – Comisión de Ciudades Digitales y del Conocimiento"
[5]: https://use.metropolis.org/case-studies/rio-operations-center?utm_source=chatgpt.com "Rio Operations Center | use: urban sustainability exchange"
[6]: https://mainflux.com/?utm_source=chatgpt.com "Mainflux Open Source IoT Platform"
[7]: https://projects.eclipse.org/projects/iot.hono?utm_source=chatgpt.com "Eclipse Hono | projects.eclipse.org"
[8]: https://www.edgexfoundry.org/?utm_source=chatgpt.com "EdgeX Foundry | #1 Open Source Edge Platform"
[9]: https://recipes.onem2m.org/introduction/What-is-oneM2M/?utm_source=chatgpt.com "What is oneM2M?"
[10]: https://openremote.io/product/?utm_source=chatgpt.com "Open source enterprise IoT platform"
[11]: https://docs.tago.io/docs/tagocore/resources?utm_source=chatgpt.com "Resources Overview | TagoIO Docs"
[12]: https://www.emqx.com/en/products/emqx-neuron?utm_source=chatgpt.com "EMQX Neuron - Industrial IoT Connectivity Gateway"
