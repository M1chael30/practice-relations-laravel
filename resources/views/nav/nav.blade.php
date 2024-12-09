<nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex  items-center space-x-3 rtl:space-x-reverse">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
      <span class="self-center text-gray-900 text-2xl font-semibold whitespace-nowrap dark:text-white">Demo</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
      <ul class="flex items-center flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
          <a href="{{route('home')}}" class="
      {{request()->is('/') 
       ? 'bg-indigo-700 font-bold md:text-indigo-700 md:dark:text-indigo-500 dark:bg-indigo-600' 
       : 'text-gray-900 dark:text-white' }}
      md:dark:bg-transparent rounded md:bg-transparent block py-2 px-3 md:p-0" aria-current="page">Home</a>
        </li>
        <li>
          <a href="{{route('block')}}" class="
      {{request()->is('block') 
       ? 'bg-indigo-700 font-bold md:text-indigo-700 md:dark:text-indigo-500 dark:bg-indigo-600' 
       : 'text-gray-900 dark:text-white' }}
      md:dark:bg-transparent rounded md:bg-transparent block py-2 px-3 md:p-0" aria-current="page">Blocks</a>
        </li>
        <li>
          <a href="{{route('students')}}" class=" 
     {{request()->is('students') 
       ? 'bg-indigo-700 font-bold md:text-indigo-700 md:dark:text-indigo-500 dark:bg-indigo-600' 
       : 'text-gray-900 dark:text-white' }} 
     rounded md:bg-transparent  md:dark:bg-transparent block py-2 px-3 md:p-0" aria-current="page">Students</a>
        </li>
        <li>
          <a href="{{route('department')}}" class=" 
     {{request()->is('department') 
       ? 'bg-indigo-700 font-bold md:text-indigo-700 md:dark:text-indigo-500 dark:bg-indigo-600' 
       : 'text-gray-900 dark:text-white' }} 
     rounded md:bg-transparent  md:dark:bg-transparent block py-2 px-3 md:p-0" aria-current="page">Department</a>
        </li>
        <li>
          @include('button')
        </li>
      </ul>
    </div>
  </div>
</nav>