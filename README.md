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
- **Casos de uso expandido**
- **Fluxogramas do projeto**
## - **clique [aqui](./prototipos_de_tela/Prototipagem.pdf).**


# Planejamento da Iteração #1 (03/04/2024 - 17/04/2024) - clique [aqui](./iteracoes/iteracao_1.md).

## Objetivo da Iteração
O objetivo desta iteração é criar uma página que liste os livros disponíveis na base de dados. Os usuários devem poder ver detalhes de cada livro, pesquisar por um livro específico e adicionar livros ao carrinho de compras. O carrinho deve listar todos os livros adicionados, permitindo a remoção ou alteração da quantidade de livros.


# Planejamento da Iteração #2 (17/04/2024 - 08/05/2024) - clique [aqui](./iteracoes/iteracao_2.md).

## Objetivo da Iteração
O objetivo da iteraçãa foi desenvolver a parte de login, e validações. Onde o usuario possa de cadastrar eu ao fazer o mesmo terá acesso a lista de ebooks e compra, mostrando o carrinho e demais funcionalidades.

               

# Planejamento da Iteração #3 (08/05/2024 - 22/05/2024) - clique [aqui](./iteracoes/iteracao_3.md).

## Valor da Entrega : 
Organização e padronização do nosso codigo, para que o deixe mais organizado e facil de ser entendido.

## Objetivo da Iteração
O objetivo da iteraçãa será refatorar o projeto para formatação de MVC e possiveis adicões de APIs para melhor desenvolvimento do projeto.



# Planejamento da Iteração #4 (22/05/2024 - 05/06/2024)- clique [aqui](./iteracoes/iteracao_4.md).

## Valor da Entrega : 
Posibilidade de executar um cadastro de ebook, e fazer deleções.

## Objetivo da Iteração
O objetivo da iteraçãa será refatorar o projeto para adição da funcionalidade de cadastro de ebook pelo admin.



# Planejamento da Iteração #5 (05/06/2024 - 19/06/2024)

## Valor da Entrega : 
Site funcional após execução de teste unitarios com PHPUnit

## Objetivo da Iteração
O objetivo da iteraçãa será refatorar o projeto para adição de testes unitarios permite a manutenção e a escalabilidade dos testes em conjunto com a aplicação.

## Responsabilidades

- **Desenvolvedor:** ViiniDev - **Responsavel por:** Desenvolver refatoração e resolver falhas com phpunit
- **Revisor:** ad-melo

- **Desenvolvedor:** ad-melo - **Responsavel por:** Desenvolver refatoração e resolver falhas com phpunit
- **Revisor:** joaovictormelo

- **Desenvolvedor:** joaovictormelo - **Responsavel por:** Desenvolver refatoração e resolver falhas com phpunit
- **Revisor:** ViiniDev

- **Desenvolvedor:** viniciuS2S2 - **Responsavel por:** Em aberto
- **Revisor:** 

- **Desenvolvedor:** graccius - **Responsavel por:** Em aberto
- **Revisor:** 

## Features Desenvolvidas

1. **Feature/test:** Aplicação de testes unitarios
   - **Desenvolvedor:** joaovictormelo
   - **Revisor:** ViiniDev
   - **Link do pull request:** https://github.com/ViiniDev/E_Book_Wizard/pull/54

2. **em-aberto:** Aplicação de testes unitarios
   - **Desenvolvedor:** ad-melo
   - **Revisor:** joaovictormelo
   - **Link do pull request:** https://github.com/ViiniDev/E_Book_Wizard/pull/54

3. **test-unit:** Aplicação de testes unitarios e refatoração

   - **Desenvolvedor:** ViiniDev
   - **Revisor:** ad-melo
   - **Link do pull request:** https://github.com/ViiniDev/E_Book_Wizard/pull/55


## Protótipo de telas dos requisitos
Link para o pdf feito no figma com as telas :

## - **clique [aqui](./prototipos_de_tela/Prototipagem.pdf).**

 ## Contém telas de :
      -Tela de registro
      -Tela de Login
      -Tela Home
      -Tela dos Ebooks
      -Tela Sobre de um Ebook
      -Tela do Carrinho
      -Tela de Pagamentos 

## Instruções para Executar os Testes
1. Para executar os testes, abrir o terminal na pasta principal e usar o comando: 
   ## Instalar o composer e mockary:
   - digite composer install no terminal para baixar as dependencias.
   ou instale os : 
   - composer require --dev mockery/mockery     
   - composer require --dev phpunit/phpunit ^11 
    
   ## teste :
         (executa todos os testes)
      - vendor\bin\phpunit tests --colors  
      - vendor\bin\phpunit tests --filter=Cart --colors (executa todos os teste da classe cart)
      - vendor\bin\phpunit tests --filter=CartTest::test_add_to_cart --colors
      - vendor\bin\phpunit tests --filter=CartTest::test_clear_cart
      - vendor\bin\phpunit tests --filter=CartTest::test_update_cart_item_quantity
      - vendor\bin\phpunit tests --filter=CartTest::test_get_cart_quantity
      - vendor\bin\phpunit tests --filter=CartTest::test_add_to_cart_existing_item --colors
      - vendor\bin\phpunit tests --filter=CartTest::testRemoveFromCart --colors
         (executa todos da classe ebook)
      - vendor\bin\phpunit tests --filter=Ebook --colors 
      - vendor\bin\phpunit tests --filter=EbookTest::test_get_all_ebooks --colors
      - vendor\bin\phpunit tests --filter=EbookTest::test_search_ebooks --colors
      - vendor\bin\phpunit tests --filter=EbookTest::testGetEbookById --colors
         (executa todos da classe User)
      - vendor\bin\phpunit tests --filter=User --colors 
      - vendor\bin\phpunit tests --filter=UserTest::test_get_user_id --colors
      - vendor\bin\phpunit tests --filter=UserTest::test_creat --colors
      - vendor\bin\phpunit tests --filter=UserTest::testFindByEmail --colors
      


## Link para a release completa  : https://github.com/ViiniDev/E_Book_Wizard/pull/

   ## Nesta release contém :
      -Descrição : Nesta release contém ... em aberto

## Link para a Trello da equipe  :   
https://trello.com/invite/b/KSIbSb3i/ATTI9fc4c17b040a0eca2a1831473f804cceF5B0E0A6/iteracoes-ebookwizard

## Link para video do site da equipe  :   

- https://youtu.be/jm36ifBuI1U - sem admin
- https://youtu.be/ONAIDxYapOg - com admin
- https://youtu.be/ABSeLDnmU1o - site completo
- https://youtu.be/afwmnizgqMI - testes unitarios


## Instruções para Executar o Projeto
Para executar o site, siga os passos abaixo:
## Requisitos:
   - php 8.2 ou mais
   - mysql 8 ou mais

   1. Antes de iniciar o codigo adicionar a database MySQL ebooks.sql, recomendo TablePlus porque é facil de usar e não trava, link explicando como adicionar database: https://tableplus.com/blog/2018/10/import-export-database.html.
   2. Para rodar o site so precisa ter o php instalado, abrir o terminal na pasta principal e usar o comando: php -S localhost:3000 -t public


