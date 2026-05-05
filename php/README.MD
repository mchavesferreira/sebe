# Aula PHP: Exemplos para a criação futura de uma API

## 1. O que é PHP?

PHP é uma linguagem de programação muito usada no desenvolvimento de páginas web dinâmicas. Diferente de HTML e CSS, que são interpretados diretamente pelo navegador, o PHP normalmente é executado **no servidor**. Isso significa que o navegador recebe o resultado final, geralmente em HTML, e não necessariamente o código PHP original.

### Criando uma API

Os exemplos a seguir, são preparatórios para a criação de uma API simples em PHP. Inicialmente, vamos testar variáveis, formulários, métodos GET e POST e respostas geradas pelo servidor.

Posteriormente, esses mesmos conceitos poderão ser aplicados para receber dados de sensores, comandos de botões ou informações enviadas por formulários, permitindo controlar cargas, registrar medições em banco de dados, acionar dispositivos, armazenar históricos e integrar páginas web com projetos de sistemas embarcados, automação e Internet das Coisas.

---
## Servidor didático para windows

Baixe o pacote deste <a href=https://downloads.php.net/~windows/releases/php-8.3.30-Win32-vs16-x64.zip>repositório</a> e descompacte em uma pasta. 

Nomei a pasta por exemplo para "phpsever" e mova para um um local conhecido, exemplo C:\users\alunos\phpserver

Faça o download o arquivo "www.zip" deste repositorio, descompacte e mova seu conteudo na pasta phpserver/www 

Exemplo de comando para iniciar um servidor local:

No Windows, usando o caminho completo do executável baixado em ZIP, pode ficar assim:

```bat

cd C:\users\alunos\phpserver\www

php -S localhost:8000
```

Depois, basta abrir no navegador:

```text
http://localhost:8000
```

 crie os arquivos que serão usados nos exemplos:

```text
www/
├── index.php
├── indexhtml.php
├── led_get.php
├── led_post.php
├── variaveis.php
├── operadores.php
├── lacos.php
├── get.php
├── formulario_get.php
├── formulario_post.php
└── receber_post.php
```

Para executar os exemplos, abra o terminal dentro da pasta `www` e execute:

```bat

php -S localhost:8000

```

Acesse no navegador:

```text
http://localhost:8000
```

---

## 3. Primeiro arquivo: `index.php`

Crie o arquivo `index.php` com o conteúdo abaixo:

```php
<?php
// Primeiro teste em PHP

echo "Olá! O PHP está funcionando.";
?>
```

Acesse:

```text
http://localhost:8000/index.php
```

O navegador deverá mostrar:

```text
Olá! O PHP está funcionando.
```

### Misturando PHP com HTML

O PHP pode ser usado dentro de uma página HTML:

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula rápida de PHP</title>
</head>
<body>
    <h1>Minha primeira página com PHP</h1>

    <p>
        <?php
            echo "Este texto foi gerado pelo PHP.";
        ?>
    </p>
</body>
</html>
```

---

## 4. Variáveis em PHP

Variáveis são espaços de memória usados para guardar valores. Em PHP, toda variável começa com o símbolo `$`.

Arquivo: `variaveis.php`

```php
<?php
$nome = "Marcos";
$idade = 40;
$altura = 1.75;
$professor = true;

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Altura: " . $altura . "<br>";
echo "É professor? " . $professor . "<br>";
?>
```

Acesse:

```text
http://localhost:8000/variaveis.php
```

### Observação importante sobre booleanos

Em PHP, quando usamos `echo` em uma variável booleana:

```php
$professor = true;
echo $professor;
```

O valor `true` aparece como:

```text
1
```

Já o valor `false` pode aparecer como vazio.

Para visualizar melhor o tipo e o valor da variável, usamos `var_dump()`:

```php
<?php
$nome = "Marcos";
$idade = 40;
$altura = 1.75;
$professor = true;

var_dump($nome);
echo "<br>";

var_dump($idade);
echo "<br>";

var_dump($altura);
echo "<br>";

var_dump($professor);
echo "<br>";
?>
```

---

## 5. Concatenação

Em PHP, a concatenação de textos e variáveis é feita com ponto `.`.

```php
<?php
$nome = "Ana";
$idade = 18;

