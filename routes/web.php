<?php
use Illuminate\Support\Facades\Route;
foreach (File::allFiles(__DIR__ . DIRECTORY_SEPARATOR . "web") as $partial) {
	require_once $partial->getPathname();
}

Route::get('/linkstorage', function () {
    Artisan::call('storage:link'); // thay php artisan storage:link
});
