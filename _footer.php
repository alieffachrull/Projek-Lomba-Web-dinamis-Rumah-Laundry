	<footer>
		<p>&copy; <span id="tahun"></span> All Rights Reserved | Alieffachrull.</p>
		<script>
		// mengambil tanggal hari ini
		var now = new Date();
		var tahun = now.getFullYear();
		// menampilkan tahun di dalam elemen HTML
		document.getElementById("tahun").innerHTML = tahun;
		</script>
		
	</footer>

	<script src="<?=url('_assets/js/rumah_laundry.js')?>"></script>
</body>
</html>