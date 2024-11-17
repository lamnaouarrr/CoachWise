// Function to handle selection between Customer and Coach signup types
function selectSignupType(type) {
    // Hide the "signup-choice" section
    document.getElementById("signup-choice").style.display = "none";

    // Show the appropriate form depending on the type selected
    if (type === "customer") {
        document.getElementById("customer-type-choice").style.display = "block";  // Show customer type options
    } else if (type === "coach") {
        document.getElementById("coach-form").style.display = "block";  // Show coach form
    }
}

// Function to select the customer type (Personal or Institution)
function selectCustomerType(customerType) {
    // Hide the customer type choice
    document.getElementById("customer-type-choice").style.display = "none";

    // Show the appropriate form depending on the customer type selected
    if (customerType === "personal") {
        document.getElementById("customer-personal-form").style.display = "block";
    } else if (customerType === "institution") {
        document.getElementById("customer-institution-form").style.display = "block";
    }
}

// Show the professional information form for coaches
function showCoachProfessionalForm() {
    document.getElementById("coach-form").style.display = "none";  // Hide the basic coach form
    document.getElementById("coach-professional-form").style.display = "block";  // Show the professional form
}

// Go back to the main signup choice
function goBackToSignupChoice() {
    document.getElementById("customer-type-choice").style.display = "none";  // Hide customer type options
    document.getElementById("signup-choice").style.display = "block";  // Show main signup choice (Customer / Coach)
}

// Go back to customer type selection
function goBackToCustomerType() {
    // Hide customer forms
    document.getElementById("customer-personal-form").style.display = "none";
    document.getElementById("customer-institution-form").style.display = "none";

    // Show the customer type selection again
    document.getElementById("customer-type-choice").style.display = "block";
}

// Go back to the initial customer/coach selection
function goBackToCustomerOrCoachChoice() {
    document.getElementById("coach-form").style.display = "none";  // Hide coach form
    document.getElementById("signup-choice").style.display = "block";  // Show the signup choice
}

// Go back to coach information form
function goBackToCoachInformation() {
    document.getElementById("coach-professional-form").style.display = "none";  // Hide professional form
    document.getElementById("coach-form").style.display = "block";  // Show basic coach form
}
// Handle form submission for Customer Personal Form
document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Collect user input
    const userData = {
        firstName: document.getElementById("first-name").value,
        lastName: document.getElementById("last-name").value,
        email: document.getElementById("email").value,
        password: document.getElementById("password").value,
        birthday: document.getElementById("birthday").value,
        phoneNumber: document.getElementById("phone-number").value,
        gender: document.getElementById("gender").value,
        sport: document.getElementById("sport").value
    };

    // Save data to localStorage
    localStorage.setItem("userData", JSON.stringify(userData));

    // Redirect to the home page after successful signup
    window.location.href = "index.html"; // Go back to the home page
});
