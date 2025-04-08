import { getData, showLoading, hideLoading } from "../service/apiClient";

document.addEventListener('DOMContentLoaded', function(){
    const searrchInput = document.querySelector('#search-input');
    const productList = document.getElementById('product-list');
    const resultCount = document.querySelector('..results-count p');

    //Lấy keyword từ URL
    const urlParams = new URLSearchParams(window.location.search);
    const keyword = urlParams.get('keyword') || '';
    const perPage = 9;
    if(!keyword) {
        resultCount.textContent = 'No keyword found';
        productList.innerHTML = '<p>Please enter a keyword to search.</p>';
        return;
    }

    const apiUrl = `http://localhost:8000/api/products/search?keyword=${encodeURIComponent(keyword)}&per_page=${perPage}`;
    showLoading();

    getData(apiUrl)
    .then(data => {
        hideLoading();
        if(!data || !data.data || !data.data.data) {
            productList.innerHTML = '<p>Invalid data received</p>';
            return;
        }
        const products = data.data.data;
        resultCount.textContent = `There are ${products.length} matching search results`;
        productList.innerHTML = '';
        if(productList.length > 0) {
            products.forEach(product => {
                const productCard = document.createElement('div');
                productCard.classList.add('product-list');
                productCard.innerHTML = `
                    <div class="product-card">
                        <a href="/product/detail/${product.id}" class="product-card-content">
                            <img src="${product.image_link}" alt="${product.product_name}" class="product-photo">
                            <h3 class="product-title">${product.product_name}</h3>
                            <span class="product-cost">$${product.price} USD</span>
                        </a>
                    </div>
                `;
                productList.appendChild(productCard);
            });
        } else {
            productList.innerHTML = `<p>No products found</p>`;
        }
    })
    .catch(error => {
        hideLoading();
        console.error('Error:', error);
        productList.innerHTML = '<p>Error fetching products. Please try again later.</p>';
    });
})