<?php

namespace App\Policies;

use App\Order_item;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Order_itemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Order_item  $orderItem
     * @return mixed
     */
    public function view(User $user, Order_item $orderItem)
    {
        return $user->id === $orderItem->user_id;
    }
    
    public function itemOwner(User $user, Order_item $orderItem)
    {

        return $user->id === $orderItem->product()->user()->id;
        
    }

    public function buyer(User $user, Order_item $orderItem)
    {
        return $user->id === $orderItem->user_id;
    }


    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Order_item  $orderItem
     * @return mixed
     */
    public function update(User $user, Order_item $orderItem)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Order_item  $orderItem
     * @return mixed
     */
    public function delete(User $user, Order_item $orderItem)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Order_item  $orderItem
     * @return mixed
     */
    public function restore(User $user, Order_item $orderItem)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Order_item  $orderItem
     * @return mixed
     */
    public function forceDelete(User $user, Order_item $orderItem)
    {
        //
    }
}
