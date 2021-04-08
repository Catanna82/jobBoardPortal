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
            <?php
                $id = $_GET["id"];
                include("connection.php");
                $query = "select * from offers where id=$id";
                $result = mysqli_query($con,$query);

                if($result && mysqli_num_rows($result) > 0)
                {
                    $row = $result->fetch_assoc();
                    echo '<div class="job-single">
                            <main class="job-main">
                                <div class="job-card">
                                    <div class="job-primary">
                                        <header class="job-header">
                                            <h2 class="job-title"><a href="#">' . $row["title"] . '</a></h2>
                                            <div class="job-meta">
                                                <a class="meta-company" href="#">' . $row["company"] . '</a>
                                                <span class="meta-date">' . $row["createDate"] . '</span>
                                            </div>
                                        </header>

                                        <div class="job-body">
                                        <p>' . $row["description"] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <aside class="job-secondary">
                                <div class="job-logo">
                                    <div class="job-logo-box">
                                        <img src="https://i.imgur.com/ZbILm3F.png" alt="">
                                    </div>
                                </div>
                                <a href="#" class="button button-wide">Apply now</a>
                                <a href="#">apple.com</a>
                            </aside>
                        </div>';
                    };
            ?>
        <footer class="site-footer">
            <p>Copyright 2020 | Developer links: 
                <a href="/jobs/index.php">Home</a>
            </p>
        </footer>

</body>
</html>