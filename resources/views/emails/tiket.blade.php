<h1>Hallo Admin,</h1>

<p>Pengguna dengan detail berikut telah mengirimkan tiket melalui aplikasi tiketing:</p>

<div>
    <h2>User Details</h2>
    <ul>
        <li><strong>NIK:</strong> {{ $data->nik }}</li>
        <li><strong>Nama:</strong> {{ $data->nama }}</li>
        <li><strong>Departemen:</strong> {{ $data->dep }}</li>
        <li><strong>Sub Departemen:</strong> {{ $data->subDep }}</li>
        <li><strong>EXT:</strong> {{ $data->ext }}</li>
    </ul>
</div>

<div>
    <h2>Issue Details</h2>
    <ul>
        <li><strong>Masalah:</strong> {{ $data->category->name }}</li>
        <li><strong>Detail Masalah:</strong> {{ $data->catatan }}</li>
    </ul>
</div>

<p>Jika Anda memiliki pertanyaan lebih lanjut atau perlu menindaklanjuti tiket ini, silakan hubungi pengguna melalui
    informasi kontak yang tercantum.</p>

<p>Terima kasih,<br>
    Tim Aplikasi Tiketing</p>
