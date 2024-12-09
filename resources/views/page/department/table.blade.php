<div class="relative w-full overflow-x-auto shadow-md sm:rounded-lg">
 <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
  <caption class="py-2.5 px-3 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
   <div class="flex justify-between items-center">
    Lists of departments
    @include('page.department.add')
   </div>
  </caption>
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
   <tr>
    <th scope="col" class="px-6 py-3">
     Department name
    </th>
    <th scope="col" class="px-6 py-3">
     Created at
    </th>
    <th scope="col" class="px-6 py-3">
     Action
    </th>
   </tr>
  </thead>
  <tbody>
   @forelse ($departments as $department)
   <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
     {{$department->department_name}}
    </th>
    <td class="px-6 py-4">
     {{$department->created_at->diffForHumans()}}
    </td>
    <td scope="row" class="px-6 py-4 flex gap-3">
     <a href="{{route('view.department', $department)}}">
      <i class="fa-solid fa-up-right-from-square"></i>
     </a>
     @include('page.department.update')
     @include('page.department.delete')
    </td>
   </tr>
   @empty
   <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
    <td class="px-6 py-4 text-center font-base" colspan="3">
     No department Added.
    </td>
   </tr>
   @endforelse
  </tbody>
 </table>
</div>