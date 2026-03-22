<?php
include './template/header.php';
include("../connect.php"); // connect to DB

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]); // make it an integer for safety

    $sqlSelectPost = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sqlSelectPost);

    if ($result && mysqli_num_rows($result) > 0) {
        // fetch the single post
        $data = mysqli_fetch_assoc($result);
        ?>
        <div class="post w-100 bg-light p-4">
            <h1><?php echo htmlspecialchars($data['title']); ?></h1>
            <p><?php echo htmlspecialchars($data['date']); ?></p>
            <p><?php echo nl2br(htmlspecialchars($data['content'])); ?></p>
        </div>
        <?php
    } else {
        echo "<p>Post Not Found</p>";
    }
} else {
    echo "<p>No Post ID provided</p>";
}

include './template/footer.php';
?>