<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Employe;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function($user)
        {
            foreach( $user->roles as $role)
            {
                if($role->name == 'admin')
                {
                    return true;
                }
            }
            return false;
        });

        Gate::define('match', function($user)
        {
            $employs = Employe::all();
            // dd($employs,$user);
                foreach( $employs as $employ)
                {
                    
                    //  dd($employ->user_id,$user->id);
                    if($employ->user_id === $user->id)
                    {
                        return true;
                    }
                }
            return false;
        });
    }
}
