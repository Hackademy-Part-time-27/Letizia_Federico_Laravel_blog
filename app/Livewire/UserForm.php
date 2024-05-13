<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class UserForm extends Component
{
    use WithFileUploads;

    public $userId = null;

    #[Validate]
    public $name = '';

    public $email = '';

    public $password = '';

    #[Validate('image|max:1024')]
    public $photo;

    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required'
        ];
    }

    public function submit()
    {
        $this->validate();

        if($this->userId)
        {
            $user = User::find($this->userId);
            $user->update($this->only('name', 'email', 'password'));
            session()->flash('success', 'Utente modificato correttamente');

        } else {
            $user = user::create($this->only('name', 'email', 'password'));
            
            session()->flash('success', 'Utente creato correttamente');

            if($this->photo)
            {
                $photoPath = $this->photo->storeAs('public/users', $user->id . '.' . $this->photo->extension());
                
                $user->photo = $photoPath;
                $user->save();
            }
            
        $this->userReset();

        }


        $this->dispatch('user-created');
    }

    #[On('user-edit')]
    public function userLoad(User $user)
    {
        $this->userId = $user->id;

        $this->name = $user->name;

        $this->email = $user->email;
    }

    public function userReset()
    {
        $this->userId = null;

        $this->name = '';

        $this->email = '';

        $this->password = '';

        $this->photo = '';
    }

    public function removePhoto()
    {
        $this->photo = null;
    }


    public function render()
    {
        return view('livewire.user-form');
    }
}
