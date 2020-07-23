<?php include "fxn.php"; ?>
<?php include "header.php" ?>
<section class="content">
    <h3>Here comes the form!!</h3>
</section>
</div>
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