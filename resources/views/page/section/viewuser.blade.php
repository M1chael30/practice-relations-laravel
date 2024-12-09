@extends('welcome')
@section('content')
<div class="max-w-3xl mt-4 container mx-auto py-4 px-4">
 <div class="flex justify-center">
  <div class="relative w-full	 overflow-x-auto shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <caption class="py-2 px-3 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
     <div class="flex justify-between items-center">
      Student Name: {{$user->name}}
     </div>
    </caption>
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
     <tr>
      <th scope="col" class="px-6 py-3">
       Block name
      </th>
      <th scope="col" class="px-6 py-3">
       Created at
      </th>
     </tr>
    </thead>
    <tbody>
     <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
      <th scope="row" class="px-6 py-4 row-span-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
       {{$section->section_name}}
      </th>
      <td class="px-6 py-4">
       {{$section->created_at->diffForHumans()}}
      </td>
     </tr>
    </tbody>
   </table>
  </div>
 </div>
</div>
@endsection