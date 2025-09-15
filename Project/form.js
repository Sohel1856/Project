const popup = document.getElementById("form-popup");
const bookBtn = document.getElementById("bookBtn");

bookBtn.addEventListener("click", () => {
  popup.style.display = "flex";
});

function closeForm() {
  popup.style.display = "none";
}

function handleSubmit(event) {
  event.preventDefault(); // prevent page reload
  alert("✅ Your request has been approved, we will inform you soon!");
  popup.style.display = "none";
  event.target.submit(); // send data to PHP
}
