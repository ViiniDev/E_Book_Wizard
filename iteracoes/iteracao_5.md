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
      


## Link para a release completa  : https://github.com/ViiniDev/E_Book_Wizard/pull/58

   ## Nesta release contém :
      -Descrição : Nesta release contém aplicação dos testes unitarios no codigo
