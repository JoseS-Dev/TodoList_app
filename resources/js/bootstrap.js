import axios from 'axios';
import Swal from 'sweetalert2'

window.axios = axios;
window.Swal = Swal;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';