<?php

namespace App\Http\Livewire\System\Dashboards;

use App\Models\User;
use Livewire\Component;

class Admin extends Component
{
    public User $auth;
    
    public function mount()
    {
        $this->auth = current_user();
    }

    public function render()
    {
        return view('livewire.system.dashboards.admin');
    }
}
