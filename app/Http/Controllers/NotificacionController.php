<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $notificaciones = auth()->user()->unreadNotifications;
        $notificacionesLeidas = auth()->user()->readNotifications->take(30);
        auth()->user()->unreadNotifications->markAsRead();
        return view('notificaciones.index',compact('notificaciones','notificacionesLeidas'));
    }
}
