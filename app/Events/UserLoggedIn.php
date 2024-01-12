<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserLoggedIn implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public $loginTime;
    public $userList;
    
    public function __construct(User $user, $loginTime,)
    {
        $this->user = $user;
        $this->loginTime = $loginTime;
        // $this->userList = $userList;
    }
    
    public function broadcastOn()
    {
        return new PrivateChannel('user.'.$this->user->id);
    }
}
