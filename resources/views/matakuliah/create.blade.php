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
