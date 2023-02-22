<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../inc/header.php');

include('../inc/db.php');







if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("select * from groupes where id=$id");
    $query->execute();

    $student = $query->fetch();
};





if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $groupe_name = $_POST['groupe_name'];

    $sql = "UPDATE groupes SET name='$groupe_name'  WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo 'updated succesfully';
    header('location:../groupe');
}






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
            <a class="text-blue-700 border rounded-xl py-1 bg-blue-100 px-2" href="../groupe/">Groupe</a>
            <a class="text-gray-900" href="../courses/">Courses</a>
            <a class="text-gray-900" href="../seance/">Seance</a>
            <a class="text-gray-900" href="../absence/">Abscence</a>
            <a class="text-gray-900" href="../contact.php">Contact</a>
        </nav>

        <div class="hidden items-center gap-4 lg:flex">
            <a href="#" class="rounded-lg bg-gray-100 px-5 py-2 text-sm font-medium text-gray-600">
                Log in
            </a>
        </div>
    </div>

    <div class="border-t border-gray-100 lg:hidden">
        <nav class="flex items-center justify-center overflow-x-auto p-4 text-sm font-medium">
            <a class="text-gray-900 mx-2" href="../students/">Students</a>
            <a class="text-blue-700 mx-2 border rounded-xl py-1 bg-blue-100 px-2" href="../groupe/">Groupe</a>
            <a class="text-gray-900 mx-2" href="../courses/">Courses</a>
            <a class="text-gray-900 mx-2" href="../seance/">Seance</a>
            <a class="text-gray-900 mx-2" href="../absence/">Abscence</a>
            <a class="text-gray-900 mx-2" href="../contact.php">Contact</a>
        </nav>
    </div>
</header>


<div class="flex justify-center">
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = $conn->prepare("select * from groupes where id=$id");
        $query->execute();

        $groupe = $query->fetch();
    }; ?>
    <form action="update.php" method="POST" enctype="multipart/form-data" class="mt-6 mb-0 space-y-4 rounded-lg p-8 w-[400px] md:shadow-2xl xl:shadow-2xl">
        <p class="text-lg font-medium">Update Courses</p>
        <input type="hidden" name="id" value='<?= $id ?>'>
        <div>
            <label for="groupe_name" class="text-sm font-medium">Groupe Name</label>

            <div class="relative mt-1">
                <input type="text" id="name" name="groupe_name" value="<?= $groupe['name'] ?>" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" />

                <!-- <span class="absolute inset-y-0 right-4 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </span> -->
            </div>
        </div>



        <div>

        </div>
        <button type="submit" name="update" class="block w-full rounded-lg bg-yellow-600 px-5 py-3 text-sm font-medium text-white">
            Update
        </button>
    </form>
</div>



<?php require_once('../inc/footer.php') ?>
<?php require_once('../inc/footer.php') ?>