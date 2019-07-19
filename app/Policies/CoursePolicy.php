<?php

namespace App\Policies;

use App\User;
use App\Course;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Role;

class CoursePolicy
{
    use HandlesAuthorization;
    
    /**
     * VALIDANDO SI UN USUARIO PUEDE OPTAR POR UN CURSO O NO
     */
    public function opt_for_course(User $user, COurse $course)
    {
        return ! $user->teacher || $user->teacher->id !== $course->teacher->id;
    }

    public function subscribe(User $user)
    {
        return $user->role_id !== Role::ADMIN && !$user->subscribed('main');
    }

    public function inscribe(User $user, Course $course)
    {
        return ! $course->students->contains($user->student->id);
    }

}
