# Pesquisa Profunda sobre Sistemas de Automação Predial: Desenvolvimento de Rede Mesh para Aplicações Didáticas

## 1. Propriedades e Elementos dos Sistemas de Automação Predial

### 1.1 Definição e Conceitos Fundamentais

A automação predial consiste na integração de tecnologias para controlar, de forma centralizada e automatizada, funções como iluminação, climatização, segurança, controle de acesso, elevadores e sistemas hidráulicos [1]. O sistema utiliza sensores, controladores e softwares que permitem o monitoramento em tempo real e decisões automáticas, otimizando a gestão, eficiência e sustentabilidade do edifício [1].

### 1.2 Componentes Principais dos Sistemas BAS

Um sistema de automação predial é composto por diferentes subsistemas que trabalham em conjunto para garantir o funcionamento otimizado do edifício [2]. Os principais componentes incluem:

#### Sistema de Gestão Predial (BMS)
O BMS é o cérebro da automação predial, responsável por integrar e gerenciar os diversos sistemas do edifício [2]. Ele coleta dados, processa informações e executa comandos com base em parâmetros configurados [2]. Os sistemas BMS podem ser divididos em três funções básicas: controle, monitoramento e configuração [3].

#### Sensores e Atuadores
Os sensores monitoram variáveis como temperatura, umidade, luminosidade e ocupação [2]. Os atuadores executam ações com base nas informações dos sensores, como ajustar o ar-condicionado ou acender luzes [2]. Esta integração permite que o sistema responda automaticamente às condições ambientais detectadas [1].

#### Controladores Lógicos Programáveis (CLPs)
São responsáveis pelo controle automatizado de sistemas específicos, garantindo respostas rápidas e precisas [2]. Os CLPs processam dados de entrada dos sensores e comandam os atuadores para executar as ações programadas [4].

#### Interface Homem-Máquina (IHM)
Facilita a interação entre os operadores e o sistema, permitindo monitoramento e ajustes manuais quando necessário [2]. A IHM proporciona visualização em tempo real dos dados operacionais e controle centralizado dos sistemas [5].

#### Rede de Comunicação
Utiliza protocolos como BACnet, Modbus e KNX para garantir a conectividade entre os dispositivos e o BMS [2]. A rede de comunicação é fundamental para transmitir dados de forma rápida e eficiente entre todos os componentes do sistema [1].

### 1.3 Aplicações dos Sistemas de Automação Predial

Os sistemas de automação predial podem ser aplicados em diversas áreas [6]:

- **Controle de HVAC**: Gerenciamento de todo o sistema de ar-condicionado, gerando mais conforto e redução de energia [6]
- **Segurança**: Proteção contra incêndio e intrusão, com monitoração visual centralizada [6]
- **Elevadores**: Controle e gerenciamento de todo o sistema de elevador, assegurando mais segurança [6]
- **Monitoramento de equipamentos**: Controle de geradores, insufladores, exaustores, entre outros [6]
- **Sistemas hidráulicos**: Monitoramento de bombas, filtros, estações de tratamento de esgoto [6]

## 2. Avaliação e Comparação de Sistemas Existentes no Mercado

### 2.1 Mercado Global de Automação Predial

O mercado global de sistemas de automação predial está projetado para crescer significativamente [7]. O tamanho do mercado é estimado em US$ 201,08 bilhões em 2024, devendo atingir US$ 332,01 bilhões até 2029, crescendo a uma taxa anual composta (CAGR) de 10,2% [8].

### 2.2 Protocolos e Sistemas Principais

#### BACnet
É um protocolo de rede usado especificamente para comunicação de dispositivos entre sistemas de automação predial de diferentes fabricantes [9]. O protocolo foi desenvolvido pela ASHRAE e é amplamente usado na automação de edificações [9]. Sua transmissão pode ser feita usando Ethernet, IP, Zigbee ou MS/TP, oferecendo baixo custo de infraestrutura [9].

