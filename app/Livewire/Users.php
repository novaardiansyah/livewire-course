<?php

/*
 * Project Name: livewire-course
 * File: Users.php
 * Created Date: Monday January 19th 2026
 *
 * Author: Nova Ardiansyah admin@novaardiansyah.id
 * Website: https://novaardiansyah.id
 * MIT License: https://github.com/novaardiansyah/livewire-course/blob/main/LICENSE
 *
 * Copyright (c) 2026 Nova Ardiansyah, Org
 */

declare(strict_types=1);

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class Users extends Component
{
  use WithFileUploads;
  public $modalPluralLabel = 'Users';
  public $users = null;

  #[Validate('required|min:3')]
  public $name = '';

  #[Validate('required|email:dns|unique:users,email')]
  public $email = '';

  #[Validate('required|min:8')]
  public $password = '';

  #[Validate('image|max:5120|mimetypes:image/png,image/jpeg,image/jpg,image/webp')]
  public $avatar = null;

  public function render()
  {
    $this->users = User::orderBy('id', 'desc')->get();
    return view('livewire.users');
  }

  public function create()
  {
    $validated = $this->validate();

    if ($this->avatar) {
      $validated['avatar'] = $this->avatar->store('avatars', 'public');
    }

    User::create([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'password' => Hash::make($validated['password']),
      'avatar' => $validated['avatar'],
    ]);

    $this->reset();

    session()->flash('success', 'User created successfully');
  }
}
