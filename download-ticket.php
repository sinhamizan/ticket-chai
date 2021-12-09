<?php
  include_once 'db.php';
  require ('vendor/autoload.php');

  // Get Last Info
  $last_sql = "SELECT * FROM seat_booking ORDER BY id DESC LIMIT 1";
  $last_qs = mysqli_query($con, $last_sql);
  $last_user = mysqli_fetch_assoc($last_qs);

  $id = $last_user['id'];
  $booking_id = $last_user['booking_id'];
  $bus_name = $last_user['bus_name'];
  $route_name = $last_user['route_name'];
  $start_time = $last_user['start_time'];
  $end_time = $last_user['end_time'];
  $boarding_at = $last_user['boarding_at'];
  $booking_date = $last_user['booking_date'];
  $booking_time = $last_user['booking_time'];
  $name = $last_user['name'];
  $phone = $last_user['phone'];
  $email = $last_user['email'];
  $gender = $last_user['gender'];
  $seat = $last_user['seat'];
  $total_costs = $last_user['total_costs'];
  $payment_code = $last_user['payment_code'];

  $html = '<style>
  h3{text-align:center}
  table {margin: 0 auto;}
  th, tr, td {border: 1px solid #ddd; text-align: left; padding: 10px 20px;}
  </style>';

  $html .='<h3>Ticket Details<h3>
  <table>
          <tbody>
            <tr>
              <th>Ticket Number: </th>
              <td>'. $booking_id . '</td>
            </tr>
            <tr>
              <th>Bus Name: </th>
              <td>' . $bus_name . '</td>
            </tr>
            <tr>
              <th>Route Name: </th>
              <td>' . $route_name . '</td>
            </tr>
            <tr>
              <th>Start Time: </th>
              <td>' . $start_time . '</td>
            </tr>
            <tr>
              <th>Arrived Time: </th>
              <td>' . $end_time . '</td>
            </tr>
            <tr>
              <th>Ticket Booking Date: </th>
              <td>' . $booking_date . '</td>
            </tr>
            <tr>
              <th>Ticket Booking Time: </th>
              <td>' . $booking_time . '</td>
            </tr>
            <tr>
              <th>Passenser Name: </th>
              <td>' . $name . '</td>
            </tr>
            <tr>
              <th>Passenser Phone Number: </th>
              <td>' . $phone . '</td>
            </tr>
            <tr>
              <th>Passenser Email: </th>
              <td>' . $email . '</td>
            </tr>
            <tr>
              <th>Gender: </th>
              <td>' . $gender . '</td>
            </tr>
            <tr>
              <th>Seat Number: </th>
              <td>' . $seat . '</td>
            </tr>
            <tr>
            <tr>
              <th>Total Costs: </th>
              <td>' . $total_costs . '</td>
            </tr>
            <tr>
              <th>Boarding at: </th>
              <td>' . $boarding_at . '</td>
            </tr>
          </tbody>
        </table>';

  $mpdf = new \Mpdf\Mpdf();
  $mpdf->WriteHTML($html);
  $file = time() . '.pdf';
  $mpdf->Output($file, 'D');
?>