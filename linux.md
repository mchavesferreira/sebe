# Linux

O **Linux** é um sistema operacional de código aberto, gratuito e amplamente utilizado em todo o mundo. Desenvolvido inicialmente por Linus Torvalds em 1991, o Linux é baseado no Unix e é conhecido por sua robustez, segurança e flexibilidade. É utilizado em uma variedade de dispositivos, desde servidores e supercomputadores até smartphones, televisões e carros.

Referências:
-https://github.com/DiogoCaetanoGarcia/Sistemas_Embarcados
-https://www.youtube.com/watch?v=5ScfjIhPFds&list=PL15Z2M2X5QOPrg7V4Ll3i7cxUo-ngRwYq


## Características Principais

**Código Aberto:** O código fonte do Linux está disponível gratuitamente para qualquer pessoa visualizar, modificar e distribuir.

**Segurança:** O Linux é conhecido por sua segurança robusta, com recursos como o SELinux (Security-Enhanced Linux) para gestão de acesso baseada em políticas.

**Multiusuário:** Vários usuários podem operar o sistema simultaneamente, com controles de acesso específicos para cada um.

**Multitarefa:** O Linux é capaz de executar múltiplos processos ao mesmo tempo sem afetar o desempenho do sistema.

**Compatibilidade:** Suporta uma vasta gama de hardware e software, incluindo muitos programas e jogos desenvolvidos para Windows através de camadas de compatibilidade como o Wine.

Videos sobre a história do linux: 
[Filme] Revolution OS :: A História do Linux https://youtu.be/o05wf_q3a8c?si=TJNFmJLsZ2iHh9pi

The Code: Story of Linux documentary  - https://youtu.be/zPt_e9Cdk08?si=I5g8xmSP6-2YDpJi

## Componentes do Sistema

**Kernel:** O núcleo do sistema, responsável pela comunicação entre o hardware e o software.

**Shell:** A interface de linha de comando (CLI) que permite aos usuários interagir com o sistema.

**Sistema de Arquivos:** Organiza e gerencia o acesso aos dados armazenados no dispositivo.

**Programas de Utilitários:** Conjunto de ferramentas que realizam tarefas específicas, como gerenciamento de arquivos e configuração do sistema.

## Distribuições

Existem várias distribuições (distros) do Linux, cada uma com seu próprio conjunto de software e ambiente de desktop. Algumas das mais populares incluem:

**Ubuntu:** Famosa por sua facilidade de uso e suporte extensivo.

**Fedora:** Conhecida por ser a mais atualizada com as últimas tecnologias.

**Debian:** Valorizada por sua estabilidade e segurança.

**Arch Linux:** Preferida por usuários avançados que desejam personalizar seu sistema.


## Linux Online

https://www.webminal.org/terminal/  

https://distrosea.com/

https://app.codeanywhere.com/workspace


### Comandos para gestão de pastas e arquivos

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

Dê permissão de execução ao script com o comando chmod +x lista_arquivos.sh.

Execute o script com ./lista_arquivos.sh.

