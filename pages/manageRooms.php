<th>Hostel ID</th>
           <th>Price</th>
           <th>Actions</th>
         </tr>
       </thead>
       <tbody>
         <?php
           // Fetch and display rooms
           $rooms = getRooms();
           foreach ($rooms as $room) {
            echo "<tr>";
            echo "<td>" . $room['room_id'] . "</td>";
            echo "<td>" . $room['hostel_id'] . "</td>";
            echo "<td>" . $room['price'] . "</td>";
            echo "<td>";
            echo "<a class='btn btn-info' href='updateRoom.php?id=" . $room['room_id'] . "'>Edit</a>&nbsp;";
            echo "<a class='btn btn-danger' href='deleteRoom.php?id=" . $room['room_id'] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";
           }
         ?>
       </tbody>
     </table>

     <?php
       // Initialize DataTables
       echo "<script>$(document).ready(function() { $('#roomsTable').DataTable(); });</script>";
     ?>
   </div>
 </div>
 </div>

 <?php include "../includes/components/footer.php"; ?>
 </div>
</body>
</html>
