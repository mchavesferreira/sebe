# Sistema operacional

## Windows 

### Lista de comandos 

Aqui está uma lista de 50 comandos importantes que você deve conhecer ao trabalhar com o Prompt de Comando do Windows:

    dir - Lista os arquivos e pastas no diretório atual.
    cd - Muda o diretório atual para outro especificado.
    cls - Limpa a tela do terminal.
    copy - Copia arquivos de um local para outro.
    move - Move arquivos de um local para outro.
    del - Deleta um ou mais arquivos.
    mkdir - Cria um novo diretório.
    rmdir - Remove um diretório vazio.
    echo - Exibe uma mensagem no terminal.
    exit - Fecha o terminal.
    find - Procura por uma string de texto em um arquivo.
    type - Exibe o conteúdo de um arquivo.
    rename - Renomeia arquivos ou diretórios.
    xcopy - Copia arquivos e diretórios, incluindo subdiretórios.
    robocopy - Ferramenta de cópia robusta para arquivos.
    path - Exibe ou define o caminho de busca de executáveis.
    assoc - Associa uma extensão de arquivo a um tipo de arquivo.
    attrib - Exibe ou altera atributos de arquivo.
    chkdsk - Verifica o disco e exibe um relatório de status.
    diskpart - Um utilitário de linha de comando para gerenciamento de discos.
    driverquery - Exibe a lista de todos os drivers de dispositivo instalados.
    fsutil - Um utilitário para realizar tarefas no sistema de arquivos.
    getmac - Exibe o endereço MAC da rede.
    gpupdate - Força uma atualização da política de grupo.
    ipconfig - Exibe informações de configuração de rede.
    netstat - Exibe estatísticas de rede e conexões TCP/IP.
    ping - Verifica a conectividade de rede com outro host.
    powercfg - Gerencia as configurações de energia do sistema.
    reg - Lê, define ou exclui chaves e valores do registro.
    sc - Gerencia serviços.
    sfc - Verifica e repara arquivos de sistema corrompidos.
    shutdown - Desliga ou reinicia o computador.
    systeminfo - Exibe informações detalhadas sobre o sistema.
    taskkill - Encerra tarefas ou processos.
    tasklist - Exibe todos os processos em execução no sistema.
    net user - Gerencia contas de usuário.
    net share - Cria, remove ou gerencia compartilhamentos de rede.
    net view - Exibe uma lista de computadores e recursos de rede.
    nslookup - Consulta o DNS para obter informações de nome de domínio.
    tracert - Rastreia a rota de pacotes para um destino de rede.
    whoami - Exibe o nome de usuário atual e informações detalhadas.
    wmic - Interface de comando para WMI (Windows Management Instrumentation).
    xcopy - Copia diretórios, subdiretórios e arquivos.
    color - Altera as cores do fundo e do texto do terminal.
    date - Exibe ou define a data.
    time - Exibe ou define a hora.
    start - Abre uma nova janela do comando ou inicia um programa.
    help - Fornece informações de ajuda sobre comandos do Windows.
    set - Exibe, define ou remove variáveis de ambiente do Windows.
    subst - Associa um caminho a uma letra de unidade.
    
![Treinando no prompt](imagens/alunoprompt.png)

### Comandos do Prompt de Comando do Windows para Lidar com Arquivos

- `copy` - Copia um ou mais arquivos de um local para outro.
- `del` - Deleta um ou mais arquivos.
- `move` - Move um ou mais arquivos de um diretório para outro.
- `rename` - Renomeia um arquivo.
- `type` - Exibe o conteúdo de um arquivo no terminal.
- `xcopy` - Copia arquivos e diretórios, incluindo subdiretórios.
- `robocopy` - Ferramenta de cópia robusta para arquivos, com suporte a mais opções que o `xcopy`.
- `attrib` - Exibe ou altera atributos de arquivo.
- `find` - Procura por uma string de texto em um arquivo.
- `fc` - Compara dois arquivos e exibe as diferenças entre eles.
- `more` - Exibe o conteúdo de um arquivo uma tela de cada vez.
- `print` - Envia um arquivo para a impressora.
- `recover` - Recupera informações legíveis de um disco danificado.
- `comp` - Compara o conteúdo de dois ou mais arquivos byte a byte.
- `expand` - Expande arquivos compactados.
- `assoc` - Associa uma extensão de arquivo a um tipo de arquivo, permitindo que você veja ou modifique essa associação.
- `icacls` - Exibe ou modifica listas de controle de acesso (ACLs) de arquivos.
- `takeown` - Permite a um administrador recuperar o acesso a um arquivo que anteriormente era inacessível.

