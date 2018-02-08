<?php

namespace App\Policies;

use App\User;
use App\Job;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

  
    public function update(User $user, Job $job)
    {
        return $user->owns($job);
    }
}
