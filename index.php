<!DOCTYPE html>
<html lang="id">
<?php include 'includes/header.php'; ?>
<body class="d-flex flex-column min-vh-100">

  <?php include 'includes/navbar.php'; ?>

  <main class="flex-fill">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $page_path = "pages/{$page}.php";

    if (file_exists($page_path)) {
      include($page_path);
    } else {
      include("pages/home.php");
    }
    ?>
  </main>

  <?php include 'includes/footer.php'; ?>

</body>
</html>


<div id="chat-container">
  <button id="chat-toggle">💬</button>

  <div id="chat-box" style="display: none;">
    <div id="chat-header">
      <span>Chat Assistant</span>
      <button id="clear-chat">🗑️</button>
    </div>

    <div id="chat-body"></div>

    <div id="chat-input-area">
      <input type="text" id="chat-input" placeholder="Ketik pesan...">
      <button id="chat-send">Kirim</button>
    </div>
  </div>
</div>

<script src="assets/js/chat.js"></script>

