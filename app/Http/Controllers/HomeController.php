<?php

namespace App\Http\Controllers;

use App\Models\Check_info;

use Illuminate\Http\Request;


use App\Models\Check;

use DB;


use Illuminate\Support\Facades\Auth;


use App\Models\User;


class HomeController extends Controller
{


    public function index()
        {
            if (Auth::id()) {
                
                return view('user.home');
            }
            else
            return view('index.home');
        }






    public function redirect()
        {
            if (Auth::id()) {
                if (Auth::user()->usertype == '0') {
                    $country_list = DB::table('checks')
                        ->groupBy('pay')
                        ->get();
            
                    $check = Check_info::all();
                    $checks = Check::all();
            
                    return view('user.home', compact('check', 'country_list', 'checks'));
                }
            
            
                else {
                    return view('admin.home');
                }
            }
            else {
                return redirect()->back();
            }
                
        }


    public function upload_check(REQUEST $request)
    {
            $check = new Check_info();
            $check->bank=$request->bank;
            $check->pay=$request->pay;
            
            $check->montant=$request->montant;
            $check->datecheque=$request->datecheque;
            $check->order=$request->order;
            $check->payerpour=$request->payerpour;
            $check->chequebarre=$request->chequebarre;
            

            $check->save();
            return redirect()->back();
    }
    

    public function getBanks($pay_id)
            {
                $banks = Check::where('pay', $pay_id)->get();
                $data = array();
                foreach($banks as $bank){
                    $data[$bank->id] = array('name'=>$bank->banktype, 'image'=>$bank->image, 'width'=>$bank->width, 'height'=>$bank->height);
                }
                return response()->json($data);
            }


    public function getPOS($bank)
            {
                $banks = Check::where('banktype', $bank)->get();
                $data = array();
                foreach($banks as $b){
                    $data[$b->id] = array('orderX'=>$b->Dx_order,'orderY'=>$b->Dy_order,
                    'MontantX'=>$b->Dx_Montant,'MontantY'=>$b->Dy_Montant,
                    'MontantXv'=>$b->Dxcv_Montant,'MontantYv'=>$b->Dycv_Montant,
                    'forX'=>$b->Dx_for,'forY'=>$b->Dy_for,
                    'baresX'=>$b->Dx_bares,'baresY'=>$b->Dy_bares,
                    'width'=>$b->width,'height'=>$b->height,
                    'dateX'=>$b->Dx_date,'dateY'=>$b->Dy_date);
                }   

                return response()->json($data);
            }

    public function check_page()
            {
                $country_list = DB::table('checks')
                ->groupBy('pay')
                ->get()
                ;
                $remainingAttempts =user::all(); 
                return view('user.check_page',compact('country_list','remainingAttempts'));
            }

    public function return_hero(){

                return view('user.home');
            }

    public function historique_page()
            {
                $data=check_info::all();
                return view('user.historique',compact('data'));
            }


     public function printCheck()
                {
                    $user = Auth::user();

                    if ($user) {
                        if ($user->remaining_attempts > 0) {
                            // Decrement the attempts
                            $user->remaining_attempts--;
                            $user->save();
                            return redirect()->back();
                            // Logic to print the check
                            // ...
                        } 
                    }
                } 

    public function deleteHistorique($id)
                    {
                        $data=check_info::find($id);
                        $data->delete(); 
                        return redirect()->back();   
                    }
    


    
    





}
