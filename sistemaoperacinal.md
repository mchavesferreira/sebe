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


### Comandos edição
#### vim

### Comandos Sobre Pastas no Windows

No Prompt de Comando do Windows, diversos comandos estão disponíveis para gerenciar pastas (diretórios). Aqui estão alguns dos mais importantes, acompanhados de exemplos práticos de uso.

#### 1. `cd` (Change Directory)

**Descrição:** Muda o diretório atual para outro especificado.

- **Exemplo 1:** Mudar para o diretório "Documentos" em "C:\Usuários\SeuNome":
  ```cmd
  cd C:\Usuários\SeuNome\Documentos


