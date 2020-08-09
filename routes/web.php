<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Endpoint Admin ========================================================================
$router->post("/admin/masuk", "AdminController@masuk");
$router->get("/admin/getprofil/{id_admin}", "AdminController@getprofil");
//Kelola Petugas
$router->get("/admin/getsemuapetugas", "AdminController@getsemuapetugas");
$router->get("/admin/getpetugas/{id_petugas}", "AdminController@getpetugas");
$router->post("/admin/tambahpetugas", "AdminController@tambahpetugas");
$router->post("/admin/ubahpetugas/{id_petugas}", "AdminController@ubahpetugas");
$router->get("/admin/resetpasspetugas/{id_petugas}", "AdminController@resetpasspetugas");
$router->get("/admin/hapuspetugas/{id_petugas}", "AdminController@hapuspetugas");
//Kelola Pengguna
$router->get("/admin/getsemuapengguna", "AdminController@getsemuapengguna");
$router->get("/admin/getpengguna/{id_pengguna}", "AdminController@getpengguna");
$router->post("/admin/tambahpengguna", "AdminController@tambahpengguna");
$router->post("/admin/ubahpengguna/{id_pengguna}", "AdminController@ubahpengguna");
$router->get("/admin/resetpasspengguna/{id_pengguna}", "AdminController@resetpasspengguna");
$router->get("/admin/hapuspengguna/{id_pengguna}", "AdminController@hapuspengguna");
//Kelola Rekap
$router->get("/admin/getsemuarekaplayanan", "AdminController@getsemuarekaplayanan");
$router->get("/admin/getrekaplayanan/{id_rekaplayanan}", "AdminController@getrekaplayanan");
$router->get("/admin/hapussemuarekaplayanan", "AdminController@hapussemuarekaplayanan");
$router->post("/admin/gantinohp/{id_admin}", "AdminController@gantinohp");
$router->post("/admin/gantipassword/{id_admin}", "AdminController@gantipassword");
$router->post("/admin/keluar/{id_admin}", "AdminController@keluar");
//Endpoint Admin ========================================================================

//Endpoint Petugas ======================================================================
$router->post("/petugas/masuk", "PetugasController@masuk");
$router->get("/petugas/getprofil/{id_petugas}", "PetugasController@getprofil");
$router->post("/petugas/gantistatus/{id_petugas}", "PetugasController@gantistatus");
$router->post("/petugas/gantinohp/{id_petugas}", "PetugasController@gantinohp");
$router->post("/petugas/gantipassword/{id_petugas}", "PetugasController@gantipassword");
$router->post("/petugas/keluar/{id_petugas}", "PetugasController@keluar");
//Endpoint Petugas ======================================================================

//Endpoint Pengguna =====================================================================
$router->post("/pengguna/masuk", "PenggunaController@masuk");
$router->post("/pengguna/daftar", "PenggunaController@daftar");
$router->get("/pengguna/getprofil/{id_pengguna}", "PenggunaController@getprofil");
$router->get("/pengguna/getsemuapetugas", "PenggunaController@getsemuapetugas");
$router->get("/pengguna/getpetugas/{id_petugas}", "PenggunaController@getpetugas");
$router->post("/pengguna/gantinohp/{id_pengguna}", "PenggunaController@gantinohp");
$router->post("/pengguna/gantipassword/{id_pengguna}", "PenggunaController@gantipassword"); 
$router->post("/pengguna/keluar/{id_pengguna}", "PenggunaController@keluar");
//Endpoint Pengguna =====================================================================