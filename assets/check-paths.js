// assets/check-paths.js
const fs = require('fs');
const path = require('path');

const rateYoPath = path.dirname(require.resolve('rateyo'));
console.log('RateYo directory:', rateYoPath);

fs.readdirSync(rateYoPath).forEach(file => {
  console.log(file);
});

// Check if there are subdirectories
const minDir = path.join(rateYoPath, 'min');
if (fs.existsSync(minDir)) {
  console.log('Contents of min directory:');
  fs.readdirSync(minDir).forEach(file => {
    console.log(`min/${file}`);
  });
}