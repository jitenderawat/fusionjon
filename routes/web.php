<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestinomialController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CasestudyController;
use App\Http\Controllers\CasedetailsController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicedetailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogdetailController;
use App\Http\Controllers\BlogdetailsController;
use App\Http\Controllers\BlogdetailsnewController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ServicedetailstwoController;
use App\Http\Controllers\ServicedetailsthreeController;
use App\Http\Controllers\ServicedetailsfourController;
use App\Http\Controllers\ServicedetailsfiveController;
use App\Http\Controllers\ServicedetailssixController;
use App\Http\Controllers\BlogMailController;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', function() {
    return view('login');
});

Route::get('/terms-condition', [TermController::class, 'index'])->name('terms');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-mail', [MailController::class, 'store_msg'])->name('send');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/testinomial', [TestinomialController::class, 'index'])->name('testinomial');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/case-study', [CasestudyController::class, 'index'])->name('case');
Route::get('/case-details', [CasedetailsController::class, 'index'])->name('casedetails');
Route::get('/404', [ErrorController::class, 'index'])->name('error');


Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service-details', [ServicedetailController::class, 'index'])->name('servicedetails');
Route::get('/servicedetails-two', [ServicedetailstwoController::class, 'index'])->name('servicedatailstwo');
Route::get('/servicedetails-three', [ServicedetailsthreeController::class, 'index'])->name('servicedatailsthree');
Route::get('/servicedetails-four', [ServicedetailsfourController::class, 'index'])->name('servicedatailsfour');
Route::get('/servicedetails-five', [ServicedetailsfiveController::class, 'index'])->name('servicedatailsfive');
Route::get('/servicedetails-six', [ServicedetailssixController::class, 'index'])->name('servicedatailssix');



Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogdetailController::class, 'index'])->name('blogdetails');
Route::get('/blogs', [BlogdetailsController::class, 'index'])->name('blogdetails2');
Route::get('/blog-three', [BlogdetailsnewController::class, 'index'])->name('blogdetails3');

Route::post('/send-comment', [BlogMailController::class, 'store_comment'])->name('comments');
Route::post('/send-email', [EmailController::class, 'store_email'])->name('mail');