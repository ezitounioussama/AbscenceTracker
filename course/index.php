<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <title>Courses</title>
  </head>
  <body>
    <!-- HEADER START -->

    <header aria-label="Site Header" class="shadow-sm">
      <div
        class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-4"
      >
        <div class="flex w-0 flex-1 lg:hidden">
          <button
            class="rounded-full bg-gray-100 p-2 text-gray-600"
            type="button"
          >
            <span class="sr-only">Account</span>
            <svg
              class="h-5 w-5"
              fill="none"
              stroke="currentColor"
              viewbox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
              ></path>
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
              <input
                class="h-10 rounded-lg border-gray-200 pr-10 text-sm placeholder-gray-300 focus:z-10"
                placeholder="Search..."
                type="text"
              />

              <button
                type="submit"
                class="absolute inset-y-0 right-0 mr-px rounded-r-lg p-2 text-gray-600"
              >
                <span class="sr-only">Submit Search</span>
                <svg
                  class="h-5 w-5"
                  fill="currentColor"
                  viewbox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    clip-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    fill-rule="evenodd"
                  ></path>
                </svg>
              </button>
            </div>
          </form>
        </div>

        <div class="flex w-0 flex-1 justify-end lg:hidden">
          <button
            class="rounded-full bg-gray-100 p-2 text-gray-500"
            type="button"
          >
            <span class="sr-only">Menu</span>
            <svg
              class="h-5 w-5"
              fill="currentColor"
              viewbox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                clip-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </div>

        <nav
          aria-label="Site Nav"
          class="hidden items-center justify-center gap-8 text-sm font-medium lg:flex lg:w-0 lg:flex-1"
        >
          <a class="text-gray-900" href="../students/">Students</a>
          <a class="text-gray-900" href="../course/">Courses</a>
          <a class="text-gray-900" href="../seance/">Seance</a>
          <a class="text-gray-900" href="">Contact</a>
        </nav>

        <div class="hidden items-center gap-4 lg:flex">
          <a
            href="#"
            class="rounded-lg bg-gray-100 px-5 py-2 text-sm font-medium text-gray-600"
          >
            Log in
          </a>
        </div>
      </div>

      <div class="border-t border-gray-100 lg:hidden">
        <nav
          class="flex items-center justify-center overflow-x-auto p-4 text-sm font-medium"
        >
          <a class="text-gray-900" href="../students/">Students</a>
          <a class="text-gray-900" href="../course/">Courses</a>
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

          <div
            class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center"
          >
            <button
              class="block rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
              type="button"
            >
              Create new Course
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-center">
      <!-- Form to add students -->

      <form
        action=""
        class="mt-6 mb-0 space-y-4 rounded-lg p-8 w-[400px] md:shadow-2xl xl:shadow-2xl"
      >
        <p class="text-lg font-medium">Add Course</p>

        <div>
          <label for="course" class="text-sm font-medium">Course name</label>

          <div class="relative mt-1">
            <input
              type="text"
              id="course"
              class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
              placeholder="Enter course name"
            />

            <span class="absolute inset-y-0 right-4 inline-flex items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 text-gray-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"
                />
              </svg>
            </span>
          </div>
        </div>

        <div>
          <label for="admin_name" class="text-sm font-medium">Admin name</label>

          <div class="relative mt-1">
            <input
              type="text"
              id="admin_name"
              class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
              placeholder="Enter your name"
            />

            <span class="absolute inset-y-0 right-4 inline-flex items-center">
              <svg
                class="h-5 w-5 text-gray-400"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                />
              </svg>
            </span>
          </div>
        </div>

        <div class="flex items-center justify-center w-full">
          <label
            for="dropzone-file"
            class="flex flex-col items-center justify-center w-full h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
          >
            <div class="flex flex-col items-center justify-center">
              <svg
                aria-hidden="true"
                class="w-10 h-10 mb-3 text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"
                ></path>
              </svg>
              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                <span class="font-semibold">Click to upload</span> or drag and
                drop
              </p>
              <p class="text-xs text-gray-500 dark:text-gray-400">
                SVG, PNG, JPG or GIF (MAX. 800x400px)
              </p>
            </div>
            <input id="dropzone-file" type="file" class="hidden" />
          </label>
        </div>
      </form>
    </div>

    <!-- CARDS -->

    <h1 class="text-4xl font-bold flex justify-center mt-[8%]">All courses</h1>

    <div class="flex justify-center flex-wrap w-full my-[5%]">
      <a
        href="#"
        class="w-60 m-5 relative block overflow-hidden rounded-xl bg-[url(https://cdn.geekboots.com/geek/javascript-meta-1652702081069.jpg)] bg-cover bg-center bg-no-repeat"
      >
        <span
          class="absolute right-4 top-4 z-10 inline-flex items-center rounded-full bg-black px-3 py-1 text-xs font-semibold text-white"
        >
          4.5

          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="ml-1.5 h-4 w-4 text-yellow-300"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
            />
          </svg>
        </span>

        <div class="relative p-8 pt-40 text-white">
          <h3 class="text-2xl font-bold">Javascript Course</h3>
        </div>
      </a>
      <a
        href="#"
        class="w-60 m-5 relative block overflow-hidden rounded-xl bg-[url(data:image/png;base64,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)] bg-cover bg-center bg-no-repeat"
      >
        <span
          class="absolute right-4 top-4 z-10 inline-flex items-center rounded-full bg-black px-3 py-1 text-xs font-semibold text-white"
        >
          3.9

          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="ml-1.5 h-4 w-4 text-yellow-300"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
            />
          </svg>
        </span>

        <div class="relative p-8 pt-40 text-white">
          <h3 class="text-2xl font-bold">UX/UI Course</h3>
        </div>
      </a>
      <a
        href="#"
        class="w-60 m-5 relative block overflow-hidden rounded-xl bg-[url(https://www.wedemain.fr/wp-content/uploads/job_sens-870x600.jpg)] bg-cover bg-center bg-no-repeat"
      >
        <span
          class="absolute right-4 top-4 z-10 inline-flex items-center rounded-full bg-black px-3 py-1 text-xs font-semibold text-white"
        >
          5.0

          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="ml-1.5 h-4 w-4 text-yellow-300"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
            />
          </svg>
        </span>

        <div class="relative p-8 pt-40 text-white">
          <h3 class="text-2xl font-bold">Job Lcourse</h3>
        </div>
      </a>
    </div>

    <!-- FOOTER -->

    <footer aria-label="Site Footer" class="bg-gray-100 mt-10">
      <div class="py-6 text-sm text-center dark:text-gray-400">
        © 2023 Company Co. All rights reserved.
      </div>
    </footer>
  </body>
</html>
