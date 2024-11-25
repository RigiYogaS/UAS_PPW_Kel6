const modal = document.getElementById("myModal");
const closeModal = document.getElementsByClassName("close")[0];
const modalMessage = document.getElementById("modal-message");

const emailInput = document.querySelector('input[type="email"]');
const passwordInput = document.querySelector('input[type="password"]');
const confirmPasswordInput = document.querySelector(
  'input[placeholder="Confirm your password"]'
);
const signInButton = document.querySelector(".sign-in-button");
const signUpButton = document.querySelector(".sign-up-click");
const continueButton = document.querySelector(".continue-button");

function validateEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email) && email.endsWith("@gmail.com");
}

function validatePassword(password) {
  return password.length >= 8;
}

function showModal(message) {
  modalMessage.textContent = message;
  modal.style.display = "block";
}

// sign in
if (signInButton) {
  signInButton.addEventListener("click", (e) => {
    e.preventDefault();

    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    if (!validateEmail(emailValue)) {
      alert("Email must be a valid @gmail.com address.");
      return;
    }

    if (!validatePassword(passwordValue)) {
      alert("Password must be at least 8 characters long.");
      return;
    }

    showModal("Signin successful");
  });
}

// sign up
if (continueButton) {
  continueButton.addEventListener("click", (e) => {
    e.preventDefault();

    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();
    const confirmPasswordValue = confirmPasswordInput.value.trim();

    if (!validateEmail(emailValue)) {
      alert("Email must be a valid @gmail.com address.");
      return;
    }

    if (!validatePassword(passwordValue)) {
      alert("Password must be at least 8 characters long.");
      return;
    }

    if (passwordValue !== confirmPasswordValue) {
      alert("Passwords do not match.");
      return;
    }

    showModal("Account Created Successfully!");
  });
}

closeModal.onclick = function () {
  modal.style.display = "none";

  if (window.location.href.includes("Signinmorev.html")) {
    window.location.href = "LandingPageAfterLogin.html"; 
  } else if (window.location.href.includes("Signupmorev.html")) {
    window.location.href = "Signinmorev.html"; 
  }
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";

    if (window.location.href.includes("Signinmorev.html")) {
      window.location.href = "LandingPageAfterLogin.html"; 
    } else if (window.location.href.includes("Signupmorev.html")) {
      window.location.href = "Signinmorev.html"; 
    }
  }
};

if (signUpButton) {
  signUpButton.addEventListener("click", function (e) {
    e.preventDefault();
    window.location.href = "Signupmorev.html";
  });
}
