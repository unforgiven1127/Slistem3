<?php
    $data = array();
    if(isset($_POST['name'])) {
        $data[] = 'You entered:' . $_POST['name'];
        exit(json_encode($data));
    }
?>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(function() {
        $('form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : 'test.php',
                data        : $(this).serialize(),
                dataType    : 'json',
                encode      : true
            })
            .done(function(data) {
                $('#result').html(data);
            })
        });
    });
</script>
</head>

<body>
    <form>
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
    <div id="result"></div>
</body>