#### Modbus
Protocolo de comunicação amplamente usado em sistemas de automação industrial [9]. Sua simplicidade também permite que ele seja usado em automação predial, em sistemas de conforto e controle de acesso [9]. Foi desenvolvido pela Modicon Inc e usa os meios de transmissão TCP/IP, RTU ou ASCII [9].

#### KNX/EIB
O sistema EIB/Konnex é um dos sistemas de automação residencial/predial mais difundidos no mercado brasileiro [10]. Este protocolo oferece alta compatibilidade e é amplamente utilizado em aplicações comerciais e residenciais [11].

#### LonWorks
Desenvolvido pela Echelon Corporation, é um protocolo proprietário voltado para o ramo residencial, transportes e industrial [9]. Utilizado em controles de iluminação, medição e conforto em geral [9]. É um protocolo de alto custo de implantação por ser proprietário [9].

### 2.3 Comparação de Protocolos

| Protocolo | Vantagens | Desvantagens | Aplicações Principais |
|-----------|-----------|--------------|----------------------|
| BACnet | Protocolo aberto, amplamente adotado, interoperabilidade | Limitação no número de dispositivos | HVAC, sistemas mecânicos |
| Modbus | Simplicidade, baixo custo | Grande quantidade de programação necessária | Sistemas industriais, automação predial |
| KNX | Compatibilidade ampla, padronização europeia | Custo mais elevado | Residencial e comercial |
| LonWorks | Desenvolvimento web, muitos dispositivos disponíveis | Proprietário, alto custo, tecnologia em desuso | Controle de iluminação, medição |

### 2.4 Plataformas de Desenvolvimento Acessíveis

#### ESP32 e Arduino
O ESP32 é uma placa programável via Wi-Fi e Bluetooth, integrada com a plataforma Arduino [12]. É ideal para projetos de IoT, automação residencial e robótica [12]. O suporte ao ESP32 no Arduino oferece uma maneira prática e acessível para desenvolvedores utilizarem este potente SoC em seus projetos [13].

#### Raspberry Pi
A Raspberry Pi é um microcomputador completo que pode funcionar como servidor para automação residencial [14]. Pode ser aplicada em diversos projetos que exigem processamento computacional, incluindo a criação de servidores independentes de internet [14].

#### Node-RED
O Node-RED é uma ferramenta de desenvolvimento de código aberto baseada em fluxos, especialmente adequada para soluções de integração industrial [15]. Permite criar fluxos complexos através de uma interface intuitiva de arrastar e soltar [15]. Pode ser executado em hardware de baixo custo como Raspberry Pi ou implantado na nuvem [15].

## 3. Módulos de Rádio para Comunicação em Rede Mesh

### 3.1 Conceitos de Rede Mesh

A rede mesh é uma tecnologia que permite criar um sistema formado por dois ou mais dispositivos que se comunicam entre si para formar uma rede única [16]. Em uma rede mesh, cada rádio funciona não somente como receptor de sinal, mas também como roteador, sendo uma rede altamente escalável [17].

### 3.2 Tecnologias Disponíveis

#### ESP-MESH
O ESP-MESH é um protocolo de rede construído sobre o protocolo Wi-Fi [18]. Permite que múltiplos dispositivos (nós) se comuniquem entre si sob uma única rede local sem fio [18]. É suportado em placas ESP32 e ESP8266 [18]. O ESP-MESH é auto-organizável e auto-reparável, significando que a rede pode ser construída e mantida autonomamente [18].

#### LoRa Mesh
O LoRa Mesh da Radioenge utiliza a tecnologia LoRa com capacidade de comunicação entre módulos de modo que a informação saia de um ponto e chegue ao destino sem comunicação direta [19]. Cada rádio atua como repetidor, criando uma estrutura extremamente robusta e difícil de desligar [20].

