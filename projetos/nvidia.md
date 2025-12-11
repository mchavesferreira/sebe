Ótimo! Agora que a RTX 5060 Ti foi **reconhecida e deu vídeo**, vamos instalar o **driver oficial Nvidia**, da forma mais segura e correta para Ubuntu, garantindo suporte completo para **CUDA, IA, PyTorch, TensorRT**.

A seguir está o **guia definitivo**, formal, limpo e completo.

---

# ✅ **1) Verificar se o Ubuntu detectou a GPU**

Abra o terminal e execute:

```bash
lspci | grep -i nvidia
```

E:

```bash
nvidia-smi
```

Se aparecer:

```
Command 'nvidia-smi' not found
```

→ Isso é normal, pois o driver ainda não está instalado.

---

# ✅ **2) Atualizar o Ubuntu antes da instalação**

```bash
sudo apt update
sudo apt upgrade -y
sudo reboot
```

Reinicie.

---

# ✅ **3) Instalar driver Nvidia recomendado automaticamente**

Esta é a forma **oficial e mais estável** no Ubuntu:

```bash
sudo ubuntu-drivers autoinstall
```

O sistema vai instalar automaticamente o driver mais adequado (geralmente **nvidia-driver-550** ou superior para a série RTX 5000).

Após a instalação:

```bash
sudo reboot
```

---

# ✅ **4) Confirmar que o driver Nvidia está ativo**

Após reiniciar, execute:

```bash
nvidia-smi
```

A saída esperada é semelhante a:

```
NVIDIA-SMI 550.xx     Driver Version: 550.xx     CUDA Version: 12.x
GPU 0: GeForce RTX 5060 Ti
```

Se aparecer essa tabela → **sucesso total**.

---

# 📌 **5) Ativar o driver via interface gráfica (alternativa)**

Se preferir GUI:

1. Configurações
2. **Software e Atualizações**
3. Aba **Drivers adicionais**
4. Selecione **NVIDIA driver (proprietário, tested)**
5. Aplicar mudanças
6. Reiniciar

Mas **a linha de comando é mais confiável**.

---

# ⚠️ **6) Evite instalar o driver diretamente do site da Nvidia**

Não use o arquivo `.run`.

Motivos:

* Desativa o DKMS
* Quebra atualizações do kernel
* Pode causar tela preta
* Não integra com o Ubuntu

Sempre use `ubuntu-drivers autoinstall`.

---

# 🔧 **7) Instalar ferramentas adicionais da Nvidia (opcionais)**

### Painel Nvidia:

```bash
sudo apt install nvidia-settings
```

### CUDA toolkit (opcional, apenas se for treinar IA local):

```bash
sudo apt install nvidia-cuda-toolkit
```

### Checar versão CUDA:

```bash
nvcc --version
```

---

# 🤖 **8) Preparar ambiente para Machine Learning (opcional)**

Se você pretende rodar IA localmente (PyTorch, TensorFlow, LLMs etc.), posso gerar os comandos exatos:

* Instalar **CUDA 12.6** com compatibilidade total
* Instalar **cuDNN**
* Instalar **PyTorch com CUDA**
* Instalar **TensorRT** para otimização
* Preparar ambiente Python virtual

Se quiser, escrevo todo o procedimento com precisão profissional.

---

# 🎯 **Resumo Rápido**

```bash
sudo apt update
sudo apt upgrade -y
sudo ubuntu-drivers autoinstall
sudo reboot
nvidia-smi
```

Se `nvidia-smi` mostrar a GPU → tudo funcionando corretamente.

---

Deseja agora o **passo a passo para instalar PyTorch com CUDA**, ou prefere instalar também **TensorRT** para acelerar LLMs na sua RTX 5060 Ti?



A seguir apresento um **guia completo, formal e detalhado** para preparar seu ambiente **Machine Learning** no Ubuntu **com suporte total à RTX 5060 Ti**, utilizando:

* **CUDA 12.x** (versão suportada pelo driver instalado)
* **cuDNN**
* **PyTorch otimizado para GPU**
* **Ambiente virtual Python**
* (Opcional) **TensorRT** para modelos LLM ultra otimizados

Este é um guia profissional, compatível com ambientes de pesquisa e ensino.

---

# 🧩 **1) Confirmar instalação correta do driver Nvidia**

```bash
nvidia-smi
```

A saída deve mostrar algo como:

