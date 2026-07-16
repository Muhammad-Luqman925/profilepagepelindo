<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.about.index');
})->name('about');

Route::prefix('layanan')->name('services.')->group(function () {
    Route::get('/', function () {
        return view('pages.services.index');
    })->name('index'); // Update main layout and home to use route('services.index')

    Route::get('/marine', function () {
        return view('pages.services.marine');
    })->name('marine');

    Route::get('/equipment', function () {
        return view('pages.services.equipment');
    })->name('equipment');

    Route::get('/dredging', function () {
        return view('pages.services.dredging');
    })->name('dredging');

    Route::get('/port', function () {
        return view('pages.services.port');
    })->name('port');

    Route::get('/shipyard', function () {
        return view('pages.services.shipyard');
    })->name('shipyard');
});

Route::get('/kontak', function () {
    return view('pages.contact.index');
})->name('contact');

// Profil Routes
Route::prefix('profil')->name('profile.')->group(function () {
    Route::get('/manajemen/direksi', function () {
        return view('pages.profile.management.directors');
    })->name('directors');

    Route::get('/manajemen/komisaris', function () {
        return view('pages.profile.management.commissioners');
    })->name('commissioners');

    Route::get('/struktur-organisasi', function () {
        return view('pages.profile.structure');
    })->name('structure');
});