#### Especificações Técnicas dos Módulos LoRa Mesh
- Data Rate: 21.900 bits/segundo [17]
- Topologia de Rede: LoRa MESH Radioenge [17]
- Não precisa de Gateway LoRaWAN [17]
- Utiliza protocolo ModBus para transmissão transparente [17]

### 3.3 Bibliotecas de Desenvolvimento

#### LoRaMesher
A biblioteca LoRaMesher permite criar redes mesh usando tecnologia de rádio LoRa em placas ESP32 [21]. Utiliza um protocolo de roteamento de vetor de distância para permitir comunicação entre dois nós, enquanto outros nós na rede mesh operam como roteadores [21].

#### PainlessMesh
Biblioteca para ESP32 e ESP8266 que facilita a implementação de redes mesh baseadas em Wi-Fi [18]. Permite comunicação direta entre dispositivos sem necessidade de um ponto de acesso central [18].

## 4. Diagrama Elétrico do Hardware do Circuito

### 4.1 Componentes Básicos do Sistema

Para o desenvolvimento de um sistema de automação didático, os componentes fundamentais incluem:

#### Microcontrolador Principal
- **ESP32**: Processador Xtensa LX6 dual-core de 32 bits, clock até 240 MHz [12]
- **Conectividade**: Wi-Fi, Bluetooth LE integrados [12]
- **Memória**: 32 KB de cache de nível 1, 16 KB de cache de nível 2 [12]

#### Sensores
- **DHT22**: Sensor de temperatura e umidade digital [22]
- **Sensores capacitivos**: Para detecção de presença [23]
- **Sensores de luminosidade**: Para controle automático de iluminação [22]

#### Atuadores
- **Relés**: Para controle de cargas AC [22]
- **LEDs**: Para indicação visual e controle de iluminação [22]
- **Servo motores**: Para controle de posição [22]
- **Atuadores lineares**: Para automação de válvulas e dampers [24]

#### Fonte de Alimentação
- **Fonte DC**: 12V/24V para alimentação dos atuadores [23]
- **Reguladores**: 3.3V e 5V para alimentação dos microcontroladores [22]

### 4.2 Arquitetura do Sistema

O sistema será baseado em uma arquitetura distribuída onde cada nó da rede mesh possui:
- Microcontrolador ESP32 [13]
- Módulo de comunicação LoRa ou Wi-Fi mesh [18]
- Sensores locais para coleta de dados [22]
- Atuadores para controle de dispositivos [22]
- Interface de alimentação e proteção [22]

## 5. Implementação da Rede Mesh

### 5.1 Configuração do ESP-MESH

Para implementar uma rede mesh com ESP32, utiliza-se a biblioteca PainlessMesh [18]. A configuração básica inclui:

- Definição de ID único para cada módulo [19]
- Configuração de senha única para toda a rede [19]
- Estabelecimento de protocolos de comunicação [18]
- Implementação de algoritmos de roteamento [18]

### 5.2 Protocolo de Comunicação

O sistema utilizará o protocolo ModBus para transmissão transparente de dados entre os nós da rede [19]. Este protocolo permite:
- Comunicação confiável entre dispositivos [9]
- Facilidade de implementação [9]
- Compatibilidade com sistemas industriais [9]

### 5.3 Auto-organização da Rede

A rede mesh implementada será auto-organizável e auto-reparável [18]. Os nós podem:
- Descobrir automaticamente outros nós próximos [25]
- Estabelecer rotas de comunicação otimizadas [25]
- Reconfigurar-se automaticamente em caso de falha de um nó [25]

## 6. Interface para Controle e Monitoramento

### 6.1 Desenvolvimento de Dashboard IoT

Para o controle e monitoramento do sistema, será desenvolvido um dashboard IoT que permite [26]:
- Monitoramento e controle remoto de ativos físicos [26]
- Visualização em tempo real dos dados dos sensores [26]
- Interface baseada em nuvem com acesso global [26]

### 6.2 Características da Interface

