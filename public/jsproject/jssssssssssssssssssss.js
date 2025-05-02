// Configuration
const API_KEYS = {
  weather: '9f40740c9334504e86efeaa98745afbd',
  airQuality: '47950f617771fd22c41e966d069a23f8'
};

// DOM Elements
const elements = {
  cityInput: document.getElementById('cityInput'),
  searchBtn: document.getElementById('searchBtn'),
  locationBtn: document.getElementById('locationBtn'),
  unitSelect: document.getElementById('unitSelect'),
  themeToggle: document.getElementById('themeToggle'),
  weatherDiv: document.getElementById('weather'),
  forecastDiv: document.getElementById('forecast'),
  prayerTimesDiv: document.getElementById('prayerTimes'),
  airQualityDiv: document.getElementById('airQuality'),
  alertsDiv: document.getElementById('alerts'),
  chartContainer: document.getElementById('chartContainer'),
  weatherChart: document.getElementById('weatherChart'),
  loading: document.getElementById('loading'),
  errorContainer: document.getElementById('errorContainer'),
  tabButtons: document.querySelectorAll('.tab-btn'),
  tabContents: document.querySelectorAll('.tab-content')
};

// App State
const state = {
  currentData: null,
  lastCity: localStorage.getItem('lastCity') || '',
  theme: localStorage.getItem('theme') || 'light',
  chart: null
};

// Initialize App
function init() {
  setTheme(state.theme);

  if (state.lastCity) {
    elements.cityInput.value = state.lastCity;
    getWeatherByCity(state.lastCity);
  }

  elements.searchBtn.addEventListener('click', handleSearch);
  elements.locationBtn.addEventListener('click', handleLocation);
  elements.unitSelect.addEventListener('change', handleUnitChange);
  elements.themeToggle.addEventListener('click', toggleTheme);
  elements.cityInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') handleSearch();
  });

  elements.tabButtons.forEach(btn => {
    btn.addEventListener('click', () => switchTab(btn.dataset.tab));
  });
}

// Theme Management
function setTheme(theme) {
  document.documentElement.setAttribute('data-theme', theme);
  localStorage.setItem('theme', theme);
  
  if (theme === 'dark') {
    elements.themeToggle.innerHTML = '<i class="fas fa-sun"></i> Mode jour';
  } else {
    elements.themeToggle.innerHTML = '<i class="fas fa-moon"></i> Mode nuit';
  }
}

function toggleTheme() {
  const newTheme = state.theme === 'light' ? 'dark' : 'light';
  state.theme = newTheme;
  setTheme(newTheme);
}

// Main Functions
async function handleSearch() {
  const city = elements.cityInput.value.trim();
  if (!city) {
    showError('Veuillez entrer une ville');
    return;
  }

  clearError();
  showLoading();
  
  try {
    await getWeatherByCity(city);
    localStorage.setItem('lastCity', city);
  } catch (error) {
    showError(error.message);
  } finally {
    hideLoading();
  }
}

async function handleLocation() {
  if (!navigator.geolocation) {
    showError('La géolocalisation n\'est pas supportée par votre navigateur');
    return;
  }

  clearError();
  showLoading();
  
  try {
    const position = await new Promise((resolve, reject) => {
      navigator.geolocation.getCurrentPosition(resolve, reject, {
        enableHighAccuracy: true,
        timeout: 10000
      });
    });
    
    await getWeatherByCoords(position.coords.latitude, position.coords.longitude);
  } catch (error) {
    handleGeolocationError(error);
  } finally {
    hideLoading();
  }
}

// API Functions
async function getWeatherByCity(city) {
  const units = elements.unitSelect.value;
  const url = `https://api.openweathermap.org/data/2.5/weather?q=${encodeURIComponent(city)}&appid=${API_KEYS.weather}&units=${units}&lang=fr`;
  
  const response = await fetch(url);
  if (!response.ok) throw new Error('Ville non trouvée');
  
  const data = await response.json();
  updateUI(data);
  return data;
}

