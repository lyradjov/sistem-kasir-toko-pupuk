<?php
    
    $koneksi->query("DELETE FROM user WHERE id_user='$_GET[id]'"); ?>
    <script type="text/javascript">
             alert ("Data Berhasil Dihapus")
             window.location.href='index.php?halaman=attandent';
    </script>
<?php 

?>
