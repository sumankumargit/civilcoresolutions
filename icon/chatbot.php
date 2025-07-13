<!-- chatbot.php -->
<div id="chatbot" class="fixed bottom-6 right-6 z-50">

  <!-- Chat Toggle Button -->
  <button onclick="toggleChat()" class="bg-red-600 text-white p-4 rounded-full shadow-xl hover:bg-red-700 transition duration-300 animate-bounce">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
      <path d="M20 2H4C2.897 2 2 2.897 2 4v16l4-4h14c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"/>
    </svg>
  </button>

  <!-- Chat Box -->
  <div id="chatBox" class="hidden w-80 bg-white shadow-lg rounded-xl border border-gray-300 mt-2">
    <!-- Header -->
    <div class="bg-red-600 text-white p-3 rounded-t-xl">
      <h3 class="text-lg font-semibold">CiviBot</h3>
      <p class="text-sm">Ask your construction questions</p>
    </div>

    <!-- Messages -->
    <div class="p-4 h-64 overflow-y-auto text-sm" id="chatContent">
      <div class="mb-2 text-gray-700">👋 Hello! I'm CiviBot. How can I assist you today?</div>
    </div>

    <!-- Input -->
    <div class="border-t p-2 flex">
      <input type="text" id="chatInput" class="flex-grow border rounded-l px-2 py-1 text-sm focus:outline-none" placeholder="Ask a question...">
      <button onclick="sendChat()" class="bg-red-600 text-white px-4 rounded-r hover:bg-red-700 transition">Send</button>
    </div>
  </div>
</div>

<!-- Script -->
<script>
  function getBotReply(message) {
    const lower = message.toLowerCase();

    if (lower.includes("contact") || lower.includes("phone") || lower.includes("email")) {
      return "📞 You can reach us at <strong>8778116874</strong><br>📧 Email: <strong>sadhasiva112255@gmail.com</strong>";
    }

    if (lower.includes("calculator") && lower.includes("cost")) {
      return '💰 You can use our <a href="costcalculator.php" class="text-red-600 underline">Cost Calculator</a> for detailed pricing.';
    }

    if (lower.includes("material")) {
      return '📦 Try our <a href="material.php" class="text-red-600 underline">Material Cost Calculator</a> for accurate material pricing.';
    }

    if (lower.includes("service")) {
      return "🛠️ We offer Architectural Design, Plan Approvals, Quantity Surveying, Structural Drawings, and Engineer Hiring.";
    }

    if (lower.includes("hire") || lower.includes("engineer")) {
      return "👷‍♂️ Yes, you can hire certified engineers directly from CiviCore Solutions.";
    }

    if (lower.includes("location") || lower.includes("office") || lower.includes("address")) {
      return "📍 Our office is located at Patel Road, Perambur, Chennai-600011.";
    }

    if (lower.includes("hi") || lower.includes("hello")) {
      return "👋 Hi there! How can I help you today?";
    }

    return "🤔 I'm not sure about that. You can reach us at <strong>7871840566</strong> or <strong>toinfoharris@gmail.com</strong>.";
  }

  function toggleChat() {
    const box = document.getElementById('chatBox');
    box.classList.toggle('hidden');
  }

  function sendChat() {
    const input = document.getElementById('chatInput');
    const content = document.getElementById('chatContent');
    const question = input.value.trim();

    if (!question) return;

    content.innerHTML += `<div class="text-right text-gray-800 mb-2"><strong>You:</strong> ${question}</div>`;

    const response = getBotReply(question);
    content.innerHTML += `<div class="text-left text-black mb-4"><strong>CiviBot:</strong> ${response}</div>`;

    input.value = "";
    content.scrollTop = content.scrollHeight;
  }
</script>
