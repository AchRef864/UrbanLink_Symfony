// Initialize the map with better defaults
const map = L.map('map', {
  center: [33.8869, 9.5375],
  zoom: 13,
  zoomControl: false,
  attributionControl: false,
  fullscreenControl: true
});

// Base layers
const osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

const satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
  attribution: 'Tiles &copy; Esri'
});

// Add default layer
osmLayer.addTo(map);

// Initialize feature groups and controls
const savedMarkers = new L.FeatureGroup().addTo(map);
const markerCluster = L.markerClusterGroup().addTo(map);
let routingControl;

// Initialize geocoder
const geocoder = L.Control.Geocoder.nominatim();

// Custom popup template
function createPopup(title, content, buttons = []) {
  return `
    <div class="custom-popup">
      <div class="popup-header">${title}</div>
      <div class="popup-body">${content}</div>
      ${buttons.length ? `
        <div class="popup-footer">
          ${buttons.map(btn => `
            <button class="popup-btn popup-btn-${btn.type}" 
                    onclick="${btn.action}">
              ${btn.text}
            </button>
          `).join('')}
        </div>
      ` : ''}
    </div>
  `;
}

// DOM elements
const sidebar = document.getElementById('sidebar');
const mobileToggle = document.getElementById('mobileToggle');
const sidebarClose = document.getElementById('sidebarClose');
const fullscreenBtn = document.getElementById('fullscreenBtn');
const layersBtn = document.getElementById('layersBtn');
const directionsToggle = document.getElementById('directionsToggle');
const directionsPanel = document.getElementById('directionsPanel');
const directionsClose = document.getElementById('directionsClose');
const directionsContent = document.getElementById('directionsContent');
const locateBtn = document.getElementById('locateBtn');
const markerBtn = document.getElementById('markerBtn');
const saveLocationBtn = document.getElementById('saveLocationBtn');
const planRouteBtn = document.getElementById('planRouteBtn');
const clearRouteBtn = document.getElementById('clearRouteBtn');
const searchInput = document.getElementById('searchInput');
const startPoint = document.getElementById('startPoint');
const endPoint = document.getElementById('endPoint');
const coordinates = document.getElementById('coordinates');
const zoomLevel = document.getElementById('zoomLevel');
const timestamp = document.getElementById('timestamp');
const weatherWidget = document.getElementById('weatherWidget');
const weatherLocation = document.getElementById('weatherLocation');
const savedLocations = document.getElementById('savedLocations');

// Mobile menu toggle
mobileToggle.addEventListener('click', () => {
  sidebar.classList.add('active');
});

sidebarClose.addEventListener('click', () => {
  sidebar.classList.remove('active');
});

// Fullscreen control
fullscreenBtn.addEventListener('click', () => {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen().catch(err => {
      alert(`Error attempting to enable fullscreen: ${err.message}`);
    });
    fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
      fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i>';
    }
  }
});

// Layers control
layersBtn.addEventListener('click', () => {
  if (map.hasLayer(osmLayer)) {
    map.removeLayer(osmLayer);
    map.addLayer(satelliteLayer);
    layersBtn.innerHTML = '<i class="fas fa-map"></i>';
  } else {
    map.removeLayer(satelliteLayer);
    map.addLayer(osmLayer);
    layersBtn.innerHTML = '<i class="fas fa-satellite"></i>';
  }
});

// Directions panel toggle
directionsToggle.addEventListener('click', () => {
  directionsPanel.classList.toggle('active');
  directionsToggle.classList.toggle('active');
});

directionsClose.addEventListener('click', () => {
  directionsPanel.classList.remove('active');
  directionsToggle.classList.remove('active');
});

