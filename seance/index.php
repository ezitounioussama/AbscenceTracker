<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seance</title>
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

  <style>
    input[type="date"]::-webkit-calendar-picker-indicator {
      filter: invert(0.6);
    }
    input[type="time"]::-webkit-calendar-picker-indicator {
      filter: invert(0.6);
    }
  </style>
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

    <div aria-label="Page Header" class="bg-gray-50">
      <div class="mx-auto max-w-screen-xl px-4 py-6 sm:py-8 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center sm:justify-between">
          <div class="text-center sm:text-left">
            <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
              Welcome Mehdi, Laraibi!
            </h1>

            <p class="mt-1.5 text-sm text-gray-500">
              You can Write here your Seance! 🎉
            </p>
          </div>

          <div
            class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center"
          >
            <button
              class="block rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
              type="button"
            >
              Create a Seance
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
        <p class="text-lg font-medium">Add Seance</p>

        <div>
          <label for="seance" class="text-sm font-medium">Seance</label>

          <div class="relative mt-1">
            <input
              type="text"
              id="seance"
              class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
              placeholder="Enter seance"
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
                  d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"
                />
              </svg>
            </span>
          </div>
        </div>
        <div>
          <label for="date" class="text-sm font-medium">Date</label>

          <div class="relative mt-1">
            <input
              type="date"
              id="date"
              class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm text-gray-500"
            />
          </div>
        </div>

        <div>
          <label for="start" class="text-sm font-medium">Start Seance</label>

          <div class="relative mt-1">
            <input
              type="time"
              id="start"
              class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm text-gray-500"
            />
          </div>
        </div>

        <div>
          <label for="end" class="text-sm font-medium">End Seance</label>

          <div class="relative mt-1">
            <input
              type="time"
              id="end"
              class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm text-gray-500"
            />
          </div>
        </div>
        <button
          type="submit"
          class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
        >
          Add
        </button>
      </form>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10 mx-5">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead
          class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
        >
          <tr>
            <th scope="col" class="p-4">
              <div class="flex items-center">
                <input
                  id="checkbox-all-search"
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label for="checkbox-all-search" class="sr-only"
                  >checkbox</label
                >
              </div>
            </th>
            <th scope="col" class="px-6 py-3">Seance</th>
            <th scope="col" class="px-6 py-3">Date</th>
            <th scope="col" class="px-6 py-3">Start Time</th>
            <th scope="col" class="px-6 py-3">End Time</th>
          </tr>
        </thead>
        <tbody>
          <tr
            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
          >
            <td class="w-4 p-4">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label for="checkbox-table-search-1" class="sr-only"
                  >checkbox</label
                >
              </div>
            </td>
            <th
              scope="row"
              class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
            >
              <div>
                <div class="text-base font-semibold">xxxxxxx</div>
              </div>
            </th>
            <td class="px-6 py-4">Students</td>

            <td class="px-6 py-4">
              <a
                href="#"
                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                >12:00 AM</a
              >
            </td>
            <td class="px-6 py-4">
              <a
                href="#"
                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                >09:00 PM</a
              >
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer aria-label="Site Footer" class="bg-gray-100 mt-10">
      <div class="py-6 text-sm text-center dark:text-gray-400">
        © 2023 Company Co. All rights reserved.
      </div>
    </footer>
  </body>
</html>
