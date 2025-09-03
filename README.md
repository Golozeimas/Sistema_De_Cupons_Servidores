Sistema de Cupons para Servidores

📝 Sobre o projeto

Este é um sistema simples em PHP + MySQL para gerenciamento de cupons destinados a servidores do estado.
Ele permite:

Buscar um servidor pelo CPF.

Exibir nome e secretaria do servidor.

Atribuir cupons disponíveis de forma aleatória.

Evitar duplicidade (um servidor só pode ter 1 cupom).

Cadastrar novos servidores no sistema.

⚙️ Tecnologias utilizadas

PHP 8+

MySQL 5.7+

HTML / CSS

XAMPP (para rodar localmente)

📂 Estrutura de pastas
/Sistema_De_Cupons_Servidores
│── index.php            # Tela inicial (busca + cadastro)
│── processa.php         # Lógica da busca de CPF e cupons
│── criar_servidor.php   # Formulário para cadastrar servidor
│── salvar_servidor.php  # Insere servidor no banco
│── db.php               # Conexão com o banco de dados
│── style.css            # Estilo da aplicação
│── sistema_cupons.sql   # Script de criação do banco e tabelas

🚀 Como rodar o projeto em outro PC
1. Instalar o XAMPP

Baixe e instale o XAMPP
.
Durante a instalação, garanta que Apache e MySQL estão marcados.

2. Clonar ou copiar o projeto

Coloque a pasta do projeto dentro do diretório do XAMPP:

C:\xampp\htdocs\Sistema_De_Cupons_Servidores

3. Criar o banco de dados

Abra o navegador e acesse:
👉 http://localhost/phpmyadmin

Clique em Novo banco de dados e crie com o nome:

sistema_cupons


Vá em Importar → selecione o arquivo sistema_cupons.sql → clique em Executar.

4. Iniciar o servidor

Abra o XAMPP Control Panel.

Inicie o Apache e o MySQL.

No navegador, acesse:
👉 http://localhost/Sistema_De_Cupons_Servidores/index.php

🎯 Como usar

Buscar CPF: digite o CPF e clique em “Verificar”.

Se for servidor → exibe nome, secretaria e cupom.

Se não for servidor → mostra mensagem de não elegível.

Se já tiver cupom → informa que já recebeu.

Cadastrar servidor: clique em + Servidor (botão verde) e preencha CPF, nome e secretaria.

✅ Exemplo de credenciais padrão

Usuário MySQL: root

Senha MySQL: (vazia, no XAMPP padrão)

Se você tiver configurado uma senha no MySQL, edite o arquivo db.php e ajuste:

$host = "localhost";
$user = "root";
$pass = "";  // coloque aqui a senha se tiver configurado
$db   = "sistema_cupons";
