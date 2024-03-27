#Engenharia de Software - 2024.1 | E-Book Wizard

## RF01 - Cadastro de Usuários


### Autor: @joaovictormelor - João Victor Melo do Nascimento

---
#### Revisor: @ad-melo - Almir Daniel Melo Coelho

|Item            | Descrição
|-----------     |----------
|Caso de uso     | Cadastro de novo Usuário.
|Resumo          | Processo de cadastro de um novo usuário no sistema
|Ator principal  | Usuário interessado em comprar um livro
|Ator secundario | 
|Pré condição    | O ator principal deve estar conectado à internet e com acesso à plataforma
|Pós-condição    | o ator principal não deve ter um cadastro no sistema

### **Descrição suncita:**
&nbsp;&nbsp;&nbsp;&nbsp; Permitir que os novos clientes se registrem no sitema para que possam relaizar compras.

#### Fluxo principal:
|Passos | Descrição
|--------|------|
|Passo 1 | O usuário acessa o sistema de compras de livros e visualiza a tela inicial
|Passo 2 | Na tela inicial o usuário seleciona o botão intitulado "Criar Conta". Ao clicar no botão o usário é direcionado para a tela de cadastro, onde poderá inserir seus dados e para prosseguir com o processo.
|Passo 3 | É apresentado um formulário para ser preenchido com os dados do usuário
|Passo 4 | Ao terminar de preencher o formulário, clica no botão "Cadastrar"
| Passo 5| O sistema faz a verificação dos dados inseridos pelo usuário. <br/> Se correto, o usuário é redirecionado para a página inicial. <br/> Se incorreto, será retornado mensagens de erro no formulário.

### **Campos do formulário:**

|Campo             | Obrigatório? | Editável | Formato
|------------------|--------------|----------|--------
|Nome              | Sim          | Sim      | Texto
|E-mail            | Sim          | Sim      | Texto
|Data de Nascimento| Sim          | Sim      | Numérico
|Senha             | Sim          | Sim      | Alfa-Numérico
|CPF               | Não          | Sim      | Numérico|
|Telefone          | Não          | Sim      | Numérico
|Gênero            | Não          | Sim      | Texto|
|Endereço          | Não          | Sim      | Alfanumérico

### Opções de usuário:
|Opção    | Descrição                                                | Atalho |
|---------|----------------------------------------------------------|---------
|Confirmar| Valida os dados preenchidos e confirma a criação de conta|
|Cancelar | Cancelar criação de conta                                |


#### Relatório de usuário

| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Conta criada com sucesso!| Informa o usuário que o registro foi realizado com sucesso       | Texto   |

#### Fluxo alternativo:
|Passos  | Descrição
|--------|----------
|Passo 1 | O ator já possui cadastro no sistema.
|Passo 2 | O ator clica no botão "Já  possuo uma conta" sendo redirecionado para a tela de Login

## RF02 - Login

### Autor: @ad-melo - Almir Daniel Melo Coelho

---
#### Revisor: @joaovictormelor - João Victor Melo do Nascimento

#### Atores:
Sistema - Permite que os usuários façam login usando seu login e senha.

#### Descrição sucinta:
Autenticação dos usuários e diferenciação do nível de acesso permitido a cada conta; 

#### Pre-condição:
Os usuários deverão ter uma conta no sistema;

#### Fluxo Principal:

1- O usuário ao acessar a tela inicial do sistema seleciona a opção "Login".
2- O sistema apresenta a tela de LOGIN E SENHA solicitando os mesmos.
3- O usuário insere o Login e a Senha nos campos correspondentes.
4- O sistema autentica as credenciais do usuário.
5- Após a autenticação do usuário este é direcionado para a tela principal do sistema.

#### Campos do formulário

| Campo | Obrigatório? | Editável? | Formato      |
|-------|--------------|-----------|--------------|
| Login | Sim          | Não       | texto        |
| Senha | Sim          | Sim       | Alfanumérico |
	
#### Opções dos Usuários:

| Opção                	         | Descrição                                                    | atalho
|--------------------------------|--------------------------------------------------------------|----------
| Confirmar		         | Confirma o Login e a Senha			                | Ctrl+s
| Verificar os dados preenchidos | Cancela o Login e Senha					| Ctrl+z

#### Fluxos Alternativos;

FA01 - Redefinir senha:

1- O usuário ao acessar a tela de login do sistema seleciona a opção "Redefinir senha".
2- O sistema solicita o e-mail usado no cadastro.
3- O usuário informa o e-mail e confirma a ação.
4- O sistema automaticamente envia um e-mail com um link de confirmação para redefinição de senha.
5- O usuário clica no link de confirmação recebido por e-mail.
6- O sistema redireciona o usuário para uma página onde ele pode redefinir a senha.

## RF03 - Cadastro de Livros


### Autor: @ViiniDev - Vinícius Wanderley Arruda

---
#### Revisor: @viniciuS2S2 - Vinicius Gabriel da Silva Santos

|Item            | Descrição
|-----------     |----------
|Caso de uso     | Cadastro de novo Livro.
|Resumo          | Processo de cadastro de um novo livro no sistema
|Ator prinicpal  | Administrado interasso em vender um livro
|Ator secundario | 
|Pré condição    | O ator principal deve estar conectado à internet e com acesso à plataforma
|Pós-condição    | O ator principal deve ter um cadastro no sistema como administrador

### **Descrição suncita:**
&nbsp;&nbsp;&nbsp;&nbsp; Permitir que os novos livros sejam cadastrados no sistema para que possam relaizar vendas.

#### Fluxo principal:
|Passos | Descrição
|--------|------|
|Passo 1 | O administrador acessa o sistema como login-admin
|Passo 2 | Na tela inicial o administrador seleciona o botão intitulado "Cadastrar Livro". Ao clicar no botão o usário é direcionado para a tela de cadastro, onde poderá inserir os dados do livro, para prosseguir com o processo.
|Passo 3 | É apresentado um formulário para ser preenchido com os dados do livro
|Passo 4 | Ao terminar de preencher o formulário, clica no botão "Cadastrar"
| Passo 5| O sistema faz a verificação dos dados inseridos pelo administrador. <br/> Se correto, o administrador é redirecionado para a página de listagem de livros cadastrados. <br/> Se incorreto, será retornado mensagens de erro no formulário.

### **Campos do formulário:**

|Campo             | Obrigatório? | Editável | Formato
|------------------|--------------|----------|--------
|Nome              | Sim          | Sim      | Texto|
|Descrição         | Sim          | Sim      | Texto|
|Preço_livro       | Sim          | Sim      | Numérico|
|ISBN_livro        | Sim          | Sim      | Numérico|
|Gênero_livro      | Sim          | Sim      | Texto|
|Autor             | Sim          | Sim      | Texto|

### Opções de administrador:
|Opção    | Descrição                                                | Atalho |
|---------|----------------------------------------------------------|---------
|Confirmar| Valida os dados preenchidos e confirma a criação de cadastro de livro|
|Cancelar | Cancelar criação de cadastro                                |


#### Relatório de administrador

| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Cadastro criada com sucesso!| Informa o administrador que o registro foi realizado com sucesso       | Texto   |

#### Fluxo alternativo:
|Passos  | Descrição
|--------|----------
|Passo 1 | O livro já possui cadastro no sistema.
|Passo 2 | O sistema retorna uma mensagem de livro já cadastrado no sistema
