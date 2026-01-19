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
      <input type="text" wire:model="name" placeholder="Name"
        class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

      @error('name')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>


    <div class="mb-3">
      <input type="email" wire:model="email" placeholder="Email"
        class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

      @error('email')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>


    <div class="mb-3">
      <input type="password" wire:model="password" placeholder="Password"
        class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

      @error('password')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <div class="col-span-full mb-3">
      <label for="cover-photo" class="block text-sm/6 font-medium text-white">Avatar</label>
      <div class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
        <div class="text-center">
          <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true"
            class="mx-auto size-12 text-gray-600">
            <path
              d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
              clip-rule="evenodd" fill-rule="evenodd" />
          </svg>
          <div class="mt-4 flex text-sm/6 text-gray-400">
            <label for="avatar"
              class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-400 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-500 hover:text-indigo-300">
              <span>Upload a file</span>
              <input type="file" wire:model="avatar" id="avatar" name="avatar" class="sr-only" accept="image/png, image/jpeg, image/jpg, image/webp" />
            </label>
            <p class="pl-1">or drag and drop</p>
          </div>
          <p class="text-xs/5 text-gray-400">PNG, JPEG, JPG, Webp up to 5MB</p>
        </div>
      </div>

      @error('avatar')
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
