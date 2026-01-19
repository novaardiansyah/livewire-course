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

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
  public $modalPluralLabel = 'Users';
  public $users = null;

  public function mount()
  {
    $this->users = User::all();
  }

  public function render()
  {
    return view('livewire.users');
  }
}