echo "Meu nome é " . $nome . " e tenho " . $idade . " anos.";
?>
```

Resultado:

```text
Meu nome é Ana e tenho 18 anos.
```

Também é possível usar variáveis dentro de aspas duplas:

```php
<?php
$nome = "Ana";
$idade = 18;

echo "Meu nome é $nome e tenho $idade anos.";
?>
```

---

## 6. Operadores aritméticos

Operadores aritméticos permitem fazer cálculos.

Arquivo: `operadores.php`

```php
<?php
$a = 10;
$b = 5;

echo "A = $a <br>";
echo "B = $b <br><br>";

echo "Soma: " . ($a + $b) . "<br>";
echo "Subtração: " . ($a - $b) . "<br>";
echo "Multiplicação: " . ($a * $b) . "<br>";
echo "Divisão: " . ($a / $b) . "<br>";
echo "Resto da divisão: " . ($a % $b) . "<br>";
?>
```

Acesse:

```text
http://localhost:8000/operadores.php
```

---

## 7. Operadores de comparação

Operadores de comparação retornam verdadeiro ou falso.

```php
<?php
$a = 10;
$b = "10";

var_dump($a == $b);   // true, compara apenas o valor
echo "<br>";

var_dump($a === $b);  // false, compara valor e tipo
echo "<br>";

var_dump($a != $b);   // false
echo "<br>";

var_dump($a !== $b);  // true, são de tipos diferentes
echo "<br>";
?>
```

### Diferença entre `==` e `===`

| Operador | Significado                   | Exemplo                          |
| -------- | ----------------------------- | -------------------------------- |
| `==`     | compara apenas o valor        | `10 == "10"` retorna verdadeiro  |
| `===`    | compara valor e tipo          | `10 === "10"` retorna falso      |
| `!=`     | diferente no valor            | `10 != 5` retorna verdadeiro     |
| `!==`    | diferente no valor ou no tipo | `10 !== "10"` retorna verdadeiro |

---

## 8. Estrutura condicional `if`, `else` e `elseif`

```php
<?php
$idade = 17;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você ainda não é maior de idade.";
}
?>
```

Exemplo com `elseif`:

```php
<?php
$nota = 6.5;

if ($nota >= 7) {
    echo "Aprovado.";
} elseif ($nota >= 5) {
    echo "Recuperação.";
} else {
    echo "Reprovado.";
}
?>
```

---

## 9. Laço `for`

O laço `for` é usado quando sabemos aproximadamente quantas vezes queremos repetir uma ação.

Arquivo: `lacos.php`

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i <br>";
}
?>
```

Acesse:

```text
http://localhost:8000/lacos.php
```

---

## 10. Laço `while`

O laço `while` repete enquanto uma condição for verdadeira.

```php
<?php
$i = 1;

while ($i <= 10) {
    echo "Número: $i <br>";
    $i++;
}
?>
```

Atenção: se esquecer o incremento `$i++`, o programa pode entrar em loop infinito.

---

## 11. Arrays e `foreach`

Arrays guardam vários valores em uma única variável.

```php
<?php
$frutas = ["Maçã", "Laranja", "Banana"];

echo $frutas[0] . "<br>"; // Maçã
echo $frutas[1] . "<br>"; // Laranja
echo $frutas[2] . "<br>"; // Banana
?>
```

Percorrendo com `foreach`:

```php
<?php
$frutas = ["Maçã", "Laranja", "Banana"];

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}
?>
```

---

# 12. O que é receber valor por GET?

O método **GET** envia dados pela própria URL. Ele é útil para testes rápidos, filtros, buscas e parâmetros simples.

Exemplo de URL com GET:

```text
http://localhost:8000/get.php?nome=Marcos&idade=40
```

Nesse exemplo, a URL está enviando dois valores:

```text
nome = Marcos
idade = 40
```

No PHP, esses valores podem ser acessados usando a variável superglobal `$_GET`.

Arquivo: `get.php`

```php
<?php
$nome = $_GET["nome"] ?? "Nome não informado";
$idade = $_GET["idade"] ?? "Idade não informada";

echo "Nome recebido: " . $nome . "<br>";
echo "Idade recebida: " . $idade . "<br>";
?>
```

Teste no navegador:

```text
http://localhost:8000/get.php?nome=Marcos&idade=40
```

Resultado esperado:

