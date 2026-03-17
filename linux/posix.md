# POSIX – Portable Operating System Interface

## 1. O que é POSIX

**POSIX (Portable Operating System Interface)** é um padrão definido pelo **IEEE (Institute of Electrical and Electronics Engineers)** que especifica um conjunto de **interfaces e comportamentos para sistemas operacionais compatíveis com Unix**.

O objetivo do POSIX é permitir que **programas sejam portáveis entre diferentes sistemas operacionais**, reduzindo a necessidade de reescrever software para cada plataforma.

Em outras palavras:

> Um programa escrito seguindo o padrão POSIX pode ser compilado e executado em diferentes sistemas Unix ou Unix-like.

---

## 2. Por que o POSIX foi criado

Durante as décadas de 1970 e 1980 surgiram diversas versões do Unix, como:

- BSD
- System V
- AIX
- HP-UX
- Solaris
- Xenix

Cada sistema possuía **pequenas diferenças nas APIs e no comportamento do sistema**, o que dificultava a portabilidade de software.

Para resolver esse problema, foi criado o **POSIX**, que define um conjunto de **interfaces padronizadas** para desenvolvimento de software.

---

## 3. O que o POSIX padroniza

O POSIX define diversas interfaces importantes para sistemas operacionais:

### 3.1 Manipulação de arquivos

O padrão define funções para abrir, ler, escrever e fechar arquivos.

Exemplo em C:

```c
#include <fcntl.h>
#include <unistd.h>

int fd = open("arquivo.txt", O_RDONLY);
read(fd, buffer, 100);
close(fd);
````

Funções POSIX relacionadas a arquivos:

* `open()`
* `read()`
* `write()`
* `close()`

---

### 3.2 Processos

POSIX também define como processos são criados e controlados.

Exemplo:

```c
#include <unistd.h>

pid_t pid = fork();
```

Principais funções:

* `fork()`
* `exec()`
* `wait()`
* `exit()`

Essas funções são fundamentais para sistemas multitarefa.

---

### 3.3 Threads

POSIX define um padrão de **threads chamado POSIX Threads (pthreads)**.

Exemplo:

```c
#include <pthread.h>

pthread_t thread;
pthread_create(&thread, NULL, funcao, NULL);
```

Funções comuns:

* `pthread_create()`
* `pthread_join()`
* `pthread_mutex_lock()`
* `pthread_mutex_unlock()`

---

### 3.4 Sinais

POSIX também padroniza o uso de **sinais**, utilizados para comunicação entre processos.

Exemplo:

* `SIGINT`
* `SIGTERM`
* `SIGKILL`

Função associada:

```c
signal(SIGINT, handler);
```

---

### 3.5 Shell e utilitários

POSIX também define o comportamento de diversos **comandos do sistema**, como:

* `ls`
* `cp`
* `mv`
* `grep`
* `awk`
* `sed`

Além disso, padroniza características do **shell Unix**.

---

## 4. Sistemas compatíveis com POSIX

Diversos sistemas operacionais seguem o padrão POSIX, total ou parcialmente:

| Sistema | Compatibilidade |
| ------- | --------------- |
| Linux   | Alta            |
| macOS   | Alta            |
| FreeBSD | Alta            |
| Solaris | Alta            |
| AIX     | Alta            |

Além disso, alguns **sistemas embarcados** também implementam partes do POSIX:

* VxWorks
* QNX
* RTEMS
* Zephyr (parcial)

---

## 5. Relação entre POSIX e Linux

O **Linux foi projetado para ser compatível com POSIX**, o que permite que muitos programas escritos para sistemas Unix funcionem no Linux sem modificações.

Isso é um dos motivos do Linux ser amplamente utilizado em:

* servidores
* sistemas embarcados
* infraestrutura de rede
* computação científica

---

## 6. Exemplo simples de programa POSIX

```c
#include <unistd.h>

int main() {
    write(1, "Hello POSIX\n", 12);
    return 0;
}
```

Neste exemplo:

* `write()` é uma função definida pelo padrão POSIX
* `1` representa o **stdout (saída padrão)**

---

## 7. Vantagens do POSIX

Principais vantagens:

* Portabilidade de software
* Padronização de APIs
* Facilidade de manutenção
* Compatibilidade entre sistemas Unix-like

---

## 8. Conclusão

POSIX é um padrão fundamental para sistemas Unix e Unix-like.
Ele define um conjunto de **interfaces padronizadas para interação com o sistema operacional**, permitindo que programas sejam executados em diferentes plataformas com poucas ou nenhuma modificação.

Graças ao POSIX, sistemas como **Linux, macOS e BSD conseguem compartilhar grande parte do mesmo ecossistema de software**.



