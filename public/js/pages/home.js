document.addEventListener("DOMContentLoaded", () => {
    const shopNowButtons = document.querySelectorAll(".category-shop-now-btn");
    shopNowButtons.forEach(button => {
        button.addEventListener("click", () => {
            const categoryId = button.getAttribute("data-category-id");
            localStorage.setItem('categoryId', categoryId); 
            window.location.href = "/catalog";
        });
    });
});
