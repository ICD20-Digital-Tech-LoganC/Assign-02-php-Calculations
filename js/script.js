// Function to check if input is a number
function isValidNumberInput(value) {
  return /^\d*\.?\d+$/.test(value);
}

// Function to display error message
function displayErrorMessage(elementId, message) {
  let element = document.getElementById(elementId);
  if (element) {
    element.innerHTML = 'Error: ' + message;
  }
}


// Function to calculate TTK (Time to Kill) for Rainbow Six Siege
function calculateTTK() {
  let rpm = parseInt(document.getElementById('RPM').value);
  let damage = parseInt(document.getElementById('damage').value);
  let health = parseInt(document.getElementById('opponent_Health').value);

  // Check if input values are not valid numbers
  if (!isValidNumberInput(rpm) || !isValidNumberInput(damage) || !isValidNumberInput(health)) {
    displayErrorMessage('error-message_ttk', 'Please enter valid numbers for RPM, Damage, and Opponent Health.');
    return;
  }

  // Check if any input value is not positive
  if (rpm <= 0 || damage <= 0 || health <= 0) {
    if (rpm <= 0) {
      displayErrorMessage('error-message_ttk', 'Please enter a positive number for RPM, please try again.');
    } else if (damage <= 0) {
      displayErrorMessage('error-message_ttk', 'Please enter a positive number for Damage, please try again.');
    } else {
      displayErrorMessage('error-message_ttk', 'Please enter a positive number for Opponent Health, please try again.');
    }
    return;
  }

  let ttk = (60 / rpm) * ((health / damage) - 1);
  document.getElementById('TTK_answer').innerHTML = 'The total time to kill is ' + ttk.toFixed(3) + ' seconds.';
}


// Function to calculate the area and volume of a torus
function calculateTorus() {
  let R = document.getElementById('major_Radius').value;
  let r = document.getElementById('minor_Radius').value;

  // Check if any input value is not a valid number
  if (!isValidNumberInput(R) || !isValidNumberInput(r)) {
    displayErrorMessage('error-message_torus', 'Please enter valid numerical values for Minor Radius and Major Radius.');
    return;
  }

  // Check if major radius or minor radius is not a valid number or if they are not positive
  if (r >= R || r <= 0 || R <= 0) {
    if (r >= R) {
      displayErrorMessage('error-message_torus', 'Please enter a number for Minor Radius that is less than Major Radius, please try again.');
    } else if (r <= 0) {
      displayErrorMessage('error-message_torus', 'Please enter a positive number for Minor Radius, please try again.');
    } else {
      displayErrorMessage('error-message_torus', 'Please enter a positive number for Major Radius, please try again.');
    }
    return;
  }


  let area = 4 * Math.PI ** 2 * R * r;
  let volume = 2 * Math.PI ** 2 * R * r ** 2;

  document.getElementById('Torus_answer').innerHTML = 'The area of the torus is ' + area.toFixed(2) + ' cm. The volume of the torus is ' + volume.toFixed(2) + ' cm<sup>3</sup>.';
}