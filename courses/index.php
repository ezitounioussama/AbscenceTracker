<script src="script.js" defer></script>
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

<div aria-label="Page Header" class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl px-4 py-6 sm:py-8 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <div class="text-center sm:text-left">
        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
          Welcome Mehdi, Laraibi!
        </h1>

        <p class="mt-1.5 text-sm text-gray-500">
          Let's write a new Course! 🎉
        </p>
      </div>

      <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
        <button class="block rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring" type="button">
          Create new Course
        </button>
      </div>
    </div>
  </div>
</div>
<div class="flex justify-center">
  <!-- Form to add students -->

  <form action="create.php" method="post" enctype="multipart/form-data" class="mt-6 mb-0 space-y-4 rounded-lg p-8 w-[400px] md:shadow-2xl xl:shadow-2xl">
    <p class="text-lg font-medium">Add Course</p>

    <div>
      <label for="course" class="text-sm font-medium">Course name</label>

      <div class="relative mt-1">
        <input type="text" id="course" name="course_name" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter course name" />

        <span class="absolute inset-y-0 right-4 inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
          </svg>
        </span>
      </div>
    </div>

    <div>
      <label for="admin_name" class="text-sm font-medium">Admin name</label>

      <div class="relative mt-1">
        <select name="id_user" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm">
          <?php
          $stmt = $conn->prepare('select * from users ');
          $stmt->execute();

          $groupes = $stmt->fetchAll();
          foreach ($groupes as $key => $value) {
          ?>
            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
          <?php } ?>
        </select>



      </div>
    </div>

    <div class="flex items-center justify-center w-full">
      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center hidden" id="img-preview-container">
          <img id="img-preview" class="h-36 w-full object-cover rounded-lg">
          <button type="button" id="remove-img-btn" class="mt-2 px-2 py-1 text-xs font-semibold text-gray-500 uppercase bg-transparent border border-gray-500 rounded-full transition hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-400">
            Remove Image
          </button>
        </div>
        <div class="flex flex-col items-center justify-center" id="default-preview-container">
          <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
          </svg>
          <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
            <span class="font-semibold">Click to upload</span> or drag and
            drop
          </p>
          <p class="text-xs text-gray-500 dark:text-gray-400">
            SVG, PNG, JPG or GIF (MAX. 800x400px)
          </p>
        </div>
        <input id="dropzone-file" type="file" class="hidden" name="course_image" accept="image/*">
      </label>
    </div>


    <button type="submit" name="submit" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
      Add
    </button>
  </form>
</div>

<!-- CARDS -->

<h1 class="text-4xl font-bold flex justify-center w-full mt-[8%]">All courses</h1>
<div class="flex justify-center items-center flex-wrap my-5">
  <?php
  $stmt = $conn->prepare('SELECT courses.id,courses.course_name, courses.course_image_path, users.name FROM courses JOIN users ON courses.id_user = users.id
  ');
  $stmt->execute();

  $courses = $stmt->fetchAll();
  foreach ($courses as $key => $value) {
  ?>

    <div class="w-['200px'] p-6 rounded-md shadow-md dark:bg-gray-900 dark:text-gray-50">
      <input type="hidden" name="id" value="<?= $value['id'] ?>">
      <img src="../images/<?= $value['course_image_path'] ?>" alt="<?= $value['course_name'] ?>" class="object-cover object-center w-full rounded-md h-72 dark:bg-gray-500">
      <div class="mt-6 mb-2">
        <span class="block text-xs font-medium tracking-widest uppercase dark:text-violet-400"><?= $value['name'] ?></span>
        <h2 class="text-xl font-semibold tracking-wide"><?= $value['course_name'] ?></h2>

      </div>
      <div class="flex  items-center">
        <a class="mr-4" href="update.php?id=<?= $value['id'] ?>">
          <svg class="w-6 h-6 dark:text-white hover:cursor-pointer hover:text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
          </svg>
        </a>
        <a href="delete.php?id=<?= $value['id'] ?>">

          <svg fill="none" class="w-6 h-6 dark:text-white hover:cursor-pointer hover:text-red-600" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
          </svg>
        </a>
      </div>
    </div>

  <?php } ?>
</div>
<!-- FOOTER -->

<footer aria-label="Site Footer" class="bg-gray-100 mt-10">
  <div class="py-6 text-sm text-center dark:text-gray-400">
    © 2023 Company Co. All rights reserved.
  </div>
</footer>
</body>

</html>