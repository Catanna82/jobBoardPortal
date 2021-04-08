<?php

include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $company = $_POST['company'];
    $salary = $_POST['salary'];
    $id=$_GET["id"];

    if(!empty($title) && !empty($description) && !empty($salary) && !empty($company) && is_numeric($salary))
    {

        $query = "update offers set title='$title', description='$description', company='$company', salary=$salary where id=$id";
        // echo $query;
        mysqli_query($con,$query);
        header("Location: edits.php");
        // die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="./css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="site-wrapper">
        <header class="site-header">
            <h2 class="site-title"><a href="#">Job Offers</a></h2>
        </header>

        <div class="job-single">
            <main class="job-main">
                <div class="job-card">
                    <div class="job-primary">
                        <form method="post">
                        <?php

                        include("connection.php");
                        $id=$_GET["id"];
                        $query = "select * from offers where id=$id";
                        $result = mysqli_query($con,$query);
                        if($result && mysqli_num_rows($result) > 0)
                        {
                            $row = $result->fetch_assoc();
                            echo '<input id="title" name="title" type="text" class="job-title" value="' . $row["title"] . '">Job Title</input><br><br>
                        <input id="company" name="company" type="text" class="meta-company" value="' . $row["company"] . '">Company</input><br><br>
                        <input id="salary" name="salary" type="text" class="meta-company" value=' . $row["salary"] . '>Salary</input><br><br>
                        <input id="description" name="description" type="textarea" class="job-body" value="' . $row["description"] . '">Description</input><br><br>
                        <input type="submit" value="Update" class="button button-wide"/>';
                        }
                        ?>
                        </form>
                   </div>
                </div>
            </main>
            <aside class="job-secondary">
                <div class="job-logo">
                    <div class="job-logo-box">
                        <img src="https://i.imgur.com/ZbILm3F.png" alt="">
                    </div>
                </div>
            </aside>
        </div>

        <footer class="site-footer">
            <p>Copyright 2020 | Developer links: 

                <a href="/jobs/index.php">Home</a>

            </p>
        </footer>
    </div>

</body>
</html>