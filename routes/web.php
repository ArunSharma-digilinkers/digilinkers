<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::resource('clients', ClientController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('posts', PostController::class);
});


require __DIR__.'/auth.php';

// Comman Links`
Route::get('/', [PagesController::class, 'index']);
Route::get('/about-us', [PagesController::class, 'aboutus']);
Route::get('/contact-us', [PagesController::class, 'contact']);
Route::get('/portfolio', [PagesController::class, 'portfolio']);

// Digital Marketing
Route::get('/social-media-marketing', [PagesController::class, 'socialmediamarketing']);
Route::get('/search-engine-optimization', [PagesController::class, 'searchengineoptimization']);
Route::get('/google-adword', [PagesController::class, 'googleadword']);
Route::get('/brand-building', [PagesController::class, 'brandbuilding']);
Route::get('/privacy-policy', [PagesController::class, 'privacypolicy']);

// Development
Route::get('/website-designing', [PagesController::class, 'websitedesigning']);
Route::post('/contact-us', [PagesController::class, 'sendMail'])->name('contact.send');
Route::get('/e-commerce-website', [PagesController::class, 'ecommerce']);
Route::get('/wordpress-development', [PagesController::class, 'wordpressdevelopment']);
Route::get('/apps-development', [PagesController::class, 'appsdevelopment']);
Route::get('/landing-page-design', [PagesController::class, 'landingpage']);
Route::get('/shopify-development', [PagesController::class, 'shopifydevelopment']);
Route::get('/conference-services', [PagesController::class, 'conference']);

// Industry
Route::get('/battery-industry', [PagesController::class, 'batteryindustry']);
Route::get('/ev-charger', [PagesController::class, 'evcharger']);
Route::get('/travel-industry', [PagesController::class, 'travelindustry']);
Route::get('/furniture-industry', [PagesController::class, 'furnitureindustry']);
Route::get('/real-state-industry', [PagesController::class, 'realstateindustry']);

//Landing pages
Route::get('/digital-marketing-company', [PagesController::class, 'digital_marketing_company']);
Route::get('/digital-marketing-company/thankyou', [PagesController::class, 'digital_marketing_company_thanks']);

Route::get('/website-development-company', [PagesController::class, 'website_development_company']);
Route::get('/website-development-company/thankyou', [PagesController::class, 'website_development_company_thanks']);

Route::get('/social-media-marketing-company', [PagesController::class, 'social_media_marketing']);
Route::get('/social-media-marketing-company/thankyou', [PagesController::class, 'social_media_marketing_thankyou']);

// Blog
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/details/{slug}', [PagesController::class, 'show'])->name('details.show');

// form

Route::post('/submit-quote', [PagesController::class, 'sendQuote'])->name('quote.send');

Route::post('/send-mail', [pagescontroller::class, 'sendpopup'])->name('send.popup');

Route::post('/newsletter', [PagesController::class, 'store'])->name('newsletter.create');








