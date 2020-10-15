function formtext(form) {
	var ID = (document.formt.ID.value);
	var NAMA = (document.formt.NAMA.value);
	
	var ALAMAT = ( document.formt.ALAMAT.value);
	var TELEPON = ( document.formt.TELEPON.value);
var jk ="";
var USERNAME = ( document.formt.USERNAME.value);
var PASSWORD = ( document.formt.PASSWORD.value);


if (form.rjk1.checked == true)
{
jk = "Laki";
}
else
{
jk = "Perempuan";
}









document.formt.IDout.value = ID;
document.formt.NAMAout.value = NAMA;

document.formt.ALAMATout.value = ALAMAT;
document.formt.TELEPONout.value = TELEPON;
document.formt.jkout.value = jk;
document.formt.USERNAMEout.value = USERNAME;
document.formt.PASSWORDout.value = PASSWORD;
}

