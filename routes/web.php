<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

// Blog Website
Route::get('/', [App\Http\Controllers\FrontEndController::class, 'home'])->name('website');
Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about'])->name('website.about');
Route::get('/category/{slug}', [App\Http\Controllers\FrontEndController::class, 'category'])->name('website.category');
Route::get('/tag/{slug}', [App\Http\Controllers\FrontEndController::class, 'tag'])->name('website.tag');
Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('website.contact');
Route::get('/post/{slug}', [App\Http\Controllers\FrontEndController::class, 'post'])->name('website.post');
Route::post('/contact', [App\Http\Controllers\FrontEndController::class, 'send_message'])->name('website.postContact');

// Admin Dashboard
Route::get('admin/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('home.index');

// Admin Category
Route::get('admin/category/index', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('admin/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('admin/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('admin/category/edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('admin/category/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('admin/category/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');


// Admin Tag
Route::get('admin/tag/index', [App\Http\Controllers\TagController::class, 'index'])->name('tag.index');
Route::get('admin/tag/create', [App\Http\Controllers\TagController::class, 'create'])->name('tag.create');
Route::post('admin/tag/store', [App\Http\Controllers\TagController::class, 'store'])->name('tag.store');
Route::get('admin/tag/edit/{tag}', [App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit');
Route::put('admin/tag/{tag}', [App\Http\Controllers\TagController::class, 'update'])->name('tag.update');
Route::delete('admin/tag/{tag}', [App\Http\Controllers\TagController::class, 'destroy'])->name('tag.destroy');

// Admin Post
Route::get('admin/post/index', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('admin/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('admin/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('admin/post/show', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('admin/post/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::put('admin/post/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('admin/post/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');

// Admin User Control
Route::get('admin/user/index', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('admin/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('admin/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('admin/user/show', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('admin/user/edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::put('admin/user/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::delete('admin/user/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
Route::get('admin/user/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::post('admin/user/profile', [App\Http\Controllers\UserController::class,'profile_update'])->name('user.profile.update');

// Admin Contact
Route::get('admin/contact/index', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('admin/contact/show', [App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
Route::delete('admin/contact/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
