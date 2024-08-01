<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\PricePlan;
use App\Models\Project;


Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get('/details/{id}', function ($id) {
    $service_detail          = Service::where('id', $id)->first();
    $pricePlan_details       = PricePlan::where('service_id', $id)->get();
    $project_details         = Project::where('service_id', $id)->get();
    return view('frontend.pages.details', compact('id','service_detail', 'pricePlan_details', 'project_details'));
})->name('service.details');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });






require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
