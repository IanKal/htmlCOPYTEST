// validation.js
document.addEventListener("DOMContentLoaded", () => {
    const signupForm = document.querySelector("form");
    signupForm.addEventListener("submit", (e) => {
        const username = document.querySelector("input[name='username']").value;
        const password = document.querySelector("input[name='password']").value;
        const email = document.querySelector("input[name='email']").value;

        if (username.trim() === "" || password.trim() === "" || email.trim() === "") {
            alert("Please fill in all fields!");
            e.preventDefault();
        } else if (password.length < 6) {
            alert("Password must be at least 6 characters long!");
            e.preventDefault();
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    // Handle login form submission
    document.getElementById('login-form').addEventListener('submit', function (event) {
      event.preventDefault();
  
      // Get the form input values
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;
  
      // Simple validation (replace with actual authentication logic)
      if (username === "" || password === "") {
        document.getElementById('error-message').innerText = "Please enter both username and password!";
        return;
      }
  
      // Here, you can add real authentication check (e.g., through an API or localStorage)
      if (username === "admin" && password === "admin123") {
        // Redirect to the next page after successful login (e.g., input page)
        window.location.href = "input.html";  // Or wherever you want to redirect after login
      } else {
        document.getElementById('error-message').innerText = "Invalid credentials!";
      }
    });
  });
  