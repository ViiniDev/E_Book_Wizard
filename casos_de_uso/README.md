### Definindo os requisitos funcionais do projeto:

---

 - RF 01 - Cadastrar usuário. [Joao Victor](https://github.com/joaovictormelor) Revisado por @ad-melo
 - RF 02 - Validar login do usuário. [Almir Daniel](https://github.com/ad-melo) Revisado por @joaovictormelor
 - RF 03 - Cadastrar livro. [Vinicius Arruda](https://github.com/ViiniDev) Revisado por @viniciusS2S2
 - RF 04 - Validar compra. [Caio Goncalves](https://github.com/graccios) Revisado por @ViiniDev
 - RF 05 - Pesquisar livro. [Vinicius Gabriel](https://github.com/viniciuS2S2) Revisado por @graccius

---
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

|Passos | Descrição
|--------|------|
|Passo 1 | O usuário ao acessar a tela inicial do sistema seleciona a opção "Login".
|Passo 2 | O sistema apresenta a tela de LOGIN E SENHA solicitando os mesmos.
|Passo 3 | O usuário insere o Login e a Senha nos campos correspondentes.
|Passo 4 | O sistema autentica as credenciais do usuário.
|Passo 5 | Após a autenticação do usuário este é direcionado para a tela principal do sistema.

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

|Passos | Descrição
|--------|------|
|Passo 1 | O usuário ao acessar a tela de login do sistema seleciona a opção "Redefinir senha".
|Passo 2 | O sistema solicita o e-mail usado no cadastro.
|Passo 3 | O usuário informa o e-mail e confirma a ação.
|Passo 4 | O sistema automaticamente envia um e-mail com um link de confirmação para redefinição de senha.
|Passo 5 | O usuário clica no link de confirmação recebido por e-mail.
|Passo 6 | O sistema redireciona o usuário para uma página onde ele pode redefinir a senha.

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

## RF04 - Validar Compra de E-Book


### Autor: @graccius - Caio Gonçalves Nascimento

---
#### Revisor: @ViiniDev - Vinicius Wanderley Arruda

|Item            | Descrição
|-----------     |----------
|Caso de uso     | Validar Compra de E-book.
|Resumo          | Processo de validação de compra
|Ator principal  | Usuário interessado em comprar um livro
|Ator secundario | 
|Pré condição    |     O cliente deve estar autenticado no sistema.               
    O cliente deve ter selecionado um ou mais e-books para compra.
    O cliente deve ter inserido as informações de pagamento corretas.
|Pós-condição    | O e-book é disponibilizado para download ou acesso online ao cliente. 
O cliente recebe um comprovante de compra. 
O valor da compra é deduzido do saldo do cliente ou cobrado do método de pagamento fornecido.

### **Descrição suncita:**
&nbsp;&nbsp;&nbsp;&nbsp; Este caso de uso descreve o processo pelo qual um cliente valida a compra de um e-book no sistema de venda de e-books.

#### Fluxo principal:
|Passos | Descrição
|--------|------|
|Passo 1 | O usuário navega pelo catálogo de e-books disponíveis e seleciona o e-book que deseja comprar.
|Passo 2 | O usuário adiciona o e-book ao carrinho de compras.
|Passo 3 | O usuário visualiza o carrinho de compras para revisar os itens selecionados.
|Passo 4 | O usuário clica no botão "Finalizar Compra" para prosseguir.
| Passo 5| O sistema solicita ao usuário que revise e confirme as informações de pagamento e entrega.
| Passo 6| O usuário confirma as informações de pagamento e entrega.
| Passo 7| O sistema valida as informações fornecidas pelo usuário.
| Passo 8| O sistema calcula o valor total da compra, incluindo quaisquer taxas aplicáveis, como impostos ou custos de entrega.
| Passo 9| O sistema solicita ao usuário que confirme a compra.
| Passo 10| O usuário confirma a compra.
| Passo 11| O sistema processa o pagamento utilizando o método de pagamento fornecido pelo cliente.
| Passo 12| O sistema gera um comprovante de compra contendo os detalhes da transação.
| Passo 13| O sistema disponibiliza o e-book para download ou acesso online ao cliente.



### Opções de usuário:
|Opção    | Descrição                                                | Atalho |
|---------|----------------------------------------------------------|---------
|Confirmar| Valida os dados preenchidos e confirma a compra do E-Book.
|Cancelar | Cancela a compra e retorna para o catálogo de E-Books.        |


#### Relatório de usuário

| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Compra realizada com sucesso!| Informa o usuário que a compra foi realizada com sucesso       | Texto   |

#### Fluxo alternativo:
|Passos  | Descrição
|--------|----------
|Passo 7 | Se as informações de pagamento fornecidas pelo cliente forem inválidas, o sistema exibe uma mensagem de erro e solicita que o cliente as corrija.
|Passo 9 | Se o cliente decidir cancelar a compra, o sistema retorna à página do carrinho de compras e os itens selecionados são removidos.
|Passo 11| Se ocorrer uma falha no processamento do pagamento, o sistema exibe uma mensagem de erro e solicita que o cliente tente novamente ou entre em contato com o suporte ao cliente.
|Passo 12| Se houver uma falha ao gerar o comprovante de compra, o sistema exibe uma mensagem de erro e informa ao cliente que o comprovante será enviado por e-mail ou estará disponível em sua conta após a resolução do problema.

## RF05 - Pesquisar Livros

### Autor: @viniciuS2S2 - Vinicius Gabriel Da Silva Santos

---
#### Revisor: @graccius - Caio Gonçalves Nascimento

|Item            | Descrição
|-----------     |----------
|Caso de uso     | Pesquisar Livros.
|Resumo          | Os usuários devem poder pesquisar livros por título, autor, categoria, ou qualquer termo relacionado.
|Ator prinicpal  | Usuário (autenticado ou não) interessado em comprar um livro em específico.
|Ator secundario | 
|Pré condição    | O ator principal deve estar conectado à internet e com acesso à plataforma
|Pós-condição    | 

### **Descrição suncita:**
&nbsp;&nbsp;&nbsp;&nbsp; Permitir que os visitantes pesquisem livros na loja virtual.

#### Fluxo principal:
|Passos | Descrição
|--------|------|
|Passo 1 | O usuário acessa o sistema de compras de livros e visualiza a tela inicial
|Passo 2 | Na tela inicial, o visitante insere o termo de pesquisa na barra de busca.
|Passo 3 | O sistema sugere resultados conforme o visitante digita ou pressiona "Pesquisar".
|Passo 4 | O visitante seleciona um dos resultados ou pressiona "Pesquisar" para ver todos os resultados.
| Passo 5| O sistema exibe uma lista de livros correspondentes à pesquisa.


### Opções de usuário:
|Opção    | Descrição                                                | Atalho |
|---------|----------------------------------------------------------|---------
|Selecionar| O visitante pode selecionar um livro da lista de resultados|
|Filtrar| O visitante pode refinar a pesquisa utilizando filtros adicionais, como categoria, autor, etc.|


#### Fluxo alternativo:
|Passos  | Descrição
|--------|----------
|Passo 1 | Se nenhum livro corresponder à pesquisa, o sistema exibe uma mensagem informando que nenhum resultado foi encontrado.

