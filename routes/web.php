<?php


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SiteMapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// SITEMAP
Route::get('/sitemap_index.xml', [SiteMapController::class, 'index'])->name('sitemap');

// PAGES
Route::get('/', [PagesController::class, 'accueil'])->name('accueil');
Route::get('/projets', [PagesController::class, 'projets'])->name('projets');
Route::get('/a-propos', [PagesController::class, 'apropos'])->name('apropos');
Route::get('/blogue', [PagesController::class, 'blogue'])->name('blogue');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/presenter-un-projet', [PagesController::class, 'presenterProjet'])->name('presenter-projet');

Route::get('test', [PagesController::class, 'testPage'])->name('page-test');

// FORMULAIRES
Route::name('form.')->group(function () {
    Route::post('/contact-form', [FormsController::class, 'contact'])->name('contact');
    Route::post('/presentation-projet', [FormsController::class, 'presentationProjet'])->name('presentation-projet');
    Route::post('/formation', [FormsController::class, 'formation'])->name('formation');
    Route::post('/cta', [FormsController::class, 'callToAction'])->name('call-to-action');
});

// SERVICES
Route::prefix('/services')->group(function () {
    Route::get('/tous-nos-services', [ServicesController::class, 'services'])->name('tous-les-services');
    Route::get('/creation-site-web', [ServicesController::class, 'siteWeb'])->name('site-web');
    Route::get('/site-vitrine', [ServicesController::class, 'siteVitrine'])->name('site-vitrine');
    Route::get('/site-marchand', [ServicesController::class, 'siteMarchand'])->name('site-marchand');
    Route::get('/site-one-page', [ServicesController::class, 'siteOnePage'])->name('site-one-page');
    Route::get('/marketing-digital', [ServicesController::class, 'marketingDigital'])->name('marketing-digital');
    Route::get('formations', [ServicesController::class, 'formations'])->name('formations');
    Route::get('/gestion-reseaux-sociaux', [ServicesController::class, 'reseauxSociaux'])->name('reseaux-sociaux');
    Route::get('/publicite-ciblee', [ServicesController::class, 'publiciteCiblee'])->name('publicite-ciblee');
    Route::get('referencement-payant', [ServicesController::class, 'referencementPayant'])->name('referencement-payant');
    Route::get('/audit-et-recommadantions', [ServicesController::class, 'audit'])->name('audit');
    Route::get('optimisation-seo', [ServicesController::class, 'optimisationSeo'])->name('optimisation-seo');
    Route::get('/maintenance-site-web', [ServicesController::class, 'maintenance'])->name('maintenance');
});

Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::name('dashboard.')->group(function () {
        Route::get('/articles', [DashboardController::class, 'articles'])->name('articles');
        Route::get('/projets', [DashboardController::class, 'projets'])->name('projets');
        Route::get('/medias', [DashboardController::class, 'medias'])->name('medias');
        Route::get('/utilisateurs', [DashboardController::class, 'utilisateurs'])->name('utilisateurs');
        Route::get('/mon-compte', [DashboardController::class, 'monCompte'])->name('mon-compte');
    });
});

Route::prefix('/article')->name('article.')->group(function() {
    Route::middleware(['auth'])->group(function() {
        Route::get('/create', [ArticleController::class, 'create'])->name('create');
        Route::post('/', [ArticleController::class, 'store'])->name('store');
        Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
        Route::patch('/{article}', [ArticleController::class, 'update'])->name('update');
        Route::delete('/{article}', [ArticleController::class, 'delete'])->name('delete');
    });
    Route::get('/{article}', [ArticleController::class, 'show'])->name('show');
});

Route::prefix('/projet')->name('projet.')->group(function() {
    Route::middleware(['auth'])->prefix('dashboard')->group(function() {
        Route::get('/create', [ProjetController::class, 'create'])->name('create');
        Route::post('', [ProjetController::class, 'store'])->name('store');
        Route::get('/edit/{projet}', [ProjetController::class, 'edit'])->name('edit');
        Route::patch('/{projet}', [ProjetController::class, 'update'])->name('update');
        Route::delete('/{projet}', [ProjetController::class, 'delete'])->name('delete');
    });
    Route::get('/{projet}', [ProjetController::class, 'show'])->name('show');
});

Route::prefix('/media')->name('media.')->group(function() {
    Route::get('/create', [MediaController::class, 'create'])->name('create');
    Route::post('/', [MediaController::class, 'store'])->name('store');
    Route::get('/edit/{media}', [MediaController::class, 'edit'])->name('edit');
    Route::patch('/{media}', [MediaController::class, 'update'])->name('update');
});

require __DIR__.'/auth.php';
