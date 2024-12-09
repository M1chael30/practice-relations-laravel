<!-- Modal toggle -->
<button
  data-modal-target="{{$student->id}}-crud-modal"
  data-modal-toggle="{{$student->id}}-crud-modal"
  class="block rounded-ful px-3 py-2 text-center"
  type="button">
  <i class="fa-regular fa-pen-to-square text-[16px]"></i>
</button>

<!-- Main modal -->
<div
  id="{{$student->id}}-crud-modal"
  tabindex="-1"
  aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
          Configure
        </h3>
        <button
          type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="{{$student->id}}-crud-modal">
          <svg
            class="w-3 h-3"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 14 14">
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form
        class="p-4 md:p-5"
        method="post"
        action="{{route('students.add', $student)}}">
        @method('put')
        @csrf
        <div class="grid gap-4 mb-4 grid-cols-2">
          <div class="col-span-2">

            <!-- name -->
            <label
              for="name"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
              Name
            </label>
            <input
              disabled
              value="{{$student->name}}"
              type="text"
              name="name"
              id="name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Type product name"
              required="">
          </div>

          <!-- blocks -->
          <div class="col-span-2">
            <label
              for="blocks"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
              Blocks
            </label>
            <select
              id="blocks"
              name="blocks"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
              <option value="">Set to Pending</option>
              @foreach ($sections as $section)
              <option
                value="{{$section->id}}"
                {{$student->section_id == $section->id ? 'selected' : ''}}>
                {{$section->section_name}}
              </option>
              @endforeach
            </select>
          </div>

          <!-- departments -->
          <div class="col-span-2">
            <label
              for="departments"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
              Departments
            </label>
            <select
              id="departments"
              name="departments"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
              <option value="">Set to Pending</option>
              @foreach ($departments as $department)
              <option
                value="{{$department->id}}"
                {{$student->department_id == $department->id ? 'selected' : ''}}>
                {{$department->department_name}}
              </option>
              @endforeach
            </select>
          </div>
        </div>
        <button
          type="submit"
          class="text-white inline-flex items-center bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
          Confirm
        </button>
      </form>
    </div>
  </div>
</div>