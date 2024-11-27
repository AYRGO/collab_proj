document.addEventListener('DOMContentLoaded', (event) => {
    const signUpLink = document.getElementById('signUpLink');
    const signUpContainer = document.getElementById('signUpContainer');
    const closeBtn = document.getElementById('closeBtn');

    signUpLink.addEventListener('click', () => {
        signUpContainer.classList.toggle('hidden');
    })

    closeBtn.addEventListener('click', () => {
        signUpContainer.classList.add('hidden');
    })
})

document.getElementById('signUpForm').addEventListener('submit', function () {
    if (!document.getElementById('termsCondition').checked) {
        event.preventDefault();
        alert("You must agree to the Terms and Conditions before signing up.");
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const signUpLink = document.getElementById('signUpLink');
    const signUpContainer = document.getElementById('signUpContainer');
    const loginSection = document.getElementById('loginSection');
    const closeBtn = document.getElementById('closeBtn');

    signUpLink.addEventListener('click', function () {
        signUpContainer.classList.add("block");
        loginSection.classList.add("hidden");
    })

    closeBtn.addEventListener('click', function () {
        signUpContainer.classList.remove("block");
        loginSection.classList.remove("hidden");
    })

})