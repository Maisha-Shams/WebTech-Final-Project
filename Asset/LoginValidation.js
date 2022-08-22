const email = document.getElementById('email');
const password = document.getElementById('password');
console.log(email);
console.log("object");
function loginCheck() {
  console.log(email);
  const emailValue = email.value;
  const passwordValue = password.value;
  if (emailValue === null && passwordValue === null) {
    alert('Please Enter your account Number and Password');
  } else {
    const loginCredentials = { email: emailValue, password: passwordValue };

    const json = JSON.stringify(loginCredentials);

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/LoginCheck.php', true);
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == 'success') {
          window.location.href = '../View/UserHome.php?email=' + emailValue;
        } else if (this.responseText == 'failed') {
          alert('failed');
        } else if (this.responseText == 'null') {
          alert('null');
        }
      }
    };
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('data=' + json);
  }
}
