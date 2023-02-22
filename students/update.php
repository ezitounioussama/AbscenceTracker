<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../inc/header.php');

include('../inc/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("select * from students where id=$id");
    $query->execute();

    $student = $query->fetch();
};





if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $id_course = $_POST['id_course'];
    $id_groupe = $_POST['id_groupe'];
    $sql = "UPDATE students SET fullname='$fullName' , email='$email' , id_course = '$id_course' , id_groupe = '$id_groupe'  WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo 'updated succesfully';
    header('location:../students');
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
            <a class="" href="../students/">Students</a>
            <a class="text-gray-900" href="../groupe/">Groupe</a>
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
            <a class="text-blue-700 border rounded-xl py-1 bg-blue-100 px-2 mx-2" href="../students/">Students</a>
            <a class="text-gray-900 mx-2" href="../groupe/">Groupe</a>
            <a class="text-gray-900 mx-2" href="../courses/">Courses</a>
            <a class="text-gray-900 mx-2" href="../seance/">Seance</a>
            <a class="text-gray-900 mx-2" href="../absence/">Abscence</a>
            <a class="text-gray-900 mx-2" href="../contact.php">Contact</a>
        </nav>
    </div>
</header>


<div class="flex justify-center">
    <!-- Form to add students -->
    <form action="./update.php" method="POST" class="mt-6 mb-0 space-y-4 rounded-lg p-8 w-[400px] md:shadow-2xl xl:shadow-2xl">
        <p class="text-lg font-medium">Update Students</p>
        <input type="hidden" name="id" value='<?= $id ?>'>
        <div>
            <label for="email" class="text-sm font-medium">Email</label>

            <div class="relative mt-1">
                <input type="email" id="email" name="email" value="<?= $student['email'] ?>" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter email" />

                <span class="absolute inset-y-0 right-4 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </span>
            </div>
        </div>

        <div>
            <label for="fullName" class="text-sm font-medium">fullName</label>

            <div class="relative mt-1">
                <input type="text" id="fullName" value="<?= $student['fullname'] ?>" name="fullName" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter fullName" />

                <span class="absolute inset-y-0 right-4 inline-flex items-center">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </span>
            </div>
        </div>

        <div>
            <label for="id_course" class="text-sm font-medium">course</label>

            <div class="relative mt-1">
                <select class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" name="id_course" id="id_course">
                    <?php
                    $stmt = $conn->prepare('select * from courses ');
                    $stmt->execute();

                    $courses = $stmt->fetchAll();
                    foreach ($courses as $key => $value) {
                    ?>
                        <option value="<?= $value['id'] ?>" <?= $value['id'] == $student['id'] ? 'selected'  : null ?>><?= $value['course_name']  ?></option>
                    <?php } ?>
                </select>



            </div>
            <label for="id_groupe" class="text-sm font-medium">groupe</label>
            <div class="relative mt-1">
                <select class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" name="id_groupe" id="id_groupe">
                    <?php
                    $stmt = $conn->prepare('select * from groupes ');
                    $stmt->execute();

                    $groupes = $stmt->fetchAll();
                    foreach ($groupes as $key => $value) {
                    ?>
                        <option value="<?= $value['id'] ?>" <?= $value['id'] == $student['id'] ? 'selected'  : null ?>><?= $value['name'] ?></option>
                    <?php } ?>
                </select>



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