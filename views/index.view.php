<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <div class="latest-releases-section space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="latest-releases-title text-3xl font-bold mb-6 text-center">Últimos Lançamentos</h2>
                <div class="latest-releases-swiper-container swiper-container">
                    <div class="latest-releases-swiper-wrapper swiper-wrapper">
                        <?php foreach ($latest_releases as $ebook) : ?>
                            <div class="latest-releases-swiper-slide swiper-slide">
                                <li class="latest-releases-ebook-item border border-gray-300 rounded-lg shadow-md flex flex-col">
                                    <div class="latest-releases-image-container overflow-hidden">
                                        <?php
                                        $ebook_id = $ebook['id'];
                                        require base_path('Http/controllers/upload/display.php');
                                        ?>
                                    </div>
                                    <div class="p-2 latest-releases-ebook-details flex-grow">
                                        <h3 class="latest-releases-ebook-title text-md font-semibold mb-1">
                                            <a href="/ebook?id=<?= $ebook['id'] ?>" class="latest-releases-ebook-link"><?= htmlspecialchars($ebook['title']) ?></a>
                                        </h3>
                                        <p class="latest-releases-ebook-price text-sm"><?= 'Preço: R$' . number_format($ebook['price'], 2) ?></p>
                                    </div>
                                    <div class="latest-releases-ebook-actions p-2">
                                        <form method="POST" action="/cart" class="flex items-center">
                                            <input type="hidden" name="ebook_id" value="<?= $ebook['id'] ?>">
                                            <input type="hidden" name="ebook_title" value="<?= htmlspecialchars($ebook['title']) ?>">
                                            <input type="hidden" name="ebook_price" value="<?= $ebook['price'] ?>">
                                            <input type="number" name="quantity" value="1" min="1" class="latest-releases-quantity-input border border-gray-300 rounded-md px-2 py-1 mr-2 w-12">
                                            <button type="submit" class="latest-releases-add-to-cart-btn bg-blue-500 text-white px-3 py-1 rounded">Adicionar</button>
                                        </form>
                                    </div>
                                </li>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Adicionando setas de navegação -->
                    <div class="latest-releases-swiper-button-next swiper-button-next"></div>
                    <div class="latest-releases-swiper-button-prev swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <a href="/ebooks" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Ver Todos os Ebooks</a>
        </div>
</main>

<?php require('partials/footer.php') ?>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
</script>