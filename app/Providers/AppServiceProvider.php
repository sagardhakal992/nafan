<?php

namespace App\Providers;

use App\Repository\Member\MemberService;
use App\Repository\Member\MemberServiceImpl;
use App\Repository\Post\PostService;
use App\Repository\Post\PostServiceImpl;
use App\Repository\Project\ProjectService;
use App\Repository\Project\ProjectServiceImpl;
use App\Repository\Role\RoleService;
use App\Repository\Role\RoleServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MemberService::class, function () {
            return new MemberServiceImpl();
         });
        $this->app->singleton(RoleService::class, function () {
            return new RoleServiceImpl();
        });
        $this->app->singleton(ProjectService::class, function () {
            return new ProjectServiceImpl();
        });

        $this->app->bind(PostService::class, PostServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
