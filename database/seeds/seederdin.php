<?php
use Illuminate\Database\Seeder;
use App\dosen;
use App\jurusan;
use App\mahasiswa;
use App\matkul;
use App\wali;

class seederdin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->delete();
        DB::table('jurusans')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('matkuls')->delete();
        DB::table('matkul_mahasiswas')->delete();

        $dosen1 = dosen::create(array(
        	'nama' => 'dina','nipd'=>'111','alamat'=>'tarate','mata_kuliah'=>'ipa'
        ));
        $dosen2 = dosen::create(array(
        	'nama' => 'tania','nipd'=>'222','alamat'=>'afrika','mata_kuliah'=>'ips'
        ));
        $this->command->info('Dosen Parantos Diisi !');

        $rpl = jurusan::create(array(
         	'nama_jurusan'=>'Rekayasa Perangkat Lunak'
         ));
        $tkr = jurusan::create(array(
         	'nama_jurusan'=>'Teknik Kendaraan Ringan'
         ));
        $elt = jurusan::create(array(
         	'nama_jurusan'=>'Elektro'
         ));
        $this->command->info('Jurusan Telah Diisi !');

        $dinsri = mahasiswa::create(array(
        'nama_mahasiswa'=> 'dinash','nis'=>'00001','id_dosen'=>$dosen1->id,'id_jurusan'=> $rpl->id
        ));

        $zulpa = mahasiswa::create(array(
        'nama_mahasiswa'=> 'dinong','nis'=>'00002','id_dosen'=>$dosen1->id,'id_jurusan'=> $tkr->id
        ));
        $uput = mahasiswa::create(array(
        'nama_mahasiswa'=> 'orang','nis'=>'00003','id_dosen'=>$dosen2->id,'id_jurusan'=> $elt->id
        ));

        $this->command->info('Mahasiswa Telah Diisi!');

        wali::create(array(
        'nama'=>'Bpk.ridwan',
        'alamat'=>'rancamanyar',
        'id_mahasiswa'=>$dinsri->id
        ));
        wali::create(array(
        'nama'=>'Bpk.candra',
        'alamat'=>'bandung poek',
        'id_mahasiswa'=>$zulpa->id
        ));
        wali::create(array(
        'nama'=>'Bpk.Agung',
        'alamat'=>'baleendah',
        'id_mahasiswa'=>$uput->id
        ));

		$this->command->info('Wali Telah Diisi !');

		$ipa = matkul::create(array('nama_matkul'=>'ipa','kkm'=>'80'));
		$ips = matkul::create(array('nama_matkul'=>'ips','kkm'=>'85'));

		$dinsri->matkul()->attach($ipa->id);
        $dinsri->matkul()->attach($ips->id);
		$zulpa->matkul()->attach($ips->id);
		$uput->matkul()->attach($ipa->id);

		$this->command->info('Mahasiswa dan Mata Kuliah Telah Diisi !'); 
    }
}