```text
Nome recebido: Marcos
Idade recebida: 40
```

## 12.1. O valor recebido por GET é texto

Mesmo quando enviamos um número pela URL, o PHP recebe esse valor como texto, ou seja, como `string`.

Arquivo: `get.php`

```php
<?php
$idade = $_GET["idade"] ?? 0;

echo "Valor recebido: ";
var_dump($idade);

echo "<br>";

echo "Somando 10: " . ($idade + 10);
?>
```

Teste:

```text
http://localhost:8000/get.php?idade=20
```

O `var_dump()` mostrará algo parecido com:

```text
string(2) "20"
```

Isso significa que o valor veio como texto. Porém, ao fazer uma operação matemática, o PHP tenta converter automaticamente para número.

Para fazer a conversão explicitamente:

```php
<?php
$idade = $_GET["idade"] ?? 0;
$idade = (int) $idade;

echo "Idade convertida para inteiro: ";
var_dump($idade);

echo "<br>";
echo "Idade daqui a 10 anos: " . ($idade + 10);
?>
```

---

# 13. Formulário usando GET

Arquivo: `formulario_get.php`

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário GET</title>
</head>
<body>
    <h1>Formulário com método GET</h1>

    <form action="get.php" method="get">
        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade"><br><br>

        <button type="submit">Enviar por GET</button>
    </form>
</body>
</html>
```

Acesse:

```text
http://localhost:8000/formulario_get.php
```

Ao enviar o formulário, observe que os dados aparecem na URL.

Exemplo:

```text
http://localhost:8000/get.php?nome=Ana&idade=18
```

---

# 14. O que é receber valor por POST?

O método **POST** envia os dados no corpo da requisição HTTP. Ele é muito usado em formulários de cadastro, login, comentários e envio de dados que não devem aparecer diretamente na URL.

No PHP, os valores enviados por POST são acessados pela variável superglobal `$_POST`.

---

## 14.1. Formulário usando POST

Arquivo: `formulario_post.php`

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário POST</title>
</head>
<body>
    <h1>Formulário com método POST</h1>

    <form action="receber_post.php" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade"><br><br>

        <label>Curso:</label><br>
        <input type="text" name="curso"><br><br>

        <button type="submit">Enviar por POST</button>
    </form>
</body>
</html>
```

Arquivo: `receber_post.php`

```php
<?php
$nome = $_POST["nome"] ?? "Nome não informado";
$idade = $_POST["idade"] ?? "Idade não informada";
$curso = $_POST["curso"] ?? "Curso não informado";

echo "<h1>Dados recebidos por POST</h1>";
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Curso: " . $curso . "<br>";
?>
```

Acesse:

```text
http://localhost:8000/formulario_post.php
```

Ao enviar o formulário, os dados não aparecerão na URL.

---

# Comparando GET e POST

| Característica                            | GET                                | POST                          |
| ----------------------------------------- | ---------------------------------- | ----------------------------- |
| Onde os dados aparecem?                   | Na URL                             | No corpo da requisição        |
| Aparece no navegador?                     | Sim                                | Não diretamente               |
| Uso comum                                 | Busca, filtros, parâmetros simples | Formulários, cadastros, login |
| Dá para compartilhar o link com os dados? | Sim                                | Não da mesma forma            |
| Acesso no PHP                             | `$_GET["campo"]`                   | `$_POST["campo"]`             |

Importante: POST não significa segurança automática. Para dados sensíveis, é necessário usar HTTPS, validação, tratamento adequado e boas práticas de segurança.

---


# 15. Exemplo com GET: controlar LED aceso ou apagado

Este exemplo simula o controle de um LED usando o método **GET**. O estado do LED será enviado pela URL.

