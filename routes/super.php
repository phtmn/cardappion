<?php

/**
 * Super Area
 */
Route::prefix('super')->group(function () {
  /**
   * Public Routes
   */
  Route::middleware('guest.super')->group(function () {

    // Login
    Route::name('super.session.login')->get('/acessar', 'Super\Session\SessionController@showLoginForm');
    Route::name('super.session.authenticate')->post('/acessar', 'Super\Session\SessionController@authenticate');

    // Reset Password
    Route::name('super.password.forgot')->get('/esqueci-minha-senha', 'Super\Session\ForgotPasswordController@showLinkRequestForm');
    Route::name('super.password.processForgot')->post('/esqueci-minha-senha', 'Super\Session\ForgotPasswordController@sendResetLinkEmail');
    Route::name('super.password.reset')->get('/nova-senha/{token}', 'Super\Session\ResetPasswordController@showResetForm');
    Route::name('super.password.processReset')->post('/nova-senha', 'Super\Session\ResetPasswordController@reset');

    // Register
    Route::name('super.account.register')->get('/cadastro', 'Super\Account\AccountController@showRegisterForm');
    Route::name('super.account.processRegister')->post('/cadastro', 'Super\Account\AccountController@register');
  });

  /**
   * Protected Routes
   */
  Route::middleware(['auth.super:super'])->group(function () {

    // Logout
    Route::name('super.session.logout')->get('/sair', 'Super\Session\SessionController@logout');

    // Dashboard
    Route::name('super.dashboard.index')->get('/', 'Super\Dashboard\DashboardController@index');

    // Account
    Route::prefix('perfil')->group(function () {
      Route::name('super.account.edit')->get('/', 'Super\Account\AccountController@edit');
      Route::name('super.account.update')->put('/atualizar', 'Super\Account\AccountController@update');
    });

    Route::prefix('blog')->group(function () {
      Route::name('super.blog.index')->get('/', 'Super\Blog\BlogController@index');
      Route::name('super.blog.create')->get('/adicionar', 'Super\Blog\BlogController@create');
      Route::name('super.blog.store')->post('/adicionar', 'Super\Blog\BlogController@store');
      Route::name('super.blog.edit')->get('/editar/{id}', 'Super\Blog\BlogController@edit');
      Route::name('super.blog.update')->put('/editar/{id}', 'Super\Blog\BlogController@update');
      Route::name('super.blog.destroy')->delete('/deletar/{id}', 'Super\Blog\BlogController@destroy');
    });
  });
});
