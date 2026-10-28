// const EMAILJS_SERVICE_ID = 'service_w4l3yb3';
// const EMAILJS_TEMPLATE_ID = 'template_jobrzug';
// const EMAILJS_PUBLIC_KEY = '1oSQzGfuEHvKudv6k';

// EmailJS configuration
const serviceID = 'service_w4l3yb3';
const templateID = 'template_jobrzug';
const publicKey = '1oSQzGfuEHvKudv6k';

let verificationCode = null;

// Generate 6-digit random code
function generateCode() {
  return Math.floor(100000 + Math.random() * 900000).toString();
}

// Send email with code
function sendVerificationCode(email) {
  verificationCode = generateCode();

  emailjs.send(serviceID, templateID, {
    to_email: email,
    code: verificationCode
  }, publicKey)
  .then(() => {
    alert('Verification code sent to your email.');
    document.querySelector('#verify-section').style.display = 'block';
  })
  .catch((error) => {
    console.error('EmailJS error:', error);
    alert('Failed to send verification email.');
  });
}

// Handle signup form
document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('#signup-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.querySelector('#email').value;
    const password = document.querySelector('#password').value;

    // Save email/password temporarily (or send to PHP later)
    if (!email || !password) return alert("Fill in all fields");
    
    sendVerificationCode(email);
  });

  // Handle code verification
  document.querySelector('#verify-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const userCode = document.querySelector('#verification-code').value;

    if (userCode === verificationCode) {
      alert("Email verified! You can now complete signup.");
      // Optionally: send form data to PHP via fetch/ajax
      document.querySelector('#signup-form').submit();
    } else {
      alert("Invalid code. Try again.");
    }
  });
});