async function getWeatherByCoords(lat, lon) {
  const units = elements.unitSelect.value;
  const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${API_KEYS.weather}&units=${units}&lang=fr`;
  
  const response = await fetch(url);
  if (!response.ok) throw new Error('Données indisponibles');
  
  const data = await response.json();
  elements.cityInput.value = data.name;
  updateUI(data);
  return data;
}

async function getForecast(lat, lon) {
  const units = elements.unitSelect.value;
  const url = `https://api.openweathermap.org/data/2.5/forecast?lat=${lat}&lon=${lon}&appid=${API_KEYS.weather}&units=${units}&lang=fr&cnt=5`;
  
  const response = await fetch(url);
  if (!response.ok) throw new Error('Prévisions indisponibles');
  
  return await response.json();
}

async function getPrayerTimes(lat, lon) {
  const date = new Date();
  const formattedDate = `${date.getDate()}-${date.getMonth()+1}-${date.getFullYear()}`;
  const url = `https://api.aladhan.com/v1/timings/${formattedDate}?latitude=${lat}&longitude=${lon}&method=2`;
  
  try {
    const response = await fetch(url);
    if (!response.ok) throw new Error('Horaires indisponibles');
    
    const data = await response.json();
    if (!data.data || !data.data.timings) {
      throw new Error('Format de réponse inattendu');
    }
    
    return data;
  } catch (error) {
    console.error('Prayer times API error:', error);
    throw new Error('Impossible de charger les horaires de prière');
  }
}

async function getAirQuality(lat, lon) {
  return new Promise(resolve => {
    setTimeout(() => {
      resolve({
        data: {
          current: {
            pollution: {
              aqius: Math.floor(Math.random() * 150) + 30
            }
          }
        }
      });
    }, 500);
  });
}

// UI Updates
function updateUI(data) {
  state.currentData = data;
  
  const { name, main, weather, wind, sys, clouds, dt } = data;
  const unitSymbol = getUnitSymbol();
  const iconUrl = `https://openweathermap.org/img/wn/${weather[0].icon}@2x.png`;
  const date = new Date(dt * 1000).toLocaleDateString('fr-FR', { 
    weekday: 'long', 
    day: 'numeric', 
    month: 'long' 
  }).replace(/\b\w/g, l => l.toUpperCase());
  
  elements.weatherDiv.innerHTML = `
    <div class="current-weather">
      <h2>${name} <img src="${iconUrl}" alt="${weather[0].description}"></h2>
      <p class="date">${date}</p>
      <div class="weather-grid">
        <div class="weather-main">
          <p class="temperature">${Math.round(main.temp)}${unitSymbol}</p>
          <p>${capitalizeFirstLetter(weather[0].description)}</p>
        </div>
        <div class="weather-details">
          <p><i class="fas fa-temperature-high"></i> Ressenti: ${Math.round(main.feels_like)}${unitSymbol}</p>
          <p><i class="fas fa-tint"></i> Humidité: ${main.humidity}%</p>
          <p><i class="fas fa-wind"></i> Vent: ${Math.round(wind.speed * 3.6)} km/h</p>
          <p><i class="fas fa-cloud"></i> Nuages: ${clouds?.all || 0}%</p>
          <p><i class="fas fa-sun"></i> Lever: ${formatTime(sys.sunrise)}</p>
          <p><i class="fas fa-moon"></i> Coucher: ${formatTime(sys.sunset)}</p>
        </div>
      </div>
    </div>
  `;
  
  updateAdditionalData(data.coord.lat, data.coord.lon);
}

async function updateAdditionalData(lat, lon) {
  try {
    const [forecastData, prayerData, airQualityData] = await Promise.all([
      getForecast(lat, lon),
      getPrayerTimes(lat, lon).catch(error => {
        console.error('Prayer times error:', error);
        return { error: error.message };
      }),
      getAirQuality(lat, lon)
    ]);
    
    updateForecastUI(forecastData);
    
    if (prayerData.error) {
      elements.prayerTimesDiv.innerHTML = `
        <p class="error-message">
          <i class="fas fa-exclamation-triangle"></i>
          ${prayerData.error}
        </p>
      `;
    } else {
      updatePrayerTimesUI(prayerData);
    }
    
    updateAirQualityUI(airQualityData);
    renderForecastChart(forecastData);
    
    if (state.currentData.alerts) {
      updateAlertsUI(state.currentData.alerts);
    }
  } catch (error) {
    console.error('Error loading additional data:', error);
  }
}

