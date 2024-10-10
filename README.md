# 🐾 Sistema de Agendamento de Consultas Veterinárias

Este é um sistema simples de agendamento de consultas veterinárias desenvolvido em PHP com MySQL, HTML, CSS e Javascript (opcional), como parte de um projeto acadêmico. O sistema permite o cadastro de usuários, login e gerenciamento de consultas, oferecendo uma interface agradável e intuitiva para marcações, edições e exclusões de consultas veterinárias.

## 🎯 Funcionalidades

### Parte 1: Cadastro e Login
- Tela de **cadastro de usuários**, com armazenamento seguro de senhas usando criptografia `MD5`.
- **Login funcional** com validação de usuários no banco de dados MySQL.
- Utilização de **sessão PHP** para manter os dados do usuário logado ao longo da navegação.

### Parte 2: Gerenciamento de Consultas
- Após o login, é exibida uma **tabela de consultas marcadas**.
  - Caso não haja consultas, é exibida uma mensagem informativa.
  - O sistema permite a **marcação de novas consultas** diretamente na interface.
  - Cada consulta possui links para **editar** ou **excluir** a consulta, caso a mesma tenha sido marcada pelo usuário logado.
  - Consultas marcadas por outros usuários são exibidas, mas **não podem ser editadas nem excluídas** pelo usuário atual.

### Banco de Dados
O banco de dados é padronizado e segue um esquema SQL fornecido, contendo as tabelas:

#### Tabela `usuarios`
- `nome`
- `email`
- `senha` (criptografada com `MD5`)

#### Tabela `consultas`
- `id_usuario` (chave estrangeira, referenciando o usuário logado)
- `idade`
- `data`
- `hora`
- `motivo`

## 🚀 Tecnologias Utilizadas
- **PHP** para a lógica de back-end e integração com o banco de dados.
- **MySQL** para o armazenamento dos dados.
- **HTML5** e **CSS3** para a construção da interface.
- **JavaScript** (opcional) para interações dinâmicas na página.

## 💻 Como Executar o Projeto

### Pré-requisitos
- Servidor local com suporte a PHP (ex: XAMPP, WAMP, etc.)
- Banco de dados MySQL

### Passos para Instalação
1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git

2. Importe o banco de dados MySQL utilizando o arquivo .sql fornecido.
3. Configure o arquivo de conexão do banco de dados em controllers/conexao.php com suas credenciais do MySQL.
4. Execute o projeto em um servidor local e acesse http://localhost/nome-do-projeto.
### 🎨 Interface
O sistema foi desenvolvido com uma interface amigável e responsiva, utilizando CSS para a estilização.

### 📝 Contribuições
Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

### 📄 Licença
Este projeto é de uso livre para estudos e práticas, com os devidos créditos ao autor original.