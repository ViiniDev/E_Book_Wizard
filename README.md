# Engenharia de Software-2024.1 | Universidade Federal do Tocantins - Palmas

---
## Ebook Wizard

---
#### Curso: Bacharelado em Ciência da Computação
#### Professor: Edeilson Milhomem da Silva
#### Monitor: João Gabriel Alves de Souza
#### Time: Caio Goncalvez Nascimento, João Victor Melo do Nascimento, Almir Daniel Melo Coelho, Vinicius Gabriel da Silva Santos, Vinícius Wanderley Arruda
---
## Introdução 
O projeto E-Book Wizard é uma plataforma de comércio eletrônico projetada para usuários que desejam comprar livros de forma conveniente e acessível. Com uma vasta seleção de títulos em diferentes gêneros e categorias, os usuários podem navegar, pesquisar e comprar livros facilmente.


# Acesso dos requisitos funcionais
# Casos de uso expandido
# Fluxogramas do projeto
# clique [aqui](./casos_de_uso/README.md).


# Planejamento da Iteração #1 (03/04/2024 - 17/04/2024) - clique [aqui](./iteracoes/iteracao_1.md).

## Objetivo da Iteração
O objetivo desta iteração é criar uma página que liste os livros disponíveis na base de dados. Os usuários devem poder ver detalhes de cada livro, pesquisar por um livro específico e adicionar livros ao carrinho de compras. O carrinho deve listar todos os livros adicionados, permitindo a remoção ou alteração da quantidade de livros.


# Planejamento da Iteração #2 (17/04/2024 - 08/05/2024) - clique [aqui](./iteracoes/iteracao_2.md).

## Objetivo da Iteração
O objetivo da iteraçãa foi desenvolver a parte de login, e validações. Onde o usuario possa de cadastrar eu ao fazer o mesmo terá acesso a lista de ebooks e compra, mostrando o carrinho e demais funcionalidades.

               

# Planejamento da Iteração #3 (08/05/2024 - 22/05/2024)

## Valor da Entrega : 
Organização e padronização do nosso codigo, para que o deixe mais organizado e facil de ser entendido.

## Objetivo da Iteração
O objetivo da iteraçãa será refatorar o projeto para formatação de MVC e possiveis adicões de APIs para melhor desenvolvimento do projeto.

## Responsabilidades

- **Desenvolvedor:** ViiniDev - **Responsavel por:** Auxiliar Refatorar codigo para MVC
- **Revisor:** graccius

- **Desenvolvedor:** ad-melo - **Responsavel por:** Auxiliar Refatorar codigo para MVC
- **Revisor:** joaovictormelo

- **Desenvolvedor:** joaovictormelo - **Responsavel por:** Auxiliar Refatorar codigo para MVC
- **Revisor:** ViiniDev

- **Desenvolvedor:** viniciuS2S2 - **Responsavel por:** Prototipos de telas
- **Revisor:** ad-melo

- **Desenvolvedor:** graccius - **Responsavel por:** Auxiliar Prototipos de telas
- **Revisor:** viniciuS2S2

## Features Desenvolvidas

1. **:** Desenvolvimento da refatoração do codigo para o padrão MVC.
   - **Desenvolvedor:** ad-melo
   - **Revisor:** joaovictormelo e ViiniDev
   - **Link do pull request:** https://github.com/ViiniDev/E_Book_Wizard/pull/22

2. **prototipagem-telas:** Criação das prototipagem de telas, incluindo as existentes e a que será implementada de pagamentos
   - **Desenvolvedor:** viniciuS2S2
   - **Revisor:** graccius
   - **Link do pull request:** https://github.com/ViiniDev/E_Book_Wizard/pull/23



## Protótipo de telas dos requisitos
Link para o pdf feito no figma com as telas :
# clique [aqui](./prototipos_de_tela/Prototipagem.pdf).
# Contém telas de :
      -Tela de registro
      -Tela de Login
      -Tela Home
      -Tela dos Ebooks
      -Tela Sobre de um Ebook
      -Tela do Carrinho
      -Tela de Pagamentos e finalização


# Link para a release completa  : https://github.com/ViiniDev/E_Book_Wizard/pull/26
   # Nesta release contém :
      -Refatoração do codigo: adicionando o padrão MVC
      -Adição das telas de prototipação do site

# Planejamento da Iteração #4 (22/05/2024 - em aberto)
  # Nesta Iteração deveremos desenvolver a pagina de pagamentos, e possiveis integrações com apis
  # Valor da Iteração : Entregar o site totalmente funcional e pronto para vendas de livros.

## Instruções para Executar o Projeto
Para executar o site, siga os passos abaixo:
1. Antes de iniciar o codigo adicionar a database MySQL ebooks.sql, recomendo TablePlus porque eh facil de usar e nao trava link explicando como adicionar database: https://tableplus.com/blog/2018/10/import-export-database.html Para rodar o site so precisa ter o php instalado, abrir o terminal na pasta principal e usar o comando: php -S localhost:3000 -t public
