<div> 
  <div class="panel">
    <div class="panel-heading panel-black text-center">
      <h2> Payed Loans</h2>
     <!-- <div class="text-right">
      <a href="?page=Request_loan" class="btn btn-primary">Request Loan</a>
    </div>-->

    </div>
      <table class="table table-hover">
    <thead>
      <th>Bankslip</th>
      <th>Amount</th>
      <th>Rest Amount</th>
      <th>Payment Date</th>
      <th>Status</th>

     <!-- <th>Action</th>-->
    </thead>
    <tbody>

 
<?php
        foreach ($tests as $data) {

      ?>
      <tr>
        <td><?php echo $data['bankslip'];?></td>
        <td><?php echo $data['amount'];?></td>
        <td><?php echo $data['rem_amount'];?></td>
        <td><?php echo $data['payment_date'];?></td>
        <td><?php echo $data['status'];?></td>

      </tr><?php } ?>
    </tbody>
  </table>
  </div>
</div>