

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
            <h1 class="site-title"><a href="#">Job Offers</a></h1>
        </header>

        <ul class="jobs-listing">
            <?php
            
                include("connection.php");
                $query = "select * from offers";
                $result = mysqli_query($con,$query);

                if($result && mysqli_num_rows($result) > 0)
                {
                    // $data = mysqli_fetch_assoc($result);
                    while($row = $result->fetch_assoc()) {
                        echo '<li class="job-card">
                            <div class="job-primary">
                                <h2 class="job-title"><a href="#">' . $row["title"] . '</a></h2>
                                <div class="job-meta">
                                    <a class="meta-company" href="#">' . $row["company"] . '</a>
                                    <span class="meta-date">Posted ' . $row["createDate"] . ' days ago</span>
                                </div>
                            </div>
                            <div class="job-edit">
                                <a href="/jobs/edit.php?id=' . $row["id"] . '">Edit</a>
                                <a href="/jobs/delete.php?id=' . $row["id"] . '">Delete</a>
                            </div>
                        </li>';
                    }
                };
            ?>
        </ul>

        <footer class="site-footer">
            <p>Copyright 2020 | Developer links: 
                <a href="/jobs/create.php">Create</a>,
                <a href="/jobs/index.php">Home</a>,
                <!-- <a href="/jobs/single.php">Single</a> -->
            </p>
        </footer>
    </div>

</body>
</html>