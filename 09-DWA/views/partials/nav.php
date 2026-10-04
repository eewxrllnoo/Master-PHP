     <!-- Desktop Navigation -->
          <nav class="hidden items-center gap-2 lg:flex">
            <!-- class="group flex items-center gap-2 rounded-lg border border-blue-100 bg-blue-50 px-3 py-2 text-sm font-medium text-blue-600 dark:border-transparent dark:bg-gray-700 dark:text-white" -->
            <a
              href="../09-DWA"
              class=" <?= urlIs('/') ? 'group flex items-center gap-2 rounded-lg border border-blue-100 bg-blue-50 px-3 py-2 text-sm font-medium text-blue-600 dark:border-transparent dark:bg-gray-700 dark:text-white' : 'group flex items-center gap-2 rounded-lg border border-transparent px-3 py-2 text-sm font-medium text-gray-800 hover:bg-blue-50 hover:text-blue-600 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600' ?>"
            >
              <span>Home</span>
            </a>
            <a
              href="../09-DWA/about"
              class=" <?= urlIs('/about') ? 'group flex items-center gap-2 rounded-lg border border-blue-100 bg-blue-50 px-3 py-2 text-sm font-medium text-blue-600 dark:border-transparent dark:bg-gray-700 dark:text-white' : 'group flex items-center gap-2 rounded-lg border border-transparent px-3 py-2 text-sm font-medium text-gray-800 hover:bg-blue-50 hover:text-blue-600 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600' ?>"
            >
              <span>About</span>
            </a>
            <a
              href="../09-DWA/contact"
              class=" <?= urlIs('/contact.php') ? 'group flex items-center gap-2 rounded-lg border border-blue-100 bg-blue-50 px-3 py-2 text-sm font-medium text-blue-600 dark:border-transparent dark:bg-gray-700 dark:text-white' : 'group flex items-center gap-2 rounded-lg border border-transparent px-3 py-2 text-sm font-medium text-gray-800 hover:bg-blue-50 hover:text-blue-600 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600' ?>"
            >
              <span>Contact</span>
            </a>
         
          </nav>
          <!-- END Desktop Navigation -->