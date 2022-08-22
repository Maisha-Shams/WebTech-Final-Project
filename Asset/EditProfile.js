
function ajax() {
  const userNameValue = userName.value;
  const passwordValue = password.value;
  const accNumValue = accNum.value;
  const emailValue = email.value;
  const nidValue = nid.value;
  const dobValue = dob.value;
  const genderValue = gender.value;
  //const mstatusValue = mstatus.value;
  const bGroupValue = bGroup.value;
  const religionValue = religion.value;
  const addressValue = address.value;

  const user = {
    userName: userNameValue,
    password: passwordValue,
    accNum: accNumValue,
    email: emailValue,
    nid: nidValue,
    dob: dobValue,
    gender: genderValue,
   // mStatus: mstatusValue,
    bGroup: bGroupValue,
    religion: religionValue,
    address: addressValue,
  };

  const json = JSON.stringify(user);

  let xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controller/customerUpdate.php', true);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      window.location.href = '../View/viewCustomer.php?accNum=' + accNumValue;
    }
  };
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('data=' + json);
}