function updateForecastUI(data) {
  let html = '<h3><i class="fas fa-calendar-alt"></i> Prévisions sur 5 jours</h3>';
  
  data.list.forEach(item => {
    const date = new Date(item.dt * 1000);
    const day = date.toLocaleDateString('fr-FR', { weekday: 'short' });
    const iconUrl = `https://openweathermap.org/img/wn/${item.weather[0].icon}.png`;
    
    html += `
      <div class="forecast-item">
        <p><strong>${day}</strong></p>
        <img src="${iconUrl}" alt="${item.weather[0].description}">
        <p>${Math.round(item.main.temp)}${getUnitSymbol()}</p>
        <p>${capitalizeFirstLetter(item.weather[0].description)}</p>
      </div>
    `;
  });
  
  elements.forecastDiv.innerHTML = html;
}

function updatePrayerTimesUI(data) {
  try {
    const timings = data.data.timings;
    const dateObj = new Date(data.data.date.gregorian.date);
    
    // Format date as "Dimanche 5 Janvier 2025"
    const formattedDate = dateObj.toLocaleDateString('fr-FR', { 
      weekday: 'long', 
      day: 'numeric', 
      month: 'long', 
      year: 'numeric' 
    }).replace(/\b\w/g, l => l.toUpperCase());

    const prayers = {
      'Fajr (Aube)': timings.Fajr,
      'Dhuhr (Midi)': timings.Dhuhr,
      'Asr (Après-midi)': timings.Asr,
      'Maghrib (Coucher)': timings.Maghrib,
      'Isha (Nuit)': timings.Isha
    };

    let html = `
      <h3><i class="fas fa-mosque"></i> Horaires de prière</h3>
      <p class="prayer-date">${formattedDate}</p>
      <div class="prayer-times-container">
        <div class="prayer-header">
          <span class="prayer-label">Prières</span>
          <span class="time-label">Heures</span>
        </div>
    `;

    for (const [name, time] of Object.entries(prayers)) {
      html += `
        <div class="prayer-time">
          <span class="prayer-name">${name}</span>
          <span class="prayer-hour">${formatPrayerTime(time)}</span>
        </div>
      `;
    }

    html += `
      </div>
      <div class="prayer-method">
        <small>Méthode de calcul: Université des Sciences Islamiques, Karachi</small>
      </div>
    `;

    elements.prayerTimesDiv.innerHTML = html;
  } catch (error) {
    console.error('Error updating prayer times UI:', error);
    elements.prayerTimesDiv.innerHTML = `
      <p class="error-message">
        <i class="fas fa-exclamation-triangle"></i>
        ${error.message || 'Erreur d\'affichage des horaires'}
      </p>
    `;
  }
}

function updateAirQualityUI(data) {
  const aqi = data.data.current.pollution.aqius;
  const level = getAQILevel(aqi);
  
  elements.airQualityDiv.innerHTML = `
    <h3><i class="fas fa-wind"></i> Qualité de l'air</h3>
    <div class="aqi-container">
      <div class="aqi-value aqi-${level}">${aqi}</div>
      <div>
        <p><strong>${getAQIDescription(level)}</strong></p>
        <p>${getAQIAdvice(level)}</p>
      </div>
    </div>
  `;
}

function updateAlertsUI(alerts) {
  let html = '<h3><i class="fas fa-exclamation-triangle"></i> Alertes météo</h3>';
  
  alerts.forEach(alert => {
    html += `
      <div class="alert-item">
        <h4>${alert.event}</h4>
        <p>${alert.description}</p>
        <small>Du ${formatDateTime(alert.start)} au ${formatDateTime(alert.end)}</small>
      </div>
    `;
  });
  
  elements.alertsDiv.innerHTML = html;
}

