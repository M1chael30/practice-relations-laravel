@extends('welcome')
@section('content')
<div class="max-w-3xl mt-4 container mx-auto py-4 px-4">
 <div class="flex flex-col justify-center items-center">
  <!-- heading -->
  <div class="w-full mb-7">
   <h1 class="text-gray-900 dark:text-gray-200 font-bold text-2xl">Dashboard</h1>
   <hr class="w-full dark:bg-gray-300 bg-gray-900 h-[1.5px]">
  </div>


  <!-- cards -->
  <div class="grid lg:grid-cols-6 gap-3 w-full">
   @include('page.home.departmentcard')
   @include('page.home.sectioncard')
   @include('page.home.studentcard')
  </div>

 </div>
</div>
@endsection