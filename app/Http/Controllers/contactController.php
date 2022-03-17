<?php
namespace App\Http\Controllers;
use App\Mail\contact;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Contact\StoreRequest;
class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   return view('contact.contact');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $user = form::updateOrCreate(
            [
            'email' => $request->email
            ],
            [
             'name' => $request->name,
             'lastName' => $request->lastName,
             'message' => $request->message
            ]
        );

        if ($user) {
            try {
                Mail::to( $user->email )->send( new contact() );
                return back()->with('success', 'Mensaje enviado, lo responderé lo antes posible');

            } catch (\Throwable $th) {
                return back()->with('fail', 'Error al enviar formulario intente más tarde');
            }
           
        }else {
            return back()->with('fail', 'Error al enviar formulario intente más tarde');
        }
        
    }

   
}
