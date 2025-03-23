export function getData(path) {
    return axios.get(path).then(response => {
        return response.data;
    }).catch(error => {
        console.log(error);
    })
}

export function postData(path, data) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    return axios.post(path, data, {
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    }).then(response => response.data)
      .catch(error => console.log(error));
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