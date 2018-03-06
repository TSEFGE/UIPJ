<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Add this custom validation rule.
        Validator::extend('alpha_spaces', function ($attribute, $value) {
            // This will only accept alpha and spaces. 
            // If you want to accept hyphens use: /^[\pL\s-]+$/u.
            return preg_match('/^[\pL\s]+$/u', $value); 
        });

        Validator::extend('nombre', function ($attribute, $value) {
            return preg_match('/^([A-ZÑÁÉÍÓÚ]+[\s]*)+$/', $value); 
        });

        Validator::extend('alias', function ($attribute, $value) {
            return preg_match('/^([A-ZÁÉÍÓÚ0-9]+[\s]*)+$/', $value); 
        });

        Validator::extend('rfc', function ($attribute, $value) {
            return preg_match('/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/', $value); 
        });
        
        Validator::extend('curp', function ($attribute, $value) {
            return preg_match('/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9][12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/', $value); 
        });

        Validator::extend('alfanumdiag', function ($attribute, $value) {
            return preg_match('/^([A-ZÁÉÍÓÚ0-9\x2F]+[\s]*)+$/', $value); 
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
