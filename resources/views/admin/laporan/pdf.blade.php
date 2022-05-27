<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN PENJUALAN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    	<center>
            <h5>LAPORAN PENJUALAN</h4>
        </center>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Nama</th>
				<td>{{ $pemesanan->nama }}</td>
			</tr>
			<tr>
				<th>No HP</th>
				<td>{{ $pemesanan->no_hp }}</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td>{{ $pemesanan->alamat }}</td>
			</tr>
			<tr>
				<th>Tempat Lahir</th>
				<td>{{ $pemesanan->tempat_lahir }}</td>
			</tr>
            <tr>
				<th>Tanggal Lahir</th>
				<td>{{ $pemesanan->tanggal_lahir }}</td>
			</tr>
            <tr>
				<th>Metode Pembayaran</th>
				<td>{{ $pemesanan->metode_pembayaran }}</td>
			</tr>
		</thead>
        <tbody>
            <tr>
				<th>Merek Mobil</th>
				<td>{{ $pemesanan->merek }}</td>
			</tr>
            <tr>
				<th>Tipe</th>
				<td>{{ $pemesanan->tipe }}</td>
			</tr>
            <tr>
				<th>Tahun Keluaran</th>
				<td>{{ $pemesanan->tahun_keluaran }}</td>
			</tr>
            <tr>
				<th>Warna</th>
				<td>{{ $pemesanan->warna }}</td>
			</tr>
            <tr>
				<th>Harga</th>
				<td>{{ $pemesanan->harga }}</td>
			</tr>
        </tbody>
	</table>

</body>
</html>