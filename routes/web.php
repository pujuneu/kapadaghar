<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Gallerycontroller;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
=======
use App\Http\Controllers\SubCategoryController;
>>>>>>> test
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/viewproduct/{product}', [PagesController::class, 'viewproduct'])->name('viewproduct');

Route::middleware(['auth', 'isadmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/category', [CategoryController::class, 'index'])
    ->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])
      ->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])
      ->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])
      ->name('category.edit');
    Route::post('/category{id}/update', [CategoryController::class, 'update'])
      ->name('category.update');
    // Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');

    //Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');
<<<<<<< HEAD

    Route::post('/category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

=======

    Route::post('/category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

>>>>>>> test
    //Sub-Category
    Route::get('/subcategory/index', [SubCategoryController::class, 'index'])->name('subcategory.index');
    Route::get('/subcategory/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
    Route::post('/subcategory/destroy', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
    Route::post('/subcategory/store', [SubCategoryController::class, 'store'])
      ->name('subcategory.store');
    Route::get('/subcategory/{id}/edit', [SubCategoryController::class, 'edit'])
    ->name('subcategory.edit');
    Route::post('/subcategory/{id}/update', [SubCategoryController::class, 'update'])
    ->name('subcategory.update');
<<<<<<< HEAD

  //Sub-Category
  Route::get('/subcategory/index', [SubCategoryController::class, 'index'])->name('subcategory.index');
  Route::get('/subcategory/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
  Route::post('/subcategory/destroy', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
  Route::post('/subcategory/store', [SubCategoryController::class, 'store'])
    ->name('subcategory.store');
  Route::get('/subcategory/{id}/edit', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
  Route::post('/subcategory{id}/update', [SubCategoryController::class, 'update'])->name('subcategory.update');
    //Brands

    Route::get('/brands/index', [BrandsController::class, 'index'])->name('brands.index');
    Route::get('/brands/create', [BrandsController::class, 'create'])->name('brands.create');
    Route::post('/brands/destroy', [BrandsController::class, 'destroy'])
      ->name('brands.destroy');
    Route::post('/brands/store', [BrandsController::class, 'store'])
    ->name('brands.store');
    Route::get('/brands/{id}/edit', [BrandsController::class, 'edit'])
    ->name('brands.edit');
    Route::post('/brands/{id}/update', [BrandsController::class, 'update'])
      ->name('brands.update');

  //Brands

  Route::get('/brands/index', [BrandsController::class, 'index'])->name('brands.index');
  Route::get('/brands/create', [BrandsController::class, 'create'])->name('brands.create');
  Route::post('/brands/store', [BrandsController::class, 'store'])
=======

    //Brands

    Route::get('/brands/index', [BrandsController::class, 'index'])->name('brands.index');
    Route::get('/brands/create', [BrandsController::class, 'create'])->name('brands.create');
    Route::post('/brands/destroy', [BrandsController::class, 'destroy'])
      ->name('brands.destroy');
    Route::post('/brands/store', [BrandsController::class, 'store'])
>>>>>>> test
    ->name('brands.store');
  Route::get('/brands/{id}/edit', [BrandsController::class, 'edit'])
    ->name('brands.edit');
<<<<<<< HEAD
  Route::post('/brands/{id}/update', [BrandsController::class, 'update'])
    ->name('brands.update');
  Route::post('/brands/destroy', [BrandsController::class, 'destroy'])
    ->name('brands.destroy');

  //Notice
  Route::get('/notice', [NoticeController::class, 'index'])->name('notice.index');
  Route::get('/notice/create', [NoticeController::class, 'create'])
    ->name('notice.create');
  Route::post('/notice/store', [NoticeController::class, 'store'])
    ->name('notice.store');
  Route::get('/notice/{id}/edit', [NoticeController::class, 'edit'])
    ->name('notice.edit');
  Route::post('/notice/{id}/update', [NoticeController::class, 'update'])
    ->name('notice.update');
  Route::post('/notice/destroy', [NoticeController::class, 'destroy'])
    ->name('notice.destroy');
=======
    Route::post('/brands/{id}/update', [BrandsController::class, 'update'])
      ->name('brands.update');
>>>>>>> test

    //Notice
    Route::get('/notice', [NoticeController::class, 'index'])->name('notice.index');
    Route::get('/notice/create', [NoticeController::class, 'create'])
      ->name('notice.create');
    Route::post('/notice/store', [NoticeController::class, 'store'])
      ->name('notice.store');
    Route::get('/notice/{id}/edit', [NoticeController::class, 'edit'])
      ->name('notice.edit');
    Route::post('/notice/{id}/update', [NoticeController::class, 'update'])
      ->name('notice.update');
    Route::post('/notice/destroy', [NoticeController::class, 'destroy'])
      ->name('notice.destroy');

<<<<<<< HEAD
  //order
  Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
  Route::get('/order/create', [OrderController::class, 'create'])
    ->name('order.create');
  Route::post('/order/store', [OrderController::class, 'store'])
    ->name('order.store');
  Route::post('/order/destroy', [OrderController::class, 'destroy'])
    ->name('order.destroy');
  Route::get('order', [OrderController::class, 'order']);
  Route::get('order', [OrderController::class, 'store']);
=======
    //order
    Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/create', [OrderController::class, 'create'])
    ->name('order.create');
    Route::post('/order/destroy', [OrderController::class, 'destroy'])
    ->name('order.destroy');
    Route::get('order', [OrderController::class, 'order']);
    Route::get('order', [OrderController::class, 'store']);
    Route::get('/order/{id}/edit', [OrderController::class, 'edit'])
    ->name('order.edit');
>>>>>>> test

    Route::get('/order/{id}/show', [OrderController::class, 'show'])->name('order.show');
    Route::get('/order/status/{id}/{status}', [OrderController::class, 'status'])->name('order.status');

<<<<<<< HEAD
  //Gallery
  Route::get('/gallery', [Gallerycontroller::class, 'index'])->name('gallery.index');
  Route::get('/gallery/create', [GalleryController::class, 'create'])
    ->name('gallery.create');
  Route::post('/gallery/store', [GalleryController::class, 'store'])
    ->name('gallery.store');
  Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])
    ->name('gallery.edit');
  Route::post('/gallery/{id}/update', [GalleryController::class, 'update'])
    ->name('gallery.update');
  Route::post('/gallery/destroy', [GalleryController::class, 'destroy'])
    ->name('gallery.destroy');


  //notification
  Route::get('send', [NotificationController::class, "sendnotification"]);


  Route::get('/products', [PagesController::class, 'products']);
  Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
  Route::post('/carts', [CartController::class, 'store'])->name('carts.store');
  Route::get('/category/{category}', [PagesController::class, 'category'])->name('category');
  }

  //Product

  Route::middleware('isadmin')->group(function () {
=======
>>>>>>> test
    //Gallery
    Route::get('/gallery', [Gallerycontroller::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])
      ->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])
      ->name('gallery.store');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])
      ->name('gallery.edit');
    Route::post('/gallery/{id}/update', [GalleryController::class, 'update'])
      ->name('gallery.update');
    Route::post('/gallery/destroy', [GalleryController::class, 'destroy'])
      ->name('gallery.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
    Route::post('/product/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/userlogout', [PagesController::class, 'logout'])->name('userlogout');

    // Route::post('/products', [PagesController::class, 'products'])->name('products');

    Route::post('/show_products', [PagesController::class, 'products'])->name('showproducts');

    Route::post('/subcategory/fetch', [SubCategoryController::class, 'fetch'])
    ->name('subcategory.fetch');

    Route::post('/khaltiverify', [OrderController::class, 'khaltiverify'])->name('khaltiverify');

    Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
    Route::post('/carts', [CartController::class, 'store'])->name('carts.store');
    Route::get('/carts/{id}/delete', [CartController::class, 'destroy'])->name('carts.delete');


    Route::get('/categories', [PagesController::class, 'category']);
    //route for rating & review
    Route::post('/add-rating', [UserRatingController::class, 'addRating']);

    Route::get('myorders', [OrderController::class, 'myorders'])->name('order.myorders');

    Route::post('/order/store', [OrderController::class, 'store'])
    ->name('order.store');

<<<<<<< HEAD
    //Product

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
=======
    
    Route::post('/dashboard/changemonth',[DashboardController::class,'changemonth'])->name('changemonth');  

    //Product

    Route::get('/profile', [PagesController::class, 'showprofile'])->name('profile.index');
>>>>>>> test
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
<<<<<<< HEAD
});
=======
>>>>>>> test
