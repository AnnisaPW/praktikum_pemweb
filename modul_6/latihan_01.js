function buatXMLHttpRequestObject() {
  var xmlhttp = false;

  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e) {
      xmlhttp = false;
    }
  }

  if (!xmlhttp && typeof XMLHttpRequest !== "undefined") {
    xmlhttp = new XMLHttpRequest();
  }

  if (!xmlhttp) {
    alert("Terjadi kesalahan saat pembuatan XMLHTTPRequest object!");
    return false;
  }

  return xmlhttp;
}

var xmlhttp = buatXMLHttpRequestObject();

if (xmlhttp) {
  // Fungsi untuk menangani state change dari XMLHttpRequest
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState === 4) {
      if (xmlhttp.status === 200) {
        // Menampilkan respon jika permintaan berhasil
        alert("Permintaan berhasil diutus.");
      } else {
        // Menampilkan pesan kesalahan jika permintaan gagal
        alert("Terjadi kesalahan saat pengiriman permintaan.");
      }
    }
  };

  try {
    // Menginisiasi permintaan GET
    xmlhttp.open("GET", "contactList.xml", true);
    xmlhttp.send(null);
  } catch (e) {
    alert("Terjadi kesalahan saat mengirimkan permintaan.");
  }
}
