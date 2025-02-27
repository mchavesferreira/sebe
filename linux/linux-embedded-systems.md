# Linux para Sistemas Embarcados
## Material Didático para Estudantes de Engenharia Eletrônica

---

## Processo de Boot e Personalização

### Fundamentos do Processo de Boot

O processo de inicialização (boot) de um sistema Linux embarcado pode ser comparado ao processo de energização e estabilização de um circuito eletrônico complexo, onde diferentes estágios precisam ser executados em uma sequência específica para que o sistema funcione corretamente.

#### Estágios do Boot

1. **ROM Boot Loader (Hardware)**
   * Fase inicial executada pelo hardware quando a energia é aplicada
   * Similar à função de um circuito de reset em um sistema eletrônico
   * Responsável por inicializar o hardware básico e carregar o bootloader secundário

2. **Bootloader**
   * Programas como U-Boot, GRUB ou LILO
   * Análogo a um circuito sequenciador que prepara condições iniciais
   * Funções principais:
     * Inicialização básica do hardware
     * Carregamento do kernel na memória
     * Passagem de parâmetros de configuração para o kernel

3. **Kernel Linux**
   * Núcleo do sistema operacional
   * Comparável à unidade central de controle de um sistema eletrônico
   * Sequência de inicialização do kernel:
     * Descompressão própria (se necessário)
     * Inicialização de estruturas de dados básicas
     * Detecção e configuração de hardware
     * Montagem do sistema de arquivos raiz
     * Execução do processo init (PID 1)

4. **Device Tree (quando aplicável)**
   * Estrutura de dados que descreve o hardware para o kernel
   * Similar a um diagrama de blocos ou esquemático de um circuito
   * Permite que o mesmo kernel funcione em diferentes configurações de hardware

5. **Init System**
   * Primeiro processo de usuário (init ou systemd)
   * Comparável a uma sequência de ativação de subsistemas em um equipamento eletrônico
   * Inicializa serviços e aplicações do sistema

```
+----------------+     +----------------+     +---------------+
| ROM Bootloader |---->|  Bootloader   |---->|     Kernel    |
|   (Hardware)   |     | (U-Boot, etc) |     |     Linux     |
+----------------+     +----------------+     +---------------+
                                               |
                       +----------------+      |
                       | Device Tree    |<-----+
                       | (descrição HW) |      |
                       +----------------+      v
                                           +---------------+
                                           |  Init System  |
                                           | (systemd/init)|
                                           +---------------+
                                                  |
                                                  v
                                           +---------------+
                                           |   Aplicações  |
                                           |   do usuário  |
                                           +---------------+
```

### O papel do Bootloader

O bootloader é um componente crítico no processo de boot, semelhante a um circuito de inicialização em um sistema eletrônico. Sua função é carregar o kernel na memória e transferir o controle para ele.

#### U-Boot: Um exemplo prático

O U-Boot (Universal Bootloader) é um dos bootloaders mais populares para sistemas embarcados:

```bash
# Exemplo de configuração do U-Boot para Raspberry Pi 4
setenv bootargs "console=ttyAMA0,115200 root=/dev/mmcblk0p2 rootwait rootfstype=ext4"
load mmc 0:1 ${kernel_addr_r} Image
load mmc 0:1 ${fdt_addr_r} bcm2711-rpi-4-b.dtb
booti ${kernel_addr_r} - ${fdt_addr_r}
```

Este script configura os parâmetros de boot, carrega o kernel e o device tree na memória, e finalmente inicia o kernel.

### Device Tree e sua importância

A Device Tree é uma descrição estruturada do hardware disponível no sistema, que informa ao kernel sobre os componentes de hardware sem que esta informação esteja "hardcoded" no código-fonte.

#### Exemplo simplificado de um Device Tree para GPIO

```dts
// Exemplo simplificado de um fragmento de Device Tree
/ {
    compatible = "raspberrypi,4-model-b", "brcm,bcm2711";
    
    gpio-controller@7e200000 {
        compatible = "brcm,bcm2711-gpio";
        reg = <0x7e200000 0xb4>;
        interrupt-parent = <&intc>;
        interrupts = <0x2 0x11>, <0x2 0x12>;
        gpio-controller;
        #gpio-cells = <0x2>;
        interrupt-controller;
        #interrupt-cells = <0x2>;
    };
};
```

Esta descrição é análoga a um diagrama esquemático que especifica as conexões e capacidades do controlador GPIO.

### Personalização do Kernel Linux

