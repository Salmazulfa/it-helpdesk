<?php

namespace App\Http\Controllers;

use App\Models\Narasumber;
use App\Models\Wifi;
use App\Models\Zoom;
use App\Models\Subdomain;
use App\Models\PembuatanApp;
use App\Models\Server;
use App\Models\PengembanganApp;
use App\Models\User;
use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/dashboard/index', [
            'user' => auth()->user(),
            'perangkat' => PerangkatDaerah::All()
        ]);
    }

    public function profile()
    {
        $user = auth()->user();
        return view('user/profile/index', [
            'user' => $user,
            'us' => User::All()
        ]);
    }

    public function tampil()
    {
        $narasumber1 = Narasumber::all()->where('status', 'Dalam Antrian')->count();
        $narasumber2 = Narasumber::all()->where('status', 'Diproses')->count();
        $narasumber3 = Narasumber::all()->where('status', 'Selesai')->count();

        $wifi1 = Wifi::all()->where('status', 'Dalam Antrian')->count();
        $wifi2 = Wifi::all()->where('status', 'Diproses')->count();
        $wifi3 = Wifi::all()->where('status', 'Selesai')->count();

        $pembuatan_app1 = PembuatanApp::all()->where('status', 'Dalam Antrian')->count();
        $pembuatan_app2 = PembuatanApp::all()->where('status', 'Diproses')->count();
        $pembuatan_app3 = PembuatanApp::all()->where('status', 'Selesai')->count();

        $pengembangan_app1 = PengembanganApp::all()->where('status', 'Dalam Antrian')->count();
        $pengembangan_app2 = PengembanganApp::all()->where('status', 'Diproses')->count();
        $pengembangan_app3 = PengembanganApp::all()->where('status', 'Selesai')->count();

        $server1 = Server::all()->where('status', 'Dalam Antrian')->count();
        $server2 = Server::all()->where('status', 'Diproses')->count();
        $server3 = Server::all()->where('status', 'Selesai')->count();

        $subdomain1 = Subdomain::all()->where('status', 'Dalam Antrian')->count();
        $subdomain2 = Subdomain::all()->where('status', 'Diproses')->count();
        $subdomain3 = Subdomain::all()->where('status', 'Selesai')->count();

        $zoom1 = Zoom::all()->where('status', 'Dalam Antrian')->count();
        $zoom2 = Zoom::all()->where('status', 'Diproses')->count();
        $zoom3 = Zoom::all()->where('status', 'Selesai')->count();

        $tot_belum = $narasumber1 + $wifi1 + $pembuatan_app1 + $pengembangan_app1 + $server1 + $subdomain1 + $zoom1;
        $tot_proses = $narasumber2 + $wifi2 + $pembuatan_app2 + $pengembangan_app2 + $server2 + $subdomain2 + $zoom2;
        $tot_selesai = $narasumber3 + $wifi3 + $pembuatan_app3 + $pengembangan_app3 + $server3 + $subdomain3 + $zoom3;

        return view('admin/dashboard/index', [
            'user' => auth()->user(),
            "image" => "circle.png",
            "tot_belum" => $tot_belum,
            "tot_proses" => $tot_proses,
            "tot_selesai" => $tot_selesai,
        ]);
    }

    public function showuser()
    {
        return view('admin/data_user/index', [
            'us' => User::all(),
            'user' => auth()->user(),
            'perangkat' => PerangkatDaerah::All()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        // $password = bcrypt('password');
        $validatedData = $request->validate([
            'perangkat_id' => 'required',
            'nama_admin' => 'required|max:255',
            'nip' => 'required|max:255',
            'level' => 'required|max:255',
            'username' => 'required|max:255'
        ]);

        $password = $request['password'];
        $validatedData['password'] = bcrypt($password);

        User::create($validatedData);
        return redirect('/KelolaUser')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin/data_user/index', [
            // 'us' => auth()->user(),
            "user" => $user
        ]);
    }

    public function editUser(User $user)
    {
        return view('user/profile/edit', [
            'user' => auth()->user(),
            'us' => User::All()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // ADMIN
    public function update(Request $request, User $user1)
    {

        $id = $request['id'];
        $nama_admin = $request['nama_admin'];
        $nip = $request['nip'];
        $level = $request['level'];
        $username = $request['username'];
        $new_password = $request['new_password'];
        $confirm_password = $request['confirm_password'];

        if ($username != "") {
            if ($confirm_password == "" && $new_password == "") {
                // User::where('id', auth()->user()->id)->update(['username' => $username]);
                User::where('id', $id)->update([
                    'nama_admin' => $nama_admin,
                    'nip' => $nip,
                    'level'=>$level,
                    'username' => $username
                ]);
                return redirect()->intended('/KelolaUser')->with('success', 'Data Berhasil Diupdate');
            } else if ($confirm_password != "" && $new_password == "") {
                return back()->with('error', 'Field harus diisi!');
            } else if ($confirm_password == "" && $new_password != "") {
                return back()->with('error', 'Field harus diisi!');
            } else {
                if ($new_password == $confirm_password) {
                    $password = bcrypt($confirm_password);
                    $nama_admin = $request['nama_admin'];
                    $nip = $request['nip'];
                    $level = $request['level'];
                    $username = $request['username'];

                    User::where('id', $id)->update([
                        'nama_admin' => $nama_admin,
                        'nip' => $nip,
                        'level' => $level,
                        'username' => $username,
                        'password' => $password
                    ]);
                    return redirect()->intended('/KelolaUser')->with('success', 'Data Berhasil Diupdate!');
                } else {
                    return back()->with('error', 'Password tidak sama!');
                }
            }
        } else {
            return redirect()->intended('/KelolaUser')->with('error', 'Username tidak boleh kosong');
        }

        return back()->with('error', 'Gatot');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/KelolaUser')->with('success', 'Data  Berhasil Dihapus');
    }


    // USER
    public function cek(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $new_password = $request['new_password'];
        $confirm_password = $request['confirm_password'];

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            if ($new_password == $confirm_password) {
                // dd('Yuhuu');
                $password = bcrypt($confirm_password);
                User::where('id', auth()->user()->id)->update(['password' => $password]);
                return redirect()->intended('/profile')->with('success', 'Password Berhasil Diperbarui');
            } else {
                return back()->with('error', 'Password Tidak Sama');
            }
        }

        return back()->with('error', 'Password Lama Anda Salah');
    }
}
