document.getElementById("loginBtn").addEventListener("mouseover", function() {
    this.classList.add("pulse");
});

document.getElementById("loginBtn").addEventListener("mouseout", function() {
    this.classList.remove("pulse");
});


// Function to toggle chat window visibility
function toggleChat() {
    const chatWindow = document.getElementById('chat-window');
    if (chatWindow.style.display === 'none' || chatWindow.style.display === '') {
      chatWindow.style.display = 'block';
    } else {
      chatWindow.style.display = 'none';
    }
  }
  
  // Optionally, add event listeners for more interactivity
  document.getElementById('send-btn').addEventListener('click', () => {
    const inputField = document.getElementById('chat-input');
    const message = inputField.value.trim();
  
    if (message) {
      // Handle the sending of the message (Backend integration here)
      inputField.value = ''; // Clear input after sending
    }
  });
  









  // app.js
document.addEventListener("DOMContentLoaded", () => {
  const authButton = document.getElementById('auth-button');
  const logoutButton = document.getElementById('logout-button');
  const userInfoDiv = document.getElementById('user-info');
  
  // Simulated user data
  const mockUser = { username: 'john_doe', name: 'John Doe', email: 'john@example.com' };

  // Check if user is logged in
  const userToken = localStorage.getItem('userToken');

  if (authButton && userToken) {
      // Show user icon on the homepage
      authButton.innerHTML = `<img src="assets/user-icon.png" alt="User" id="user-icon">`;
      authButton.addEventListener('click', () => {
          window.location.href = 'dashboard.html';
      });
  }

  if (logoutButton) {
      // Logout functionality on dashboard
      logoutButton.addEventListener('click', () => {
          localStorage.removeItem('userToken');
          window.location.href = 'index.html'; // Redirect to homepage
      });
  }

  if (userInfoDiv && userToken) {
      // Show user info on dashboard
      const user = JSON.parse(localStorage.getItem('userData')); // Load mock data
      userInfoDiv.innerHTML = `
          <p>Name: ${user.name}</p>
          <p>Email: ${user.email}</p>
      `;
  }

  const loginForm = document.getElementById('login-form');
  if (loginForm) {
      // Handle login form submission
      loginForm.addEventListener('submit', (event) => {
          event.preventDefault();
          const username = document.getElementById('username').value;
          const password = document.getElementById('password').value;

          // Simulate login validation
          if (username === mockUser.username && password === '1234') {
              localStorage.setItem('userToken', 'mockToken1234');
              localStorage.setItem('userData', JSON.stringify(mockUser));
              alert('Login successful!');
              window.location.href = 'index.html'; // Redirect to homepage
          } else {
              alert('Invalid username or password');
          }
      });
  }
});
