<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
$sql = "SELECT * FROM addvideo";
$result = mysqli_query($db, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $description=mysqli_real_escape_string($db, $_POST['description']);
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    
    if (!in_array($extension, ['mpeg', 'mov', 'mp4'])) {
        echo "You file extension must be .mpeg, .mov or .mp4";
    } 
     else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO addvideo (name, size,description,filepath ) VALUES ('$filename', '$size','$description', '$destination')";
            if (mysqli_query($db, $sql)) {
                echo "<h1>File uploaded successfully</h1> ";
            }
        } else {
            echo "<h1>Failed to upload file.</h1>";
        }
    }
    
}

?>


