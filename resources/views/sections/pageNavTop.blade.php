<nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 left-0 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 py-2">
    <a href="/" class="flex items-center">
      <img src="{{ asset('icon.png') }}" class="h-8 mr-3" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sch Loan</span>
    </a>
    @if (auth()->check())

    <div class="flex md:order-2">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"
          class="text-white bg-blue-700 hover:ring-2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm hover:bg-white hover:text-black px-5 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</button>
      </form>
    </div>
    @endif
  </div>
</nav>