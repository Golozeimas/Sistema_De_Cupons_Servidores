# 🎟️ Sistema de Cupons para Servidores

Aplicação simples em **PHP + MySQL** para gerenciar cupons de desconto exclusivos para servidores do estado.  
O sistema valida se o CPF pertence a um servidor cadastrado e atribui um cupom **aleatório** (caso disponível).  

---

## ⚙️ Tecnologias utilizadas
- PHP 8+
- MySQL 5.7+ ou MariaDB
- XAMPP / WAMP / LAMP (ambiente local)
- HTML + CSS (Tailwind básico)

---

## 📂 Estrutura de pastas
Sistema_De_Cupons_Servidores/
│── index.php # Página principal com buscador e botão de adicionar servidor<br>
│── processa.php # Lógica de busca e sorteio de cupons<br>
│── add_servidor.php # Lógica de cadastro de novos servidores<br>
│── db.php # Conexão com o banco de dados<br>
│── style.css # Estilos da aplicação<br>
│── sistema_cupons.sql # Script para criar e popular o banco

---
## 🛠️ Instalação e configuração

### 1. Clonar o repositório
```bash
git clone https://github.com/seuusuario/Sistema_De_Cupons_Servidores.git
```
2. Configurar o ambiente

Instale o XAMPP
 (Windows/Linux/Mac).

Copie a pasta Sistema_De_Cupons_Servidores para:
```bash
C:\xampp\htdocs\
```
