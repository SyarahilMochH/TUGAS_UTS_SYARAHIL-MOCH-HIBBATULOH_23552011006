document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("chat-toggle");
  const chatBox = document.getElementById("chat-box");
  const chatBody = document.getElementById("chat-body");
  const chatInput = document.getElementById("chat-input");
  const sendButton = document.getElementById("chat-send");
  const clearButton = document.getElementById("clear-chat");

  let chatData = {};
  let waitingAnswer = null; // Menyimpan pertanyaan yang belum ada jawaban


  fetch("assets/data/chat.json")
    .then((res) => res.json())
    .then((data) => (chatData = data))
    .catch(() => console.error("Gagal memuat chat.json"));


  toggleButton.addEventListener("click", () => {
    chatBox.style.display =
      chatBox.style.display === "none" || chatBox.style.display === ""
        ? "flex"
        : "none";
    toggleButton.textContent = chatBox.style.display === "flex" ? "✖" : "💬";
  });

  sendButton.addEventListener("click", sendMessage);
  chatInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") sendMessage();
  });

  function sendMessage() {
    const message = chatInput.value.trim();
    if (message === "") return;

    appendMessage("Kamu", message);
    chatInput.value = "";

    // Jika sistem sedang menunggu jawaban user untuk disimpan
    if (waitingAnswer) {
      saveQA(waitingAnswer, message);
      waitingAnswer = null;
      return;
    }

    // Normal chat flow
    const key = message.toLowerCase();
    const reply = chatData[key];

    if (reply) {
      setTimeout(() => appendMessage("Asisten", reply), 400);
    } else {
      waitingAnswer = message; // Simpan pertanyaan baru
      setTimeout(() => {
        appendMessage(
          "Asisten",
          "Maaf, saya belum punya jawabannya. Silakan tuliskan jawabannya untuk saya simpan 🌱."
        );
      }, 400);
    }
  }

  function appendMessage(sender, text) {
    const msg = document.createElement("div");
    msg.innerHTML = `<strong>${sender}:</strong> ${text}`;
    msg.style.margin = "5px 0";
    chatBody.appendChild(msg);
    chatBody.scrollTop = chatBody.scrollHeight;
  }

  function saveQA(question, answer) {
    fetch("save.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ question, answer }),
    })
      .then((res) => res.text())
      .then((res) => {
        appendMessage("Asisten", res);
        chatData[question.toLowerCase()] = answer;
      })
      .catch(() => {
        appendMessage("Asisten", "Gagal menyimpan jawaban.");
      });
  }

  clearButton.addEventListener("click", () => {
    chatBody.innerHTML = "";
  });
});
