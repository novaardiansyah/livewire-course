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

  <button type="button" class="bg-blue-500 hover:bg-blue-600 rounded-lg text-white px-4 py-2 mt-3 cursor-pointer" wire:click="create">
    Create User
  </button>

  <hr class="border-1 my-5">

  <h2 class="text-2xl font-semibold">Users List</h2>

  <ul class="list-disc list-inside">
    @foreach ($users as $user)
      <li>{{ $user->name }} ({{ $user->email }})</li>
    @endforeach
  </ul>
</div>
