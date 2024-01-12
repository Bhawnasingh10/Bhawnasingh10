<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <script type="text/javascript">
            function popwin() {
                window.open("aser.php", "myWindow", "width=600,height=800");
            }

            function MM_preloadImages() {
                var d = document;
                if (d.images) {
                    if (!d.MM_p) d.MM_p = new Array();
                    var i, j = d.MM_p.length,
                        a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                }
            }

            function MM_swapImgRestore() {
                var i, x, a = document.MM_sr;
                for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
            }

            function MM_findObj(n, d) {
                var p, i, x;
                if (!d) d = document;
                if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                    d = parent.frames[n.substring(p + 1)].document;
                    n = n.substring(0, p);
                }
                if (!(x = d[n]) && d.all) x = d.all[n];
                for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
                for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
                if (!x && d.getElementById) x = d.getElementById(n);
                return x;
            }

            function MM_swapImage() {
                var i, j = 0,
                    x, a = MM_swapImage.arguments;
                document.MM_sr = new Array;
                for (i = 0; i < (a.length - 2); i += 3)
                    if ((x = MM_findObj(a[i])) != null) {
                        document.MM_sr[j++] = x;
                        if (!x.oSrc) x.oSrc = x.src;
                        x.src = a[i + 2];
                    }
            }
        </script> -->
    </head>
    <body>
        <div style="background-color: #254aa5; height: 70px; padding-top: 5px; color: white">
            <center>
                <h2>Category Of Grievance</h2>
            </center>
        </div>
		<div class="row">
        <div id="prof">
            <div>
                <div> <?php
            if (isset($_GET['roll'])) {
                $roll = $_GET['roll'];
                $pass = $_GET['pass'];
                $con = mysqli_connect("localhost", "root", "") or die("could not connect");
                $db = mysqli_select_db($con, "user") or die("Could not connect database");
                $qry = mysqli_prepare($con, "SELECT * FROM `new` WHERE RollNO = ? AND pass1 = ?");
                mysqli_stmt_bind_param($qry, "ss", $roll, $pass);
                mysqli_stmt_execute($qry);
                $result = mysqli_stmt_get_result($qry);

                if (mysqli_num_rows($result) != 1) {
                    header("location:login.php?mes=
							<p class='crt'>.That Rollno is not found or wrong password 
								<br> Please Login Here..
								</p>");
                } else {
                    $row = mysqli_fetch_array($result);
                    $name = $row[0];
                    $Depart = $row[2];
                    $email = $row[3];
                }
            }
            ?> <?php
            
            ?> <br>
                    <br>
                    <br>
                    <h2> <?php echo $name ?>'s profile </h2>
                    <br>
                </div>
                <table>
                    <div>
                        <img src="images/user.png" width="100px" height="100px">
                        <br>
                        <br>
                        <tr>
                            <td>RollNo:</td>
                            <td> <?php echo $roll ?> </td>
                        </tr>
                        <tr>
                            <td>Dept:</td>
                            <td> <?php echo $Depart ?> </td>
                        </tr>
                        <tr>
                            <td>email:</td>
                            <td> <?php echo $email ?> </td>
                        </tr>
                </table>
                <br>
                <button type="button" class="btn btn-warning">
                    <a href="comp.php?rn=
																		<?php echo $roll ?>" style="text-decoration: none; color: white;"> Make Complaint </a>
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-info">
                    <a href="aser.php?rn=
																				<?php echo $roll ?>" style="text-decoration: none; color: white; ">Status Of Complaint </a>
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-danger">
                    <a href="logout.php" style="text-decoration: none; color: white;">Logout</a>
                </button>
                </table>
            </div>
        </div>
        <div class="col-sm-4">
            <div id="ser">
                <table>
                    <tr>
                        <td>
                            <a href="srve.php">
                                <img src="images/acadmics.jpg" name="Image2" width="1200" height="800" border="0">
								<h4>Academics</h4>
                            </a>
                        </td>
                        <td>
                            <a href="fn.php">
                                <img src="images/finance1.jpg" name="Image3" width="278" height="182" border="0">
								<h4>Finance</h4>
                            </a>
                        </td>
                        <td>
                            <a href="lib.php">
                                <img src="images/library.jpg" name="Image4" width="600" height="387" border="0">
								<h4>Library</h4>
                            </a>
                        </td>
                        <td>
                            <a href="bus.php">
                                <img src="images/transport.jpg" name="Image5" width="800" height="532" border="0">
								<h4>Transportation</h4>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="exm.php">
                                <img src="images/exam.jpg" name="Image6" width="1200" height="450" border="0">
								<h4>Exam Cell</h4>
                            </a>
                        </td>
                        <td>
                            <a href="placement.php">
                                <img src="images/placement.jpg" name="Image7" width="273" height="185" border="0">
								<h4>Placement Cell</h4>
                            </a>
                        </td>
                        <td>
                            <a href="lab.php">
                                <img src="images/lab.jpg" name="Image8" width="800" height="532" border="0">
								<h4>Laboratory</h4>
                            </a>
                        </td>
                        <td>
                            <a href="can.php">
                                <img src="images/canteen.jpg" name="Image9" width="342" height="266" border="0">
								<h4>Canteen</h4>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
		</div>
    </body>
</html>