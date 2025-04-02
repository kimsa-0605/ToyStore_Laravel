export function renderPagination({ containerId, data, onPageChange }) {
    let paginationContainer = document.getElementById(containerId);
    if (data.last_page <= 1) {
        paginationContainer.style.display = 'none';  
        return;
    } else {
        paginationContainer.style.display = 'flex'; 
    }
    paginationContainer.innerHTML = "";
    let paginationHTML = `
        <button class="page-btn right-left-btn" data-page="${data.current_page - 1}" ${data.prev_page_url ? "" : "disabled"}><i data-page="${data.current_page - 1}" ${data.prev_page_url ? "" : "disabled"} class="fa-solid fa-chevron-left"></i></button>
    `;
    if (data.current_page > 2) {
        paginationHTML += `<button class="page-btn" data-page="1">1</button>`;
        if (data.current_page > 3) {
            paginationHTML += `<span>...</span>`;
        }
    }
    for (let i = Math.max(1, data.current_page - 1); i <= Math.min(data.last_page, data.current_page + 1); i++) {
        paginationHTML += `<button class="page-btn ${data.current_page === i ? 'active' : ''}" data-page="${i}">${i}</button>`;
    }
    if (data.current_page < data.last_page - 1) {
        if (data.current_page < data.last_page - 2) {
            paginationHTML += `<span>...</span>`;
        }
        paginationHTML += `<button class="page-btn" data-page="${data.last_page}">${data.last_page}</button>`;
    }
    paginationHTML += `
        <button class="page-btn right-left-btn" data-page="${data.current_page + 1}" ${data.next_page_url ? "" : "disabled"}><i data-page="${data.current_page + 1}" ${data.next_page_url ? "" : "disabled"} class="fa-solid fa-chevron-right"></i></button>
    `;
    paginationContainer.innerHTML = paginationHTML;
    document.querySelectorAll(`#${containerId} .page-btn`).forEach(button => {
        button.addEventListener("click", (e) => {
            let page = e.target.getAttribute("data-page");
            if (page) onPageChange(parseInt(page));
        });
    });
}
