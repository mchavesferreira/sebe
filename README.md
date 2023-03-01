# sebe


Comandos Básicos para Linux

no Linux:
Comando	Resumo	Exemplo
ps	Exibe informações sobre os processos em execução no sistema	ps aux exibe informações detalhadas de todos os processos em execução
top	Exibe informações em tempo real sobre a utilização do sistema, incluindo processos e threads	top -H exibe informações detalhadas sobre os threads em execução
pstree	Exibe uma árvore hierárquica de todos os processos em execução no sistema	pstree -p exibe a árvore hierárquica de processos e seus respectivos IDs


Comando | Resumo | Exemplo

ps | Lista informações sobre os processos em execução | ps -ef

top | Mostra em tempo real os processos em execução, uso de CPU e memória | top

htop | Similar ao top, mas com uma interface mais amigável | htop

pstree | Mostra a estrutura hierárquica dos processos em execução | pstree

kill | Envia um sinal para encerrar um processo especificado | kill 1234

killall | Encerra todos os processos com o nome especificado | killall firefox

pgrep | Procura por processos com base em seus nomes ou outras informações | pgrep ssh

pkill | Encerra processos com base em seus nomes ou outras informações | pkill firefox

ps aux | Lista informações detalhadas sobre todos os processos em execução | ps aux

ps -eLf | Lista informações sobre os threads em execução em cada processo | ps -eLf
