<?php

if (isset($_POST["create"])) {

        print_r($_POST);

    include '../connect.php';

    $title = mysqli_real_escape_string( $conn, $_POST["title"]);
    $summary = mysqli_real_escape_string( $conn, $_POST["summary"]);
    $content = mysqli_real_escape_string( $conn, $_POST["content"]);
    $date = mysqli_real_escape_string( $conn, $_POST["date"]);


    $sqlInsert = "INSERT INTO posts(date, title, summary, content) VALUES ('$date', '$title', '$summary', '$content')";

    $result = mysqli_query($conn, $sqlInsert);

    if ($result) {
    echo "Data inserted successfully";
    header("location: http://http://localhost/CMS-Project/admin/index.php");

} else {
    die("Error: " . mysqli_error($conn));
}
}
?>


<?php

if (isset($_POST["update"])) {

        print_r($_POST);

    include '../connect.php';

    $title = mysqli_real_escape_string( $conn, $_POST["title"]);
    $summary = mysqli_real_escape_string( $conn, $_POST["summary"]);
    $content = mysqli_real_escape_string( $conn, $_POST["content"]);
    $date = mysqli_real_escape_string( $conn, $_POST["date"]);
    $id = mysqli_real_escape_string( $conn, $_POST["id"]);


    $sqlInsert = "UPDATE posts SET  title = '$title', summary = '$summary', content = '$content', date = '$date' WHERE id = '$id'";

    $result = mysqli_query($conn, $sqlInsert);

    if ($result) {
    echo "Data inserted successfully";
    header("location: http://http://localhost/CMS-Project/admin/index.php");

} else {
    die("Error: " . mysqli_error($conn));
}
}
?>