A personalização do kernel Linux para sistemas embarcados pode ser comparada ao projeto de um circuito específico para uma aplicação, onde componentes desnecessários são removidos e os necessários são otimizados.

#### Processo de Configuração do Kernel

1. **Obtenção do código-fonte**
   ```bash
   git clone --depth=1 https://github.com/raspberrypi/linux.git
   cd linux
   ```

2. **Configuração inicial**
   ```bash
   # Para Raspberry Pi 4
   make ARCH=arm64 bcm2711_defconfig
   ```

3. **Personalização da configuração**
   ```bash
   make ARCH=arm64 menuconfig
   ```

   Esta interface permite selecionar quais recursos serão incluídos no kernel, similar à seleção de componentes em um projeto eletrônico.

4. **Compilação do kernel**
   ```bash
   make ARCH=arm64 CROSS_COMPILE=aarch64-linux-gnu- -j4 Image modules dtbs
   ```

5. **Instalação dos módulos e kernel**
   ```bash
   make ARCH=arm64 CROSS_COMPILE=aarch64-linux-gnu- INSTALL_MOD_PATH=./modules modules_install
   ```

#### Exemplos de Customizações Comuns

1. **Remoção de drivers desnecessários**
   * Análogo à remoção de componentes não utilizados em um circuito
   * Reduz o tamanho do kernel e o uso de memória

2. **Configuração de preemption**
   ```
   CONFIG_PREEMPT_RT=y
   ```
   * Semelhante à priorização de sinais em um circuito de controle
   * Melhora a latência para aplicações de tempo real

3. **Otimização de memória**
   ```
   CONFIG_EMBEDDED=y
   CONFIG_SLUB=y
   ```
   * Similar à otimização de um circuito para consumo mínimo de energia

4. **Habilitação de recursos específicos de hardware**
   ```
   CONFIG_I2C=y
   CONFIG_SPI=y
   CONFIG_GPIO_BCM2711=y
   ```
   * Comparável à adição de interfaces específicas em um projeto eletrônico

---

## Desafios, Tendências e Casos de Uso

### Desafios do Linux em Ambientes com Recursos Limitados

#### Gerenciamento de Memória

O gerenciamento eficiente da memória em sistemas embarcados pode ser comparado ao projeto de circuitos com restrições de área e componentes:

1. **Footprint Reduzido**
   * Técnicas para reduzir o tamanho do sistema:
     * Remoção de bibliotecas e aplicações não essenciais
     * Uso de bibliotecas otimizadas como uClibc ou musl
     * Compilação estática versus dinâmica

2. **Swap e zram**
   ```bash
   # Configuração de zram (compressão de memória RAM)
   modprobe zram
   echo lz4 > /sys/block/zram0/comp_algorithm
   echo 256M > /sys/block/zram0/disksize
   mkswap /dev/zram0
   swapon /dev/zram0
   ```
   * Similar a técnicas de multiplexação temporal em circuitos com recursos limitados

3. **Estratégias de OOM (Out-Of-Memory)**
   * Configuração do OOM Killer para priorizar processos críticos
   * Análogo a circuitos de proteção que preservam funções essenciais

#### Consumo de Energia

O consumo energético é uma consideração vital para sistemas embarcados a bateria:

1. **CPU Frequency Scaling**
   ```bash
   # Configuração de governador de economia de energia
   echo ondemand > /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor
   ```
   * Similar ao projeto de circuitos com modos de baixo consumo

2. **Suspensão de dispositivos não utilizados**
   ```bash
   # Desabilitar interfaces de rede quando não em uso
   ifconfig wlan0 down
   ```
   * Comparável a desligar partes não utilizadas de um circuito eletrônico

#### Segurança em Sistemas Embarcados

1. **Redução da superfície de ataque**
   * Remoção de serviços e protocolos não utilizados
   * Similar à simplificação de um circuito para maior confiabilidade

2. **Secure Boot**
   * Verificação criptográfica da integridade do bootloader e kernel
   * Análogo a sistemas de detecção de falhas em circuitos críticos

3. **Atualizações OTA (Over-The-Air)**
   * Implementação de sistemas A/B para atualizações seguras
   * Similar a circuitos com redundância para maior confiabilidade

### Tendências Atuais e Futuras

#### Internet das Coisas (IoT)

O Linux está se tornando o sistema operacional preferido para dispositivos IoT mais complexos:

1. **Containers leves**
   * Docker, containerd e podman para IoT
   * Isolamento de aplicações em dispositivos compartilhados
   * Similar à modularização de circuitos para melhor manutenção

