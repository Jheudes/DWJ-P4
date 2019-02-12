<?php
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 11/02/2019
 * Time: 19:27
 */?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#myeditable-h1',
            inline: true,
            menubar: false,
            toolbar: 'undo redo'
        });
    </script>
    <script>
        tinymce.init({
            selector: '#myeditable-div',
            inline: true
        });
    </script>
</head>

<body>
<form method="post">
    <h1 id="myeditable-h1">This Title Can Be Edited If You Click Here</h1>
    <div id="myeditable-div"name="myeditable-div">
        <p>This section of content can be edited. Click here to see how.</p>
    </div>
    <input type="submit">
</form>
<?php
echo $_POST['myeditable-div'];
?>
</body>
</html>
