php artisan make:migration create_matakuliah_table

Isi migration-nya

php artisan migrate

====================================

php artisan make:migration modify_dosen_add_gaji

Isi migration-nya

php artisan migrate

=====================================
php artisan make:model Matakuliah

protected $table = "matakuliah";
protected $guarded = [];

php artisan make:seeder MatakuliahSeeder
Matakuliah::create([
            'kode_mk' => "ABC123",
            'nama' => 'Tuwaga',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);

$this->call(MatakuliahSeeder::class);

php artisan db:seed
php artisan db:seed --class=MatakuliahSeeder
php artisan migrate:fresh --seed


php artisan serve
composer run dev

=====================================
php artisan make:controller MatakuliahController //kosongan
php artisan make:controller MatakuliahController --resource //sudah ada method-nya

-- isi pada method index
$banyak_matakuliah = Matakuliah::all();
return view('matakuliah.index',[
    "banyak_matakuliah" => $banyak_matakuliah
]);


Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::resource('matakuliah', MatakuliahController::class);

=====================================
== Pada file web.php (Coba gunakan Ctrl + P), hapus get sebelumnya
Route::resource('/matakuliah', MatakuliahController::class);

== Pada MatakuliahController.php
public function create()
{
    return view('matakuliah.create');
}

== Pada inde.blade.php
<a href="{{ route('matakuliah.create') }}">Tambah</a>

== Pada create.blade.php
<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf
    @method('POST')
    <label for="">Kode MK</label>
    <input type="text" name="kode_mk">
    <br>
    <label for="">Nama Mata Kuliah</label>
    <input type="text" name="nama">
    <br>
    <label for="">Jumlah SKS</label>
    <input type="text" name="jumlah_sks">
    <br>
    <label for="">Prodi ID</label>
    <input type="text" name="prodi_id">
</form>



