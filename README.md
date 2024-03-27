#Engenharia de Software - 2024.1 | E-Book Wizard

## RF01 - Cadastro de Usuários

### Autor: @joaovictormelor - João Victor Melo do Nascimento

---
#### Revisor: @ad-melo - Almir Daniel Melo Coelho

|Item            | Descrição
|-----------     |----------
|Caso de uso     | Cadastro de novo Usuário.
|Resumo          | Processo de cadastro de um novo usuário no sistema
|Ator prinicpal  | Usuário interasso em comprar um livro
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