2. **Conectividade e Protocolos**
   * Suporte nativo a protocolos como MQTT, CoAP, etc.
   ```bash
   # Exemplo de cliente MQTT com Mosquitto
   mosquitto_pub -h broker.example.com -t "sensors/temperature" -m "25.4"
   ```
   * Comparável à padronização de interfaces em sistemas eletrônicos

#### Edge Computing

O processamento de dados na borda da rede, próximo aos sensores:

1. **Frameworks de AI para Edge**
   * TensorFlow Lite, ARM NN, etc.
   * Execução de modelos de IA em dispositivos embarcados
   * Similar à integração de DSPs em circuitos de processamento de sinais

2. **Otimização para cargas de trabalho específicas**
   * Uso de aceleradores (GPU, NPU, VPU)
   * Comparável ao uso de ASICs para funções específicas em um circuito

#### Sistemas Críticos e Tempo Real

O Linux está expandindo sua presença em sistemas que requerem alta confiabilidade:

1. **Linux com PREEMPT_RT**
   * Patch para transformar o Linux em um sistema operacional de tempo real
   * Semelhante a sistemas de controle com garantias temporais estritas

2. **Tempo de boot reduzido**
   * Técnicas como systemd readahead e initramfs otimizados
   * Comparável a circuitos com tempo de estabilização reduzido

### Casos de Uso Práticos

#### Automação Industrial

Linux em controladores industriais e sistemas SCADA:

1. **PLCs baseados em Linux**
   * Exemplo: OpenPLC em Raspberry Pi
   * Programação utilizando linguagens da IEC 61131-3
   * Similar à evolução de PLCs tradicionais para sistemas programáveis mais complexos

2. **Protocolos industriais**
   * Suporte a Modbus, Profinet, EtherCAT
   ```bash
   # Exemplo de cliente Modbus
   modbus_client -a 192.168.1.100 -r 1 -c 10
   ```
   * Comparável à padronização de interfaces em automação industrial

#### Dispositivos Médicos

Linux em equipamentos médicos de diagnóstico e monitoramento:

1. **Isolamento e certificação**
   * Customização para atender normas como IEC 62304
   * Similar a circuitos com isolação galvânica em equipamentos médicos

2. **Interface com sensores médicos**
   * Drivers otimizados para aquisição de dados
   * Comparável a front-ends analógicos em equipamentos de medição

#### Veículos Autônomos e Sistemas Embarcados Automotivos

Linux nos sistemas de infotainment e auxiliares em veículos:

1. **Automotive Grade Linux (AGL)**
   * Sistema operacional específico para aplicações automotivas
   * Comparável a ECUs (Electronic Control Units) em veículos modernos

2. **Sistemas de visão computacional**
   * Processamento de imagens de câmeras para detecção de obstáculos
   * Similar à integração de processamento de sinais em sistemas de radar

---

## Sessão Hands-On e Atividades Práticas

### Laboratório 1: Configurando um Sistema Linux Embarcado Básico

#### Objetivos
- Compreender o processo de instalação e configuração inicial
- Familiarizar-se com o acesso remoto e ferramentas básicas

#### Equipamentos necessários
- Raspberry Pi 4 (ou similar)
- Cartão microSD (mínimo 8GB)
- Fonte de alimentação adequada
- Adaptador de rede (opcional)

#### Procedimento

1. **Preparação do cartão SD**
   ```bash
   # Descarregar imagem do Raspberry Pi OS Lite
   wget https://downloads.raspberrypi.org/raspios_lite_arm64/images/raspios_lite_arm64-2023-05-03/2023-05-03-raspios-bullseye-arm64-lite.img.xz

   # Descompactar a imagem
   xz -d 2023-05-03-raspios-bullseye-arm64-lite.img.xz

   # Gravar a imagem no cartão SD (substitua /dev/sdX pelo dispositivo correto)
   sudo dd if=2023-05-03-raspios-bullseye-arm64-lite.img of=/dev/sdX bs=4M status=progress
   ```

2. **Configuração de acesso SSH headless**
   ```bash
   # Montar a partição boot do cartão SD
   sudo mount /dev/sdX1 /mnt

   # Criar arquivo vazio "ssh" para habilitar SSH no primeiro boot
   sudo touch /mnt/ssh

   # Opcional: Configurar Wi-Fi
   cat > /mnt/wpa_supplicant.conf << EOF
   country=BR
   ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
   update_config=1

   network={
       ssid="SuaRedeWiFi"
       psk="SuaSenhaWiFi"
   }
   EOF

   sudo umount /mnt
   ```

