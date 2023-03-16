<?php

namespace App\Policies;

use App\Models\PhieuDangKy;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhieuDangKyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhieuDangKy  $phieuDangKy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PhieuDangKy $phieuDangKy)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhieuDangKy  $phieuDangKy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PhieuDangKy $phieuDangKy)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhieuDangKy  $phieuDangKy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PhieuDangKy $phieuDangKy)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhieuDangKy  $phieuDangKy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PhieuDangKy $phieuDangKy)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhieuDangKy  $phieuDangKy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PhieuDangKy $phieuDangKy)
    {
        //
    }
}
