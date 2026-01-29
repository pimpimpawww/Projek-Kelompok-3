const orderBtn = document.getElementById("orderBtn");
const menuSection = document.getElementById("menu");

orderBtn.addEventListener("click", () => {
    menuSection.scrollIntoView({
        behavior: "smooth",
    });
});

const shopNowBtn = document.getElementById("shopnowbtn");

if (shopNowBtn) {
    shopNowBtn.addEventListener("click", () => {
        window.location.href = "./product.html";
    });
}
