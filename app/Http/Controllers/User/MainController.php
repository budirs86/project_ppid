<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Berkas;


class MainController extends Controller
{

    public function sejarah_madiun() {
    
        $profile = Profile::where('kategori_profile', '=', 'sejarah-kota-madiun')->first();
        $berkas = Berkas::all()
                 -> where('profile_id', '=', '2');
        return view('user.profile.sejarah', compact('profile', 'berkas'));

    }

    public function geografis_madiun() {
    
        $profile = Profile::where('kategori_profile', '=', 'letak-geografis')->first();
        $berkas = Berkas::all()
                 -> where('profile_id', '=', '3');
        return view('user.profile.geografis', compact('profile', 'berkas'));

    }

    public function profil_pemerintah() {
    
        $profile = Profile::where('kategori_profile', '=', 'profil-pemerintah')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '4');
        return view('user.profile.pemerintah', compact('profile', 'berkas'));

    }

    public function profil_pejabat() {
    
        $profile = Profile::where('kategori_profile', '=', 'profil-pejabat')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '5');
        return view('user.profile.pejabat', compact('profile', 'berkas'));

    }

    public function lhkpn_pejabat() {
    
        $profile = Profile::where('kategori_profile', '=', 'lhkpn-pejabat')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '6');
        return view('user.profile.lhkpn', compact('profile', 'berkas'));

    }

    public function visimisi() {
    
        $profile = Profile::where('kategori_profile', '=', 'visi-misi')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '7');
        return view('user.profile.visimisi', compact('profile', 'berkas'));

    }

    public function struktur_pemerintah() {
    
        $profile = Profile::where('kategori_profile', '=', 'struktur-organisasi-pemerintah')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '8');
        return view('user.profile.strukturpemerintah', compact('profile', 'berkas'));

    }

    public function struktur_unitkerja() {
    
        $profile = Profile::where('kategori_profile', '=', 'struktur-organisasi-unit-kerja')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '9');
        return view('user.profile.strukturunitkerja', compact('profile', 'berkas'));

    }

    public function tupoksi_pemerintah() {
    
        $profile = Profile::where('kategori_profile', '=', 'tupoksi-pemerintah')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '10');
        return view('user.profile.tupoksipemerintah', compact('profile', 'berkas'));

    }

    public function tupoksi_unitkerja() {
    
        $profile = Profile::where('kategori_profile', '=', 'tupoksi-unit-kerja')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '11');
        return view('user.profile.tupoksiunitkerja', compact('profile', 'berkas'));

    }
    
    public function agenda() {
    
        $profile = Profile::where('kategori_profile', '=', 'agenda-kerja-kegiatan-pimpinan')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '12');
        return view('user.profile.agenda', compact('profile', 'berkas'));

    }

    public function profil_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'profil-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '13');
        return view('user.profileppid.ppid', compact('profile', 'berkas'));

    }

    public function visimisi_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'visi-misi-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '14');
        return view('user.profileppid.visimisi', compact('profile', 'berkas'));
    
    }
    
    public function struktur_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'bagan-struktur-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '15');
        return view('user.profileppid.struktur', compact('profile', 'berkas'));
        
    }

    public function sop_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'sop-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '16');
        return view('user.profileppid.sop', compact('profile', 'berkas'));
        
    }

    public function tupoksi_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'tupoksi-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '17');
        return view('user.profileppid.tupoksi', compact('profile', 'berkas'));
        
    }

    public function sk_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'sk-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '18');
        return view('user.profileppid.sk', compact('profile', 'berkas'));
        
    }

    public function perwal_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'perwal-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '19');
        return view('user.profileppid.perwal', compact('profile', 'berkas'));
        
    }

    public function maklumat_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'maklumat-ppid')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '20');
        return view('user.profileppid.maklumat', compact('profile', 'berkas'));
        
    }

    public function jampelayanan_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'jam-pelayanan')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '21');
        return view('user.profileppid.jampelayanan', compact('profile', 'berkas'));
        
    }

    public function informasi_publik() {
    
        $profile = Profile::where('kategori_profile', '=', 'sk-daftar-informasi-publik')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '22');
        return view('user.profileppid.informasipublik', compact('profile', 'berkas'));
        
    }

    public function informasi_dikecualikan() {
    
        $profile = Profile::where('kategori_profile', '=', 'sk-daftar-informasi-dikecualikan')->first();
        $berkas = Berkas::all()
                -> where('profile_id', '=', '23');
        return view('user.profileppid.informasidikecualikan', compact('profile', 'berkas'));
        
    }
}

