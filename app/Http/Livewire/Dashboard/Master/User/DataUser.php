<?php

namespace App\Http\Livewire\Dashboard\Master\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataUser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.dashboard.master.user.data-user', [
            'users' => User::paginate(10),
        ]);
    }
}
