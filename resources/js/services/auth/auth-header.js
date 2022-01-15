export default function authHeader() {
  let user = JSON.parse(localStorage.getItem('user'));
    console.log(user);
  if (user && user.token) {
      console.log('Token successfully added.')
    return { Authorization: 'Bearer ' + user.token };
  } else {
    return {};
  }
}
