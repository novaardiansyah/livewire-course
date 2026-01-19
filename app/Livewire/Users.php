<?php

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
