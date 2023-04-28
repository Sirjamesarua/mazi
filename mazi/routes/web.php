<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Notifications\sendEmail;
use Illuminate\Support\Facades\Notification;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function (Request $request) {
    try {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);
        Notification::route('mail', $data['email'])->notify(new sendEmail($data['name']));
        return back()->with('message','Thanks for contacting us. PLease check your mailbox');
    } catch (\Throwable $th) {
        return back()->withErrors('Something went wrong');
    }
})->name('sendEmail');