#### Interface Homem-Máquina (IHM)
A interface será projetada com foco na usabilidade, incluindo [5]:
- Monitoramento de processos em tempo real [5]
- Visualização e armazenamento de dados [5]
- Revisão e ajuste de parâmetros [5]
- Prevenção e diagnóstico de problemas [5]

#### Funcionalidades Principais
- **Controle remoto**: Acionamento de dispositivos à distância [27]
- **Monitoramento**: Visualização de status dos sistemas [27]
- **Alarmes**: Notificações de eventos críticos [27]
- **Relatórios**: Análise histórica de dados [26]

### 6.3 Tecnologias de Desenvolvimento

#### Node-RED para Integração
O Node-RED será utilizado para criar a lógica de integração entre os dispositivos [15]. Suas vantagens incluem:
- Interface de programação visual [15]
- Biblioteca extensa de nós pré-construídos [15]
- Escalabilidade e flexibilidade [15]
- Integração com serviços IoT e nuvem [15]

#### Plataformas Web
Para a interface web, serão utilizadas tecnologias modernas como:
- HTML5 e CSS3 para estrutura e apresentação
- JavaScript para interatividade
- Frameworks responsivos para acesso móvel [26]

## 7. Construção de Módulos para Banca Didática

### 7.1 Módulos Propostos

#### Módulo Central (Gateway)
- ESP32 principal com conectividade Wi-Fi
- Interface Ethernet para conexão com rede local
- Display LCD para informações locais
- Botões para configuração manual

#### Módulos Sensores
- **Módulo Clima**: DHT22 para temperatura/umidade
- **Módulo Luz**: Sensor LDR e controle de LEDs
- **Módulo Presença**: Sensor PIR para detecção de movimento
- **Módulo Energia**: Medição de corrente e tensão

#### Módulos Atuadores
- **Módulo Relés**: Controle de cargas AC/DC
- **Módulo Motor**: Controle de servo e motores DC
- **Módulo Válvula**: Controle de atuadores lineares
- **Módulo Alarme**: Buzzer e indicadores visuais

### 7.2 Características Didáticas

Cada módulo será projetado com foco educacional:
- Conectores padronizados para facilitar montagem
- LEDs indicadores para visualização de estados
- Jumpers para configuração de endereços
- Documentação técnica detalhada
- Exemplos de código comentados

## 8. Testes Operacionais e Validação

### 8.1 Metodologia de Testes

Para validação do sistema, serão implementados testes seguindo metodologias estabelecidas [28]:

#### Testes de Sistema
Os testes de sistema avaliarão o funcionamento completo do sistema integrado [29]. Incluirão verificação de:
- Requisitos funcionais e não funcionais [29]
- Desempenho sob diferentes condições de carga [29]
- Confiabilidade e estabilidade da rede [29]

#### Testes de Comunicação
- **Alcance**: Verificação da distância máxima entre nós
- **Latência**: Medição do tempo de resposta da rede
- **Confiabilidade**: Taxa de entrega de pacotes
- **Auto-recuperação**: Capacidade de reconfiguração automática

### 8.2 Critérios de Validação

#### Parâmetros de Desempenho
- Latência máxima de 200ms para comandos críticos
- Taxa de perda de pacotes inferior a 1%
- Tempo de reconexão automática inferior a 30 segundos
- Autonomia energética mínima de 8 horas

#### Testes de Usabilidade da Interface
Seguindo as práticas recomendadas para teste de IHM [30]:
- Definição de metas e requisitos claros [30]
- Envolvimento de usuários finais no processo [30]
- Iteração e melhoria contínua [30]
- Seguimento de padrões de usabilidade [30]

### 8.3 Validação Educacional

#### Objetivos Pedagógicos
O sistema validará conceitos fundamentais de:
- Protocolos de comunicação industrial
- Redes mesh e topologias de rede
- Sistemas de automação predial
- Integração de hardware e software
- Interface homem-máquina

