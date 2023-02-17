<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link
      rel="apple-touch-icon"
      type="image/ico"
      sizes="49x49"
      href="https://gomycode.com/favicon.ico"
    />
    <link rel="icon" type="image/ico" href="https://gomycode.com/favicon.ico" />
  </head>
  <body>
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
          <a class="text-gray-900" href="">Students</a>
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
          <a class="text-gray-900" href="">Students</a>
          <a class="text-gray-900" href="../course/">Courses</a>
          <a class="text-gray-900" href="../seance/">Seance</a>
          <a class="text-gray-900" href="">Contact</a>
        </nav>
      </div>
    </header>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10 mx-5">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead
          class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
        >
          <tr>
            <a class="text-gray-900" href="">Students</a>
            <a class="text-gray-900" href="../course/">Courses</a>
            <a class="text-gray-900" href="../seance/">Seance</a>
            <a class="text-gray-900" href="">Contact</a>
          </tr>
        </thead>
        <tbody>
          <tr
            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
          >
            <th
              scope="row"
              class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
            >
              <img
                class="w-10 h-10 rounded-full"
                src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                alt="Jese image"
              />
              <div class="pl-3">
                <div class="text-base font-semibold">Neil Sims</div>
                <div class="font-normal text-gray-500">
                  neil.sims@flowbite.com
                </div>
              </div>
            </th>
            <td class="px-6 py-4">
              <select
                name="seance"
                id="seance"
                class="rounded-md shadow-md border-none bg-blue-300 text-white"
              >
                <option value="1">choose Seance</option>
              </select>
            </td>

            <td class="px-6 py-4">
              <select
                name="course"
                id="course"
                class="rounded-md shadow-md border-none bg-blue-300 text-white"
              >
                <option value="1">choose Course</option>
              </select>
            </td>

            <td class="px-6 py-4">
              <label for="admin_name" class="text-sm font-medium"
                >Present</label
              >
              <input type="radio" name="abscence" id="abscence_true" />
              <label for="admin_name" class="text-sm font-medium"
                >Abscent</label
              >
              <input type="radio" name="abscence" id="abscence_false" />
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer
      aria-label="Site Footer"
      class="bg-gray-100 mt-10 absolute w-full bottom-0"
    >
      <div class="py-6 text-sm text-center dark:text-gray-400">
        © 2023 Company Co. All rights reserved.
      </div>
    </footer>
  </body>
</html>
