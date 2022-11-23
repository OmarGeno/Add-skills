<?php 
    $conn = mysqli_connect("localhost", "root", "", "skills");

    if(!$conn) {
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    $sql = "SELECT * FROM skills";
    $query = mysqli_query($conn, $sql);
    
    if(isset($_REQUEST['new_post'])) {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO skills(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM skills WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST['update'])) {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $id = $_REQUEST['id'];

        $sql = "UPDATE skills SET title ='$title', content ='$content' WHERE id = '$id'";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=updated");
        exit();
    }

    if(isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM skills WHERE id ='$id'";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=deleted");
        exit();
    }

    // if(!empty($_REQUEST['search'])) {
    //     $search = $_REQUEST['search-value'];
    //     $sql = "SELECT * FROM skills WHERE title LIKE '%$search%' OR content LIKe '%$search%' ";
    //     mysqli_query($conn, $sql);
    // }
