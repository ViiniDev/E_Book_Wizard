<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<h1>Pagamento Realizado com Sucesso</h1>
<p>Obrigado pela sua compra!</p>
<p>O PDF do eBook será enviado para o seu e-mail dentro de 12 horas. Agradecemos pela preferência!</p>

<script>
    // Redireciona para a página de eBooks após 10 segundos
    setTimeout(function() {
        window.location.href = '/ebooks';
    }, 10000); // 10000 milissegundos = 10 segundos
</script>

<?php require base_path('views/partials/footer.php') ?>
