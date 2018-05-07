<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use App\Models\Bitacora;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $id = Auth::id();
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'users', 'accion' => 'Login', 'descripcion' => 'Inicio de sesión.', 'idFilaAccion' =>$id]);
    }
}
