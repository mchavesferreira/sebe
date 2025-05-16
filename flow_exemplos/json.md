# JSON

O JSON (JavaScript Object Notation) é um formato leve de troca de dados, fácil de ler e escrever para humanos, e simples de analisar e gerar para máquinas. A estrutura de um JSON é construída com base em duas estruturas universais:

Objetos: Um objeto JSON é uma coleção de pares chave/valor delimitados por chaves {}. Cada chave é uma string e é seguida por dois pontos : e o valor correspondente. Os pares chave/valor são separados por vírgulas. Por exemplo:

```ruby

{
  "nome": "João",
  "idade": 30,
  "casado": true
}
```

Neste exemplo, o objeto contém três chaves: "nome", "idade", e "casado", com seus respectivos valores: uma string, um número, e um booleano.


Arrays: Um array JSON é uma lista ordenada de valores, delimitada por colchetes []. Os valores dentro de um array são separados por vírgulas. Os valores podem ser de qualquer tipo de dado JSON, incluindo objetos e outros arrays. Por exemplo:
```ruby
[
  "maçã",
  "banana",
  "cereja"
]
```
Este é um exemplo de um array contendo três strings. Arrays também podem conter objetos:
```ruby
[
  {"nome": "João", "idade": 30},
  {"nome": "Maria", "idade": 25}
]
```

## Tipos de Valores no JSON

Os valores em JSON podem ser de um dos seguintes tipos:

### String: 

### Número:
Inteiros ou decimais, como 42 ou 3.14. Não diferencia entre inteiros e floats.
    
### Objeto: 
Coleções de pares chave/valor encapsulados entre chaves.
    
### Array: 
Listas ordenadas de valores entre colchetes.
    
### Booleano: 
true ou false.
    
### Null: 
Representa um valor nulo ou "vazio", escrito como null.

    
# Exemplos de URL para busca de dados

---

### 1. Cotação (Financeiro) - AwesomeAPI
- **Descrição**: Fornece cotações em tempo real de mais de 150 moedas, incluindo dólar, euro e bitcoin, com dados atualizados constantemente. Ideal para aplicações financeiras.
- **URL de Exemplo**: `https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL`
- **Retorno JSON (Exemplo Simplificado)**:
  ```json
  {
    "USDBRL": {
      "code": "USD",
      "codein": "BRL",
      "name": "Dólar Americano/Real Brasileiro",
      "bid": "5.1234",
      "create_date": "2025-05-16 00:30:00"
    },
    "EURBRL": {
      "code": "EUR",
      "codein": "BRL",
      "name": "Euro/Real Brasileiro",
      "bid": "5.5678",
      "create_date": "2025-05-16 00:30:00"
    }
  }
  ```