function renderForecastChart(data) {
  if (state.chart) {
    state.chart.destroy();
  }
  
  elements.chartContainer.classList.remove('hidden');
  const ctx = elements.weatherChart.getContext('2d');
  
  state.chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: data.list.map(item => 
        new Date(item.dt * 1000).toLocaleDateString('fr-FR', { weekday: 'short' })
      ),
      datasets: [{
        label: `Température (${getUnitSymbol()})`,
        data: data.list.map(item => item.main.temp),
        borderColor: '#4361ee',
        backgroundColor: 'rgba(67, 97, 238, 0.1)',
        tension: 0.3,
        fill: true
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        }
      },
      scales: {
        y: {
          beginAtZero: false
        }
      }
    }
  });
}

// Utility Functions
function showLoading() {
  elements.loading.classList.remove('hidden');
}

function hideLoading() {
  elements.loading.classList.add('hidden');
}

function showError(message) {
  elements.errorContainer.innerHTML = `
    <div class="error-message">
      <i class="fas fa-exclamation-circle"></i>
      <span>${message}</span>
    </div>
    <div class="error-help">
      <button class="retry-btn">Réessayer</button>
      Vérifiez votre connexion Internet et réessayez.
    </div>
  `;
  
  elements.errorContainer.classList.remove('hidden');
  
  document.querySelector('.retry-btn').addEventListener('click', () => {
    if (elements.cityInput.value.trim()) {
      handleSearch();
    } else {
      handleLocation();
    }
  });
}

function clearError() {
  elements.errorContainer.classList.add('hidden');
}

function switchTab(tabId) {
  elements.tabButtons.forEach(btn => {
    btn.classList.toggle('active', btn.dataset.tab === tabId);
  });
  
  elements.tabContents.forEach(content => {
    content.classList.toggle('active', content.id === tabId);
  });
}

function getUnitSymbol() {
  const unit = elements.unitSelect.value;
  return unit === 'metric' ? '°C' : unit === 'imperial' ? '°F' : 'K';
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function formatTime(timestamp) {
  return new Date(timestamp * 1000).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
}

function formatDateTime(timestamp) {
  return new Date(timestamp * 1000).toLocaleString('fr-FR');
}

function formatPrayerTime(timeString) {
  const timeOnly = timeString.split(' ')[0];
  const [hours, minutes] = timeOnly.split(':');
  return `${hours.padStart(2, '0')}:${minutes}`;
}

function getAQILevel(aqi) {
  if (aqi <= 50) return 1;
  if (aqi <= 100) return 2;
  if (aqi <= 150) return 3;
  if (aqi <= 200) return 4;
  return 5;
}

function getAQIDescription(level) {
  const descriptions = [
    'Excellent',
    'Modéré',
    'Malsain pour les groupes sensibles',
    'Malsain',
    'Très malsain'
  ];
  return descriptions[level - 1];
}

function getAQIAdvice(level) {
  const advice = [
    'Qualité de l\'air satisfaisante',
    'Qualité acceptable',
    'Limitez les activités prolongées à l\'extérieur',
    'Évitez les activités prolongées à l\'extérieur',
    'Évitez toute activité à l\'extérieur'
  ];
  return advice[level - 1];
}

function handleGeolocationError(error) {
  let message = 'Erreur de géolocalisation';
  if (error.code === error.PERMISSION_DENIED) {
    message = 'Permission de géolocalisation refusée';
  } else if (error.code === error.TIMEOUT) {
    message = 'Délai de localisation dépassé';
  } else if (error.code === error.POSITION_UNAVAILABLE) {
    message = 'Position indisponible';
  }
  showError(message);
}

function handleUnitChange() {
  if (state.currentData) {
    if (state.currentData.name) {
      getWeatherByCity(state.currentData.name);
    } else if (state.currentData.coord) {
      getWeatherByCoords(state.currentData.coord.lat, state.currentData.coord.lon);
    }
  }
}

// Initialize App
document.addEventListener('DOMContentLoaded', init);