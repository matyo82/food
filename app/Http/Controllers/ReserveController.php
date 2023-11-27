<?php

namespace App\Http\Controllers;

use App\Mail\Reservation;
use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReserveController extends Controller
{
    public function index()
    {
        $reservations = Reserve::all();
        $page_title = 'All Reservations';
        return view('reserve.index', compact('reservations', 'page_title'));
    }

    public function confirmation($type, Reserve $reserve)
    {
        if ($type == "accept") {
            $data = [
                'title' => 'hotfood.com',
                'message' => 'Hi '. $reserve->name .', your reservation has confirmed!'
            ];
            $reserve->status = 1;
            $reserve->update();

            Mail::to($reserve->email)->send(new Reservation($data));
            return back()->with('toast_success', 'Reservation confirmed!');
        } else {
            $data = [
                'title' => 'hotfood.com',
                'message' => 'Hi '. $reserve->name .', your reservation has canceled!'
            ];
            $reserve->status = 2;
            $reserve->update();

            Mail::to($reserve->email)->send(new Reservation($data));
            return back()->with('toast_success', 'Reservation canceled!');
        }
    }

    public function delete(Reserve $reserve)
    {
        $reserve->delete();
        return back()->with('toast_success', 'Reservation deleted!!');
    }
}
