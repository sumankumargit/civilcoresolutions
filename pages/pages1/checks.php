<?php include '../../navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>On-Site Quality Checks | Tech Visions</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .collapsible {
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }
    .content {
      display: none;
      padding: 0 1rem 1rem;
    }
    .active .content {
      display: block;
    }
  </style>
</head>
<body class="bg-white text-gray-800">
  <div class="max-w-4xl mx-auto px-6 py-10">
    <h1 class="text-4xl font-bold text-center text-red-700 mb-10">🏗️ On-Site Quality Checks</h1>

    <div id="accordion">


      <!-- Template Section -->
      <script>
        const sections = [
          {
            title: "🧱 Foundation & Excavation Checks",
            items: [
              "Site leveling and soil bearing capacity validation",
              "Excavation depth and layout verification",
              "Anti-termite treatment confirmation",
              "PCC (Plain Cement Concrete) mix and thickness check"
            ]
          },
          {
            title: "🏗️ Reinforcement (Steel) Checks",
            items: [
              "Rebar diameter and spacing confirmation",
              "Proper bending and lapping of bars",
              "Cover block placement verification",
              "Binding wire and rust-free steel inspection"
            ]
          },
          {
            title: "🔲 Formwork & Shuttering Checks",
            items: [
              "Material quality and alignment",
              "Tightness to avoid leakage",
              "Level and plumb checking",
              "Oil application (release agent) on shuttering"
            ]
          },
          {
            title: "🧪 Concrete Work Checks",
            items: [
              "Mix design and slump test on-site",
              "Cube sample collection for testing",
              "Proper compaction/vibration",
              "Pouring sequence and setting time"
            ]
          },
          {
            title: "🧱 Masonry (Brick/Block) Checks",
            items: [
              "Brick quality, soaking, and strength",
              "Mortar ratio consistency",
              "Line, level, and plumb for walls",
              "Proper curing and bonding"
            ]
          },
          {
            title: "🧍 Column & Beam Checks",
            items: [
              "Verticality (plumb) of columns",
              "Beam alignment and reinforcement checks",
              "Clear cover and stirrup spacing",
              "Centering and shuttering inspection"
            ]
          },
          {
            title: "🧱 Slab Checks",
            items: [
              "Slab thickness measurement",
              "Reinforcement spacing",
              "Concrete finish and slope",
              "Water ponding test (for flatness & leaks)"
            ]
          },
          {
            title: "💧 Waterproofing Checks",
            items: [
              "Bathroom & balcony waterproofing membrane",
              "Overhead/underground tank coating",
              "Basement wall waterproofing",
              "Water tightness test (for wet areas)"
            ]
          },
          {
            title: "🔧 Plastering & Finishing Checks",
            items: [
              "Mortar quality and uniform thickness",
              "Surface evenness and cracks",
              "Corner alignment and groove work",
              "Curing process monitoring"
            ]
          },
          {
            title: "🚿 Plumbing Checks",
            items: [
              "Pressure test for pipes",
              "Slope of drainage lines",
              "Concealed piping routes",
              "Leak inspection at joints"
            ]
          },
          {
            title: "💡 Electrical Checks",
            items: [
              "Conduit placement and depth",
              "Earthing inspection",
              "DB (Distribution Box) location and load",
              "Load balancing in circuits"
            ]
          },
          {
            title: "🚪 Door/Window Frame Checks",
            items: [
              "Frame level, plumb, and alignment",
              "Fastener quality and spacing",
              "Gap sealing and groove finish"
            ]
          },
          {
            title: "🛠️ Tile & Flooring Checks",
            items: [
              "Surface leveling before tile fixing",
              "Adhesive and joint width consistency",
              "Tile gradient in wet areas",
              "Grouting quality"
            ]
          },
          {
            title: "🏗️ Structural Safety Checks",
            items: [
              "Load path continuity",
              "Center of gravity balance",
              "Cantilever support verification"
            ]
          },
          {
            title: "🔍 Final Quality Audit",
            items: [
              "Snag list creation and resolution",
              "Clean site handover",
              "As-built drawings & checklists"
            ]
          }
        ];

        document.addEventListener("DOMContentLoaded", () => {
          const container = document.getElementById("accordion");
          sections.forEach((section, index) => {
            const div = document.createElement("div");
            div.className = "mb-4 border border-gray-300 rounded-lg shadow";

            const header = document.createElement("div");
            header.className = "collapsible bg-red-600 text-white font-semibold px-6 py-4 rounded-t cursor-pointer";
            header.innerText = section.title;
            header.onclick = () => div.classList.toggle("active");

            const content = document.createElement("div");
            content.className = "content bg-white text-sm text-gray-700";

            section.items.forEach(item => {
              const p = document.createElement("p");
              p.className = "px-6 py-2 border-b border-gray-200 hover:bg-gray-50";
              p.innerText = item;
              content.appendChild(p);
            });

            div.appendChild(header);
            div.appendChild(content);
            container.appendChild(div);
          });
        });
      </script>
        <?php include '../../icon/socialmediaicons.php'; ?>
        <?php include '../../icon/chatbot.php'; ?>  
    </div>
  </div>
       <?php include '../../footer.php'; ?> 
</body>
</html>
