// DOM Elements
const darkButton = document.getElementById('dark');
const lightButton = document.getElementById('light');
const body = document.body;

// Apply the cached theme on reload
body.classList.add(theme);

// Button Event Handlers
darkButton.onclick = () => {
  body.classList.replace('light', 'dark');
  localStorage.setItem('theme', 'dark');
};

lightButton.onclick = () => {
  body.classList.replace('dark', 'light');
  localStorage.setItem('theme', 'light');
};