<!DOCTYPE html>
<html lang="id">
<?php include __DIR__ . '/includes/header.php'; ?>

<body class="d-flex flex-column min-vh-100">

  <?php include __DIR__ . '/includes/navbar.php'; ?>

  <main class="flex-fill">
    <?php
    // amankan nama page (hanya huruf, angka, underscore)
    $page = isset($_GET['page']) ? preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['page']) : 'home';
    $page_path = __DIR__ . "/pages/{$page}.php";

    if (file_exists($page_path)) {
      include $page_path;
    } else {
      include __DIR__ . "/pages/home.php";
    }
    ?>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

<!-- Chat Assistant -->
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
