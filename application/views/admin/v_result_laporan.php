<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Tanggal Awal</th>
        <th>Tanggal Akhir</th>
      <!--   <th>Biaya</th> -->
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($dt_result)){
        foreach($dt_result as $row){
            ?>
            <tr class="">
                <td><?php echo $no; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tglditerima)); ?></td>
                <td><?php echo date("d M Y",strtotime($row->tglambil)); ?></td>
                <!-- <td><?php echo $row->nota; ?></td> -->
               <!--  <td><?php echo $row->nm_pelanggan; ?></td> -->
                <td><?= currency_format($row->total_all)?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center; background: #49afcd"><strong>Total Seluruh Servis</strong></td>
                <td><?= currency_format($row->total_all)?></td>
            </tr>
        <?php }
    }
    ?>
    </tbody>
</table>

<hr/>