// Locate button with better feedback
locateBtn.addEventListener('click', () => {
  if (navigator.geolocation) {
    locateBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Locating...</span>';
    locateBtn.classList.add('pulse');
    
    navigator.geolocation.getCurrentPosition(
      position => {
        const latlng = [position.coords.latitude, position.coords.longitude];
        const accuracy = position.coords.accuracy;
        
        // Remove previous location markers
        map.eachLayer(layer => {
          if (layer.options && layer.options.className === 'location-marker') {
            map.removeLayer(layer);
          }
        });
        
        // Add marker with custom icon
        const locationMarker = L.marker(latlng, {
          icon: L.divIcon({
            className: 'location-marker',
            html: '<i class="fas fa-user" style="color:red;"></i>',
            iconSize: [30, 30]
          })
        }).addTo(map);
        
        // Add accuracy circle
        L.circle(latlng, {
          radius: accuracy,
          color: '#4361ee',
          fillColor: '#4361ee',
          fillOpacity: 0.2
        }).addTo(map);
        
        // Center map with appropriate zoom
        map.setView(latlng, Math.max(15, map.getZoom()));
        
        // Update weather for current location
        updateWeather(position.coords.latitude, position.coords.longitude);
        
        // Get location name
        getLocationName(position.coords.latitude, position.coords.longitude);
        
        // Reset button state
        locateBtn.innerHTML = '<i class="fas fa-location-arrow"></i><span>My Location</span>';
        locateBtn.classList.remove('pulse');
      },
      error => {
        alert("Could not get your location: " + error.message);
        locateBtn.innerHTML = '<i class="fas fa-location-arrow"></i><span>My Location</span>';
        locateBtn.classList.remove('pulse');
      },
      {
        enableHighAccuracy: true,
        timeout: 10000
      }
    );
  } else {
    alert("Geolocation is not supported by your browser");
  }
});

// Get location name for weather widget
function getLocationName(lat, lng) {
  fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
    .then(response => response.json())
    .then(data => {
      const locationName = data.address?.city || data.address?.town || data.address?.village || 
                          data.address?.county || data.address?.state || "Current Location";
      weatherLocation.textContent = locationName;
    })
    .catch(error => {
      console.error("Error fetching location name:", error);
      weatherLocation.textContent = "Current Location";
    });
}

// Marker button
markerBtn.addEventListener('click', () => {
  const markerMode = confirm("Enable marker mode? Click on the map to place markers. Click OK to continue or Cancel to stop.");
  
  if (markerMode) {
    map.once('click', function placeMarker(e) {
      const marker = L.marker(e.latlng, {
        icon: L.divIcon({
          className: 'custom-marker',
          html: '<i class="fas fa-map-marker-alt" style="color:red;"></i>',
          iconSize: [30, 30]
        }),
        draggable: true
      }).addTo(map);
      
      marker.bindPopup(
        createPopup(
          "Custom Marker",
          `Location: ${e.latlng.lat.toFixed(4)}, ${e.latlng.lng.toFixed(4)}<br>${new Date().toLocaleString()}`,
          [
            {
              type: 'primary',
              text: 'Save',
              action: `saveLocation(${e.latlng.lat}, ${e.latlng.lng}, 'Custom Location')`
            },
            {
              type: 'danger',
              text: 'Remove',
              action: 'this._source.remove()'
            }
          ]
        )
      ).openPopup();
      
      // Allow placing multiple markers
      map.once('click', placeMarker);
    });
  }
});

// Save location button
saveLocationBtn.addEventListener('click', () => {
  const center = map.getCenter();
  const locationName = prompt("Enter a name for this location:", "My Location");
  
  if (locationName) {
    saveLocation(center.lat, center.lng, locationName);
  }
});

// Function to save locations
function saveLocation(lat, lng, name) {
  // Create marker
  const marker = L.marker([lat, lng], {
    icon: L.divIcon({
      className: 'saved-marker',
      html: '<i class="fas fa-bookmark" style="color:red;"></i>',
      iconSize: [30, 30]
    })
  }).addTo(savedMarkers);
  
  marker.bindPopup(
    createPopup(
      name,
      `Location: ${lat.toFixed(4)}, ${lng.toFixed(4)}`,
      [
        {
          type: 'danger',
          text: 'Remove',
          action: `removeSavedLocation('${name}')`
        }
      ]
    )
  );
  
  // Add to saved locations list
  const locationItem = document.createElement('div');
  locationItem.className = 'location-item';
  locationItem.innerHTML = `
    <span>${name}</span>
    <div class="location-actions">
      <button class="location-btn" onclick="zoomToLocation(${lat}, ${lng})">
        <i class="fas fa-search"></i>
      </button>
      <button class="location-btn" onclick="removeSavedLocation('${name}')">
        <i class="fas fa-trash-alt"></i>
      </button>
    </div>
  `;
  
  // Remove empty state if it exists
  const emptyState = savedLocations.querySelector('.empty-state');
  if (emptyState) {
    emptyState.remove();
  }
  
  savedLocations.appendChild(locationItem);
}

// Function to remove saved location
function removeSavedLocation(name) {
  // Remove marker
  savedMarkers.eachLayer(layer => {
    if (layer.getPopup() && layer.getPopup().getContent().includes(name)) {
      savedMarkers.removeLayer(layer);
    }
  });
  
  // Remove from list
  const items = savedLocations.querySelectorAll('.location-item');
  items.forEach(item => {
    if (item.textContent.includes(name)) {
      item.remove();
    }
  });
  
  // Show empty state if no locations left
  if (savedLocations.children.length === 0) {
    const emptyState = document.createElement('div');
    emptyState.className = 'empty-state';
    emptyState.innerHTML = '<p>No saved locations yet. Click "Save Location" to add some.</p>';
    savedLocations.appendChild(emptyState);
  }
}

