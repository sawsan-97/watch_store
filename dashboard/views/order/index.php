<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />

  <!-- Favicon -->
  <link rel="icon" href="assets/img/wrist-watch.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <?php require_once "views/layouts/components/fonts.html"; ?>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <?php require_once "views/layouts/components/sidebar.html"; ?>

    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <?php require_once "views/layouts/components/logoheader.html"; ?>
        </div>
        <!-- Navbar Header -->
        <?php require_once "views/layouts/components/navbar.html"; ?>
      </div>

      <!-- Main Content -->
      <div class="container">
        <div class="page-inner">
          <h1>Orders List</h1>
            <div class="mb-3">
            <form action="index.php?controller=order&action=search" method="POST" class="form-inline d-flex">
              <input type="text" name="keyword" class="form-control" placeholder="Search by order id or customer id or status">
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
            </div>
          <table class="table table-striped">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Craeted Date</th>
                <th>Actions</th>
              </tr>
            </thead>  
            <tbody>
              <?php foreach ($orders as $order): ?>
              <tr>
                <td><?= $order['id'] ?></td>
                <td><?= $order['user_id'] ?></td>
                <td><?= $order['total_price'] ?></td>
                <td><span class="badge bg-dark"><?= $order['status'] ?></span></td>
                <td><?= $order['created_at'] ?></td>
                <td>
                  <a href="index.php?controller=order&action=delete&id=<?= $order['id'] ?>" class="btn btn-sm btn-danger"
                    onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                  <a href="index.php?controller=order&action=show&id=<?= $order['id'] ?>" class="btn btn-sm btn-dark"><i class="fas fa-info-circle"></i></a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Footer -->
      <?php require_once "views/layouts/components/footer.html"; ?>
    </div>
  </div>

  <!--   Core JS Files   -->
  <?php require "views/layouts/components/scripts.html"; ?>
</body>
</html>