- **Detalhes**:
  - **Autenticação**: Não requer chave para solicitações básicas; cache de 1 minuto para chamadas não autenticadas.
  - **Limitações**: Para maior frequência ou acesso a endpoints avançados, é necessário obter uma chave de API.
  - **Fonte**:[](https://docs.awesomeapi.com.br/api-de-moedas)
- **Uso**: Perfeito para widgets financeiros ou dashboards de cotações em tempo real.

---

### 2. Meteorológico - Open-Meteo
- **Descrição**: API gratuita que fornece dados meteorológicos em tempo real e previsões, incluindo temperatura, precipitação e vento, com cobertura global.
- **URL de Exemplo**: `https://api.open-meteo.com/v1/forecast?latitude=-23.5505&longitude=-46.6333&current=temperature_2m,precipitation,wind_speed_10m&timezone=America/Sao_Paulo`
- **Retorno JSON (Exemplo Simplificado)**:
  ```json
  {
    "latitude": -23.55,
    "longitude": -46.633,
    "current": {
      "time": "2025-05-16T00:30:00",
      "temperature_2m": 22.5,
      "precipitation": 0.0,
      "wind_speed_10m": 10.2
    }
  }
  ```
- **Detalhes**:
  - **Autenticação**: Não requer chave para uso não comercial.
  - **Limitações**: Até 10.000 solicitações por dia no plano gratuito; dados históricos requerem plano pago.
  - **Fonte**:[](https://www.reddit.com/r/learnpython/comments/15zm4pq/best_weather_api/?tl=pt-br)
- **Uso**: Ideal para aplicativos de previsão do tempo ou integração em sistemas de smart home.

---

### 3. Tráfego - Google Maps Roads API
- **Descrição**: Fornece dados de tráfego em tempo real, incluindo velocidade e condições de trânsito em trechos de estrada, baseado em coordenadas geográficas.
- **URL de Exemplo**: `https://roads.googleapis.com/v1/speedLimits?path=-23.5505,-46.6333|-23.5605,-46.6433&key=SUA_CHAVE_API`
- **Retorno JSON (Exemplo Simplificado)**:
  ```json
  {
    "speedLimits": [
      {
        "placeId": "ChIJ0WGkg4FEzpQRrlsz_whLqZs",
        "speedLimit": 60,
        "units": "KPH"
      }
    ]
  }
  ```
- **Detalhes**:
  - **Autenticação**: Requer chave de API do Google Cloud.
  - **Limitações**: 10.000 chamadas gratuitas por mês; custos adicionais para uso intensivo.
  - **Fonte**: e documentação oficial do Google Maps.[](https://www.reddit.com/r/learnpython/comments/15zm4pq/best_weather_api/?tl=pt-br)
- **Uso**: Útil para aplicativos de navegação ou logística, como Waze ou Uber.

---

### 4. Qualidade do Ar - AQICN (World Air Quality Index)
- **Descrição**: Fornece índices de qualidade do ar em tempo real para mais de 100 países, incluindo poluentes como PM2.5, PM10 e NO2.
- **URL de Exemplo**: `http://api.waqi.info/feed/shanghai/?token=SUA_CHAVE_API`
- **Retorno JSON (Exemplo Simplificado)**:
  ```json
  {
    "status": "ok",
    "data": {
      "aqi": 75,
      "idx": 1434,
      "attributions": [
        {
          "name": "Shanghai Environment Monitoring Center"
        }
      ],
      "city": {
        "name": "Shanghai",
        "geo": [31.2048, 121.448]
      },
      "iaqi": {
        "pm25": { "v": 75 },
        "no2": { "v": 20 }
      }
    }
  }
  ```
- **Detalhes**:
  - **Autenticação**: Requer chave de API (disponível após registro gratuito).
  - **Limitações**: Cota padrão de 1.000 solicitações por segundo; dados não podem ser redistribuídos em serviços pagos.
  - **Fonte**:[](https://aqicn.org/api/pt/)
- **Uso**: Indicado para aplicativos de saúde ambiental ou mapas de poluição.

---

### 5. Transporte Público - Comboios de Portugal (CP) API Não Oficial
- **Descrição**: Embora não seja uma API oficial, endpoints extraídos da aplicação da Comboios de Portugal fornecem dados em tempo real sobre horários e status de trens.
- **URL de Exemplo**: (Extraído de análise de rede; endpoint fictício para ilustração) `https://api.cp.pt/realtime/trains?station=PORTO`
- **Retorno JSON (Exemplo Simplificado)**:
  ```json
  {
    "trains": [
      {
        "trainId": "12345",
        "destination": "Lisboa",
        "departureTime": "2025-05-16T01:00:00",
        "status": "On Time"
      }
    ]
  }
  ```
- **Detalhes**:
  - **Autenticação**: Não requer chave, mas depende de endpoints públicos não documentados.
  - **Limitações**: Pode ser instável devido à natureza não oficial; uso excessivo pode levar a bloqueios.
  - **Fonte**:[](https://www.reddit.com/r/devpt/comments/1jc8ikf/api_da_cp_dados_em_tempo_real/)
- **Uso**: Útil para projetos experimentais ou aplicativos de transporte em Portugal.

---

### 6. Criptomoedas - CoinGecko
- **Descrição**: Fornece dados em tempo real sobre preços, volumes e capitalização de mercado de milhares de criptomoedas, como Bitcoin e Ethereum.
- **URL de Exemplo**: `https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=bitcoin,ethereum`
- **Retorno JSON (Exemplo Simplificado)**:
  ```json
  [
    {
      "id": "bitcoin",
      "symbol": "btc",
      "name": "Bitcoin",
      "current_price": 65000.12,
      "market_cap": 1280000000000,
      "last_updated": "2025-05-16T00:30:00.000Z"
    },
    {
      "id": "ethereum",
      "symbol": "eth",
      "name": "Ethereum",
      "current_price": 3000.45,
      "market_cap": 360000000000,
      "last_updated": "2025-05-16T00:30:00.000Z"
    }
  ]
  ```
- **Detalhes**:
  - **Autenticação**: Não requer chave para endpoints básicos.
  - **Limitações**: Limite de 10-30 chamadas por minuto no plano gratuito.
  - **Fonte**: Documentação oficial da CoinGecko.
- **Uso**: Ideal para dashboards de criptomoedas ou bots de trading.

---

### Observações Gerais
- **Autenticação**: Algumas APIs (como Google Maps Roads e AQICN) exigem chaves de API, que podem ser obtidas gratuitamente ou com custos dependendo do uso. APIs como Open-Meteo e AwesomeAPI são mais acessíveis para projetos iniciais.
- **Formato JSON**: Todas as APIs retornam dados em JSON, facilitando a integração em aplicações web, mobile ou IoT.
- **Limitações**: Verifique as cotas de uso e políticas de redistribuição, especialmente para APIs gratuitas, para evitar bloqueios ou custos inesperados.
- **Fontes**: As URLs foram selecionadas com base em documentações oficiais e discussões técnicas (ex.: Reddit, Stack Overflow), com validação cruzada para garantir confiabilidade.[](https://www.reddit.com/r/learnpython/comments/15zm4pq/best_weather_api/?tl=pt-br)[](https://aqicn.org/api/pt/)[](https://docs.awesomeapi.com.br/api-de-moedas)

Se precisar de ajuda para implementar alguma dessas APIs ou quiser exemplos de código (ex.: em Python ou JavaScript), é só pedir!

Fonte: 

https://www.json.org/json-en.html

Fonte de dados IBGE:  
https://servicodados.ibge.gov.br/api/docs/

Exemplo com informações do tempo

https://api.tutiempo.net/pt/json.html




