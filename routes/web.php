<?php

use App\Http\Controllers\Site\AboutPageController;
use App\Http\Controllers\Site\BlogsController;
use App\Http\Controllers\Site\ContactUsController;
use App\Http\Controllers\Site\ContributeController;
use App\Http\Controllers\Site\GalleryController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\QuestionsController;
use App\Http\Controllers\Site\SeatController;
use App\Http\Controllers\Site\VolunteerController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\App;

Route::get('/change-language/{locale}', function ($locale) {
    if (!in_array($locale, ['ar', 'en'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    App::setLocale($locale);
    return back();
})->name('change.language');


Route::namespace('Site')->name('site.')->group(function () {


    //----------------------- Home Pages Routes ----------------------- //
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //----------------------- End Home Routes ----------------------- //

    //---------------------------------- Choose Contribute Routs ------------------------------//
    Route::get('contribute', [ContributeController::class,'contribute'])->name('contribute');
    //---------------------------------- End Contribute Routs ------------------------------//

    //---------------------------------- Choose Volunteer Routs ------------------------------//
    Route::get('volunteer', [VolunteerController::class,'create'])->name('volunteer.create');
    Route::post('volunteer', [VolunteerController::class,'store'])->name('volunteer.store');
    //---------------------------------- End Volunteer Routs ------------------------------//

    //-------------------------------- About Page Routes ------------------------------//
    Route::get('about-us', [AboutPageController::class, 'about'])->name('about');
    //---------------------------------- End About Page Routes ------------------------------//

    //---------------------------------- Contact Page Routes ------------------------------//
    Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact');
    Route::post('contact/store', [ContactUsController::class, 'store'])->name('contact.store');
    //---------------------------------- End Contact Page Routes ------------------------------//

    //---------------------------------- Seat Page Routs ------------------------------//
    Route::get('seats', [SeatController::class,'index'])->name('seats.index');
    Route::get('/seats/search', [SeatController::class, 'search'])->name('seats.search');

    //---------------------------------- End Seat Page Routs ------------------------------//

    //---------------------------------- Choose Blogs Routs ------------------------------//
    Route::get('blogs', [BlogsController::class,'index'])->name('blogs');
    Route::get('blogs/{slug}', [BlogsController::class,'show'])->name('blogs.show');
    //---------------------------------- End Blogs Routs ------------------------------//

    //---------------------------------- Choose News Routs ------------------------------//
    Route::get('news', [NewsController::class,'index'])->name('news');
    Route::get('news/{slug}', [NewsController::class,'show'])->name('news.show');
    //---------------------------------- End News Routs ------------------------------//

    //---------------------------------- Choose Gallery Routs ------------------------------//
    Route::get('gallery', [GalleryController::class,'gallery'])->name('gallery');
    //---------------------------------- End Gallery Routs ------------------------------//

    //---------------------------------- Choose Questions Routs ------------------------------//
    Route::get('questions', [QuestionsController::class,'questions'])->name('questions');
    //---------------------------------- End Questions Routs ------------------------------//

});
