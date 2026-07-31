<?php
include("header.php");
include("sidebar.php");
?>

<?php
// Database connection
$servername = "localhost";
$username = "root";  // Replace with your MySQL username
$password = "";      // Replace with your MySQL password
$dbname = "zflix";  // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted, handle the video upload
if (isset($_POST['submit']) && isset($_FILES['video_file'])) {
    // Get the file info
    $videoName = $_FILES['video_file']['name'];
    $videoTmpName = $_FILES['video_file']['tmp_name'];
    $videoSize = $_FILES['video_file']['size'];
    $videoError = $_FILES['video_file']['error'];
    $videoType = $_FILES['video_file']['type'];

    // Define allowed video types (MP4, WebM, OGG)
    $allowedTypes = ['video/mp4', 'video/webm', 'video/ogg'];

    // Check if the uploaded file is a valid video type
    if (in_array($videoType, $allowedTypes)) {
        if ($videoError === 0) {
            // Define upload directory
            $uploadDirectory = 'uploads/';
            // Ensure the uploads directory exists
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            // Define a unique filename to avoid collisions
            $videoFilePath = $uploadDirectory . uniqid('', true) . '.' . pathinfo($videoName, PATHINFO_EXTENSION);

            // Move the uploaded file to the uploads folder
            if (move_uploaded_file($videoTmpName, $videoFilePath)) {
                // Insert video data into the database
                $stmt = $conn->prepare("INSERT INTO videos (file_name, file_path) VALUES (?, ?)");
                $stmt->bind_param("ss", $videoName, $videoFilePath);
                if ($stmt->execute()) {
                    echo "<p>Video uploaded successfully!</p>";
                } else {
                    echo "<p>Error inserting video data into database.</p>";
                }
                $stmt->close();
            } else {
                echo "<p>Error uploading video.</p>";
            }
        } else {
            echo "<p>Error: " . $videoError . "</p>";
        }
    } else {
        echo "<p>Invalid video type. Please upload a valid video file (MP4, WebM, or OGG).</p>";
    }
}

// Fetch videos from the database
$videos = [];
$result = $conn->query("SELECT * FROM videos ORDER BY uploaded_at DESC");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $videos[] = $row;
    }
}
?>
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Category
                        </header>
                        <div class="panel-body">
                        <div class="position-center">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group" >
        <label for="video_file">Choose a video to upload:</label>
        <input type="file" name="video_file" id="video_file" accept="video/*">
        <button type="submit" name="submit">Upload Video</button><div></div>
    </form></div></div></section>
<br><br>

</body>
</html>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-20.5%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Category table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            
            <th>file name</th>
            
            <th>file path</th>
            <th>Delete</th>
           

          
        </thead>
<tbody>
  <tr>
  
    <?php
  $sql="select * from videos where status=0";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result))
  
  {
    ?>
    <td><?php echo htmlspecialchars($row['file_name']); ?></td>
    <td>   <video width="100" controls>
    <source src="<?php echo htmlspecialchars($row['file_path']); ?>" type="video/mp4"></td>
    <td><a href="video.php?id=<?php echo $row['id']?>">
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
     

 <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="update videos set status=1 where id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "record deleted";
        }
    }
    ?>
    <?php
// Close the database connection
$conn->close();
?>