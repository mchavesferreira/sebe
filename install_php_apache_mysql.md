# Instalando Apache, php e mysql no servidor Linux.

## Apache (servidor web)
Atualize o Servidor Linux com o comando:
```java
sudo apt-get update
sudo apt-get upgrade
```

Para instalar o servidor Apache utilize o seguinte comando:
```java
sudo apt-get install apache2
```

Para iniciar o servidor Apache utilize o seguinte comando:
```java
sudo systemctl start apache2
```

Para parar o servidor Apache utilize o seguinte comando:
```java
sudo systemctl stop apache2
```

Para reiniciar o servidor Apache utilize o seguinte comando:
```java
sudo systemctl restart apache2
```

Para ver o status do servidor Apache utilize o seguinte comando:
```java
sudo systemctl status apache2
```

Teste as configurações do servidor Apache utilize o seguinte comando:
```java
sudo apache2ctl configtest
```

### Crie a primeira pagina index.html
Acesse a pasta onde está configurada a pagina default
```java
cd /var/www/html
```
Edite o arquivo index.html
```java
nano index.html
```

```java
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>
```

Saiba mais sobre Html, css: https://www.w3schools.com/html/default.asp

## PHP (Linguagem de programação web)
O primeiro pacote permite instalar várias versões do PHP no ubuntu mantido por Ondrej Surý em https://launchpad.net/~ondrej
```java
sudo add-apt-repository ppa:ondrej/php
```

Para instalar o PHP no servidor Apache utilize o seguinte comando:
```java
sudo apt-get install php libapache2-mod-php php-mysql php-dev php-pear
```

Reinicie o servidor Apache utilize o seguinte comando:
```java
sudo systemctl restart apache2
```

### primeiro código php
Crie o arquivo e edite-o
```java
nano index.php
```

```java
<!DOCTYPE html>
<html>
<body>
 
<?php
echo "My first PHP script!";
?>

</body>
</html>
```

Saiba mais sobre php:  https://www.w3schools.com/php/default.asp

Exemplos de Variáveis e tUtilizando método GET

```java
<?php
$nome = "João";
$idade = 30;
$fruta = "laranja";
$bebida = "café";
echo "$nome tem  $idade  e gosta de $bebida.";

$nome2 = $_GET['nome2'];  // Acessa o parâmetro 'nome'
$idade2 = $_GET['idade2'];  // Acessa o parâmetro 'idade'
echo "<BR>Metodo GET<BR>";
echo "Nome: " . $nome2 . "<br>";
echo "Idade: " . $idade2;
?>
```





## MYSQL (Banco de dados)
Instalar mysql no Ubuntu AWS
Orientações: 
https://linuxbeast.com/tutorials/aws/how-to-install-mysql-on-amazon-ec2-ubuntu-18-04/

Atualização de pacote:
```java
sudo apt update
```

Para MySQL server no Ubuntu 18.04, digite o commando:
```java
sudo apt-get install mysql-server -y
```

Depois da instalação configure o auth_socket plugin autenticação utilizando para autenticar sem senha.
After installing the MySQL, the root user is configured using the auth_socket authentication plugin and then when you enter to the console of mysql using sudo mysql you’re automatically authenticated, without a password.


## Utilizando banco de dados

Comandos básico de banco de dados
http://smartcampus.ifsp.online/blog/index.php?IDselecionado=28    
