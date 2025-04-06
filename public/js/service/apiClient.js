const loadingElement = document.getElementById("loading-waiting");

export function getData(path) {
    return axios.get(path).then(response => {
        return response.data;
    }).catch(error => {
        console.log(error);
    })
}

// Hàm gửi dữ liệu bằng axios
export function postData(path, data) {
    showLoading();

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    return axios.post(path, data, {
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    }).then(response => {
        hideLoading();
        return response.data;
    })
    .catch(error => {
        hideLoading();
        return error;
    });
}

export function putData(path, data) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    return axios.put(path, data, {
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    }).then(response => response.data)
      .catch(error => console.log(error));
}

export function deleteData(path, data) {
    return axios.delete(path).then(response => {
        return response.data;
    }).catch(error => console.log(error));
}

// Hàm hiển thị loading
export function showLoading() {
    if (loadingElement) loadingElement.style.display = "flex";
}

// Hàm ẩn loading
export function hideLoading() {
    if (loadingElement) loadingElement.style.display = "none";
}