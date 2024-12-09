@extends('welcome')
@section('content')
<div class="max-w-3xl mt-4 container mx-auto py-4 px-4">
 <div class="flex justify-center">
  <div class="relative w-full	 overflow-x-auto shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <caption class="py-2 px-3  bg-white  dark:bg-gray-800">
     <div class="flex justify-between items-center">
      <span class="font-semibold  text-lg text-left rtl:text-right text-gray-900 dark:text-white">
       {{$department->department_name}}
      </span>
      <span class="text-sm dark:text-white text-gray-900">
       Total students: {{$department->users->count()}}
      </span>
     </div>
    </caption>
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
     <tr>
      <th scope="col" class="px-6 py-3">
       Student name
      </th>
      <th scope="col" class="px-6 py-3">
       Block
      </th>
      <th scope="col" class="px-6 py-3">
       Created at
      </th>
      <th scope="col" class="px-6 py-3">
       View
      </th>
     </tr>
    </thead>
    <tbody>
     @forelse ($department->users as $user)
     <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
      <th scope="row" class="px-6 py-4 row-span-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
       {{$user->name}}
      </th>
      <td class="px-6 py-4">
       {{optional($user->section)->section_name}}
      </td>
      <td class="px-6 py-4">
       {{$user->created_at->diffForHumans()}}
      </td>
      <td scope="row" class="px-6 py-4">
       <a href="">
        <i class="fa-solid fa-up-right-from-square"></i>
       </a>
      </td>
     </tr>
     @empty
     <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
      <td colspan="4" class="px-6 py-4 text-center font-bold">
       No Students Added.
      </td>
     </tr>
     @endforelse
    </tbody>
   </table>
   </table>
  </div>
 </div>
</div>
@endsection