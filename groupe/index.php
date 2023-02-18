<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../inc/header.php');
require_once('../inc/db.php');
require_once('create.php');

?>


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

        <div class="flex items-center gap-4">
            <a href="#">
                <span class="sr-only">Logo</span>
                <span class="h-10 w-20 rounded-lg bg-gray-200"></span>
            </a>

            <form class="mb-0 hidden lg:flex">
                <div class="relative">
                    <input class="h-10 rounded-lg border-gray-200 pr-10 text-sm placeholder-gray-300 focus:z-10" placeholder="Search..." type="text" />

                    <button type="submit" class="absolute inset-y-0 right-0 mr-px rounded-r-lg p-2 text-gray-600">
                        <span class="sr-only">Submit Search</span>
                        <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <div class="flex w-0 flex-1 justify-end lg:hidden">
            <button class="rounded-full bg-gray-100 p-2 text-gray-500" type="button">
                <span class="sr-only">Menu</span>
                <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" fill-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <nav aria-label="Site Nav" class="hidden items-center justify-center gap-8 text-sm font-medium lg:flex lg:w-0 lg:flex-1">
            <a class="text-gray-900" href="../students/">Students</a>
            <a class="text-gray-900" href="../groupe/">Groupe</a>
            <a class="text-gray-900" href="../courses/">Courses</a>
            <a class="text-gray-900" href="../seance/">Seance</a>
            <a class="text-gray-900" href="">Contact</a>
        </nav>

        <div class="hidden items-center gap-4 lg:flex">
            <a href="#" class="rounded-lg bg-gray-100 px-5 py-2 text-sm font-medium text-gray-600">
                Log in
            </a>
        </div>
    </div>

    <div class="border-t border-gray-100 lg:hidden">
        <nav class="flex items-center justify-center overflow-x-auto p-4 text-sm font-medium">
            <a class="text-gray-900" href="../students/">Students</a>
            <a class="text-gray-900" href="../groupe/">Groupe</a>
            <a class="text-gray-900" href="../courses/">Courses</a>
            <a class="text-gray-900" href="../seance/">Seance</a>
            <a class="text-gray-900" href="">Contact</a>

        </nav>
    </div>
</header>

<!-- HEADER END -->


<div class="flex justify-center">
    <!-- Form to add students -->

    <form action="create.php" method="post" enctype="multipart/form-data" class="mt-6 mb-0 space-y-4 rounded-lg p-8 w-[400px] md:shadow-2xl xl:shadow-2xl">
        <p class="text-lg font-medium">Add Groupe</p>

        <div>
            <label for="groupe" class="text-sm font-medium">Groupe name</label>

            <div class="relative mt-1">
                <input type="text" id="groupe" name="groupe_name" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter groupe name" />

                <span class="absolute inset-y-0 right-4 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                    </svg>
                </span>
            </div>
        </div>

        <button type="submit" name="submit" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
            Add
        </button>
    </form>
</div>

<!-- CARDS -->

<h1 class="text-4xl font-bold flex justify-center w-full mt-[8%] ">All courses</h1>
<div class="flex justify-center items-center flex-wrap my-5 ">
    <table class="w-1/2 divide-y-2 divide-gray-200 text-sm">
        <thead>
            <tr>
                <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                    ID
                </th>
                <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                    Groupe Name
                </th>

                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php
            $stmt = $conn->prepare('SELECT * FROM groupes');
            $stmt->execute();

            $groupe = $stmt->fetchAll();
            foreach ($groupe as $key => $value) {
            ?>

                <input type="hidden" name="id" value="<?= $value['id'] ?>">





                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        <?= $value['id'] ?>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?= $value['name'] ?></td>

                    <td class="whitespace-nowrap px-4 py-2">
                        <a href="update.php?id=<?= $value['id'] ?>" class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                            update
                        </a>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <a href="delete.php?id=<?= $value['id'] ?>" class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                            delete
                        </a>
                    </td>
                </tr>




            <?php } ?>
        </tbody>
    </table>
</div>
<!-- FOOTER -->

<footer aria-label="Site Footer" class="bg-gray-100 mt-10">
    <div class="py-6 text-sm text-center dark:text-gray-400">
        © 2023 Company Co. All rights reserved.
    </div>
</footer>
</body>

</html>