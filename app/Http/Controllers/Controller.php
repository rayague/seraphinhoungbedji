<?php

namespace App\Http\Controllers;

use App\Models\Adminpost;

use App\Models\Usermessage;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewMessageNotification;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function contact() {
        $adminposts = Adminpost::all();

        return view ('admin', compact('adminposts'));
    }

    public function homepage(){
        return view ('page');
    }
    public function dashboard(){

        $adminpost = Adminpost::all();


        return view ('dashboard', compact ('adminpost'));
    }

    public function admin() {

        $adminposts = Adminpost::all();

        return view ('admin', compact('adminposts'));
    }

    public function submit() {
    
            // Message enregistré avec succès
            return redirect()->back();
        }

    public function post(Request $request){


        $adminposts = new Adminpost();

        $adminposts->title = request('title');
        $adminposts->comments = request('comments');
        $adminposts->photo = request('photo');
        if ($request->hasfile('photo'))
            {
                $file = $request->file('photo');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move("uploads/photos/", $filename);
                $adminposts->photo = $filename;
            } 
        $adminposts->save();

        return redirect()->back()->with('status','Votre réalisation a été posté avec succès');
    }

    public function destroyy ($id) {
        $adminposts = Adminpost::findOrFail($id);
        $adminposts->delete();

        return redirect()->back()->with('deleted','Votre poste a été bien supprimé');
    }

    public function informations () {

        return view ('formulaire');
    }

}