3. **Primeiro acesso ao sistema**
   ```bash
   # Conectar via SSH (senha padrão: raspberry)
   ssh pi@raspberrypi.local
   # ou
   ssh pi@<endereço_IP>

   # Alterar senha padrão
   passwd

   # Atualizar os pacotes do sistema
   sudo apt update
   sudo apt upgrade -y
   ```

4. **Exploração básica do sistema**
   * Verificar recursos de hardware:
   ```bash
   # Informações de CPU
   cat /proc/cpuinfo

   # Memória disponível
   free -h

   # Espaço em disco
   df -h

   # Temperatura e frequência da CPU
   vcgencmd measure_temp
   vcgencmd measure_clock arm
   ```

### Laboratório 2: Compilação e Instalação de Kernel Personalizado

#### Objetivos
- Compreender o processo de compilação cruzada
- Personalizar o kernel para um caso de uso específico

#### Procedimento

1. **Configuração do ambiente de desenvolvimento**
   ```bash
   # No computador de desenvolvimento (não no Raspberry Pi)
   sudo apt install git bc bison flex libssl-dev make libc6-dev libncurses5-dev
   sudo apt install crossbuild-essential-arm64

   # Verificar instalação do compilador cruzado
   aarch64-linux-gnu-gcc --version
   ```

2. **Obtenção e preparação do código-fonte**
   ```bash
   git clone --depth=1 https://github.com/raspberrypi/linux.git
   cd linux

   # Obter configuração padrão
   make ARCH=arm64 CROSS_COMPILE=aarch64-linux-gnu- bcm2711_defconfig
   ```

3. **Personalização do kernel**
   ```bash
   # Interface de configuração
   make ARCH=arm64 CROSS_COMPILE=aarch64-linux-gnu- menuconfig
   ```

   Sugestões de personalização para experimentar:
   * Habilitar suporte a GPIO (Device Drivers -> GPIO Support)
   * Adicionar suporte a sensores I2C (Device Drivers -> I2C support -> I2C Hardware Bus support)
   * Configurar suporte a tempo real (General setup -> Preemption Model)

4. **Compilação do kernel**
   ```bash
   # Compilar o kernel e módulos
   make -j4 ARCH=arm64 CROSS_COMPILE=aarch64-linux-gnu- Image modules dtbs
   ```

5. **Transferência para o Raspberry Pi**
   ```bash
   # Criar diretórios temporários
   mkdir -p mnt/fat32
   mkdir -p mnt/ext4

   # Montar partições do cartão SD (ajuste sdX para o dispositivo correto)
   sudo mount /dev/sdX1 mnt/fat32
   sudo mount /dev/sdX2 mnt/ext4

   # Instalar módulos
   sudo make ARCH=arm64 CROSS_COMPILE=aarch64-linux-gnu- INSTALL_MOD_PATH=mnt/ext4 modules_install

   # Copiar kernel e device tree
   sudo cp arch/arm64/boot/Image mnt/fat32/kernel8.img
   sudo cp arch/arm64/boot/dts/broadcom/bcm2711-rpi-4-b.dtb mnt/fat32/

   # Desmontar partições
   sudo umount mnt/fat32
   sudo umount mnt/ext4
   ```

6. **Teste do novo kernel**
   * Inserir o cartão SD no Raspberry Pi e inicializar
   * Verificar a versão do kernel:
   ```bash
   uname -a
   ```

### Laboratório 3: Desenvolvimento de Aplicação para Controle de GPIO

#### Objetivos
- Compreender a interface de GPIO do Linux
- Desenvolver uma aplicação simples para controlar hardware externo

#### Materiais necessários
- Raspberry Pi configurado com Linux
- LED
- Resistor de 220Ω
- Jumpers
- Protoboard

#### Procedimento

1. **Conexão do hardware**
   * Conectar o anodo do LED ao GPIO 17 do Raspberry Pi
   * Conectar o catodo do LED através do resistor ao pino GND

