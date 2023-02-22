<?php require('inc/header.php'); ?>

<body>
    <header aria-label="Site Header" class="shadow-sm">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-4">
            <div class="flex w-0 flex-1 lg:hidden">
                <button class="rounded-full bg-gray-100 p-2 text-gray-600" type="button">
                    <span class="sr-only">Account</span>
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </button>
            </div>




            <nav aria-label="Site Nav" class="hidden items-center justify-center gap-8 text-sm font-medium lg:flex lg:w-0 lg:flex-1">
                <a class="text-gray-900" href="../students/">Students</a>
                <a class="text-gray-900 " href="../groupe/">Groupe</a>
                <a class="text-gray-900" href="../courses/">Courses</a>
                <a class="text-gray-900" href="../seance/">Seance</a>
                <a class="text-gray-900" href="../absence/">Abscence</a>
                <a class="text-blue-700 border rounded-xl py-1 bg-blue-100 px-2" href="../contact.php">Contact</a>
            </nav>

            <div class="hidden items-center gap-4 lg:flex">
                <a href="../destroy.php" class="rounded-lg bg-gray-100 px-5 py-2 text-sm font-medium text-gray-600">
                    Log Out
                </a>
            </div>
        </div>

        <div class="border-t border-gray-100 lg:hidden">
            <nav class="flex items-center justify-center overflow-x-auto p-4 text-sm font-medium">
                <a class="text-gray-900 mx-2" href="../students/">Students</a>
                <a class="text-gray-900" href="../groupe/">Groupe</a>
                <a class="text-gray-900 mx-2" href="../courses/">Courses</a>
                <a class="text-gray-900 mx-2" href="../seance/">Seance</a>
                <a class="text-gray-900 mx-2" href="../absence/">Abscence</a>
                <a class=" text-blue-700 mx-2 border rounded-xl py-1 bg-blue-100 px-2" href="../contact.php">Contact</a>
            </nav>
        </div>
    </header>
    <div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 dark:bg-gray-800 dark:text-gray-100">
        <div class="flex flex-col justify-between">
            <div class="space-y-2">
                <h2 class="text-4xl font-bold leading-tight lg:text-5xl">Let's talk!</h2>
                <div class="dark:text-gray-400">Vivamus in nisl metus? Phasellus.</div>
            </div>
            <img src="https://mambaui.com/assets/svg/doodle.svg" alt="" class="p-6 h-52 md:h-64">
        </div>
        <form novalidate="" class="space-y-6 ng-untouched ng-pristine ng-valid">
            <div>
                <label for="name" class="text-sm">Full name</label>
                <input id="name" type="text" placeholder="" class="w-full p-3 rounded dark:bg-gray-800">
            </div>
            <div>
                <label for="email" class="text-sm">Email</label>
                <input id="email" type="email" class="w-full p-3 rounded dark:bg-gray-800">
            </div>
            <div>
                <label for="message" class="text-sm">Message</label>
                <textarea id="message" rows="3" class="w-full p-3 rounded dark:bg-gray-800"></textarea>
            </div>
            <button type="submit" class="w-full p-3 border rounded-md shadow-sm transition ease-in-out delay-300  hover:-translate-y-1 hover:scale-100 hover:bg-violet-400 duration-300   text-sm font-bold tracking-wide uppercase rounded dark:bg-violet-400 dark:text-gray-900">Send Message</button>
        </form>
    </div>
    <?php require('inc/footer.php'); ?>