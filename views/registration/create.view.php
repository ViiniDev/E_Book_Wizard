<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="bg-gray-800 min-h-screen flex items-start justify-center pt-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div>
            <div class="flex flex-col items-center">
                <img class="h-12 w-auto mb-6" src="https://cdn.icon-icons.com/icons2/3719/PNG/512/communication_promotion_smart_learning_book_technology_icon_230351.png" alt="Your Company">
                <h2 class="text-center text-2xl font-bold tracking-tight text-white">Crie uma nova conta</h2>
            </div>
            <form class="mt-8 space-y-6 bg-gray-700 p-8 rounded-lg shadow-2xl" action="/register" method="POST">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-white">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                            <?php if (isset($errors['email'])) : ?>
                                <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-white">Senha</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                            <?php if (isset($errors['password'])) : ?>
                                <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Registrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>