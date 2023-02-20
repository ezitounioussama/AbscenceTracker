<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../inc/header.php');
require_once('../inc/db.php');
// require_once('create.php');

?>

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
        <a class="text-gray-900" href="../absence/">Abscence</a>
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
        <a class="text-gray-900" href="../absence/">Abscence</a>
        <a class="text-gray-900" href="">Contact</a>
      </nav>
    </div>
  </header>

  <div class="relative flex flex-col justify-center items-center overflow-x-auto mt-10 ">
    <div class="w-64 sm:w-96 text-sm  text-left text-gray-500 dark:text-gray-400 flex flex-col justify-center items-center">
      <form action="./index.php" method="POST">
        <div class="px-6 py-4">
          <select class="rounded-md shadow-md border-none bg-blue-300 text-white w-64 sm:w-96" name="groupe" id="id_groupe">
            <option value="choose Groupe">choose Groupe</option>
            <?php
            $stmt = $conn->prepare('select * from groupes ');
            $stmt->execute();

            $groupes = $stmt->fetchAll();
            foreach ($groupes as $key => $value) {
            ?>
              <option value="<?= $value['name'] ?>"><?= $value['name'] ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="px-6 py-4">
          <select class="rounded-md shadow-md border-none bg-blue-300 text-white w-64 sm:w-96" name="course" id="id_groupe">
            <option value="choose Courses">choose Courses</option>
            <?php
            $stmt = $conn->prepare('select * from courses ');
            $stmt->execute();

            $course = $stmt->fetchAll();
            foreach ($course as $key => $value) {
            ?>
              <option value="<?= $value['course_name'] ?>"><?= $value['course_name'] ?></option>
            <?php } ?>
          </select>
        </div>


        <!-- <label for="admin_name" class="text-sm font-medium">Present</label>
            <input type="radio" name="abscence" class="m-2" id="abscence_true" />
            <label for="admin_name" class="text-sm font-medium">Abscent</label>
            <input type="radio" name="abscence" class="m-2" id="abscence_false" /> -->
        <button type="submit" name="show" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
          Show Students
        </button>
      </form>
    </div>
  </div>
  <div class="w-full flex flex-wrap justify-center">
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if (isset($_POST['show'])) {
      $course_name = $_POST['course'];
      $groupe_name = $_POST['groupe'];
      $query = $conn->prepare("SELECT students.fullname, students.email, courses.course_name AS course_name FROM students INNER JOIN groupes ON students.id_groupe = groupes.id INNER JOIN seance ON groupes.id = seance.id_groupe INNER JOIN courses ON seance.id_course = courses.id WHERE groupes.name = '$groupe_name' AND courses.course_name = '$course_name'");
      $query->execute();

      $student = $query->fetchAll();

      foreach ($student as $key => $value) { ?>
        <div class="w-full  m-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

          <div class="flex flex-col pt-4 items-center pb-5">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://img.freepik.com/free-vector/developer-activity-concept-illustration_114360-2801.jpg?w=2000" alt="Student image" />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= $value['fullname'] ?></h5>
            <div class="flex mt-4 space-x-3 md:mt-6">
              <select name="presence" class=" inline-flex items-center  py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <option value="0">present</option>
                <option value="1">abscent</option>
              </select>
              <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
            </div>
          </div>

        </div>
    <?php }
    } ?>
  </div>

  <?php require_once('../inc/footer.php') ?>