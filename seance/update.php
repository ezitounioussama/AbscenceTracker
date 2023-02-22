<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../inc/header.php');

include('../inc/db.php');







if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("select * from seance where id=$id");
    $query->execute();

    $student = $query->fetch();
};





if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $id_course = $_POST['id_course'];
    $id_groupe = $_POST['id_groupe'];
    $date = $_POST['date'];
    $start_seance = $_POST['start_seance'];
    $end_seance = $_POST['end_seance'];
    $sql = "UPDATE seance SET 
       
            date = :date, 
            start_seance = :start_seance, 
            end_seance = :end_seance,
            id_course = :id_course, 
            id_groupe = :id_groupe 
            WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id_course', $id_course);
    $stmt->bindParam(':id_groupe', $id_groupe);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':start_seance', $start_seance);
    $stmt->bindParam(':end_seance', $end_seance);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo 'updated successfully';
    header('location:../seance');
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
            <a class="text-gray-900" href="../groupe/">Groupe</a>
            <a class="text-gray-900" href="../courses/">Courses</a>
            <a class="text-blue-700 border rounded-xl py-1 bg-blue-100 px-2" href="../seance/">Seance</a>
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
            <a class="text-gray-900" href="../students/">Students</a>
            <a class="text-gray-900" href="../groupe/">Groupe</a>
            <a class="text-gray-900" href="../courses/">Courses</a>
            <a class="text-blue-700 mx-2 border rounded-xl py-1 bg-blue-100 px-2" href="../seance/">Seance</a>
            <a class="text-gray-900" href="../absence/">Abscence</a>
            <a class="text-gray-900" href="../contact.php">Contact</a>
        </nav>
    </div>
</header>


<div class="flex justify-center">
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = $conn->prepare("select * from seance where id=$id");
        $query->execute();

        $seance = $query->fetch();
    }; ?>

    <!-- Form to add students -->
    <form action="./update.php" method="POST" class="mt-6 mb-0 space-y-4 rounded-lg p-8 w-[400px] md:shadow-2xl xl:shadow-2xl">
        <p class="text-lg font-medium">Update Seance</p>
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="relative mt-1">
            <label for="seance" class="text-sm font-medium">Course</label>
            <select name="id_course" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm">
                <?php
                $stmt = $conn->prepare('select * from courses');
                $stmt->execute();

                $courses = $stmt->fetchAll();
                foreach ($courses as $key => $value) {
                ?>
                    <option value="<?= $value['id'] ?>"><?= $value['course_name'] ?></option>
                <?php } ?>
            </select>



        </div>
        <div class="relative mt-1">
            <label for="seance" class="text-sm font-medium ">Groupe</label>
            <select name="id_groupe" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm">
                <?php
                $stmt = $conn->prepare('select * from groupes');
                $stmt->execute();

                $groupes = $stmt->fetchAll();
                foreach ($groupes as $key => $value) {
                ?>
                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                <?php } ?>
            </select>



        </div>
        <div>
            <label for="date" class="text-sm font-medium">Date</label>

            <div class="relative mt-1">
                <input type="date" name="date" value="<?= $seance['date'] ?>" id="date" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm text-gray-500" />
            </div>
        </div>

        <div>
            <label for="start" class="text-sm font-medium">Start Seance</label>

            <div class="relative mt-1">
                <input type="time" name="start_seance" value="<?= $seance['start_seance'] ?>" id="start" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm text-gray-500" />
            </div>
        </div>

        <div>
            <label for="end" class="text-sm font-medium">End Seance</label>

            <div class="relative mt-1">
                <input type="time" name="end_seance" id="end" value="<?= $seance['end_seance'] ?>" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm text-gray-500" />
            </div>
        </div>
        <button type="submit" name="update" class="block w-full rounded-lg bg-yellow-600 px-5 py-3 text-sm font-medium text-white">
            Update
        </button>
    </form>

</div>



<?php require_once('../inc/footer.php') ?>