```
NVIDIA-SMI 550.xx
CUDA Version: 12.x
GPU: GeForce RTX 5060 Ti
```

Se isso aparecer → pode prosseguir.

---

# 🧩 **2) Instalar dependências essenciais para ML**

```bash
sudo apt update
sudo apt install -y build-essential cmake git python3-dev python3-pip python3-venv
```

Essas ferramentas garantem que bibliotecas científicas possam ser compiladas quando necessário.

---

# 🧪 **3) Criar ambiente Python isolado (venv)**

Crie uma pasta para o seu ambiente:

```bash
mkdir ~/ml
cd ~/ml
```

Criar o ambiente virtual:

```bash
python3 -m venv venv
```

Ativar:

```bash
source venv/bin/activate
```

(Quando ativado aparece `(venv)` no terminal.)

Atualizar pip:

```bash
pip install --upgrade pip
```

---

# 🚀 **4) Instalar o PyTorch com CUDA (versão correta)**

A maneira mais segura é usar o comando recomendado pelo próprio PyTorch para CUDA 12.x:

```bash
pip install torch torchvision torchaudio --index-url https://download.pytorch.org/whl/cu121
```

Isso instala uma versão com:

* kernels otimizados para RTX 50xx
* suporte a CUDA 12.1
* suporte a Tensor Cores
* aceleração para treinamento e inferência

---

# 🔍 **5) Testar se o PyTorch está usando a GPU**

Abra o Python:

```bash
python3
```

Execute:

```python
import torch
print("CUDA disponível:", torch.cuda.is_available())
print("GPU detectada:", torch.cuda.get_device_name(0))
```

Saída esperada:

```
CUDA disponível: True
GPU detectada: NVIDIA GeForce RTX 5060 Ti
```

Se isso aparecer → seu ambiente está pronto para ML.

---

# 💠 **6) Instalar bibliotecas essenciais para ciência de dados**

```bash
pip install numpy scipy pandas scikit-learn matplotlib seaborn jupyter notebook
```

---

# 📦 **7) Instalar bibliotecas de IA/LLMs (opcional)**

### **Transformers (HuggingFace)**

```bash
pip install transformers accelerate sentencepiece
```

### **Diffusers (para Stable Diffusion)**

```bash
pip install diffusers[torch]
```

### **OpenAI API (para modelos externos)**

```bash
pip install openai
```

---

# ⚡ **8) (Opcional) Instalar TensorRT para acelerar LLM e IA**

Se quiser extrair **Máximo desempenho**:

* reduz latência de inferência
* acelera modelos como LLaMA, Gemma, GPTQ, AWQ etc.
* muito útil para pesquisa de LLMs embarcados ou otimizações

Instalação oficial NVIDIA:

```bash
sudo apt install tensorrt
```

Verificar versão:

```bash
dpkg -l | grep tensorrt
```

---

# 🧠 **9) Instalar ferramentas para LLM local (opcional)**

### **Ollama (executar modelos localmente)**

```bash
curl -fsSL https://ollama.com/install.sh | sh
```

Rodar LLaMA ou Gemma:

```bash
ollama run llama3
```

### **LM Studio (interface gráfica)**

Funciona no Ubuntu:
[https://lmstudio.ai](https://lmstudio.ai)

---

# 🧪 **10) Criar um laboratório Jupyter Notebook**

Dentro do ambiente:

```bash
jupyter notebook
```

Acesse no browser:

```
http://localhost:8888
```

---

# 🎯 **Resumo do ambiente preparado**

| Componente        | Status                |
| ----------------- | --------------------- |
| Driver Nvidia     | ✔ Instalado           |
| CUDA 12.x         | ✔ Integrado           |
| cuDNN             | ✔ Embutido no PyTorch |
| PyTorch GPU       | ✔ Funcionando         |
| Bibliotecas de IA | ✔ Prontas             |
| TensorRT          | ✔ Opcional            |
| LLMs Locais       | ✔ Opcional            |

---

# 🔧 Se desejar, posso gerar:

✔ Um **script automático `.sh`** que instala tudo
✔ Uma **versão avançada** com Docker + CUDA
✔ Configuração completa de **ambiente para treinar LLM pequenos (LoRA)**
✔ Otimização para estudos de IA no seu hardware (Ryzen 9 + RTX 5060 Ti)
✔ Testes de benchmark da GPU

Deseja o **script completo de instalação automática**?