2. **Acessar GPIO pelo sysfs (método tradicional)**
   ```bash
   # Exportar o GPIO 17
   echo 17 > /sys/class/gpio/export

   # Configurar como saída
   echo out > /sys/class/gpio/gpio17/direction

   # Ligar o LED
   echo 1 > /sys/class/gpio/gpio17/value

   # Desligar o LED
   echo 0 > /sys/class/gpio/gpio17/value

   # Criar um script para piscar o LED
   cat > blink.sh << 'EOF'
   #!/bin/bash
   
   if [ ! -d /sys/class/gpio/gpio17 ]; then
       echo 17 > /sys/class/gpio/export
       echo out > /sys/class/gpio/gpio17/direction
   fi
   
   for i in {1..10}; do
       echo 1 > /sys/class/gpio/gpio17/value
       sleep 0.5
       echo 0 > /sys/class/gpio/gpio17/value
       sleep 0.5
   done
   
   echo 17 > /sys/class/gpio/unexport
   EOF
   
   chmod +x blink.sh
   sudo ./blink.sh
   ```

3. **Acessar GPIO via gpiod (método moderno recomendado)**
   ```bash
   # Instalar a biblioteca gpiod
   sudo apt install gpiod libgpiod-dev

   # Testar controle básico
   gpioset gpiochip0 17=1
   gpioset gpiochip0 17=0
   
   # Criar programa em C para controle do LED
   cat > gpio_blink.c << 'EOF'
   #include <stdio.h>
   #include <gpiod.h>
   #include <unistd.h>
   
   int main(void) {
       struct gpiod_chip *chip;
       struct gpiod_line *line;
       int i, ret;
   
       chip = gpiod_chip_open("/dev/gpiochip0");
       if (!chip) {
           perror("Open chip failed");
           return 1;
       }
   
       line = gpiod_chip_get_line(chip, 17);
       if (!line) {
           perror("Get line failed");
           gpiod_chip_close(chip);
           return 1;
       }
   
       ret = gpiod_line_request_output(line, "gpio_blink", 0);
       if (ret < 0) {
           perror("Request line as output failed");
           gpiod_line_release(line);
           gpiod_chip_close(chip);
           return 1;
       }
   
       for (i = 0; i < 10; i++) {
           ret = gpiod_line_set_value(line, 1);
           if (ret < 0) {
               perror("Set line output failed");
               break;
           }
           printf("LED ON\n");
           sleep(1);
   
           ret = gpiod_line_set_value(line, 0);
           if (ret < 0) {
               perror("Set line output failed");
               break;
           }
           printf("LED OFF\n");
           sleep(1);
       }
   
       gpiod_line_release(line);
       gpiod_chip_close(chip);
       return 0;
   }
   EOF
   
   # Compilar o programa
   gcc -o gpio_blink gpio_blink.c -lgpiod
   
   # Executar o programa
   sudo ./gpio_blink
   ```

4. **Expansão do projeto: Controle por PWM**
   ```bash
   # Instalar a biblioteca wiringPi (alternativa mais simples)
   sudo apt install wiringpi
   
   # Criar programa de controle PWM para fade do LED
   cat > led_fade.c << 'EOF'
   #include <wiringPi.h>
   #include <softPwm.h>
   #include <stdio.h>
   #include <stdlib.h>
   
   #define LED_PIN 0  // GPIO 17 em numeração wiringPi
   
   int main(void) {
       int i;
       
       if (wiringPiSetup() == -1) {
           printf("Falha ao inicializar wiringPi.\n");
           return 1;
       }
       
       softPwmCreate(LED_PIN, 0, 100);
       
       printf("Iniciando efeito fade...\n");
       
       for (i = 0; i < 5; i++) {
           // Fade in
           for (int value = 0; value <= 100; value += 5) {
               softPwmWrite(LED_PIN, value);
               delay(50);
           }
           
           // Fade out
           for (int value = 100; value >= 0; value -= 5) {
               softPwmWrite(LED_PIN, value);
               delay(50);
           }
       }
       
       printf("Finalizado.\n");
       return 0;
   }
   EOF
   
   # Compilar o programa
   gcc -o led_fade led_fade.c -lwiringPi
   
   # Executar o programa
   sudo ./led_fade
   ```

### Laboratório 4: Desenvolvimento de Servidor Web para Monitoramento de Sensores

#### Objetivos
- Integrar sensores a um sistema Linux embarcado
- Desenvolver uma aplicação web para monitoramento remoto

#### Materiais necessários
- Raspberry Pi configurado com Linux
- Sensor de temperatura DS18B20 (ou DHT11/DHT22)
- Resistor de 4.7kΩ
- Jumpers
- Protoboard

#### Procedimento

