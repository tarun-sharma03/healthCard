<?php include "header.php" ?>
<section class="content">

    <?php
    $doctorId = $_POST["Doctor"];
    ?>
    <form action="functionality/queryAct.php" method="POST">
        <h3>Current Symptoms, Decreasing Order of Priority</h3>
        <div class="table-responsive">
            <table class="table " id="dynamic_field1">
                <tr>
                    <td><input type="text" name="symptoms[]" placeholder="Enter Symptom" class="form-control" /></td>
                    <td><button type="button" name="add1" id="add1" class="mt-2 btn btn-primary">Add More</button></td>
                </tr>
            </table>
        </div>
        <br><br>
        <div class="form-group">
            <h3>Description of the Problem</h3>
            <input type="text" name="description" class="form-control" placeholder="Enter the description of your problem along with the symptoms">
        </div>
        <input type="hidden" value="<?php echo $doctorId; ?>" name="doctorId">
        <br><br>
        <button type="submit" name="submit" class="btn btn-block btn-primary"> Submit </button>
        <a href="dashboard.php" class="btn btn-block btn-danger"> Cancel </a>

    </form>
</section>
</div>
<?php include "footer.php" ?>

<script>
    $(document).ready(function() {
        var i = 1;
        $('#add1').click(function() {
            i++;
            $('#dynamic_field1').append('<tr id="row' + i + '"><td><input type="text" name="symptoms[]" placeholder="Enter Symptom" class="form-control" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>