### Comandos do Prompt de Comando do Windows para Personalização da Aparência

- `color` - Altera as cores do fundo e do texto do terminal. Cada cor é representada por um código hexadecimal, onde o primeiro dígito representa a cor de fundo e o segundo dígito a cor do texto. Por exemplo, `color 0A` altera o fundo para preto (`0`) e o texto para verde claro (`A`).

- `title` - Define o título da janela do Prompt de Comando. Por exemplo, `title Meu Prompt` altera o título da janela para "Meu Prompt".

- `mode` - Configura o tamanho da janela do terminal. Por exemplo, `mode con cols=100 lines=40` ajusta o terminal para ter 100 colunas de largura e 40 linhas de altura.

#### Exemplo de Uso

Para um prompt com fundo azul e texto branco, título "Prompt Personalizado" e dimensões de 120 colunas por 30 linhas, você pode usar:

```cmd
color 1F
title Prompt Personalizado
mode con cols=120 lines=30
```

### Comandos Sobre Pastas no Windows

No Prompt de Comando do Windows, diversos comandos estão disponíveis para gerenciar pastas (diretórios). Aqui estão alguns dos mais importantes, acompanhados de exemplos práticos de uso.

#### 1. `cd` (Change Directory)

**Descrição:** Muda o diretório atual para outro especificado. Este comando, quando usado sem nenhum argumento, mostrará o caminho completo do diretório em que você se encontra no momento.

- **Exemplo 1:** Mudar para o diretório "Documentos" em "C:\Usuários\SeuNome":
```cmd
cd C:\Usuários\SeuNome\Documentos
```
- **Exemplo 2:**  Voltar um diretório acima do atual:
```cmd
cd ..
```
#### 2. mkdir (Make Directory)

Descrição: Cria um novo diretório.

- **Exemplo 1:** Criar um diretório chamado "NovoProjeto" no diretório atual:
```cmd
mkdir NovoProjeto
```
- **Exemplo 2:** Criar vários diretórios aninhados de uma vez (Windows 10 e superior):

```cmd
mkdir Projeto\Subprojeto\Arquivos
```
#### 3. rmdir (Remove Directory)

Descrição: Remove um diretório vazio.
- **Exemplo:**  Remover um diretório vazio chamado "ProjetoAntigo":
```cmd
rmdir ProjetoAntigo
```
Para remover um diretório e todos os seus conteúdos (use com cautela):

```cmd
rmdir /s /q ProjetoAntigo
```
#### 4. dir

Descrição: Lista os arquivos e pastas no diretório atual, mostrando informações detalhadas.
- **Exemplo:**  Listar arquivos e pastas com detalhes:
```cmd
dir
```

### Comandos para Edição e Criação de Arquivos
#### 1. copy con

Descrição: Cria um novo arquivo de texto. O usuário pode digitar o conteúdo do arquivo diretamente no prompt e finalizar com CTRL+C.
Exemplo: Criar um arquivo chamado Cyborg.txt.
```cmd
copy con Cyborg.txt
```
Após executar o comando, digite o conteúdo desejado e finalize com CTRL+C.

#### 2. echo

