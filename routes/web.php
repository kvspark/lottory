<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PurchaseTicketController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\WinController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/',[ScreenController::class, 'home']);
Route::get('about',[ScreenController::class, 'about']);
Route::get('contact',[ScreenController::class, 'contact']);
Route::get('latest-winner',[ScreenController::class, 'latestWinner']);
Route::get('lottery',[ScreenController::class, 'lottery']);
Route::get('lottery-result',[ScreenController::class, 'lotteryResult']);
Route::get('privacypolicy',[ScreenController::class, 'privacyPOlicy']);
Route::get('test',[ScreenController::class, 'test']);
Route::get('index-2',[ScreenController::class, 'index2']);
Route::get('lottery-2',[ScreenController::class, 'lottery2']);


// Member Controller 
Route::post('add-member',[MemberController::class, 'addMember']);
Route::post('login-member',[MemberController::class, 'loginMember']);
Route::get('admin/delete-member/{id}',[MemberController::class, 'deleteMember']);

Route::middleware(['isMember'])->group(function () {
    // User 
    Route::get('user/dashboard',[UserController::class, 'dashboard']);
    Route::get('user/profile',[UserController::class, 'profile']);
    Route::get('user/place-bet',[UserController::class, 'placeBet']);
    Route::get('user/buy-ticket/{id}',[UserController::class, 'buyTicket']);
    Route::post('user/purchase-tick',[UserController::class, 'purchaseTicket']);
    Route::get('user/my-bets',[UserController::class, 'myBets']);
    Route::get('user/withdraw',[UserController::class, 'withdraw']);
    Route::post('user/post-withdraw',[UserController::class, 'postWithdraw']);
    Route::get('user/my-withdraw',[UserController::class, 'myWithdraw']);
    Route::get('user/logout-out',[UserController::class, 'logOut']);
    Route::get('user/logout',[UserController::class, 'logOut']);
    Route::get('user/play-lottery-ticket/{id}',[UserController::class, 'playLotteryTicket']);
});

// Admin
Route::get('admin',[AdminController::class, 'admin']);
Route::post('admin/login',[AdminController::class, 'postAdmin']);

Route::middleware(['isAdmin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'dashboard']);
    Route::get('admin/member',[AdminController::class, 'member']);
    Route::get('admin/tickets',[AdminController::class, 'tickets']);
    Route::get('admin/edit-member/{id}',[AdminController::class, 'editMember']);
    Route::post('admin/post-edit-member/{id}',[MemberController::class, 'postEditMember']);
    Route::get('admin/placed-bet/{id}',[AdminController::class, 'placedBet']);
    Route::get('admin/edit-bet/{id}',[AdminController::class, 'editBet']);
    Route::get('admin/withdraw/{id}',[AdminController::class, 'withdraw']);
    Route::get('admin/edit-withdraw/{id}',[AdminController::class, 'editWithdraw']);
    Route::get('admin/create-ticket',[AdminController::class, 'createTicket']);
    Route::get('admin/edit-ticket/{id}',[AdminController::class, 'editTicket']);
    Route::get('admin/create-winning',[AdminController::class, 'createWinning']);
    Route::get('admin/winning',[AdminController::class, 'winning']);
    Route::get('admin/edit-winning/{id}',[AdminController::class, 'editWinning']);
    Route::get('admin/logout-out',[AdminController::class, 'logout']);
    Route::get('admin/logout',[AdminController::class, 'logout']);
});
// Purchase Ticket
Route::post('admin/post-edit-bet/{id}',[PurchaseTicketController::class, 'postEditBet']);
Route::get('admin/delete-bet/{id}',[PurchaseTicketController::class, 'deleteBet']);
Route::post('user/post-play-bet/{id}',[PurchaseTicketController::class, 'postPlayBet']);

// Withdraw
Route::post('admin/post-edit-widthdraw/{id}',[WithdrawController::class, 'postEditWithdraw']);
Route::get('admin/delete-withdraw/{id}',[WithdrawController::class, 'deleteWithdraw']);

// Ticket
Route::post('admin/post-create-ticket',[TicketController::class, 'postCreateTicket']);
Route::post('admin/post-edit-ticket/{id}',[TicketController::class, 'postEditTicket']);
Route::get('admin/delete-ticket/{id}',[TicketController::class, 'deleteTicket']);

// Winning 
Route::post('admin/post-create-winning',[WinController::class, 'postCreateWinning']);
Route::post('admin/post-edit-winning/{id}',[WinController::class, 'postEditWinning']);
Route::get('admin/delete-winning/{id}',[WinController::class, 'deleteWinning']);