<!-- Page Heading -->
<div class="bg-gray-50 dark:bg-gray-800/50">
    <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
        <div
            class="space-y-2 py-2 text-center sm:flex sm:items-center sm:justify-between sm:space-y-0 sm:text-left lg:py-0">
            <div class="grow">
                <h1 class="mb-1 text-xl font-bold"><?php echo $heading; ?></h1>
                <?php if ($showWelcome ?? true): ?>
                    <h2 class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Welcome
                        <a href="javascript:void(0)"
                            class="text-blue-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-300">John</a>,
                        everything seems great!
                    </h2>
                <?php endif; ?>
            </div>
            <div
                class="flex flex-none items-center justify-center gap-2 rounded-sm px-2 py-3 sm:justify-end sm:bg-transparent sm:px-0">
                <a href="javascript:void(0)"
                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-blue-700 bg-blue-700 px-3 py-2 text-sm leading-5 font-semibold text-white hover:border-blue-600 hover:bg-blue-600 hover:text-white focus:ring-3 focus:ring-blue-400/50 active:border-blue-700 active:bg-blue-700 dark:focus:ring-blue-400/90">
                    <svg class="hi-mini hi-plus inline-block size-5 opacity-50" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                    <span>New Project</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- END Page Heading -->