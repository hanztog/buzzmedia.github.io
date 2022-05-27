<?php
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

    <div class="callout ">
        <h4> Selamat Datang, <?php echo $this->session->userdata('nama'); ?> Tercinta </h4>

    </div>

    <div class="box box-danger box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan</h3>

        </div><!-- /.box-header -->
        <div class="box-body">
            <h4>
                <ol>
                    <li>Data Admin digunakan untuk menambah dan juga meghapus admin yang tersedia.</li>
                    <li>Data Pengguna digunakan untuk menambah peserta ujian</li>
                    <li>Kelola Soal digunakan untuk melihat, menambahkan, menghapus dan juga edit soal sesuai dengan tipe soal</li>
                    <li>Hasil Pengguna melihat hasil dari peserta ujian</li>
                    <li>Utilities hanya dapat digunakan untuk BackUp, Reset, Restore Database</li>
                </ol>
                <h2 style="color: #168ea9;">Media Buzz (Cerdas, Ikhlas, Keras)</h2>
            </h4>
        </div>

</section><!-- /.content -->

<?php
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">
    $(function() {
        $('#data-tables').dataTable();
    });

    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>


<?php
$this->load->view('admin/foot');
?>