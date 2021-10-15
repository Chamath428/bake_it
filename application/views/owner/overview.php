<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/owner/owner-overview.css">
    <script src="../../../public/js/owner/overview.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body>
    <?php include "headerReports.php"?>
    <div class="overview-container" id="body">
        <div class="topic-1">Business Overview </div>
        <div class="topic-2">Total Sales Overview</div>
        <div class="row-container">
             <div class="col">
              <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
             </div>
             <div class="col">
              <canvas id="myChart2" style="width:100%;max-width:700px"></canvas> 
             </div>
        </div>
        <div class="topic-2">Menu Items Sales Overview</div>
        <div class="row-container">
             <div class="col">
              <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
             </div>
             <div class="col">
              <canvas id="myChart4" style="width:100%;max-width:700px"></canvas> 
             </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>