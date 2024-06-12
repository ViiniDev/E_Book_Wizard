<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="col-span-full">
                    <div id="searchResults" class="search-results">
                        <ul class="ebooks-list">
                            <?php $total_cost = 0 ?>
                            <?php foreach ($cart as $item): ?>
                                <?php $total_cost += $item['ebook_price'] * $item['quantity'] ?>
                                <li class="cart-item flex justify-between items-center border-b border-gray-300 py-4">
                                    <div class="flex items-center">
                                        <div class="cart-item-image mr-4 object-cover rounded">
                                            <?php
                                            $ebook_id = $item['ebook_id'];
                                            require base_path('Http/controllers/upload/display.php');
                                            ?>
                                        </div>
                                        <div class="cart-item-details">
                                            <p class="cart-item-title">
                                                <a href="/ebook?id=<?= $item['ebook_id'] ?>"
                                                    class="ebook-link"><?= htmlspecialchars($item['ebook_title']) ?></a>
                                            </p>
                                            <p class="cart-item-price">Preço:
                                                R$<?= number_format($item['ebook_price'], 2) ?></p>
                                            <p class="cart-item-quantity">Quantidade:
                                                <?= htmlspecialchars($item['quantity']) ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="flex justify-center mt-6">
                        <p class="ebook-title font-semibold text-lg">Valor Total: R$<?= number_format($total_cost, 2) ?>
                        </p>
                    </div>

                    <!-- Método de pagamento com PIX -->
                    <div class="flex flex-col items-center mt-8">
                        <h2 class="text-2xl font-semibold mb-2">Pagar com PIX</h2>
                        <p class="mb-4">Envie o pagamento para a seguinte chave Pix:</p>
                        <p class="font-semibold text-xl">ebookwizard@oficial.com</p>
                        <!-- Adicione aqui o espaço para o QR Code, se necessário -->
                    </div>
                    <!-- Formulário para inserir o e-mail -->
                    <form method="post" action="/payment">
                        <?php foreach ($cart as $item): ?>
                            <input type="hidden" name="ebook_id" value="<?= $item['ebook_id'] ?>">
                        <?php endforeach; ?>
                        <div class="flex justify-center mt-8">
                            <label for="user_email" class="block text-sm font-medium text-gray-700">Seu E-mail:</label>
                            <input type="email" id="user_email" name="user_email"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <!-- Botão para confirmar o pagamento -->
                        <div class="flex justify-center mt-8">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Confirma
                                pagamento</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>