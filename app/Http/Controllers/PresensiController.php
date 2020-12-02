<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Session;

class PresensiController extends Controller
{
    public function masuk(Request $request){
        $nip = $request->input('nip');

        $tgllahir = $request->input('tahun').$request->input('bulan').$request->input('tgl');
        $tgllahirnonpns = $request->input('tgl').$request->input('bulan').$request->input('tahun');
        $pegawai = DB::table('s_pegawai')
        ->where('nip',$nip)
        ->where(\DB::raw('LEFT(nip,8)'),$tgllahir)
        ->limit(1);
        // ->get();
        // $cekpegawaisatu = $pegawai->count();
        if($pegawai->count() > 0){
            $datapegawai = $pegawai->first();
            $tanggal = date('d');
            $bulan = date('m');
            $tahun = date('Y');
            $tglabsen = date('Y-m-d H:i:s');
            $jumlahabsen = DB::table('fingerprint.checkinout')
            ->where('USERID',$datapegawai -> USERID)
            ->where('CHECKTYPE','I')
            ->where(\DB::raw('MONTH(CHECKTIME)'),$bulan)
            ->where(\DB::raw('year(CHECKTIME)'),$tahun)
            ->where(\DB::raw('day(CHECKTIME)'),$tanggal);
            if ($jumlahabsen->count() > 3) {
                Session::flash('sukses','<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Anda sudah melakukan absen Masuk hari ini</strong>  </div>');
                return redirect('/#presensi');
            } else {
                DB::table('fingerprint.checkinout')->insert([
                    'USERID' => $datapegawai->USERID,
                    'CHECKTIME' => NOW(),
                    'CHECKTYPE' => 'I',
                    'VERIFYCODE' => '1',
                    'SENSORID' => '0',
                    'Memoinfo' => '0',
                    'WorkCode' => '0',
                    'sn' => 'LKP-Online',
                    'UserExtFmt' => '0',
                ]);
                Session::flash('sukses','<div class="alert alert-success alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Absensi Berhasil, Terimakasih</strong>  </div>');
                return redirect('/#presensi');
            }
        }else{
            //cek kedua
            $pegawai = DB::table('s_pegawai')
            ->where('nip',$nip)
            ->where(\DB::raw('mid(nip,7,8)'),$tgllahirnonpns)
            ->limit(1);
            // ->get();
            // $cekpegawaisatu = $pegawai->count();
            if($pegawai->count() > 0){
                $datapegawai = $pegawai->first();
                $tanggal = date('d');
                $bulan = date('m');
                $tahun = date('Y');
                $tglabsen = date('Y-m-d H:i:s');
                $jumlahabsen = DB::table('fingerprint.checkinout')
                ->where('USERID',$datapegawai -> USERID)
                ->where('CHECKTYPE','I')
                ->where(\DB::raw('MONTH(CHECKTIME)'),$bulan)
                ->where(\DB::raw('year(CHECKTIME)'),$tahun)
                ->where(\DB::raw('day(CHECKTIME)'),$tanggal);
                if ($jumlahabsen->count() > 3) {
                    Session::flash('sukses','<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Anda sudah melakukan absen Masuk hari ini</strong>  </div>');
                    return redirect('/#presensi');
                } else {
                    DB::table('fingerprint.checkinout')->insert([
                        'USERID' => $datapegawai->USERID,
                        'CHECKTIME' => NOW(),
                        'CHECKTYPE' => 'I',
                        'VERIFYCODE' => '1',
                        'SENSORID' => '0',
                        'Memoinfo' => '0',
                        'WorkCode' => '0',
                        'sn' => 'LKP-Online',
                        'UserExtFmt' => '0',
                    ]);
                    Session::flash('sukses','<div class="alert alert-success alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Absensi Berhasil, Terimakasih</strong>  </div>');
                    return redirect('/#presensi');
                }
            }else{
                //cek ketiga
                $pegawai = DB::table('s_pegawai')
                ->where('nip',$nip)
                ->where(\DB::raw('mid(nip,9,8)'),$tgllahirnonpns)
                ->limit(1);
                // ->get();
                // $cekpegawaisatu = $pegawai->count();
                if($pegawai->count() > 0){
                    $datapegawai = $pegawai->first();
                    $tanggal = date('d');
                    $bulan = date('m');
                    $tahun = date('Y');
                    $tglabsen = date('Y-m-d H:i:s');
                    $jumlahabsen = DB::table('fingerprint.checkinout')
                    ->where('USERID',$datapegawai -> USERID)
                    ->where('CHECKTYPE','I')
                    ->where(\DB::raw('MONTH(CHECKTIME)'),$bulan)
                    ->where(\DB::raw('year(CHECKTIME)'),$tahun)
                    ->where(\DB::raw('day(CHECKTIME)'),$tanggal);
                    if ($jumlahabsen->count() > 3) {
                        Session::flash('sukses','<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Anda sudah melakukan absen Masuk hari ini</strong>  </div>');
                        return redirect('/#presensi');
                    } else {
                        DB::table('fingerprint.checkinout')->insert([
                            'USERID' => $datapegawai->USERID,
                            'CHECKTIME' => NOW(),
                            'CHECKTYPE' => 'I',
                            'VERIFYCODE' => '1',
                            'SENSORID' => '0',
                            'Memoinfo' => '0',
                            'WorkCode' => '0',
                            'sn' => 'LKP-Online',
                            'UserExtFmt' => '0',
                        ]);
                        Session::flash('sukses','<div class="alert alert-success alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Absensi Berhasil, Terimakasih</strong>  </div>');
                        return redirect('/#presensi');
                    }
                }else{
                    Session::flash('sukses','<div class="alert alert-danger alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>data tidak ditemukan silakan cek kembali</strong>  </div>');
                    return redirect('/#presensi');
                }
            }
        }
    }
    public function keluar(Request $request){
        $nip = $request->input('nip');

        $tgllahir = $request->input('tahun').$request->input('bulan').$request->input('tgl');
        $tgllahirnonpns = $request->input('tgl').$request->input('bulan').$request->input('tahun');
        $pegawai = DB::table('s_pegawai')
        ->where('nip',$nip)
        ->where(\DB::raw('LEFT(nip,8)'),$tgllahir)
        ->limit(1);
        // ->get();
        // $cekpegawaisatu = $pegawai->count();
        if($pegawai->count() > 0){
            $datapegawai = $pegawai->first();
            $tanggal = date('d');
            $bulan = date('m');
            $tahun = date('Y');
            $tglabsen = date('Y-m-d H:i:s');
            $jumlahabsen = DB::table('fingerprint.checkinout')
            ->where('USERID',$datapegawai -> USERID)
            ->where('CHECKTYPE','O')
            ->where(\DB::raw('MONTH(CHECKTIME)'),$bulan)
            ->where(\DB::raw('year(CHECKTIME)'),$tahun)
            ->where(\DB::raw('day(CHECKTIME)'),$tanggal);
            if ($jumlahabsen->count() > 3) {
                Session::flash('sukses','<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Anda sudah melakukan absen Keluar hari ini</strong>  </div>');
                return redirect('/#presensi');
            } else {
                DB::table('fingerprint.checkinout')->insert([
                    'USERID' => $datapegawai->USERID,
                    'CHECKTIME' => NOW(),
                    'CHECKTYPE' => 'O',
                    'VERIFYCODE' => '1',
                    'SENSORID' => '0',
                    'Memoinfo' => '0',
                    'WorkCode' => '0',
                    'sn' => 'LKP-Online',
                    'UserExtFmt' => '0',
                ]);
                Session::flash('sukses','<div class="alert alert-success alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Absensi Berhasil, Terimakasih</strong>  </div>');
                return redirect('/#presensi');
            }
        }else{
            //cek kedua
            $pegawai = DB::table('s_pegawai')
            ->where('nip',$nip)
            ->where(\DB::raw('mid(nip,7,8)'),$tgllahirnonpns)
            ->limit(1);
            // ->get();
            // $cekpegawaisatu = $pegawai->count();
            if($pegawai->count() > 0){
                $datapegawai = $pegawai->first();
                $tanggal = date('d');
                $bulan = date('m');
                $tahun = date('Y');
                $tglabsen = date('Y-m-d H:i:s');
                $jumlahabsen = DB::table('fingerprint.checkinout')
                ->where('USERID',$datapegawai -> USERID)
                ->where('CHECKTYPE','O')
                ->where(\DB::raw('MONTH(CHECKTIME)'),$bulan)
                ->where(\DB::raw('year(CHECKTIME)'),$tahun)
                ->where(\DB::raw('day(CHECKTIME)'),$tanggal);
                if ($jumlahabsen->count() > 3) {
                    Session::flash('sukses','<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Anda sudah melakukan absen Keluar hari ini</strong>  </div>');
                    return redirect('/#presensi');
                } else {
                    DB::table('fingerprint.checkinout')->insert([
                        'USERID' => $datapegawai->USERID,
                        'CHECKTIME' => NOW(),
                        'CHECKTYPE' => 'O',
                        'VERIFYCODE' => '1',
                        'SENSORID' => '0',
                        'Memoinfo' => '0',
                        'WorkCode' => '0',
                        'sn' => 'LKP-Online',
                        'UserExtFmt' => '0',
                    ]);
                    Session::flash('sukses','<div class="alert alert-success alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Absensi Keluar Berhasil, Terimakasih</strong>  </div>');
                    return redirect('/#presensi');
                }
            }else{
                //cek ketiga
                $pegawai = DB::table('s_pegawai')
                ->where('nip',$nip)
                ->where(\DB::raw('mid(nip,9,8)'),$tgllahirnonpns)
                ->limit(1);
                // ->get();
                // $cekpegawaisatu = $pegawai->count();
                if($pegawai->count() > 0){
                    $datapegawai = $pegawai->first();
                    $tanggal = date('d');
                    $bulan = date('m');
                    $tahun = date('Y');
                    $tglabsen = date('Y-m-d H:i:s');
                    $jumlahabsen = DB::table('fingerprint.checkinout')
                    ->where('USERID',$datapegawai -> USERID)
                    ->where('CHECKTYPE','O')
                    ->where(\DB::raw('MONTH(CHECKTIME)'),$bulan)
                    ->where(\DB::raw('year(CHECKTIME)'),$tahun)
                    ->where(\DB::raw('day(CHECKTIME)'),$tanggal);
                    if ($jumlahabsen->count() > 3) {
                        Session::flash('sukses','<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Anda Keluar sudah melakukan absen Keluar hari ini</strong>  </div>');
                        return redirect('/#presensi');
                    } else {
                        DB::table('fingerprint.checkinout')->insert([
                            'USERID' => $datapegawai->USERID,
                            'CHECKTIME' => NOW(),
                            'CHECKTYPE' => 'O',
                            'VERIFYCODE' => '1',
                            'SENSORID' => '0',
                            'Memoinfo' => '0',
                            'WorkCode' => '0',
                            'sn' => 'LKP-Online',
                            'UserExtFmt' => '0',
                        ]);
                        Session::flash('sukses','<div class="alert alert-success alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>Absensi Keluar Berhasil, Terimakasih</strong>  </div>');
                        return redirect('/#presensi');
                    }
                }else{
                    Session::flash('sukses','<div class="alert alert-danger alert-block"> <button type="button" class="close" data-dismiss="alert">×</button><strong>data tidak ditemukan silakan cek kembali</strong>  </div>');
                    return redirect('/#presensi');
                }
            }
        }
    }
}
