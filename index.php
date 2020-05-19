<?php
    if(!empty($_POST)){
        $subject_string = $_POST['subject-string'];// sterilize in production mode
        $search_string = $_POST['search-string'];// sterilize in production mode
        $replace_string = $_POST['replace-string'];// sterilize in production mode

        $return_value = str_replace($search_string,$replace_string,$subject_string);
    }
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    type="text/css" />
    
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/gh/jquery/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    

</head>
<body>
    <div class="container">
        <form method="post" action="index.php">
            <h1>
                PHP str_replace() example
            </h1>
            <div class="form-group">
                <label for="subject-string">Subject String</label>
                <input type="text" class="form-control" id="subject-string" name="subject-string" value="This is a subject string for str_replace.">
            </div>
            <div class="form-group">
                <label for="search-string">Search String</label>
                <input type="text" class="form-control" id="search-string" name="search-string" value="subject">
                <div class="hint-block">
                    The string you want to search and will be replaced.
                </div>
            </div>
            <div class="form-group">
                <label for="replace-string">Replace String</label>
                <input type="text" class="form-control" id="replace-string" name="replace-string" value="title">
                <div class="hint-block">
                    Replace "Search String" in "Subject String" to "Relace String".
                </div>
            </div>
            <div class="form-group">
                <label for="return-value">Return Value</label>
                <input type="text" class="form-control" id="return-value" name="return-value" disabled value="<?php echo $return_value; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>