Descrição: Cria um arquivo de texto ou adiciona conteúdo a um arquivo existente. Se o arquivo não existir, ele será criado.
Exemplo 1: Criar um arquivo ou adicionar uma linha a um arquivo existente.
```cmd
echo Linha de exemplo > Gambit.txt
```
Exemplo 2: Adicionar uma nova linha ao arquivo sem sobrescrever o conteúdo existente.

```cmd
echo Linha adicional >> Gambit.txt
```
#### 3. type

Descrição: Concatena e exibe o conteúdo de um ou mais arquivos de texto.
Exemplo: Visualizar o conteúdo de um arquivo.
```cmd
    type Gambit.txt
```
#### 4. notepad

Descrição: Abre o arquivo especificado no Bloco de Notas, permitindo a edição. Se o arquivo não existir, o Bloco de Notas perguntará se você deseja criá-lo.
Exemplo: Abrir ou criar um arquivo com o Bloco de Notas.
```cmd
notepad Gambit.txt
```

#### 5. cacls

O cacls é uma ferramenta de permissões de arquivo na linha de comando mais antiga que também permite modificar as listas de controle de acesso (ACLs) de arquivos. Embora ainda esteja disponível em versões recentes do Windows para compatibilidade, a Microsoft recomenda usar icacls no lugar de cacls para uma funcionalidade mais completa e melhor suporte a novos recursos de segurança.
```cmd
cacls Gambit.txt
```

#### 6. del
Descrição: Deleta um ou mais arquivos.
Exemplo: Deletar um arquivo.
```cmd
del Gambit.txt
```


### Comandos de rede

Neste documento, apresentamos comandos essenciais do Prompt de Comando do Windows para gerenciamento e diagnóstico de redes. Estes comandos são fundamentais para diagnosticar problemas de rede, configurar sistemas, ou simplesmente entender como as informações viajam pela internet e redes locais. 

#### 1. `ipconfig`

**Descrição:** Exibe todas as configurações atuais de IP das interfaces de rede.

- **Uso Básico:** Para visualizar a configuração IP atual.
```cmd
ipconfig
```
Uso Avançado: Para obter detalhes completos, incluindo servidores DNS, endereços IPv6, etc.

```cmd
ipconfig /all
```
#### 2. ping

Descrição: Verifica a conectividade com outro host na rede.
Exemplo: Testando a conectividade com o ctd.ifsp.edu.br.

```cmd
ping ctd.ifsp.edu.br
```
#### 3. tracert

Descrição: Rastreia a rota que os pacotes tomam até um destino específico.
Exemplo: Rastreando a rota para ctd.ifsp.edu.br.

```cmd
tracert  ctd.ifsp.edu.br
```

#### 4. netstat

Descrição: Mostra estatísticas da rede, como conexões ativas.
Uso Básico: Para exibir todas as conexões e portas de escuta.

```cmd
netstat
```

#### 5. nslookup

Descrição: Consulta servidores DNS para descobrir endereços IP e outros dados de DNS.

Exemplo: Consultando o endereço IP de ctd.ifsp.edu.br

```cmd
nslookup ctd.ifsp.edu.br
```

markdown

### Gerenciando Processos no Windows

Gerenciar processos, incluindo como listar, iniciar e parar processos, bem como identificar processos por ID ou nome.

#### Listar Processos em Execução

- **Prompt de Comando:**

```cmd
tasklist
```

#### Iniciar um Processo

```cmd
start notepad.exe
```

```cmd
start https://www.google.com/search?q=sistemas+embarcados
```

#### Parar um Processo

```cmd
taskkill /IM notepad.exe
```
Para forçar a parada:

```cmd
taskkill /F /IM notepad.exe
```

```cmd
taskkill /PID 1234
```


#### Identificar Processos por ID ou Nome
Filtrar por nome no Prompt de Comando:

```cmd
tasklist | findstr "nome_do_processo"
```
### Script .bat no Windows
Um arquivo com a extensão .bat no Windows é conhecido como um arquivo de lote ou batch file. Esses arquivos são scripts de texto simples que contêm uma sequência de comandos executados pelo interpretador de comandos do Windows (cmd.exe). Os arquivos .bat foram introduzidos nas primeiras versões do DOS e continuam a ser suportados no Windows para automação de tarefas e procedimentos de administração do sistema.