// Function to zoom to saved location
function zoomToLocation(lat, lng) {
  map.setView([lat, lng], 15);
  sidebar.classList.remove('active');
}

// Route planning with beautiful directions display
planRouteBtn.addEventListener('click', () => {
  const start = startPoint.value;
  const end = endPoint.value;
  
  if (!start || !end) {
    alert("Please enter both start and end points");
    return;
  }
  
  // Clear previous route if exists
  if (routingControl) {
    map.removeControl(routingControl);
  }
  
  // Show loading state
  planRouteBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Planning Route...</span>';
  
  // Geocode start and end points
  Promise.all([
    new Promise((resolve) => geocoder.geocode(start, resolve)),
    new Promise((resolve) => geocoder.geocode(end, resolve))
  ]).then(results => {
    const startResults = results[0];
    const endResults = results[1];
    
    if (!startResults.length || !endResults.length) {
      alert("Could not find one or both locations");
      planRouteBtn.innerHTML = '<i class="fas fa-directions"></i><span>Plan Route</span>';
      return;
    }
    
    const startLatLng = startResults[0].center;
    const endLatLng = endResults[0].center;
    
    // Create route
    routingControl = L.Routing.control({
      waypoints: [
        L.latLng(startLatLng),
        L.latLng(endLatLng)
      ],
      routeWhileDragging: true,
      showAlternatives: false,
      addWaypoints: false,
      draggableWaypoints: false,
      fitSelectedRoutes: true,
      lineOptions: {
        styles: [{color: '#4361ee', opacity: 0.7, weight: 5}]
      },
      formatter: new L.Routing.Formatter({
        language: 'en',
        unit: 'metric'
      }),
      createMarker: function(i, wp) {
        return L.marker(wp.latLng, {
          icon: L.divIcon({
            className: i === 0 ? 'route-start-marker' : 'route-end-marker',
            html: i === 0 ? '<i class="fas fa-map-marker-alt" style="color:var(--success); font-size:24px;"></i>' : 
                             '<i class="fas fa-flag-checkered" style="color:var(--danger); font-size:24px;"></i>',
            iconSize: [30, 30]
          })
        }).bindPopup(i === 0 ? `<b>Start Point</b><br>${start}` : `<b>Destination</b><br>${end}`);
      }
    }).addTo(map);
    
    // Handle route events
    routingControl.on('routesfound', function(e) {
      const routes = e.routes;
      const plan = routes[0];
      
      // Clear previous directions
      directionsContent.innerHTML = '';
      
      // Add summary
      const summary = document.createElement('div');
      summary.className = 'direction-step';
      summary.innerHTML = `
        <div class="direction-icon">
          <i class="fas fa-info-circle"></i>
        </div>
        <div class="direction-text">
          <strong>Route Summary</strong>
          <div class="direction-distance">Total distance: ${(plan.summary.totalDistance / 1000).toFixed(1)} km • Estimated time: ${Math.round(plan.summary.totalTime / 60)} min</div>
        </div>
      `;
      directionsContent.appendChild(summary);
      
      // Add each instruction
      plan.instructions.forEach((instruction, index) => {
        const step = document.createElement('div');
        step.className = 'direction-step';
        
        let icon = 'fa-arrow-right';
        if (instruction.type.includes('Left')) icon = 'fa-arrow-turn-left';
        if (instruction.type.includes('Right')) icon = 'fa-arrow-turn-right';
        if (instruction.type.includes('Start')) icon = 'fa-flag';
        if (instruction.type.includes('Destination')) icon = 'fa-flag-checkered';
        if (instruction.type.includes('Roundabout')) icon = 'fa-rotate';
        
        step.innerHTML = `
          <div class="direction-icon">
            <i class="fas ${icon}"></i>
          </div>
          <div class="direction-text">
            ${instruction.text}
            ${instruction.distance > 0 ? `
              <div class="direction-distance">${(instruction.distance / 1000).toFixed(1)} km</div>
            ` : ''}
          </div>
        `;
        
        // Add click event to zoom to step
        step.addEventListener('click', () => {
          map.setView(instruction.intersection.coordinates, 17);
        });
        
        directionsContent.appendChild(step);
      });
      
      // Show directions panel
      directionsPanel.classList.add('active');
      directionsToggle.classList.add('active');
    });
    
    // Reset button state
    planRouteBtn.innerHTML = '<i class="fas fa-directions"></i><span>Plan Route</span>';
  }).catch(error => {
    alert("Error planning route: " + error.message);
    planRouteBtn.innerHTML = '<i class="fas fa-directions"></i><span>Plan Route</span>';
  });
});

