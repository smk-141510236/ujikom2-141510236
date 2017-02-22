<?php

namespace App\Http\Controllers;

use App\pegawaiModel;
use App\User;
use App\golonganModel;
use App\jabatanModel;
use Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;



class pegawaiController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
         $pegawai=pegawaiModel::paginate(5);
         $searchuser=User::where('name',request('name'))->paginate(5);
        if(request()->has ('name'))
        {
         $searchuser=User::where('name',request('name'))->paginate(5);
 
        }
        else
        {
            $searchuser=User::paginate(5);
        }
        return view('pegawai.index',compact('pegawai','searchuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       $user=User::all();
            $jabatan=jabatanModel::all();
            $golongan=golonganModel::all();
        return view('pegawai.create',compact('pegawai','golongan','jabatan'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array('email' => 'required|unique:users',
                        'password' => 'required|min:6|confirmed',
                        'name' => 'required',
                        'permision' =>'required',
                        'nip' => 'required|min:11|numeric|unique:pegawai',
                        'jabatan_id' =>'required',
                        'golongan_id' => 'required',
                        'foto' => 'required',
                         );

        $message =array('email.unique' =>'Gunakan Email Lain' ,
                        'name.required' =>'Wajib Isi',
                        'email.required' =>'Wajib Isi',
                        'password.unique' =>'wajib isi',
                        'permision.confirmed' =>'Masukan Password Yang Benar',
                        'permision.required' =>'Wajib isi',
                        'nip.unique' =>'Gunakan Nip Lain',
                        'nip.required' =>'Wajib isi',
                        'nip.min' =>'Min 11',
                        'nip.numeric' =>'Input Dengan Angka',
                        'jabatan_id.required' =>'Wajib isi',
                        'golongan_id.required' =>'Wajib isi');


        $val=validator::make(Input::all(),$rules,$message);
        if($val->fails())
        {
            return redirect('pegawai/create')
            ->withErrors($val)
            ->withInput();

        }



           $akun=new User ;
         $akun->name=$request->get('name');
         $akun->email=$request->get('email');
         $akun->password=bcrypt($request->get('password'));
         $akun->permision=$request->get('permision');
         $akun->save();

        $file = Input::file('foto');
        $destinationPath = public_path().'/assets/image/';
        $filename = $file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);

        if(Input::hasFile('foto')){
         $pegawai=new pegawaiModel ;
         $pegawai->nip=$request->get('nip');
         $pegawai->foto = $filename;
         //$pegawai->foto=Input::get('foto');
         $pegawai->jabatan_id=$request->get('jabatan_id');
         $pegawai->golongan_id=$request->get('golongan_id');
         $pegawai->user_id=$akun->id;
         $pegawai->save();
         
        }
        return redirect('pegawai');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd($id);
        $jabatan=jabatanModel::all();
        $golongan=golonganModel::all();
         $pegawai=pegawaiModel::find($id);
          $user=User::where('id',$pegawai->user_id)->first();
         //dd($pegawai);
        return view('pegawai.edit',compact('pegawai','jabatan','golongan','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pegawai=pegawaiModel::find($id);
        if ($pegawai->nip != Request('nip')) {
            $rules = array('email' => 'required|unique:users',
                        'password' => 'required|min:6|confirmed',
                        'name' => 'required',
                        'permision' =>'required',
                        'nip' => 'required|min:11|numeric|unique:pegawai',
                        'jabatan_id' =>'required',
                        'golongan_id' => 'required',
                        'foto' => 'required',
                         );
        }
        else{

            $rules = array('email' => 'required',
                            'password' => 'required|min:6|confirmed',
                            'name' => 'required',
                            'permision' =>'required',
                            'nip' => 'required|min:11|numeric',
                            'jabatan_id' =>'required',
                            'golongan_id' => 'required',
                            'foto' => 'required',
                             );
        }

        $message =array('email.unique' =>'Gunakan Email Lain' ,
                        'name.required' =>'Wajib Isi',
                        'email.required' =>'Wajib Isi',
                        'password.unique' =>'wajib isi',
                        'permision.confirmed' =>'Masukan Password Yang Benar',
                        'permision.required' =>'Wajib isi',
                        'nip.unique' =>'Gunakan Nip Lain',
                        'nip.required' =>'Wajib isi',
                        'nip.min' =>'Min 11',
                        'nip.numeric' =>'Input Dengan Angka',
                        'jabatan_id.required' =>'Wajib isi',
                        'golongan_id.required' =>'Wajib isi');

        $val=validator::make(Input::all(),$rules,$message);
        if($val->fails())
        {
            return redirect('pegawai/'.$pegawai->id.'/edit')
            ->withErrors($val)
            ->withInput();

        }
        
        $user=User::find($pegawai->user_id);
        $user->name = Request('name');
        $user->type_user = Request('type_user');
        $user->email = Request('email');
        $user->save();
        
        $file= Input::file('photo');
        $destination= '/assets/image/';
        $filename=$file->getClientOriginalName();
        $uploadsuccess=$file->move($destination,$filename);
        if($uploadsuccess){

        
            $pegawai =pegawaiModel::find($id);
            $pegawai->nip = Request('nip');
            $pegawai->user_id = $user->id;
            $pegawai->jabatan_id = Request('jabatan_id');
            $pegawai->golongan_id = Request('golongan_id');
            $pegawai->photo=$filename;
            $pegawai->update();
        return redirect('pegawai');
    }


       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         pegawaiModel::find($id)->delete();
        return redirect('pegawai');
    }
}
