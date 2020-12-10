<?php
use App\Models\User;
 $users = User::all(); ?>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         <!--  {{ __('Dashboard') }} -->
         <div>
      <table class="min-w-full table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="px-16 py-2">
              <span class="text-gray-300"></span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">ID</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">name</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Email</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Last Login</span>
            </th>

          
          </tr>
        </thead>
        <tbody class="bg-gray-200">
        @foreach($users as $user)
          <tr class="bg-white border-4 border-gray-200">
            <td class="px-16 py-2 flex flex-row items-center">
              <img
                class="h-8 w-8 rounded-full object-cover "
                src="https://randomuser.me/api/portraits/men/30.jpg"
                alt=""
              />
            </td>
            <td>
              <span class="text-center ml-2 font-semibold">{{$user->id}}</span>
            </td>
            <td class="px-16 py-2">
            {{$user->name}}
            </td>
            <td class="px-16 py-2">
              <span>{{$user->email}}</span>
            </td>
            <td class="px-16 py-2">
              <span>10:00</span>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>



        </h2>
      
    </x-slot>

</x-app-layout>

