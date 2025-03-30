import { getData } from "../service/apiClient";
const apiUrl = 'http://127.0.0.1:8000/api/products'
getData(apiUrl) 
    .then(data=>console.log(data))
    .then(error=>console.error('Error fetching data:', error));