Quando um arquivo .bat é executado, o interpretador de comandos lê o arquivo linha por linha e executa cada comando sequencialmente. Isso permite aos usuários e administradores de sistemas automatizar tarefas repetitivas, como a gestão de arquivos e diretórios, a execução de programas, e a configuração de processos do sistema. 
Exemplo:
```cmd
copy con livre.bat
```
Cole este script e pressione CTRL+C
```cmd
@echo off
wmic logicaldisk get name,freespace
```
Execute o script
```cmd
livre
```

#### wmic
wmic process: A ferramenta de linha de comando WMI (Windows Management Instrumentation) permite que você gerencie e consulte informações sobre processos. Você pode usar filtros e formatação para personalizar a saída.
Exemplo de uso para listar todos os processos em execução:
```cmd
wmic process get ProcessId, Name, Commandline
```
Buscar número serial
```cmd
wmic bios get serialnumber
```
Buscar a marca e modelo
```cmd
wmic csproduct
```


Outro exemplo de scritp para uso com .bat
Limpeza de Arquivos Temporários
```cmd
@echo off
echo Limpando arquivos temporários...
del /q /s /f %TEMP%\*
echo Limpeza concluída.
pause
```

## Lista de comandos para o Android
GPT

No Android, muitos dos comandos de shell utilizados provêm do Linux, uma vez que o Android é construído sobre o kernel Linux. Estes comandos podem ser executados via ADB (Android Debug Bridge) ou diretamente em um terminal se o dispositivo estiver rooteado e tiver um emulador de terminal instalado. Aqui está uma lista de 20 comandos úteis de shell para uso no Android:

## Comandos de Shell Úteis para Android

1. **`adb devices`** - Lista todos os dispositivos conectados via ADB.
2. **`adb shell`** - Inicia uma sessão shell no dispositivo conectado.
3. **`ls`** - Lista os arquivos e diretórios no diretório atual.
4. **`cd <diretório>`** - Muda o diretório atual para `<diretório>`.
5. **`pwd`** - Mostra o caminho do diretório atual.
6. **`cp <origem> <destino>`** - Copia arquivos ou diretórios de `<origem>` para `<destino>`.
7. **`mv <origem> <destino>`** - Move ou renomeia arquivos ou diretórios de `<origem>` para `<destino>`.
8. **`rm <arquivo>`** - Remove um arquivo. Use `rm -r <diretório>` para remover um diretório e seu conteúdo.
9. **`cat <arquivo>`** - Mostra o conteúdo de um arquivo.
10. **`grep <texto> <arquivo>`** - Procura por `<texto>` dentro de `<arquivo>`.
11. **`top`** - Mostra os processos em execução e o uso de CPU.
12. **`ps`** - Lista os processos em execução.
13. **`kill <PID>`** - Termina o processo com o ID de processo especificado `<PID>`.
14. **`df`** - Mostra o uso do espaço em disco.
15. **`du <diretório>`** - Mostra o uso do espaço em disco pelo diretório especificado.
16. **`netstat`** - Mostra as conexões de rede, tabelas de roteamento, estatísticas de interface, conexões masquerade, e multicast memberships.
17. **`ping <endereço>`** - Testa a conectividade com o endereço especificado.
18. **`wget <URL>`** - Faz o download de arquivos da internet.
19. **`chmod <modos> <arquivo>`** - Altera as permissões de um arquivo ou diretório.
20. **`chown <usuário>:<grupo> <arquivo>`** - Muda o proprietário e o grupo de um arquivo ou diretório.

Esses comandos podem ser extremamente úteis para tarefas de gerenciamento de sistema, diagnóstico e automação em dispositivos Android. Note que alguns comandos, especialmente aqueles que modificam o sistema ou os arquivos, podem requerer privilégios de superusuário (root) para serem executados.

 
......



