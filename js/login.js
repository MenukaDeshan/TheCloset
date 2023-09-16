const registerButton = document.getElementById("register");
const loginButton = document.getElementById("loginbtn");
const container = document.getElementById("login");

registerButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});