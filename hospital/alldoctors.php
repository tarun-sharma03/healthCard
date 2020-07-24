<?php include "header.php" ?>
<section class="content">

	<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div style="overflow-x:auto;">
  <table>
  	<h2 style="text-align: center;">Doctor Details</h2>
    <tr>
      <th>Doctor Name</th>
      <th>Registered On</th>
      <th>No of Patients Attended</th>
      <th>More Info</th>
      <th>More Info</th>
      
    </tr>
    <tr>
      <td>Jill</td>
      <td>23/12/2000</td>
      <td>50</td>
      <td>add info</td>
      <td>add info</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>12/11/2000</td>
      <td>94</td>
      <td>add info</td>
      <td>add info</td>
    </tr>
    <tr>
      <td>Adam</td>
      <td>22/10/2000</td>
      <td>67</td>
      <td>add info</td>
      <td>add info</td>
    </tr>
  </table>
</div>
</section>
	<?php include "footer.php" ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#State_c").change(function() {
            var StateID = $("#State_c").val();
            $.ajax({
                url: 'worldData.php',
                method: 'post',
                data: 'State=' + StateID
            }).done(function(states) {
                cities = JSON.parse(states);
                $('#City_c').empty();
                $('#City_c').append('<option disabled selected>Select City</option>');
                cities.forEach(function(city) {
                    $('#City_c').append('<option value=' + city.id + '>' + city.name + '</option>');
                })
                $('#City_c').append('<option value=0>My option is not listed</option>');
            })
        });
    })
</script>