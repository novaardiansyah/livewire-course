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

<div class="container">
  <div class="row my-5 justify-content-center">
    <div class="col-md-5">
      <h1 class="h2">Create User</h1>
      <hr class="my-0 mb-3">

      <form wire:submit="create">
        <div class="form-group">
          <label for="name">Fullname</label>
          <input type="text" class="form-control" id="name" wire:model="name" />
          @error('name')
            <div class="invalid-feedback name d-block mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" wire:model="email" />
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('email')
            <div class="invalid-feedback email d-block mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" wire:model="password" />
          @error('password')
            <div class="invalid-feedback password d-block mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="avatar">Profile picture</label>

          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="avatar" wire:model="avatar" />
              <label class="custom-file-label" for="avatar">Choose file</label>
            </div>
          </div>

          @if ($avatar)
            @error('avatar')
              <div class="invalid-feedback avatar d-block mt-1">{{ $message }}</div>
            @enderror

            <div class="mt-2">
              <img src="{{ $avatar->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 150px;" />
            </div>
          @endif
        </div>

        <button type="submit" class="btn btn-primary">Create User</button>
      </form>
    </div>

    <div class="col-md">
      <h1 class="h2">List User</h1>
      <hr class="my-0 mb-3">

      <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Search user by name or email" wire:model="query" wire:model.live.debounce.350ms="query" />
      </div>

      <ul class="list-unstyled">
        @foreach ($users as $user)
          @php
            $avatar = $user->avatar ? asset('storage/' . $user->avatar) : asset('images/default-avatar.png');
          @endphp

          <li class="media" wire:key="{{ $user->id }}">
            <img src="{{ $avatar }}" class="mr-3 rounded-circle" alt="Avatar" width="40" height="40" />

            <div class="media-body row justify-content-between align-items-center">
              <div class="col-md-8">
                <h5 class="mt-0 mb-1">{{ $user->name }}</h5>
                <p>{{ $user->email }}</p>
              </div>

              <div class="col-md">
                <p>{{ $user->created_at->diffForHumans() }}</p>
              </div>
            </div>
          </li>
        @endforeach
      </ul>

      {{ $users->links() }}
    </div>
  </div>
</div>
