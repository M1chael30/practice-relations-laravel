@extends('welcome')
@section('content')
<div class=" mt-4 container mx-auto py-4 px-4">
  <div class="flex justify-center">
    <div class="relative w-full	 overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="py-2 px-3 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
          <div class="flex justify-between items-center">
            List of students
          </div>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Student name
            </th>
            <th scope="col" class="px-6 py-3">
              Status
            </th>
            <th scope="col" class="px-6 py-3">
              Blocks
            </th>
            <th scope="col" class="px-6 py-3">
              Department
            </th>
            <th scope="col" class="px-6 py-3">
              Joined
            </th>
            <th scope="col" class="px-6 py-3">
              Add/Remove
            </th>
          </tr>
        </thead>
        <tbody>

          @forelse ($students as $student)

          <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 row-span-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{$student->name}}
            </th>
            <td class="px-6 py-4 font-semibold 
                {{$student->section_id && $student->department_id ? 'text-green-500' : 'text-orange-500'}}">
              {{$student->section_id && $student->department_id ? 'Added' : 'Pending'}}
            </td>
            <td class="px-6 py-4 font-semibold ">
              {{optional($student->section)->section_name}}
            </td>
            <td class="px-6 py-4 font-semibold ">
              {{optional($student->department)->department_name}}
            </td>
            <td class="px-6 py-4">
              {{$student->created_at->diffForHumans()}}
            </td>
            <td class="px-6 py-4">
              @include('page.student.addmodal')
            </td>
          </tr>
          @empty
          <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="px-6 py-4 text-center font-bold" colspan="6">
              No Students Added.
            </td>
          </tr>
          @endforelse

        </tbody>
      </table>
      <div class="py-3 font-bold px-4">
        {{$students->links()}}
      </div>
    </div>
  </div>
</div>
@endsection