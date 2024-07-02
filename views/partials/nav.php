<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://cdn.icon-icons.com/icons2/3719/PNG/512/communication_promotion_smart_learning_book_technology_icon_230351.png">
                </div>
                <div class="text-gray-300 px-3 py-2 rounded-md text-big font-large">
                    EbookWizard
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Suporte</a>
                        <a href="/ebooks" class="<?= urlIs('/ebooks') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ebooks</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <?php if ($_SESSION['user'] ?? false) : ?>
                        <a href="/cart" class="<?= urlIs('/cart') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium relative">
                            <i class="gg-shopping-cart"></i>
                            <?php
                            $cartItemCount = cart_quantity();
                            if ($cartItemCount > 0) {
                                echo '<span class="absolute top-0 right-0 bg-red-500 text-white rounded-full px-2 py-1 text-xs" style=" padding-bottom: 1px; padding-top: 1px; padding-right: 7px; padding-left: 7px;">' . strval($cartItemCount) . '</span>';
                            }
                            ?>
                        </a>
                    <?php endif ?>


                    <div class="relative ml-3">
                        <div>
                            <?php if ($_SESSION['user'] ?? false) : ?>
                            <?php else : ?>
                                <a href="/register" class="<?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                                <a href="/login" class="<?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Log In</a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if ($_SESSION['user'] ?? false) : ?>
                        <div class="ml-3">
                            <form method="POST" action="/session">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="<?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Log Out</button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</nav>