Arquivo: `led_get.php`

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de LED com GET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .led {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #333;
            margin: 20px 0;
        }

        .aceso {
            background-color: yellow;
            box-shadow: 0 0 30px yellow;
        }

        .apagado {
            background-color: #444;
            box-shadow: none;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #ddd;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>
    <h1>Controle de LED com método GET</h1>

    <?php
    $estado = $_GET["led"] ?? "apagado";

    if ($estado == "aceso") {
        echo "<h2>LED ACESO</h2>";
        echo "<div class='led aceso'></div>";
    } else {
        echo "<h2>LED APAGADO</h2>";
        echo "<div class='led apagado'></div>";
    }
    ?>

    <a href="led_get.php?led=aceso">Acender LED</a>
    <a href="led_get.php?led=apagado">Apagar LED</a>

    <hr>

    <p>Observe que o valor do LED aparece na URL.</p>

    <p>Exemplos:</p>

    <pre>http://localhost:8000/led_get.php?led=aceso</pre>
    <pre>http://localhost:8000/led_get.php?led=apagado</pre>
</body>
</html>
```

Acesse:

```text
http://localhost:8000/led_get.php
```

Neste exemplo, o PHP verifica o valor recebido pela URL:

```php
$estado = $_GET["led"] ?? "apagado";
```

Se a URL tiver:

```text
?led=aceso
```

então o LED será mostrado como aceso.

Se a URL tiver:

```text
?led=apagado
```

então o LED será mostrado como apagado.

---

# 16. Exemplo com GET usando formulário

Neste exemplo, o usuário escolhe o estado do LED por meio de um formulário com botões de opção.

Arquivo: `form_led_get.php`

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário LED GET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .led {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #333;
            margin: 20px 0;
        }

        .aceso {
            background-color: lime;
            box-shadow: 0 0 30px lime;
        }

        .apagado {
            background-color: #333;
        }
    </style>
</head>
<body>
    <h1>Controle de LED com formulário GET</h1>

    <form method="get" action="form_led_get.php">
        <p>Escolha o estado do LED:</p>

        <label>
            <input type="radio" name="led" value="aceso">
            Aceso
        </label>

        <br>

        <label>
            <input type="radio" name="led" value="apagado">
            Apagado
        </label>

        <br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>

    <?php
    $estado = $_GET["led"] ?? "apagado";

    echo "<h2>Estado atual recebido por GET: $estado</h2>";

    if ($estado == "aceso") {
        echo "<div class='led aceso'></div>";
    } else {
        echo "<div class='led apagado'></div>";
    }
    ?>

    <p>Neste caso, o formulário envia o valor pela URL.</p>
</body>
</html>
```

Teste:

```text
http://localhost:8000/form_led_get.php
```

Ao enviar o formulário, a URL ficará parecida com:

```text
http://localhost:8000/form_led_get.php?led=aceso
```

ou:

```text
http://localhost:8000/form_led_get.php?led=apagado
```

---

# 17. Exemplo com POST: controlar LED aceso ou apagado

Agora o estado do LED será enviado pelo método **POST**. Nesse caso, o valor não aparece diretamente na URL.

Arquivo: `led_post.php`

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de LED com POST</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .led {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #333;
            margin: 20px 0;
        }

       .aceso {
        background-color: green;
        box-shadow: 0 0 30px green;
    }

        .apagado {
            background-color: #333;
        }

        button {
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Controle de LED com método POST</h1>

    <form method="post" action="led_post.php">
        <button type="submit" name="led" value="aceso">Acender LED</button>
        <button type="submit" name="led" value="apagado">Apagar LED</button>
    </form>

    <hr>

    <?php
    $estado = $_POST["led"] ?? "apagado";

    if ($estado == "aceso") {
        echo "<h2>LED ACESO</h2>";
        echo "<div class='led aceso'></div>";
    } else {
        echo "<h2>LED APAGADO</h2>";
        echo "<div class='led apagado'></div>";
    }
    ?>

    <p>Como o método usado é POST, o valor enviado não aparece diretamente na URL.</p>
</body>
</html>
```

Acesse:

```text
http://localhost:8000/led_post.php
```

Neste exemplo, cada botão envia um valor diferente para o mesmo campo:

```php
<button type="submit" name="led" value="aceso">Acender LED</button>
<button type="submit" name="led" value="apagado">Apagar LED</button>
```

O PHP lê o valor com:

```php
$estado = $_POST["led"] ?? "apagado";
```

---

## Simulando comando para microcontrolador

Em sistemas embarcados, muitas vezes uma página web envia um comando que depois poderia ser interpretado por um microcontrolador, ESP32, Arduino, Node-RED ou outro sistema.

Neste exemplo, o PHP não acende um LED físico diretamente. Ele apenas gera um comando textual:

* `1` para LED aceso;
* `0` para LED apagado.


```

