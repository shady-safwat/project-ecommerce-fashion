<?php

use App\Models\Product;
use Illuminate\Support\Facades\Request;

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\ProfileController;
    use App\Http\Controllers\Admin\ProductController;
    use App\Http\Controllers\Admin\CategoryController;
    use App\Http\Controllers\Admin\RoleController;


    Route::prefix('admin')->group(function(){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::resource('profile', ProfileController::class);
        Route::resource('product', ProductController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('role', RoleController::class);

        // Route::get('product/search',[ProductController::class,'search'])->name('product.search');
        Route::post('product', [TextSearchController::class, 'fullTextSearch'])->name('search');
    });
?>
