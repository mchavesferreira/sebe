# Comandos para gestão de pastas e arquivos

Estes comandos são fundamentais para a administração e manipulação de arquivos no Linux
Para o ambiente Linux, a gestão de arquivos e diretórios é realizada através do terminal, utilizando uma variedade de comandos Unix/Linux. Aqui está uma adaptação do conteúdo fornecido para comandos equivalentes ou similares no Linux:

cp - Copia um ou mais arquivos de um local para outro. Exemplo: 
```cmd
cp origem destino
```
rm - Remove um ou mais arquivos. Para diretórios, use rm -r. Exemplo: 
```cmd
rm arquivo.txt
```
mv - Move ou renomeia um arquivo ou diretório. Exemplo: 
```cmd
mv origem 
```
cat - Concatena e exibe o conteúdo de arquivos. Exemplo: 
```cmd
cat arquivo.txt 
```
cp -r - Copia diretórios inteiros, incluindo subdiretórios. Exemplo: 
```cmd
cp -r origem/ destino/
``` 
chmod - Modifica as permissões de arquivo ou diretório. Exemplo: 
```cmd
chmod 755 arquivo.txt
 ```   

grep - Procura por padrões de texto em arquivos. Exemplo: 
```cmd
grep "texto" arquivo.txt
```

diff - Compara o conteúdo de dois arquivos, linha por linha. Exemplo: 
```cmd
diff arquivo1.txt arquivo2.txt
```

less - Permite a visualização paginada de conteúdo de arquivos. Exemplo: 
```cmd
less arquivo.txt
 ```   
lp ou lpr - Envia um arquivo para a fila de impressão. Exemplo: 
```cmd
lp arquivo.txt
```

dd - Utilizado para copiar e converter o conteúdo de arquivos ou dispositivos, podendo ser usado para recuperação. Exemplo: 
```cmd
dd if=/dev/sda of=/dev/sdb
```

cmp - Compara dois arquivos byte a byte. Exemplo: 
```cmd
cmp arquivo1.txt arquivo2.txt
```
gunzip ou tar - Para expandir arquivos compactados. Exemplo: 
```cmd
gunzip arquivo.gz ou tar -xzf arquivo.tar.gz
```

file - Determina o tipo de arquivo. Exemplo: 
```cmd
file arquivo.txt
```
chown - Modifica o proprietário e/ou grupo de um arquivo. Exemplo: 
```cmd
chown usuario:grupo arquivo.txt
```
find - Busca arquivos e diretórios dentro de uma estrutura de diretórios. Exemplo: 
```cmd
find /diretorio -name "arquivo*"
```
### Comandos para rede

ifconfig (ou ip addr em sistemas mais novos) - Exibe informações sobre as interfaces de rede atuais, como endereço IP, status da interface, entre outros.
```cmd
ifconfig
```
```cmd
ip addr
```
ping  -Envia pacotes ICMP ECHO_REQUEST para um host específico para testar a conectividade.
```cmd
ping google.com 
```

traceroute (ou tracepath) - Mostra a rota que os pacotes tomam para alcançar um host de destino.
```cmd
traceroute google.com
```
netstat - Exibe conexões de rede, tabelas de roteamento, estatísticas de interface, conexões masquerade, e escutas de portas.
```cmd
netstat -tuln 
```
ss - Semelhante ao netstat, mas mais rápido e com mais informações. Mostra estatísticas de soquetes.
```cmd
ss -tuln 
```
nslookup ou dig - Ferramentas para consultar servidores DNS e obter informações sobre registros DNS de um domínio.
```cmd
nslookup google.com
```cmd
dig google.com
```
wget ou curl - Ferramentas de linha de comando para baixar arquivos da Internet.
```cmd
wget http://smartcampus.ctd.ifsp.edu.br/php/capa.php
```
```cmd
curl http://smartcampus.ctd.ifsp.edu.br/php/capa.php
```

nmap - Ferramenta de exploração de rede e scanner de segurança.
```cmd
nmap -A -T4 google.com 
```
iptables - Ferramenta de manipulação de tabela de controle de tráfego de rede.
```cmd
iptables -L 
```
hostname - Mostra ou define o nome do sistema na rede.
```cmd
hostname 
```
ip route-  Usado para exibir e manipular tabelas de roteamento.
```cmd
ip route
```
mtr - Combina as funcionalidades do traceroute e ping em uma única ferramenta.
```cmd
mtr google.com 
```

### Gerenciando Processos 

Gerenciar processos, incluindo como listar, iniciar e parar processos, bem como identificar processos por ID ou nome.

ps - Exibe os processos em execução.
```cmd
ps aux
```
top - Exibe os processos em execução em tempo real, mostra os processos consumindo mais recursos, atualizada periodicamente.
```cmd
top 
```
kill -Envia um sinal para um processo, geralmente para terminá-lo.
```cmd
kill 1234
```

killall - Termina todos os processos com o nome especificado.
```cmd
killall firefox 
```

nice - Inicia um processo com uma prioridade ("niceness") definida.
```cmd
nice -n 10 command 
```
renice - Altera a prioridade de um processo em execução.
```cmd
renice 10 -p 1234
```

nohup - Executa um comando imune a hangups, permitindo que continue rodando após o usuário se desconectar.
```cmd
nohup command & 
```

jobs - Lista os trabalhos em execução na sessão atual do shell.
```cmd
jobs 
```
### Compliladores

## Pyhon

### Exemplo simples em Python para rodar no Linux
```cmd
print("Olá, Mundo!")
```

## C ou C++


## PHp

## Scripts Shell

Crie um script.sh com este conteudo
```java
#!/bin/bash

# Solicita ao usuário o diretório para listar os arquivos
echo "Digite o caminho do diretório para listar os arquivos:"


PASTA='/home/pi'
# Verifica se o diretório existe
if [ -d $PASTA ]; then
    # Lista todos os arquivos no diretório e subdiretórios
    echo "Listando todos os arquivos em $DIRETORIO:"
    find $PASTA -type f
else
    # Mensagem de erro se o diretório não existir
    echo " O diretório especificado não existe "
fi
```

##  Comandos Básicos para Linux


Comando	Resumo	Exemplo
ps	Exibe informações sobre os processos em execução no sistema	ps aux exibe informações detalhadas de todos os processos em execução
top	Exibe informações em tempo real sobre a utilização do sistema, incluindo processos e threads	top -H exibe informações detalhadas sobre os threads em execução
pstree	Exibe uma árvore hierárquica de todos os processos em execução no sistema	pstree -p exibe a árvore hierárquica de processos e seus respectivos IDs

| Command | Description |
| --- | --- |

| Comando | Resumo | Exemplo |
| --- | --- | --- |
| ps | Lista informações sobre os processos em execução | ps -ef |
| top | Mostra em tempo real os processos em execução, uso de CPU e memória | top |
| htop | Similar ao top, mas com uma interface mais amigável | htop |
| pstree
| Mostra a estrutura hierárquica dos processos em execução | pstree |
| kill | Envia um sinal para encerrar um processo especificado | kill 1234 |
| killall | Encerra todos os processos com o nome especificado | killall firefox |
| pgrep | Procura por processos com base em seus nomes ou outras informações | pgrep ssh |
| pkill | Encerra processos com base em seus nomes ou outras informações | pkill firefox |
| ps aux | Lista informações detalhadas sobre todos os processos em execução | ps aux |
|ps -eLf | Lista informações sobre os threads em execução em cada processo | ps -eLf |
| --- | --- | --- |


Dê permissão de execução ao script com o comando chmod +x lista_arquivos.sh.

Execute o script com ./lista_arquivos.sh.
