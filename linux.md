# Linux

O **Linux** é um sistema operacional de código aberto, gratuito e amplamente utilizado em todo o mundo. Desenvolvido inicialmente por Linus Torvalds em 1991, o Linux é baseado no Unix e é conhecido por sua robustez, segurança e flexibilidade. É utilizado em uma variedade de dispositivos, desde servidores e supercomputadores até smartphones, televisões e carros.

## Características Principais

**Código Aberto:** O código fonte do Linux está disponível gratuitamente para qualquer pessoa visualizar, modificar e distribuir.

**Segurança:** O Linux é conhecido por sua segurança robusta, com recursos como o SELinux (Security-Enhanced Linux) para gestão de acesso baseada em políticas.

**Multiusuário:** Vários usuários podem operar o sistema simultaneamente, com controles de acesso específicos para cada um.

**Multitarefa:** O Linux é capaz de executar múltiplos processos ao mesmo tempo sem afetar o desempenho do sistema.

**Compatibilidade:** Suporta uma vasta gama de hardware e software, incluindo muitos programas e jogos desenvolvidos para Windows através de camadas de compatibilidade como o Wine.

Videos sobre a história do linux: 
[Filme] Revolution OS :: A História do Linux https://youtu.be/o05wf_q3a8c?si=TJNFmJLsZ2iHh9pi

The Code: Story of Linux documentary  - https://youtu.be/898DQ6bdcMw?si=bC0-kAsWU7r3qihs
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
rsync - Ferramenta avançada para cópia de arquivos, que suporta cópia incremental e sincronização de diretórios. Exemplo: 
```cmd
rsync -av origem/ destino/
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

## Pyhon

### Exemplo simples em Python para rodar no Linux
```cmd
print("Olá, Mundo!")
```

