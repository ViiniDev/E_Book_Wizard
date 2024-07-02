<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="col-span-full">
                    <div class="flex flex-col items-center mt-8">
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Pedido Confirmado!</strong>
                            <span class="block sm:inline">Obrigado pela sua compra. O pedido foi realizado com sucesso.</span>
                        </div>
                        <p class="font-semibold text-xl mt-4">Seu eBook será enviado para o seguinte e-mail:</p>
                        <p class="font-semibold text-xl text-blue-500"><?= htmlspecialchars($_POST['user_email']) ?></p>
                        <p class="mt-6">O eBook será enviado dentro de 1 hora após a confirmação do pagamento.</p>
                        <p class="mt-1">
                            Caso você não receba o e-mail, verifique sua caixa de spam ou entre em contato conosco pelo email:
                            <span class="font-semibold"><?= htmlspecialchars('contactEbookWizard@support.com') ?></span>
                        </p>
                        <p class="mt-16">Número do Pedido: <span class="font-semibold"><?= uniqid('PED') ?></span></p>
                        <p class="mt-2">Data do Pedido: <span class="font-semibold"><?= date('d/m/Y H:i:s') ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>