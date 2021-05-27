<?php if($this->session->userdata('id_user_role')!=2){redirect('login');};?>

<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                <h5 style="font-size:40;text-align:center;margin:0;padding:0"><h3 style="font-size:30;">Kementrian Agama</h3>Kantor Kota Malang</h5>
    <p style="text-align:center;margin:0;padding:0">Jl. Raden Panji Suroso No.2, Polowijen, Kec. Blimbing, Kota Malang, Jawa Timur 65126</p>
    <p style="text-align:center;margin:0;padding:0">Telp : (0341) 491605 &nbsp;&nbsp;Email : kotamalang@kemenag.go.id</p>
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
            }
        </style>
        <table id="table">

                <tr >
                <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">No</a></th>
                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Hasil</a></th>
                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Nilai</a></th>
                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Aksi</a></th>
                 
                </tr>
              
                <?php $i= 1;
                foreach ($detail_ulasan as $rows) : ?>
                         <tr>
                             <td><?php echo $i++; ?></td>
                             <td><?php echo $rows->nama; ?></td>
                             <td><?php echo $rows->hasil; ?> <?php
                                 similar_text($rows->ulasan_siswa, $rows->ulasan_guru, $percent);
                                 echo $percent;
                                 ?></td>
                                 <td >
                                 <?php 
                                 if ($percent<40){
                                     echo "E";}
                                 else if($percent<55){
                                     echo "D";}
                                 else if($percent<60){
                                     echo "C";}
                                 else if($percent<70){
                                     echo "B";}
                                 else if($percent<80){
                                    echo "B+";}
                                 else if ($percent<90){
                                     echo "A";}
                                 else if ($percent<=100){
                                     echo "A+";}?>
                                 </td>
                    </tr>
                        <?php endforeach; ?>
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