// Clear route
clearRouteBtn.addEventListener('click', () => {
  if (routingControl) {
    map.removeControl(routingControl);
    routingControl = null;
  }
  
  // Clear directions
  directionsContent.innerHTML = '<div class="empty-directions"><p>No route directions available. Plan a route to see turn-by-turn navigation.</p></div>';
  directionsPanel.classList.remove('active');
  directionsToggle.classList.remove('active');
  
  // Clear input fields
  startPoint.value = '';
  endPoint.value = '';
});

// Search functionality
searchInput.addEventListener('keypress', (e) => {
  if (e.key === 'Enter') {
    const query = searchInput.value;
    if (!query) return;
    
    searchInput.disabled = true;
    
    geocoder.geocode(query, (results) => {
      searchInput.disabled = false;
      
      if (results && results.length > 0) {
        const firstResult = results[0];
        map.setView(firstResult.center, 15);
        
        L.marker(firstResult.center, {
          icon: L.divIcon({
            className: 'search-marker',
            html: '<i class="fas fa-search-location" style="color:red;"></i>',
            iconSize: [30, 30]
          })
        }).addTo(map)
          .bindPopup("<b>" + firstResult.name + "</b>")
          .openPopup();
      } else {
        alert("Location not found");
      }
    });
  }
});

// Update weather information
function updateWeather(lat, lng) {
  // In a real app, you would call a weather API here
  // This is just a simulation with realistic data
  const weatherConditions = [
    { icon: 'fa-sun', temp: '24°C', desc: 'Sunny' },
    { icon: 'fa-cloud', temp: '18°C', desc: 'Cloudy' },
    { icon: 'fa-cloud-rain', temp: '15°C', desc: 'Rainy' },
    { icon: 'fa-bolt', temp: '22°C', desc: 'Stormy' },
    { icon: 'fa-snowflake', temp: '-2°C', desc: 'Snowy' },
    { icon: 'fa-smog', temp: '20°C', desc: 'Foggy' }
  ];
  
  // Simulate getting weather based on latitude
  let weatherIndex;
  if (lat > 60) { // Cold regions
    weatherIndex = 4; // Snowy
  } else if (lat > 40) { // Temperate regions
    weatherIndex = Math.floor(Math.random() * 4); // Random between first 4
  } else { // Tropical regions
    weatherIndex = Math.random() > 0.7 ? 2 : 0; // Mostly sunny, sometimes rainy
  }
  
  const weather = weatherConditions[weatherIndex];
  
  weatherWidget.innerHTML = `
    <div class="weather-icon">
      <i class="fas ${weather.icon}"></i>
    </div>
    <div class="weather-info">
      <div class="weather-temp">${weather.temp}</div>
      <div class="weather-desc">${weather.desc}</div>
      <div class="weather-location">
        <i class="fas fa-map-marker-alt"></i>
        <span id="weatherLocation">Current Location</span>
      </div>
    </div>
  `;
}

// Update timestamp
function updateTimestamp() {
  const now = new Date();
  timestamp.textContent = `Local Time: ${now.toLocaleTimeString()}`;
  
  // Update weather every hour (simulated)
  if (now.getMinutes() === 0) {
    const center = map.getCenter();
    updateWeather(center.lat, center.lng);
  }
}


setInterval(updateTimestamp, 1000);
updateTimestamp();

// Update map info
map.on('mousemove', (e) => {
  coordinates.innerHTML = `<i class="fas fa-map-pin"></i> Lat: ${e.latlng.lat.toFixed(4)}, Lng: ${e.latlng.lng.toFixed(4)}`;
});

map.on('zoomend', () => {
  zoomLevel.innerHTML = `<i class="fas fa-search"></i> Zoom: ${map.getZoom()}`;
});

// Add some sample saved locations
saveLocation(33.8869, 9.5375, "tunis");
saveLocation(36.8065, 10.1815, "Sousse");
saveLocation(34.8029, 10.7411, "Sfax");

// Make functions available globally for HTML onclick handlers
window.saveLocation = saveLocation;
window.removeSavedLocation = removeSavedLocation;
window.zoomToLocation = zoomToLocation;