1. **Conexão do sensor DS18B20**
   * Conectar o VDD do sensor ao pino 3.3V do Raspberry Pi
   * Conectar o GND do sensor ao pino GND do Raspberry Pi
   * Conectar o DQ (dados) do sensor ao GPIO 4 do Raspberry Pi
   * Adicionar resistor de 4.7kΩ entre VDD e DQ

2. **Configuração do kernel para suporte ao sensor**
   ```bash
   # Editar o arquivo config.txt
   sudo nano /boot/config.txt
   
   # Adicionar a linha:
   dtoverlay=w1-gpio
   
   # Salvar e reiniciar
   sudo reboot
   
   # Carregar os módulos necessários
   sudo modprobe w1-gpio
   sudo modprobe w1-therm
   
   # Verificar se o sensor foi detectado
   ls /sys/bus/w1/devices/
   
   # Ler a temperatura (substituir o ID do dispositivo pelo seu)
   cat /sys/bus/w1/devices/28-xxxxxxxxxxxx/temperature
   ```

3. **Desenvolvimento de script para leitura do sensor**
   ```bash
   # Criar script Python para leitura do sensor
   cat > read_temp.py << 'EOF'
   #!/usr/bin/env python3
   
   import os
   import glob
   import time
   
   # Inicializar os módulos do kernel
   os.system('modprobe w1-gpio')
   os.system('modprobe w1-therm')
   
   # Encontrar o arquivo do dispositivo
   base_dir = '/sys/bus/w1/devices/'
   device_folder = glob.glob(base_dir + '28-*')[0]
   device_file = device_folder + '/temperature'
   
   def read_temp():
       try:
           with open(device_file, 'r') as f:
               temp_str = f.read()
               temp_c = float(temp_str) / 1000.0
               return temp_c
       except:
           return None
   
   if __name__ == "__main__":
       while True:
           temp = read_temp()
           if temp is not None:
               print(f"Temperatura: {temp:.2f}°C")
           else:
               print("Erro ao ler o sensor")
           time.sleep(1)
   EOF
   
   chmod +x read_temp.py
   ./read_temp.py
   ```

4. **Desenvolvimento de uma API web simples com Flask**
   ```bash
   # Instalar o Flask
   sudo apt install python3-pip
   pip3 install flask
   
   # Criar a aplicação web
   cat > temperature_server.py << 'EOF'
   #!/usr/bin/env python3
   
   from flask import Flask, jsonify, render_template_string
   import os
   import glob
   import time
   import threading
   
   app = Flask(__name__)
   
   # Variáveis globais para armazenar dados
   temperature_history = []
   current_temperature = None
   
   # Inicializar os módulos do kernel
   os.system('modprobe w1-gpio')
   os.system('modprobe w1-therm')
   
   # Encontrar o arquivo do dispositivo
   base_dir = '/sys/bus/w1/devices/'
   try:
       device_folder = glob.glob(base_dir + '28-*')[0]
       device_file = device_folder + '/temperature'
   except IndexError:
       print("Sensor não encontrado!")
       device_file = None
   
   def read_temp():
       if device_file is None:
           return None
       try:
           with open(device_file, 'r') as f:
               temp_str = f.read()
               temp_c = float(temp_str) / 1000.0
               return temp_c
       except:
           return None
   
   def background_reader():
       global current_temperature, temperature_history
       while True:
           temp = read_temp()
           if temp is not None:
               current_temperature = temp
               timestamp = int(time.time())
               temperature_history.append({'timestamp': timestamp, 'temperature': temp})
               # Manter apenas as últimas 60 leituras
               if len(temperature_history) > 60:
                   temperature_history.pop(0)
           time.sleep(10)
   
   # Iniciar thread em background
   reader_thread = threading.Thread(target=background_reader, daemon=True)
   reader_thread.start()
   
   # Página HTML simples com JavaScript para atualização automática
   HTML_TEMPLATE = '''
   <!DOCTYPE html>
   <html>
   <head>
       <title>Monitor de Temperatura</title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <style>
           body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
           .container { max-width: 800px; margin: 0 auto; }
           .card { border: 1px solid #ddd; border-radius: 8px; padding: 20px; margin-bottom: 20px; }
           h1 { color: #333; }
           .temp-display { font-size: 48px; text-align: center; margin: 20px 0; }
           #temp-chart { width: 100%; height: 300px; }
       </style>
       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   </head>
   <body>
       <div class="container">
           <h1>Monitor de Temperatura - Raspberry Pi</h1>
           
           <div class="card">
               <h2>Temperatura Atual</h2>
               <div class="temp-display" id="current-temp">--°C</div>
               <p>Última atualização: <span id="