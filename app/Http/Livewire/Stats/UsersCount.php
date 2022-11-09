<?php

namespace App\Http\Livewire\Stats;

use App\Models\User;
use Livewire\Component;

class UsersCount extends Component
{
    public $userCount;
    public $selectedDays=30;

    public function mount()
    {
        $this->updateStats();
    }

 

    public function updateStats(){
        $this->usersCount = User::where('created_at', '>=', now()->subDays($this->selectedDays))->count();
    }

    public function render()
    {
        return view('livewire.stats.users-count');
    }
}
