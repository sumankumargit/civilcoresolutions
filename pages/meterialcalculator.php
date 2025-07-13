<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Building Material Calculator</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { background: #fff; color: #222; }
    .popup-section { animation: fadeIn 0.4s; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(30px);} to { opacity: 1; transform: none;} }
  </style>
</head>
<body class="font-sans">
  <?php include '../navbar.php'; ?>

  <section class="max-w-3xl mx-auto mt-10 p-6 bg-white border border-red-200 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center text-red-600 mb-6">Free Building Material Calculator</h1>
    <p class="text-center text-gray-700 mb-8">Fill in the details to find the materials required to build a space.</p>
    <form id="calc-form" class="space-y-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block mb-1 text-gray-700">Phone Number</label>
          <input type="tel" id="phone" pattern="[0-9]{10}" maxlength="10" class="w-full border border-gray-300 rounded p-2" placeholder="Enter 10 digit number" required />
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Name*</label>
          <input type="text" class="w-full border border-gray-300 rounded p-2" placeholder="Name*" required />
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Location of your Plot*</label>
          <input type="text" id="location" class="w-full border border-gray-300 rounded p-2" placeholder="Location*" autocomplete="off" required />
          <div id="location-suggestions" class="absolute z-10 bg-white border border-gray-300 rounded w-full hidden"></div>
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Plot Length in ft*</label>
          <input type="number" id="length" class="w-full border border-gray-300 rounded p-2" placeholder="Plot Length" required />
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Plot Breadth in ft*</label>
          <input type="number" id="breadth" class="w-full border border-gray-300 rounded p-2" placeholder="Plot Breadth" required />
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Number of Floors*</label>
          <input type="number" class="w-full border border-gray-300 rounded p-2" placeholder="1" required />
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Total BuiltUp Area*</label>
          <input type="number" class="w-full border border-gray-300 rounded p-2" placeholder="4000" required />
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Sump Capacity</label>
          <input type="number" class="w-full border border-gray-300 rounded p-2" placeholder="1000" />
        </div>
        <div>
          <label class="block mb-1 text-gray-700">RCC</label>
          <select class="w-full border border-gray-300 rounded p-2">
            <option value="">Select</option>
            <option value="yes">Required</option>
            <option value="no">Not Required</option>
          </select>
        </div>
        <div>
          <label class="block mb-1 text-gray-700">Sump Type</label>
          <select class="w-full border border-gray-300 rounded p-2">
            <option value="">Select</option>
            <option value="circular">Circular</option>
            <option value="square">Square</option>
          </select>
        </div>
      </div>
      <div>
        <p class="font-semibold mt-6 mb-2 text-red-500">Want higher Accuracy?</p>
        <button type="button" id="add-floor-btn" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded shadow">
          + Add Floor Level Data
        </button>
        <div id="floors-container" class="space-y-4 mt-4"></div>
        <p id="max-floor-message" class="text-red-400 font-medium mt-2 hidden">Please contact us to get more accurate data.</p>
      </div>
      <div class="text-center mt-6">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded text-lg shadow">
          Estimate Material for Free
        </button>
      </div>
    </form>
    <div id="popup-section"></div>
  </section>

  <?php include '../footer.php'; ?>
    <?php include '../icon/chatbot.php'; ?>
     <?php include '../icon//socialmediaicons.php'; ?>

  <script>
    // Floor level data logic
    const floorsContainer = document.getElementById('floors-container');
    const addFloorBtn = document.getElementById('add-floor-btn');
    const maxFloorMessage = document.getElementById('max-floor-message');
    let floorCount = 0;
    const maxFloors = 3;
    addFloorBtn.addEventListener('click', () => {
      if (floorCount < maxFloors) {
        floorCount++;
        const floorDiv = document.createElement('div');
        floorDiv.className = 'p-4 border border-gray-200 rounded bg-gray-50 mt-4';
        floorDiv.innerHTML = `
          <h4 class="font-bold text-red-500 mb-2">Floor ${floorCount} Details</h4>
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block font-medium mb-1">Enter Size (e.g. 20/30)</label>
              <input type="text" class="floor-size w-full border border-gray-300 bg-white text-black rounded p-2" placeholder="e.g. 20/30" />
            </div>
            <div>
              <label class="block font-medium mb-1">Room Count</label>
              <input type="number" class="w-full border border-gray-300 bg-white text-black rounded p-2 focus:border-red-500 focus:ring-2 focus:ring-red-200" />
            </div>
          </div>
          <div class="floor-popup mt-4"></div>
        `;
        floorsContainer.appendChild(floorDiv);

        // Add event for size input
        const sizeInput = floorDiv.querySelector('.floor-size');
        const popupDiv = floorDiv.querySelector('.floor-popup');
        sizeInput.addEventListener('change', function() {
          const val = sizeInput.value.replace(/\s/g, '').replace(/x/i, '/');
          let [w, h] = val.split('/');
          w = parseInt(w); h = parseInt(h);
          if (!isNaN(w) && !isNaN(h)) {
            let key = `${w}x${h}`;
            let page = sizeToPage[key];
            if (!page) {
              key = `${h}x${w}`;
              page = sizeToPage[key];
            }
            if (!page) {
              const nearest = findNearestSize(w, h);
              page = nearest ? nearest.page : null;
            }
            if (page) {
              fetch(`pages2/${page}.php`).then(r=>r.text()).then(html=>{
                popupDiv.innerHTML = `<div class='popup-section border border-red-300 rounded-lg shadow-lg'>${html}</div>`;
              });
            } else {
              popupDiv.innerHTML = `<div class='popup-section text-red-600 font-bold'>No estimate found for this size.</div>`;
            }
          } else {
            popupDiv.innerHTML = '';
          }
        });

        if (floorCount === maxFloors) {
          maxFloorMessage.classList.remove('hidden');
          addFloorBtn.disabled = true;
          addFloorBtn.classList.add('opacity-50', 'cursor-not-allowed');
        }
      }
    });

    // Popup logic for matching estimate pages
    const sizeToPage = {
      '20x30': '2030',
      '30x20': '2030',
      '20x50': '2050',
      '25x40': '1000',
      '30x40': '3040',
      '40x30': '3040',
      '30x50': '3050',
      '40x50': '3050',
      '30x60': '3060',
      '40x60': '4060',
      '50x80': '5080',
    };
    function findNearestSize(len, bre) {
      const sizes = [
        {w:20,h:30,page:'2030'}, {w:20,h:50,page:'2050'}, {w:30,h:40,page:'3040'},
        {w:30,h:50,page:'3050'}, {w:30,h:60,page:'3060'}, {w:40,h:60,page:'4060'}, {w:50,h:80,page:'5080'}
      ];
      let minDiff = Infinity, best = null;
      for(const s of sizes) {
        const diff = Math.abs(len * bre - s.w * s.h);
        if(diff < minDiff) { minDiff = diff; best = s; }
      }
      return best;
    }
    document.getElementById('calc-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const phone = document.getElementById('phone').value;
      if (!/^\d{10}$/.test(phone)) {
        alert('Please enter a valid 10 digit phone number.');
        return;
      }
      const len = parseInt(document.getElementById('length').value);
      const bre = parseInt(document.getElementById('breadth').value);
      let key = `${len}x${bre}`;
      let page = sizeToPage[key];
      let popup = document.getElementById('popup-section');
      if(!page) {
        // Try reverse
        key = `${bre}x${len}`;
        page = sizeToPage[key];
      }
      if(!page) {
        // Find nearest
        const nearest = findNearestSize(len, bre);
        page = nearest ? nearest.page : null;
      }
      if(page) {
        fetch(`pages2/${page}.php`).then(r=>r.text()).then(html=>{
          popup.innerHTML = `<div class='popup-section mt-8 border border-red-300 rounded-lg shadow-lg'>${html}</div>`;
        });
      } else {
        popup.innerHTML = `<div class='popup-section mt-8 text-red-600 font-bold'>No estimate found for this size.</div>`;
      }
    });

    // Google Maps Autocomplete for Location
    let locationInput = document.getElementById('location');
    let suggestionsBox = document.getElementById('location-suggestions');
    let debounceTimeout;
    locationInput.addEventListener('input', function() {
      clearTimeout(debounceTimeout);
      const query = locationInput.value.trim();
      if (query.length < 3) {
        suggestionsBox.classList.add('hidden');
        return;
      }
      debounceTimeout = setTimeout(() => {
        fetch(`https://maps.googleapis.com/maps/api/place/autocomplete/json?input=${encodeURIComponent(query)}&types=geocode&key=YOUR_GOOGLE_MAPS_API_KEY`)
          .then(res => res.json())
          .then(data => {
            if (data.status === 'OK') {
              suggestionsBox.innerHTML = data.predictions.map(p => `<div class='p-2 hover:bg-gray-200 cursor-pointer'>${p.description}</div>`).join('');
              suggestionsBox.classList.remove('hidden');
              Array.from(suggestionsBox.children).forEach((child, idx) => {
                child.addEventListener('click', () => {
                  locationInput.value = data.predictions[idx].description;
                  suggestionsBox.classList.add('hidden');
                });
              });
            } else {
              suggestionsBox.classList.add('hidden');
            }
          })
          .catch(() => suggestionsBox.classList.add('hidden'));
      }, 300);
    });
    document.addEventListener('click', function(e) {
      if (!locationInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
        suggestionsBox.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
