<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\Category;
use App\models\About;
use App\models\Banner;
use App\models\Service;
use App\models\PricePlan;
use App\models\Professional;
use App\models\Project;
use App\models\Safety;
use App\models\Logo;
use App\models\Review;
use App\models\BasicInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view)
        {
            $about = About::getData();
            $banner = Banner::getData();
            $services = Service::getData();
            $pricePlans = PricePlan::getData();
            $professional = Professional::getData();
            $projects = Project::getData();
            $safety = Safety::getData();
            $basicInfo = BasicInfo::getData();
            $logos = Logo::getData();
            $reviews = Review::getData();


            $view->with([
                'banner' => $banner,
                'about' => $about,
                'services' => $services,
                'pricePlans' => $pricePlans,
                'professional' => $professional,
                'projects' => $projects,
                'safety' => $safety,
                'logos' => $logos,
                'reviews' => $reviews,
                'basicInfo' => $basicInfo,
            ]);
        });


    }
}
