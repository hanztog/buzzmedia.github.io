<?php
$this->load->view('siswa/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('siswa/topbar');
$this->load->view('siswa/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

    <div class="callout callout-info">
        <h4>Selamat Datang, <?php echo $this->session->userdata('nama'); ?> </h4>

    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan Ujian Pada Buzz Media</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dt></dt>
                <dd>
                    <ol><br>
                        <li><b>Jadwal Ujian</b></li>
                        pada Menu Jadwal Ujian, terdapat jadwal yang telah Teman-teman daftarkan ke administrator Buzz Media, untuk mengikuti ujian dan berhak untuk melaksanakan ujian.<br>
                        Jika tidak tersedia Jadwal Ujian di Menu tersebut teman-teman berhak menghubungi admin Buzz Media di <b><a href="" style="font-size: 18px; Color: #168ea9">DISINI</a> </b> mendapatkan informasi lebih lanjut. <br>
                        selanjutnya ketika anda sudah memiliki waktu ujian, silahkan anda klik tombol <b>Mulai</b> yang tersedia ketika waktu telah menunjukan mulainya waktu ujian.

                        <li><b>Hasil Ujian</b></li>
                        pada Menu Hasil Ujian, Teman-teman dapat melihat secara langsung hasil ujian yang telah teman-teman kerjakan pada menu Jadwal Ujian.

                        <li><b>Ganti Password</b></li>
                        pada Menu Ganti Password, anda dapat mengganti password sesuai keinginan Teman-teman setelah Teman-teman mendapatkan password default dari pihak administrator <b style="color: #168ea9" ;> Buzz Media</b>. <br>
                        ketika Teman-teman lupa password, Teman-teman dapat menghubungi pihak administrator <b style="color: #168ea9" ;> Buzz Media</b> untuk mendapatkan password terbaru.
                    </ol>
                </dd>
            </dl>
        </div><!-- /.box-body -->
    </div>

</section><!-- /.content -->

<?php
$this->load->view('siswa/js');
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