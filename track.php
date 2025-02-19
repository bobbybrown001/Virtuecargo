<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Link -->
    <link rel="stylesheet" href="./css/track.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    
    <title>Track</title>
</head>
<body>
    <?php require("include/nav/nav.php"); ?>

    <!-- form -->
    <div class="form-container">
        <form class="form-body">
            <h1 id="tract">Track Your Cargo</h1>
            <p id="track-body">
                You can track your cargo in real-time, 
                from departure to delivery.
            </p>
            <div class="mb-3">
              <input type="text" id="serial-input" name="serialNumber" placeholder="input Tracking Number">
            </div>
            <button type="submit" id="submit">Track</button>
          </form>
    </div>

  <?php require("include/footer/footer.php"); ?>
</body>
</html>