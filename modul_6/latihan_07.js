function createXMLHttpObject() {
  var xmlhttp = false;

  try {
    xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }

  if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
    xmlhttp = new XMLHttpRequest();
  }

  if (!xmlhttp) {
    alert("Terjadi kesalahan saat pembuatan XMLHttpRequest object!");
  }

  return xmlhttp;
}

function requestContent() {
  var reqObj = createXMLHttpObject();

  reqObj.open("GET", "http://localhost/web/contactList.xml", true);

  reqObj.onreadystatechange = function () {
    if (reqObj.readyState == 4 && reqObj.status == 200) {
      var dataXML = reqObj.responseXML;
      var contact = dataXML.getElementsByTagName("contact")[0];

      var nama = contact.getElementsByTagName("name")[0].firstChild.data;
      var alamat = contact.getElementsByTagName("address")[0].firstChild.data;
      var phone_1 = contact.getElementsByTagName("phone")[0].firstChild.data;
      var phone_2 = contact.getElementsByTagName("phone")[1].firstChild.data;
      var phone_3 = contact.getElementsByTagName("phone")[2].firstChild.data;
      var email = contact.getElementsByTagName("email")[0].firstChild.data;

      document.getElementById("txtName").innerHTML = nama;
      document.getElementById("txtAddress").innerHTML = alamat;
      document.getElementById("txtMobilePhone").innerHTML = phone_1;
      document.getElementById("txtHomePhone").innerHTML = phone_2;
      document.getElementById("txtOfficePhone").innerHTML = phone_3;
      document.getElementById("txtEmail").innerHTML = email;
    } else {
      document.getElementById("divContent").innerHTML = "";
      document.getElementById("divContent").innerHTML = "loading..";
    }
  };

  reqObj.send(null);
}
