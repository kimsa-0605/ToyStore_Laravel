import { getData } from "../service/apiClient.js";
import { renderPagination } from "../components/pagination.js";

document.addEventListener("DOMContentLoaded", () => {
    fetchProducts();
    setupCategoryFilters();
});

async function fetchProducts(categoryId = "all", page = 1) {
    try {
        let apiUrl = categoryId === "all" ? `http://127.0.0.1:8000/api/products?page=${page}` : `http://127.0.0.1:8000/api/products/category/${categoryId}?page=${page}`;
        const data = await getData(apiUrl);
        console.log("API Response:", data);
        if (!data || !data.data || !Array.isArray(data.data)) {
            console.warn("No product data found.");
            document.getElementById("product-list").innerHTML = "<p>No products available.</p>";
            return;
        }
        renderProducts(data.data);
        renderPagination({containerId: "pagination", data, onPageChange: (newPage) => fetchProducts(categoryId, newPage)
        });
    } catch (error) {
        console.error("Error fetching products:", error);
    }
}

function renderProducts(products) {
    let productContainer = document.getElementById("product-list");
    if (!products.length) {
        productContainer.innerHTML = "<p>No products available.</p>";
        return;
    }
    productContainer.innerHTML = products.map(product => `
        <div class="product-card">
            <a href="/product/detail/${product.id}" class="product-card-content">
                <img src="${product.image_link}" alt="${product.product_name}" class="product-photo">
                <h3 class="product-title">${product.product_name}</h3>
                <span class="product-cost">$${product.price} USD</span>
            </a>
        </div>
    `).join("");
}

function setupCategoryFilters() {
    const categoryButtons = document.querySelectorAll(".categories-toys span");
    categoryButtons.forEach(button => {
        button.addEventListener("click", () => {
            const selectedCategoryId = button.getAttribute("data-category-id");
            categoryButtons.forEach(btn => btn.classList.remove("active-category"));
            button.classList.add("active-category");
            fetchProducts(selectedCategoryId);
        });
    });
}
