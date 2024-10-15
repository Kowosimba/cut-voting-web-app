<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./../images/cut_logo.png" type="image">    
    <title>CUT Election System</title>
</head>

<body>
    <div class="container">
        <aside >
            <div class="top">
                <div class="logo">
                    <img src="./../images/cut_logo.png" alt="logo" height="60" width="110">
                    <h2>CUT - <span class="cut_color">Election System</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>



            <div class="sidebar">
                <a href="candidate_dets.php">
                    <span class="material-icons-sharp">

                        <img src="./../images/dashboard.png"  height ="24" width="24">
                    </span>
                    <h3><b>View Candidates</b></h3>
                </a>
                <a href="reg_fin.php #">
                    <span class="material-icons-sharp">
                        <img src="./../images/database.png"  height ="24" width="24">
                    </span>
                    <h3><b>Registration</b></h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        <img src="./../images/database.png"  height ="24" width="24">
                    </span>
                    <h3><b>Election Status</b></h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        <!-- <img src="./../images/trending_up.png"  height ="24" width="24"> -->
                    </span>
                    <h3><b></b></h3>
                </a>
                <a href="index.php#">
                    <span class="material-icons-sharp">
                        how_to_vote
                    </span>
                    <h3><b>Log Out</b></h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                       <!-- <img src="./../images/logout.png"  height ="24" width="24"> -->
                    </span>
                    <h3><b></b></h3>
                </a>
            </div>
        </aside>



        <main>
            <h1>Dashboard</h1>
            <h2>You can start or end elections here.</h2>
            <h>Use the buttons below</h3>
            <h3>**</h3>
            <h3>*</h3>
            
            <div class="recent-orders">
                <!-- ------------------------------------ -->
                                         
                <style>
.product__dscrptx {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.vote-button {
  display: inline-block;
  padding: 12px 24px;
  background-color: #343a40;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.vote-button:hover {
  background-color: #007bff;
  color: #fff;
}
</style>

<div class="product__dscrptx">
  <a href="#" class="vote-button" onclick="showElectionAlert(); return false;">
    Start Elections
  </a>
</div>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
            function showElectionAlert() {
            Swal.fire({
            title: 'Elections are now in Progress',
            text: 'Click the stop election button to cease the election process',
            icon: 'info',
            confirmButtonText: 'OK'
            }).then((result) => {
            if (result.isConfirmed) {
            window.location.href = "state.php?id=start";
             }
            });
            }
        </script>
                    <h3></h3>
                    <div>

                    </div>
                    <div>
                        
                    </div>


                    
                    <style>
.btn {
  display: inline-block;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-danger {
  background-color: #343a40;
  color: #fff;
}

.btn-danger:hover {
  background-color: #007bff;
  color: #fff;
}

.btn-lg {
  padding: 16px 32px;
  font-size: 18px;
}
</style>

<div class="product__dscrptx">
  <a href="#" class="btn btn-danger btn-lg" onclick="showEndElectionAlert(); return false;">
    End Elections
  </a>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function showEndElectionAlert() {
    Swal.fire({
      title: 'Voting Ended',
      text: 'You have stopped the elections. Click "OK" to continue.',
      icon: 'warning',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "state.php?id=end";
      }
    });
  }
</script>

            </div>

        </main>
    </div>

    <script src="./index.js"></script>
</body>

</html>