
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "127.0.0.1:8889",
  user: "najlas",
  // "cpses_bssrq6w58n",
  password: "najla00",
  database: "bsmaport_WPEY5",
  //"bsmaport_WPEY5"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO Member (firstName, lastName) VALUES ('TEST', 'TEST 37')";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});
// connection.end();


async function readTag() {
  if ("NDEFReader" in window) {
    const ndef = new NDEFReader();
    try {
      await ndef.scan();
      ndef.onreading = event => {
        const decoder = new TextDecoder();
        for (const record of event.message.records) {
          consoleLog("Record type:  " + record.recordType);
          consoleLog("MIME type:    " + record.mediaType);
          consoleLog("=== data ===\n" + decoder.decode(record.data));
        }
      }
    } catch(error) {
      consoleLog(error);
    }
  } else {
    consoleLog("Web NFC is not supported.");
  }
}



function consoleLog(data) {
  var logElement = document.getElementById('log');
  logElement.innerHTML += data + '\n';}
