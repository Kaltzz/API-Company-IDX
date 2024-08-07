<!DOCTYPE html>
<html>
<head>
    <title>Daftar Perusahaan</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Event listener untuk perubahan pada dropdown industri
            $('#industri').change(function(){
                var industri = $(this).val();
                
                // Mengirimkan permintaan AJAX ke API
                $.ajax({
                    url: 'api.php',
                    type: 'GET',
                    data: {industri: industri},
                    dataType: 'json',
                    success: function(response){
                        // Menghapus data perusahaan sebelumnya
                        $('#daftar-perusahaan').empty();
                        
                        // Memperbarui daftar perusahaan dengan data baru
                        if(response.length > 0){
                            $.each(response, function(index, perusahaan){
                                $('#daftar-perusahaan').append('<li>'+perusahaan.nama+'</li>');
                            });
                        } else {
                            $('#daftar-perusahaan').append('<li>Tidak ada perusahaan yang sesuai.</li>');
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>
    <?php
    // Membuat koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'bei_comp');

    // Mengambil data industri dari tabel comp_desc
    $query = "SELECT DISTINCT industri FROM comp_desc";
    $industri = mysqli_query($koneksi, $query);
    $row = $industri->fetch_all();
    ?>

    
    <!-- Dropdown industri -->
    <select id="industri">
        <option value="">Pilih Industri</option>
            <?php $no = 0; while($row) { ?>
                <option value="<?=$row[$no][0]?>"><?=$row[$no][0]?></option>
            <?php $no++; } ?>
    </select>
    
    <!-- Daftar perusahaan -->
    <ul id="daftar-perusahaan"></ul>
</body>
</html>