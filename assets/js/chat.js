document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("chat-toggle");
  const chatBox = document.getElementById("chat-box");
  const chatBody = document.getElementById("chat-body");
  const chatInput = document.getElementById("chat-input");
  const sendButton = document.getElementById("chat-send");
  const clearButton = document.getElementById("clear-chat");

  let chatData = {};


  fetch("assets/data/chat.json")
    .then((res) => res.json())
    .then((data) => {
      chatData = data;
    })
    .catch(() => {
      console.error("Gagal memuat chat.json");
    });


  toggleButton.addEventListener("click", () => {
    if (chatBox.style.display === "none" || chatBox.style.display === "") {
      chatBox.style.display = "flex";
      toggleButton.textContent = "✖";
    } else {
      chatBox.style.display = "none";
      toggleButton.textContent = "💬";
    }
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

   
    const reply = chatData[message.toLowerCase()] || "Maaf, saya belum memiliki informasi tentang itu 🌿.";
    setTimeout(() => appendMessage("Asisten", reply), 400);
  }


  function appendMessage(sender, text) {
    const msg = document.createElement("div");
    msg.innerHTML = `<strong>${sender}:</strong> ${text}`;
    msg.style.margin = "5px 0";
    chatBody.appendChild(msg);
    chatBody.scrollTop = chatBody.scrollHeight;
  }

  clearButton.addEventListener("click", () => {
    chatBody.innerHTML = "";
  });
});
