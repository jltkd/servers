<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class ServerList extends Component
{
    public function render()
    {
        return view('livewire.server-list', [
            'servers' => Server::all(),
        ]);
    }
}
