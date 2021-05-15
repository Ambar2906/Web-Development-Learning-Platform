
<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
$sql = "SELECT * FROM addbook";
$result = mysqli_query($db, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $title=mysqli_real_escape_string($db, $_POST['title']);
    $author=mysqli_real_escape_string($db, $_POST['author']);
    $edition=mysqli_real_escape_string($db, $_POST['edition']);
    $publication=mysqli_real_escape_string($db, $_POST['publication']);
    $recommendation=mysqli_real_escape_string($db, $_POST['recommendation']);

    //Upload image

    $filename1 = $_FILES['image']['name'];
    $destination1 = 'uploadimg/' . $filename1;
    $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
    $file1 = $_FILES['image']['tmp_name'];
    


   // upload file

    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    
    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {

            move_uploaded_file($file1, $destination1);
            $sql = "INSERT INTO addbook (name, size,title,author,edition,publication,recommendation,filepath,imagepath ) VALUES ('$filename', '$size','$title', '$author','$edition','$publication','$recommendation','$destination','$destination1')";
            if (mysqli_query($db, $sql)) {
                echo "<h1>File uploaded successfully</h1> ";
            }
        } else {
            echo "<h1>Failed to upload file.</h1>";
        }
    }
    
}

?>


