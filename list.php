<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" href="icon.png">

    <title>Students Catagory</title>
</head>

<body>
    <div>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'completion2021');
        if ($conn->connect_error) {
            die('Connection Failed : ' . $conn->connect_error);
        } else {
            $sql1 = "SELECT * from student where catagory1=1";
            $res1 = mysqli_query($conn, $sql1);
            $sql2 = "SELECT * from student where catagory2=1";
            $res2 = mysqli_query($conn, $sql2);
            $sql3 = "SELECT * from student where catagory3=1";
            $res3 = mysqli_query($conn, $sql3);
            $sql4 = "SELECT * from student where catagory4=1";
            $res4 = mysqli_query($conn, $sql4);
            $sql5 = "SELECT * from student where catagory5=1";
            $res5 = mysqli_query($conn, $sql5);
        }
        ?>
    </div>

    <h6 class="text-center">Registered Students for Basic ICT skills (Primary)</h6>
    <div class="container my-4 border">

        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">School</th>
                    <th scope="col">Region</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>

            <?php
            while ($rows = mysqli_fetch_assoc($res1)) {

            ?>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo $rows['id']; ?></th>
                        <td><?php echo $rows['name']; ?></th>
                        <td><?php echo $rows['email']; ?></th>
                        <td><?php echo $rows['gender']; ?></th>
                        <td><?php echo $rows['class']; ?></th>
                        <td><?php echo $rows['birthday']; ?></th>
                        <td><?php echo $rows['school']; ?></th>
                        <td><?php echo $rows['region']; ?></th>
                        <td><?php echo $rows['country']; ?></th>
                    </tr>

                </tbody>

            <?php
            }
            ?>
        </table>

    </div>

    <h6 class="text-center">Registered Students for Basic ICT skills (Pre-secondary)</h6>
    <div class="container my-4 border">

        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">School</th>
                    <th scope="col">Region</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>

            <?php
            while ($rows = mysqli_fetch_assoc($res2)) {

            ?>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo $rows['id']; ?></th>
                        <td><?php echo $rows['name']; ?></th>
                        <td><?php echo $rows['email']; ?></th>
                        <td><?php echo $rows['gender']; ?></th>
                        <td><?php echo $rows['class']; ?></th>
                        <td><?php echo $rows['birthday']; ?></th>
                        <td><?php echo $rows['school']; ?></th>
                        <td><?php echo $rows['region']; ?></th>
                        <td><?php echo $rows['country']; ?></th>
                    </tr>

                </tbody>

            <?php
            }
            ?>
        </table>

    </div>

    <h6 class="text-center">Registered Students for Website Designing (secondary and technical vocational)</h6>
    <div class="container my-4 border">

        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">School</th>
                    <th scope="col">Region</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>

            <?php
            while ($rows = mysqli_fetch_assoc($res3)) {

            ?>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo $rows['id']; ?></th>
                        <td><?php echo $rows['name']; ?></th>
                        <td><?php echo $rows['email']; ?></th>
                        <td><?php echo $rows['gender']; ?></th>
                        <td><?php echo $rows['class']; ?></th>
                        <td><?php echo $rows['birthday']; ?></th>
                        <td><?php echo $rows['school']; ?></th>
                        <td><?php echo $rows['region']; ?></th>
                        <td><?php echo $rows['country']; ?></th>
                    </tr>

                </tbody>

            <?php
            }
            ?>
        </table>

    </div>

    <h6 class="text-center">Registered Students for Robotics technology (secondary)</h6>
    <div class="container my-4 border">

        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">School</th>
                    <th scope="col">Region</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>

            <?php
            while ($rows = mysqli_fetch_assoc($res4)) {

            ?>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo $rows['id']; ?></th>
                        <td><?php echo $rows['name']; ?></th>
                        <td><?php echo $rows['email']; ?></th>
                        <td><?php echo $rows['gender']; ?></th>
                        <td><?php echo $rows['class']; ?></th>
                        <td><?php echo $rows['birthday']; ?></th>
                        <td><?php echo $rows['school']; ?></th>
                        <td><?php echo $rows['region']; ?></th>
                        <td><?php echo $rows['country']; ?></th>
                    </tr>

                </tbody>

            <?php
            }
            ?>
        </table>

    </div>

    <h6 class="text-center">Registered Students for Digital thinking and innovations using IoT and Arduino devices (Secondary and Technical Vocational)</h6>
    <div class="container my-4 border">

        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">School</th>
                    <th scope="col">Region</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>

            <?php
            while ($rows = mysqli_fetch_assoc($res5)) {

            ?>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo $rows['id']; ?></th>
                        <td><?php echo $rows['name']; ?></th>
                        <td><?php echo $rows['email']; ?></th>
                        <td><?php echo $rows['gender']; ?></th>
                        <td><?php echo $rows['class']; ?></th>
                        <td><?php echo $rows['birthday']; ?></th>
                        <td><?php echo $rows['school']; ?></th>
                        <td><?php echo $rows['region']; ?></th>
                        <td><?php echo $rows['country']; ?></th>
                    </tr>

                </tbody>

            <?php
            }
            ?>
        </table>

    </div>


    <div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
    </div>


    <?php
    $conn->close();

    ?>
</body>

</html>