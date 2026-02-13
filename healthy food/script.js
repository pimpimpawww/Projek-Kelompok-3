// Tombol "Order Sekarang" ke Menu
const orderBtn = document.getElementById("orderBtn");
const menuSection = document.getElementById("menu");

orderBtn.addEventListener("click", () => {
  menuSection.scrollIntoView({
    behavior: "smooth"
  });
});

// Tombol "Shop Now" ke halaman Our Menu
const shopNowBtn = document.getElementById("shopnowbtn");

if (shopNowBtn) {
  shopNowBtn.addEventListener("click", () => {
    window.location.href = "./product.html";
  });
}

document.getElementById("sendMessage").addEventListener("click", function (e) {
  e.preventDefault();

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const message = document.getElementById("message").value.trim();
  const warning = document.getElementById("warning");

  if (name === "" || email === "" || message === "") {
    warning.innerText = "Please fill in all fields first.";
    warning.style.color = "red";
    warning.style.display = "block";
  } else {
    warning.style.display = "none";
    alert("Message sent successfully!");
  }
});


