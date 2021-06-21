
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                <h5 style="font-size:40;text-align:center;margin:0;padding:0"><h3 style="font-size:30;"><?= $this->session->userdata('nama_sekolah');?></h3>Kota <?= $this->session->userdata('kabupaten');?></h5>
    <p style="text-align:center;margin:0;padding:0"><?= $this->session->userdata('alamat_sekolah');?>, <?= $this->session->userdata('kelurahan');?>, Kec. <?= $this->session->userdata('kecamatan');?>, <?= $this->session->userdata('kabupaten');?>, <?= $this->session->userdata('profinsi');?> <?= $this->session->userdata('kode_pos');?></p>
    <p style="text-align:center;margin:0;padding:0">Telp : <?= $this->session->userdata('no_telp');?> &nbsp;&nbsp;Email : <?= $this->session->userdata('email');?>.</p>
    <hr>
    <br>
    
                <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 0.1px solid #000;
                /* padding:3px; */
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
                padding: 3px;
            }
        </style>
        <table border="1" width="100%" cellpadding="6">

                <tr >
                <th width="5%" height="20" padding="5" align="center"><b>No</b></th>
                                <th width="15%" align="center"><b>Nama</b></th>
                                <th width="15%" align="center"><b>Ulasan Siswa</b></th>
                                <th width="15%" align="center"><b>Text PDF</b></th>
                                <th width="15%" align="center"><b>Hasil</b></th>
                 
                </tr>
                <?php $i= 1;
                foreach ($detail_nilai as $rows) : ?>
                         <tr>
                             <td style="margin:center"><?php echo $i++; ?></td>
                             <td><?php echo $rows->nama; ?></td>
                             <td><?php echo $rows->ulasan_siswa; ?></td>
                             <td><?php echo $rows->ulasan_guru; ?></td>
                             <td><?php similar_text($rows->ulasan_siswa, $rows->ulasan_guru, $percent);?>
                                            <?php
                                            foreach ($kategori as $k) :
                                                if (($percent >= $k->start) and ($percent <= $k->end)) {
                                                    $hasil = $k->grade;
                                                }
                                            endforeach;
                                            echo "Nilai  " . $hasil;
                                            ?>
                                        </td>
                    </tr>
                        <?php endforeach; ?>
                        
                        <pre></pre>
                        
                        
     <table border="0">
         <tr>
             <td colspan="2" align="right">,________________<?php echo date('Y') ?></td>
         </tr>
         <tr>
             <td colspan="2" height="80"></td>
         </tr>
         <tr>
             <td width="75%"></td>
             <td width="20%" align="center">(. . . . . . . . . . . . . . . . .)</td>
         </tr>
     </table>

</table>

<br>
    <hr>
                        <script type="text/javascript">
                            window.print();
                        </script>
                             

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>