import axios from 'axios';
import authHeader from '../auth/auth-header';

const API_URL = 'http://localhost:88/api/';

class UserService {
  // getPublicContent() {
  //   return axios.get(API_URL + 'students');
  // }

  getUserBoard() {
    return axios.get(API_URL + 'students', { headers: authHeader() });
  }

  // getModeratorBoard() {
  //   return axios.get(API_URL + 'mod', { headers: authHeader() });
  // }
  //
  // getAdminBoard() {
  //   return axios.get(API_URL + 'admin', { headers: authHeader() });
  // }
}

export default new UserService();
