<table id="ordersTable" class="display" style="width:100%">
   <thead>
       <tr>
           <th>Order ID</th>
           <th>Customer ID</th>
           <th>Order Date</th>
           <th>Total Amount</th>
           <!-- Add more columns as needed -->
       </tr>
   </thead>
</table>
<script>
$(document).ready(function(){
  $('#ordersTable').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "../includes/fetchOrders.php"
  });
});
</script>
