@php
  /*
   * Project Name: livewire-course
   * File: users.blade.php
   * Created Date: Monday January 19th 2026
   *
   * Author: Nova Ardiansyah admin@novaardiansyah.id
   * Website: https://novaardiansyah.id
   * MIT License: https://github.com/novaardiansyah/livewire-course/blob/main/LICENSE
   *
   * Copyright (c) 2026 Nova Ardiansyah, Org
   */
@endphp

<div class="w-1/2 m-auto my-10">
  <h1 class="text-3xl font-semibold">{{ $modalPluralLabel }}</h1>
  <p>User Count: {{ $users->count() }}</p>

  <form wire:submit="create" class="mt-5">
    <div class="mb-3">
      <input type="text" wire:model="name" placeholder="Name" class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

      @error('name')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>


    <div class="mb-3">
      <input type="email" wire:model="email" placeholder="Email" class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

      @error('email')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>


    <div class="mb-3">
      <input type="password" wire:model="password" placeholder="Password" class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

      @error('password')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg text-white px-4 py-2 cursor-pointer w-full">
      Create User
    </button>
  </form>

  <hr class="border-1 my-5">

  <h2 class="text-2xl font-semibold">Users List</h2>

  @if (session()->has('success'))
    <div class="p-4 my-4 text-sm text-green-700 rounded-lg bg-green-50" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <ul class="list-disc list-inside">
    @foreach ($users as $user)
      <li>{{ $user->name }} ({{ $user->email }})</li>
    @endforeach
  </ul>
</div>
