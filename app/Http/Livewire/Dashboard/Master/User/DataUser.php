<?php

namespace App\Http\Livewire\Dashboard\Master\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataUser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $ids;
    public $pegawai_id;
    public $username;
    public $email;
    public $status_user;
    public $level_user;

    public function resetInputFields()
    {
        $this->ids = '';
        $this->pegawai_id = '';
        $this->username = '';
        $this->email = '';
        $this->status_user = '';
        $this->level_user = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'username'      => 'required',
            'email'         => 'required|email',
            'status_user'   => 'required',
            'level_user'    => 'required'
        ]);

        User::create($validatedData);
        session()->flash('message', 'User created successfully!');
        $this->resetInputFields();
        $this->emit('userAdded');
    }
    
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        $this->ids = $user->id;
        $this->pegawai_id = $user->pegawai_id;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->status_user = $user->status_user;
        $this->level_user = $user->level_user;
    }

    public function update()
    {
        $this->validate([
            'username'      => 'required',
            'email'         => 'required|email',
            'status_user'   => 'required',
            'level_user'    => 'required'
        ]);

        if ($this->ids) {
            $user = User::find($this->ids);
            $user->update([
                'username'      => $this->username,
                'email'         => $this->email,
                'status_user'   => $this->status_user,
                'level_user'    => $this->level_user,
            ]);
            session()->flash('message', 'User updated successfully!');
            $this->resetInputFields();
            $this->emit('userUpdated');
        }
    }

    public function delete($id)
    {
        if ($id) {
            User::where('id', $id)->delete();
            session()->flash('message', 'User deleted successfully!');
        }
    }

    public function render()
    {
        return view('livewire.dashboard.master.user.data-user', [
            'users' => User::paginate(10),
        ]);
    }
}
