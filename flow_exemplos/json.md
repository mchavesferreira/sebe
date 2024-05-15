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

    


Fonte: 

https://www.json.org/json-en.html

Fonte de dados IBGE:  
https://servicodados.ibge.gov.br/api/docs/
