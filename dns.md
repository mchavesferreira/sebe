Criando apontamentos


Duckdns


cConfigurar o SSH através do Cloudflare Tunnel  como o PuTTY ou o OpenSSH para Windows, junto com o cloudflared.

. Instale o cloudflared no Windows

    Baixe o binário do cloudflared para Windows:
        Acesse: https://github.com/cloudflare/cloudflared/releases


Crie ou edite o arquivo config:

    Abra o Bloco de Notas e cole:

'''java
Host ssh.seudominio.com
    HostName ssh.seudominio.com
    User pi
    ProxyCommand C:\cloudflared\cloudflared.exe access ssh --hostname %h
'''
