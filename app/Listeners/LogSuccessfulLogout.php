<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use App\Models\Bitacora;

class LogSuccessfulLogout
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
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $id = Auth::id();
         Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'users', 'accion' => 'Logout', 'descripcion' => 'Cierre de sesión.', 'idFilaAccion' => $id]);
    }
}
