<?php include "header.php" ?>
<section class="content">
    <form action="functionality/profileUpdateAct.php" method="POST">
        <h3>Current Allergies, if any</h3>
        <div class="table-responsive">
            <table class="table " id="dynamic_field1">
                <tr>
                    <td><input type="text" name="allergicReactions[]" placeholder="Enter Allergic Reactions" class="form-control" /></td>
                    <td><button type="button" name="add1" id="add1" class="mt-2 btn btn-primary">Add More</button></td>
                </tr>
            </table>
        </div>
        <br><br>
        <h3>Ongoing Medication, if any</h3>
        <div class="table-responsive">
            <table class="table " id="dynamic_field2">
                <tr>
                    <td><input type="text" name="ongoingMedication[]" placeholder="Enter Ongoing Medications" class="form-control" /></td>
                    <td><button type="button" name="add2" id="add2" class="mt-2 btn btn-primary">Add More</button></td>
                </tr>
            </table>
        </div>

        <br><br><br>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg">
                <i class="fas fa-check"></i> Submit
            </button>
        </div>
    </form>
</section>
</div>
<?php include "footer.php" ?>

<!-- dont touch this as well  -->

<script>
    $(document).ready(function() {
        var i = 1;
        $('#add1').click(function() {
            i++;
            $('#dynamic_field1').append('<tr id="row' + i + '"><td><input type="text" name="allergicReactions[]" placeholder="Enter Allergic Reactions" class="form-control" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>

<script>
    $(document).ready(function() {
        var i = 1;
        $('#add2').click(function() {
            i++;
            $('#dynamic_field2').append('<tr id="row2' + i + '"><td><input type="text" name="ongoingMedication[]" placeholder="Enter Ongoing Medications" class="form-control" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row2' + button_id + '').remove();
        });
    });
</script>