<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>
<?php require ('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php if (isset($_SESSION['user'])): ?>
            <?php if ($_SESSION['user']['is_admin'] ?? false): ?>
                <p>Olá administrador, <?= $_SESSION['user']['email'] ?>. Bem-vindo à página inicial.</p>
            <?php else: ?>
                <p>Olá, <?= $_SESSION['user']['email'] ?>. Bem-vindo à página inicial.</p>
                <script>
                    // Redireciona para a página de eBooks após 10 segundos
                    setTimeout(function () {
                        window.location.href = '/ebooks';
                    }, 10000); // 10000 milissegundos = 10 segundos
                </script>
            <?php endif; ?>
        <?php else: ?>
            <p>Bem-vindo à página inicial. Por favor, faça login ou cadastre-se para acessar mais recursos.</p>
            <script>
                // Redireciona para a página de eBooks após 10 segundos
                setTimeout(function () {
                    window.location.href = '/ebooks';
                }, 10000); // 10000 milissegundos = 10 segundos
            </script>
        <?php endif; ?>
        <div class="mt-6">
            <a href="/ebooks" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Ver eBooks</a>
        </div>
        <?php if (isset($_SESSION['user']) && $_SESSION['user']['is_admin'] ?? false): ?>
            <div class="mt-6 flex">
                <!-- Formulário para enviar o PDF do eBook -->
                <div class="mr-6">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="ebook_id_pdf" class="block text-sm font-medium text-gray-700">ID do Ebook:</label>
                            <input type="number" id="ebook_id_pdf" name="ebook_id_pdf" min="1" value="1"
                                class="quantity-input mr-2 text-sm border border-gray-300 rounded-md px-2 py-1">
                        </div>
                        <div class="mb-4">
                            <label for="pdf_ebook" class="block text-sm font-medium text-gray-700">Selecione o PDF do
                                eBook:</label>
                            <input type="file" id="pdf_ebook" name="pdf_ebook" class="mt-1 block w-full">
                        </div>
                        <div>
                            <input type="submit" value="Enviar eBook" name="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                        </div>
                    </form>
                </div>
                <!-- Formulário para enviar a imagem do eBook -->
                <div>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="ebook_id_img" class="block text-sm font-medium text-gray-700">ID do Ebook:</label>
                            <input type="number" id="ebook_id_img" name="ebook_id_img" min="1" value="1"
                                class="quantity-input mr-2 text-sm border border-gray-300 rounded-md px-2 py-1">
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Selecione uma Imagem:</label>
                            <input type="file" id="image" name="image" class="mt-1 block w-full">
                        </div>
                        <div>
                            <input type="submit" value="Enviar Imagem" name="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-8">
                <form action="/upload" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Título:</label>
                        <input type="text" id="title" name="title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Autor:</label>
                        <input type="text" id="author" name="author"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Descrição:</label>
                        <textarea id="description" name="description"
                            class="form-textarea mt-1 block w-full rounded-md shadow-sm" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700">Preço:</label>
                        <input type="number" id="price" name="price"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" required step="0.01">
                    </div>
                    <div class="mt-8">
                        <form action="/upload" method="POST" enctype="multipart/form-data">

                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Adicionar
                                eBook</button>
                        </form>
                    </div>

                <?php endif; ?>
        </div>
</main>

<?php require ('partials/footer.php') ?>