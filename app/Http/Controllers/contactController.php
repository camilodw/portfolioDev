<?php
namespace App\Http\Controllers;
use App\Mail\contact;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'lastName'=>'required|string',
            'message'=>'required|string|max:150'
        ]);
        $user=new Form();
        $user->email=$request->email;
        $user->name=$request->name;
        $user->lastName=$request->lastName;
        $user->message=$request->message;
       $save=$user->save();
        if ($save) {
           Mail::to($user->email)->send(new contact());
            return back()->with('success','Mensaje enviado, lo responderé lo antes posible');
        }else {
            return back()->with('fail','Error al enviar formulario intente más tarde');
        }
        
    }

   
}
