<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<?php
$is_admin = false; // Supondo que o usuário não é administrador por padrão

if (isset($_SESSION['user']) && $_SESSION['user']['is_admin']) {
    $is_admin = true;
}
?>
<main class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <form id="searchForm" method="GET" action="/ebooks/search" class="flex items-center mb-6">
                <input type="text" id="searchQuery" name="query" placeholder="As Crônicas..." class="border border-gray-300 rounded-md py-2 px-4 mr-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Pesquisar</button>
            </form>
            <div id="searchResults" class="search-results"></div>
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php foreach ($ebooks as $ebook) : ?>
                    <li class="ebook-item border border-gray-300 rounded-lg shadow-md">
                        <div class="image-container overflow-hidden">
                            <?php
                            $ebook_id = $ebook['id'];
                            require base_path('Http/controllers/upload/display.php');
                            ?>
                        </div>
                        <div class="p-4 ebook-details">
                            <h3 class="ebook-title text-lg font-semibold mb-2">
                                <a href="/ebook?id=<?= $ebook['id'] ?>" class="ebook-link"><?= htmlspecialchars($ebook['title']) ?></a>
                            </h3>
                            <?php if ($is_admin) : ?>
                                <p class="ebook-id text-sm text-gray-600">ID: <?= $ebook['id'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <div class="ebook-details mx-4">
                                <p class="ebook-author mb-2"><?= 'Autor: ' . htmlspecialchars($ebook['author']) ?></p>
                                <p class="ebook-price"><?= 'Preço: R$' . number_format($ebook['price'], 2) ?></p>
                            </div>
                        </div>
                        <div class="ebook-actions p-4 flex">
                            <?php if ($is_admin) : ?>
                                <button class="delete-button bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md" data-id="<?= $ebook['id'] ?>">Excluir</button>
                            <?php endif; ?>
                            <form method="POST" action="/cart" class="flex flex-grow">
                                <input type="hidden" name="ebook_id" value="<?= $ebook['id'] ?>">
                                <input type="hidden" name="ebook_title" value="<?= htmlspecialchars($ebook['title']) ?>">
                                <input type="hidden" name="ebook_price" value="<?= $ebook['price'] ?>">
                                <input type="number" name="quantity" value="1" min="1" class="quantity-input border border-gray-300 rounded-md px-2 py-1 mr-2 w-12">
                                <button type="submit" class="add-to-cart-btn bg-blue-500 text-white px-4 py-2 rounded flex-grow">Adicionar ao carrinho</button>
                            </form>
                        </div>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</main>

<script>
    $(document).ready(function() {
        $('#searchForm').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            var query = $('#searchQuery').val(); // Get the search query from the input field

            $.ajax({
                url: 'http://localhost:3000/ebooks/search', // URL of the server-side script to handle the search
                type: 'GET',
                data: {
                    query: query
                }, // Data to be sent to the server
                success: function(response) {
                    // Handle the response from the server
                    $('#searchResults').html(response); // Update the search results container with the response
                },
                error: function(xhr, status, error) {
                    // Handle errors if the AJAX request fails
                    console.error(xhr.responseText);
                }
            });
        });

        // Handle the delete button click
        $('.delete-button').click(function(event) {
            event.preventDefault(); // Prevent the default button action

            var button = $(this); // Get the button that was clicked
            var ebookId = button.data('id'); // Get the ebook ID from the data attribute

            // Display confirmation dialog
            var confirmation = confirm("Tem certeza que deseja excluir este eBook?");
            if (confirmation) {
                $.ajax({
                    url: '/ebooks_excluir', // URL of the server-side script to handle the deletion
                    type: 'POST',
                    data: {
                        ebook_id: ebookId
                    }, // Data to be sent to the server
                    success: function(response) {
                        // Handle the response from the server
                        button.closest('li').remove(); // Remove the ebook item from the list
                    },
                    error: function(xhr, status, error) {
                        // Handle errors if the AJAX request fails
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>

<?php require base_path('views/partials/footer.php') ?>