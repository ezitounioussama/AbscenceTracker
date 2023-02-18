<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../inc/header.php');

include('../inc/db.php');







if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $course_name = $_POST['course_name'];
    $id_user = $_POST['id_user'];
    $course_image = $_FILES['course_image']['name'];

    // Check if the user uploaded a new image
    if (!empty($course_image)) {
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES["course_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $extensions_arr = array("jpg", "jpeg", "png", "gif");

        // Check if the file is a valid image
        if (in_array($imageFileType, $extensions_arr)) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['course_image']['tmp_name'], $target_file)) {
                $stmt = $conn->prepare('UPDATE courses SET course_name = ?, id_user = ?, course_image_path = ? WHERE id = ?');
                $stmt->execute([$course_name, $id_user, $course_image, $id]);
                header('location:../courses');
            } else {
                echo "Failed to upload image.";
            }
        } else {
            echo "Invalid image file type.";
        }
    } else {
        // Update course details without changing the image
        $stmt = $conn->prepare('UPDATE courses SET course_name = ?, id_user = ? WHERE id = ?');
        $stmt->execute([$course_name, $id_user, $id]);
        header('location:./courses');
    }
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
            <a class="text-gray-900" href="../course/">Courses</a>
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
            <a class="text-gray-900" href="">Students</a>
            <a class="text-gray-900" href="../course/">Courses</a>
            <a class="text-gray-900" href="../seance/">Seance</a>
            <a class="text-gray-900" href="">Contact</a>
        </nav>
    </div>
</header>


<div class="flex justify-center">
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = $conn->prepare("select * from courses where id=$id");
        $query->execute();

        $course = $query->fetch();
    }; ?>
    <form action="update.php" method="POST" enctype="multipart/form-data" class="mt-6 mb-0 space-y-4 rounded-lg p-8 w-[400px] md:shadow-2xl xl:shadow-2xl">
        <p class="text-lg font-medium">Update Courses</p>
        <input type="hidden" name="id" value='<?= $id ?>'>
        <div>
            <label for="course_name" class="text-sm font-medium">Course Name</label>

            <div class="relative mt-1">
                <input type="text" id="name" name="course_name" value="<?= $course['course_name'] ?>" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" />

                <!-- <span class="absolute inset-y-0 right-4 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </span> -->
            </div>
        </div>

        <div class="relative mt-1">
            <label for="course_name" class="text-sm font-medium">Instructor</label>
            <select name="id_user" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm">
                <?php
                $stmt = $conn->prepare('select * from users ');
                $stmt->execute();

                $users = $stmt->fetchAll();
                foreach ($users as $key => $value) {
                ?>
                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                <?php } ?>
            </select>



        </div>

        <div>


            <div class="relative mt-1">


                <label for="course_name" class="text-sm font-medium">Course Image</label>

                <div class="relative mt-1">


                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="course_image">


                    <!-- <span class="absolute inset-y-0 right-4 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </span> -->
                </div>




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