#### Cenários de Teste Didático
- Simulação de falhas para demonstrar auto-recuperação
- Expansão da rede com novos nós
- Configuração de algoritmos de controle
- Análise de dados e geração de relatórios

## Conclusão

Este trabalho apresentou uma abordagem abrangente para o desenvolvimento de um sistema de automação predial baseado em rede mesh para aplicações didáticas. A pesquisa demonstrou que o mercado de automação predial está em crescimento acelerado, com projeções de atingir US$ 332 bilhões até 2029 [7]. 

O sistema proposto, utilizando ESP32 e tecnologias mesh, oferece uma solução acessível e escalável para o ensino de conceitos de automação [13]. A implementação de módulos didáticos permitirá aos estudantes compreender na prática os fundamentos de sistemas BAS, protocolos de comunicação e interfaces de controle [15].

A validação através de testes operacionais garantirá que o sistema atenda aos requisitos técnicos e pedagógicos estabelecidos [28]. O projeto contribuirá significativamente para a formação de profissionais capacitados em tecnologias de automação predial, área em crescente demanda no mercado brasileiro [31].

[1] https://blog.kalatec.com.br/automacao-predial/
[2] https://comsind.com.br/automacao-predial-como-funciona-e-quais-sao-seus-beneficios/
[3] https://smacna.org.br/artigos-tecnicos/iot-internet-das-coisas-na-concepcao-de-sistemas-de-automacao-predial-bms/
[4] https://blog.cimautomacao.com.br/automacao-predial-o-que-e-como-funciona-e-vantagens/
[5] https://www.kalatec.com.br/ihm/
[6] https://www.dakol.com.br/automacao-predial-o-que-e-quais-sao-as-vantagens/
[7] https://www.mordorintelligence.com/pt/industry-reports/building-automation-system-market
[8] https://revistadofrio.com.br/mercado-de-automacao-predial-deve-crescer-mais-de-100-ate-2031/
[9] https://www.marciocunha.eti.br/diferenca-entre-bacnet-modbus-e-lonworks/
[10] http://izabelahendrix.edu.br/pesquisa/anais/arquivos2019/engenharias/estudo-comparativo-dos-sistemas-de-automacao-residencial-e-predial-mais-difundidos-do-brasil-eib-konnex-e-my-home-bticinolegrand-pag-749-764.pdf
[11] https://www.optigo.net/which-better-bacnet-lonworks-modbus-or-knx/
[12] https://victorvision.com.br/blog/placa-esp32/
[13] https://embarcados.com.br/desenvolvimento-para-esp32-esp-idf-zephyr-nuttx-ou-arduino/
[14] https://www.makerhero.com/blog/automacao-residencial-com-casaos-e-raspberry-pi/
[15] https://pt.linkedin.com/pulse/o-que-torna-node-red-t%C3%A3o-fant%C3%A1stico-para-solu%C3%A7%C3%B5es-de-denis-nobre-bw8ff
[16] https://blog.intelbras.com.br/o-que-e-rede-mesh-e-quais-suas-vantagens/
[17] https://radioenge.mercadoshops.com.br/MLB-1143187039-modulo-lora-mesh-radioenge-_JM
[18] https://randomnerdtutorials.com/esp-mesh-esp32-esp8266-painlessmesh/
[19] https://elcereza.com/lora-mesh-da-radioenge-tutorial-completo/
[20] https://www.youtube.com/watch?v=8u1k6w2F7BE
[21] https://www.reddit.com/r/esp32/comments/120hsj1/introducing_loramesher_a_library_for_creating/
[22] https://www.tudosobreiot.com.br/blog/1098-iot-feito-facil_-brincando-com-o-esp32-no-arduino-ide
[23] https://www.youtube.com/watch?v=bRmK7zMqZCc
[24] https://www.dicasdeinstrumentacao.com/partes-do-atuador-eletrico/
[25] https://www.espressif.com/en/products/sdks/esp-wifi-mesh/overview
[26] https://pt.ubidots.com/blog/iot-dashboards/
[27] https://ferrazseguranca.com.br/glossario/o-que-e-interface-de-controle-seguranca-eletronica/
[28] https://www.fcvalidation.com/validacao-de-sistemas-de-automacao-seguindo-o-gamp/
[29] https://www.zaptest.com/pt-br/o-que-sao-testes-de-sistema-um-mergulho-profundo-nas-abordagens-tipos-ferramentas-dicas-e-truques-e-muito-mais
[30] https://pt.linkedin.com/advice/0/how-do-you-test-evaluate-hmi-building-automation?lang=pt
[31] https://knxbrasil.com.br/mercado-de-investimentos-na-automacao-predial/
[32] https://loja.br.abb.com/blog/post/automacao-predial-equipamentos-beneficios
[33] https://headlinks.com.br/o-que-e-e-quais-sao-as-vantagens-da-automacao-predial/
[34] https://br.mitsubishielectric.com/pt/building-solutions/bms/index.html
[35] https://gatewaymechanical.ca/building-automation-system-essential-guide/
[36] https://www.se.com/us/en/work/products/building-automation-and-control/
[37] https://www.revistaprediointeligente.com.br/mercado/mercado-de-automacao-residencial-alguns-dados-estatisticos-relevantes/
[38] http://downloads.echelon.com/support/documentation/analysis/lon-knx_study.htm
[39] https://adatech.dev.br/automacao-residencial-programacao-iot-raspberry-pi-arduino/
[40] https://www.radioenge.com.br/produto/rede-mesh-para-smart-grid/
[41] https://www.radioenge.com.br/produto/rede-mesh-para-iluminacao-publica/
[42] https://mum.mikrotik.com/presentations/BR08/Brasil_Mesh_Maia.pdf
[43] https://www.youtube.com/watch?v=gq1-G3Lbym8
[44] https://www.usinainfo.com.br/blog/esp32/
[45] https://monday.com/blog/pt/desenvolvimento/ferramentas-de-desenvolvimento-de-software/
[46] https://www.eclcomponentes.com.br/blog/componentes-para-automacao-na-industria/interfaces-em-sistemas-de-automacao/
[47] https://selinc.com/pt/solutions/transmission/monitoring-automation/
[48] https://www.festo.com/br/pt/e/sobre-a-festo/blog/in-practice/interface-homem-maquina-vantagens-para-a-automacao-industrial-id_2107971/
[49] https://poloeletronica.com.br/glossario/o-que-e-interface-de-controle-remoto-em-soft-starters/
[50] http://documentos.poa.ifrs.edu.br/uploads/r/biblioteca-clovis-vergara-marques-4/8/7/a/87ada6afc512a9800b8470540807550d42a18b00df3d777ee90363657df12495/Artigo-Final-Gutierre.pdf
[51] https://uds.com.br/blog/ferramentas-para-teste-automatizado-de-software/
[52] https://www.dbccompany.com.br/automacao-de-testes-de-software-um-guia-completo-para-entender-e-comecar-a-implementar/
[53] https://voidr.co/blog/5-ferramentas-de-automacao-de-testes-de-software/
[54] https://www.selenium.dev/pt-br/documentation/test_practices/overview/
[55] https://colonialwebb.com/choosing-the-right-building-automation-system-bas-key-features-to-look-for/
[56] https://testingcompany.com.br/blog/testes-automatizados-e-unitarios-entenda-as-suas-caracteristicas-e-diferencas
[57] https://www.minaslabor.com.br/glossario/o-que-e-validacao-de-processos/
[58] https://www.globalgrowthinsights.com/pt/market-reports/building-automation-control-systems-bacs-market-100316
[59] https://blog.arduinoomega.com/ebooks/Eletronica-Omega-Iot-Iniciantes-Esp32.pdf
[60] https://contemp.com.br/produto/acxipif-acophxipif-interface-de-automacao-pif-industrial-para-xi80-xi410-xi1m-contemp
