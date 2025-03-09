<?php

namespace App\Providers;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\ProjectRepositoryInterface;
use App\Repositories\ProjectRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
    }
}